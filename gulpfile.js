// Importing specific gulp API functions lets us write them below as series() instead of gulp.series()
// const autoprefixer = require('gulp-autoprefixer');
const { src, dest, watch, series, parallel } = require('gulp'),
  browserSync = require('browser-sync').create(),
  sourcemaps = require('gulp-sourcemaps'),
  sass = require('gulp-sass'),
  concat = require('gulp-concat'),
  uglify = require('gulp-uglify'),
  autoprefixer = require('gulp-autoprefixer'),
  replace = require('gulp-replace'),
  images = require('gulp-imagemin');

const outputBaseDir        = '../htdocs/mvcArc/';
const outputBaseDir_app    = outputBaseDir + '/app/';
const outputBaseDir_public = outputBaseDir + '/public/';

const inputBaseDir         = './source/mvcArc';
const inputBaseDir_app     = inputBaseDir + '/app';
const inputBaseDir_public  = inputBaseDir + '/public';

// FILE PATHS
const files = {
  // Input file paths
  sassPath    : inputBaseDir_public + '/sass/**/*.sass',
  jsPath      : inputBaseDir_public + '/js/**/*.js'    ,
  vendorPath  : inputBaseDir_public + '/vendor/**/*'   ,
  imgPath     : inputBaseDir_public + '/img/**/*'      ,
  phpPath     : inputBaseDir        + '/**/*.php'      ,
  htaccessPath: inputBaseDir        + '/**/.htaccess'  ,
  
  // Output file paths
  sassDest    : outputBaseDir_public + '/css'     ,
  jsDest      : outputBaseDir_public + '/js'      ,
  vendorDest  : outputBaseDir_public + '/vendor'  ,
  imgDest     : outputBaseDir_public + '/img'     ,
}

// --------------------------------------------------------------
// COMPILE SASS TO CSS
function sassTask() {
  return src(files.sassPath)
    .pipe(sourcemaps.init())
    .pipe(sass({
      style: 'compressed'
    }).on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write('.'))
    .pipe(dest(files.sassDest))
    .pipe(browserSync.stream());
}

// COMPRESS IMAGES
function imgTask() {
  return src([files.imgPath])
    .pipe(images())
    .pipe(dest(files.imgDest));
}

// COMPILE JS
function jsTask() {
  return src([
    files.jsPath
  ])
    .pipe(concat('script.js'))
    .pipe(uglify())
    .pipe(dest(files.jsDest));
}

// COMPILE PHP
function phpTask() {
  return src([
    files.phpPath
  ])
    .pipe(dest(outputBaseDir));
}

// MOVE .htaccess FILE
function htaccessTask() {
  return src([
    files.htaccessPath
  ])
    .pipe(dest(outputBaseDir));
}

// COMPILE VENDOR
function vendorTask() {
  return src([
    files.vendorPath
  ])
    .pipe(dest(files.vendorDest));
}

// RELOAD THE BROWSER
function reloadingTask(done) {
  browserSync.reload();
  done();
}
// --------------------------------------------------------------




// CACHE BUST
var cbString = new Date().getTime();
function cacheBustTask() {
  return src(['index.html'])
    .pipe(replace(/cb=\d+/g, 'cb=' + cbString))
    .pipe(dest('.'));
}

function watchTask() {
  browserSync.init({
    // server: {
    //   baseDir: outputBaseDir
    // }
	//watch: true,
    injectChanges: true,
    proxy: '127.0.0.1:8080',
    watchOptions: {
      debounceDelay: 1000 // This introduces a small delay when watching for file change events to avoid triggering too many reloads
    },
    notify: false
  });
  watch(files.sassPath, sassTask);
  watch(files.jsPath, series(jsTask, reloadingTask));
  watch(files.phpPath, series(phpTask, reloadingTask));
  watch(files.vendorPath, series(vendorTask, reloadingTask));
  watch(files.htaccessPath, series(htaccessTask, reloadingTask));
}

exports.default = series(
  parallel(sassTask, jsTask, phpTask, vendorTask, imgTask , htaccessTask),
  watchTask
);
