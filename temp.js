var gulp = require('gulp');
var gutil = require('gulp-util');
var argv = require('minimist')(process.argv);
var prompt = require('gulp-prompt');
var rsync = require('gulp-rsync');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync');
var useref = require('gulp-useref');
var uglify = require('gulp-uglify');
var gulpIf = require('gulp-if');
var cssnano = require('gulp-cssnano');
var imagemin = require('gulp-imagemin');
var cache = require('gulp-cache');
var del = require('del');
var runSequence = require('run-sequence');
var connect = require('gulp-connect-php');

// Development Tasks
// -----------------

gulp.task('connect-sync', function () {
  connect.server({
    base: 'app'
  }, function () {
    browserSync({
      injectChanges: true,
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.start('sass');
  gulp.start('watch');

});


gulp.task('sass', function () {
  return gulp.src('app/scss/**/*.scss') // Gets all files ending with .scss in app/scss and children dirs
    .pipe(sass()) // Passes it through a gulp-sass
    .pipe(gulp.dest('app/css')) // Outputs it in the css folder
    .pipe(browserSync.stream({ match: '**/*.css' }));
});

gulp.task('css', function () {
  return gulp.src('app/css/**/*.css')
    .pipe(browserSync.stream({ match: '**/*.css' }));
});

// Watchers
gulp.task('watch', function () {
  gulp.watch('app/scss/**/*.scss', ['sass']);
  gulp.watch('app/css/**/*.css', ['css']);
  gulp.watch('app/*.html', browserSync.reload);
  gulp.watch('app/*.php', browserSync.reload);
  gulp.watch('app/js/**/*.js', browserSync.reload);
});

// Optimization Tasks
// ------------------

// Optimizing CSS and JavaScript
gulp.task('useref', function () {

  return gulp.src('app/*.php')
    .pipe(useref())
    .pipe(gulpIf('*.js', uglify()))
    .pipe(gulpIf('*.css', cssnano()))
    .pipe(gulp.dest('dist'));
});

// Optimizing Images
gulp.task('images', function () {
  return gulp.src('app/img/**/*.+(png|jpg|jpeg|gif|svg)')
    // Caching images that ran through imagemin
    .pipe(cache(imagemin({
      interlaced: true,
    })))
    .pipe(gulp.dest('dist/img'))
});

// Copying fonts
gulp.task('fonts', function () {
  return gulp.src('app/fonts/**/*')
    .pipe(gulp.dest('dist/fonts'))
})

// Cleaning
gulp.task('clean', function () {
  return del.sync('dist').then(function (cb) {
    return cache.clearAll(cb);
  });
})

gulp.task('clean:dist', function () {
  return del.sync(['dist/**/*', '!dist/img', '!dist/img/**/*']);
});

// Build Sequences
// ---------------

/*
gulp.task('default', function(callback) {
  runSequence(['sass', 'browserSync', 'watch'],
    callback
  )
});
*/

gulp.task('default', function (callback) {
  runSequence(['connect-sync'],
    callback
  )
});

gulp.task('build', function (callback) {
  runSequence(
    'clean:dist',
    'sass',
    ['useref', 'images', 'fonts'],
    callback
  )
})

gulp.task('deploy', function () {

  // Dirs and Files to sync
  rsyncPaths = ['./dist/'];

  // Default options for rsync
  rsyncConf = {
    progress: true,
    incremental: true,
    relative: true,
    emptyDirectories: true,
    recursive: true,
    clean: true,
    exclude: [],
  };

  // Staging
  if (argv.production) {

    rsyncConf.hostname = ''; // hostname
    rsyncConf.username = ''; // ssh username
    rsyncConf.destination = 'public_html'; // path where uploaded files go
    rsyncConf.root = 'dist'; // where the root of the deployed files should be


    // Missing/Invalid Target
  } else {
    throwError('deploy', gutil.colors.red('Missing or invalid target'));
  }


  // Use gulp-rsync to sync the files
  return gulp.src(rsyncPaths)
    .pipe(gulpIf(
      argv.production,
      prompt.confirm({
        message: 'Heads Up! Are you SURE you want to push to PRODUCTION?',
        default: false
      })
    ))
    .pipe(rsync(rsyncConf));

});


function throwError(taskName, msg) {
  throw new gutil.PluginError({
    plugin: taskName,
    message: msg
  });
}

/*
    EXAMPLE USAGE
    =============

    npm install

    START THE LOCAL WEB SERVER
    --------------------------
    gulp connect-sync


    BUILD AND DEPLOY TO PRODUCTION
    ------------------------------
    gulp build && gulp deploy --production */