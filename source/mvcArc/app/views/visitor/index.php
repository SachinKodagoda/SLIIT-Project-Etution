<?php require APPROOT . '/views/_includes/_header.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/visitor.css" />
</head>

<body>

    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item"><a href="#" class="navigation__link"><span>01</span>About us</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>02</span>Contact us</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT ?>/user/register" class="navigation__link"><span>03</span>Register</a></li>
                <li class="navigation__item"><a href="<?php echo URLROOT ?>/user/login" class="navigation__link"><span>04</span>Login NOW</a></li>
                <li class="navigation__item"><a href="#" class="navigation__link"><span>05</span>FAQ Page</a></li>
            </ul>
        </nav>
    </div>

    <header class="header">
        <div class="header__logo-box">
            <img src="img/visitor/logo-white.png" alt="Logo" class="header__logo">
        </div>

        <div class="header__text-box">
            <h1 class="heading-primary">
                <span class="heading-primary--main">E-Tution</span>
                <span class="heading-primary--sub">Become A Better Developer</span>
            </h1>

            <a href="#section-tours" class="btn btn--white btn--animated">Register Now</a>
        </div>
    </header>

    <main>
        <section class="section-about">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    Exciting Online Programming for Beginers
                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary u-margin-bottom-small">Handpicked tutors from top UK unis</h3>
                    <p class="paragraph">
                        We handpick our tutors from the UK’s leading universities and interview every one.
                        Only 1 in 7 that applies is invited to join.
                        And they’re brilliant at communicating with teenagers because – not so long ago – they were going through the very same things.
                    </p>

                    <h3 class="heading-tertiary u-margin-bottom-small">We’re trusted by teachers too</h3>
                    <p class="paragraph">
                        Because our online lessons get such good results, schools are using them to support their teaching.
                        We work with 300+ across the UK, targeting learning gaps and helping pupils of all abilities reach their goals.
                    </p>

                    <a href="#" class="btn-text">Learn more &rarr;</a>
                </div>
                <div class="col-1-of-2">
                    <div class="composition">

                        <img srcset="img/visitor/nat-1.jpg 300w, img/visitor/nat-1-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 1" class="composition__photo composition__photo--p1" src="img/visitor/nat-1-large.jpg">

                        <img srcset="img/visitor/nat-2.jpg 300w, img/visitor/nat-2-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 2" class="composition__photo composition__photo--p2" src="img/visitor/nat-2-large.jpg">

                        <img srcset="img/visitor/nat-3.jpg 300w, img/visitor/nat-3-large.jpg 1000w" sizes="(max-width: 56.25em) 20vw, (max-width: 37.5em) 30vw, 300px" alt="Photo 3" class="composition__photo composition__photo--p3" src="img/visitor/nat-3-large.jpg">
                    </div>
                </div>
            </div>
        </section>

        <section class="section-features">

            <div class="row">
                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon fa fa-bullhorn"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Ad Free Pro Version</h3>
                        <p class="feature-box__text">
                            Enjoy E-tution pro version 100% without ads. No referral links and no advertisements.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon fa fa-book"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Private Practice Sessions</h3>
                        <p class="feature-box__text">
                            Access the entire Tutorials catalog and enjoy new premium tutorial series every single month.
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon fa fa-cloud-download"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Free Video Downloads</h3>
                        <p class="feature-box__text">
                            Over 1000 free tutorials available to download with recent releases including full code examples and project code
                        </p>
                    </div>
                </div>

                <div class="col-1-of-4">
                    <div class="feature-box">
                        <i class="feature-box__icon fa fa-code"></i>
                        <h3 class="heading-tertiary u-margin-bottom-small">Easy coding</h3>
                        <p class="feature-box__text">
                            Easy to follow, easy to learn because we provide step-by-step video tutorials that take you from a basic developer to a professional.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-tours" id="section-tours">
            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">

                </h2>
            </div>

            <div class="row">
                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--1">Free</span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>5 videos per day</li>
                                    <li>Sorce code not available</li>
                                    <li>No Downloading</li>
                                    <li>No private tuitions </li>
                                    <li>Advertisements available</li>
                                </ul>
                            </div>
                        </div>
                        <div class="card__side card__side--back card__side--back-1">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Free</p>
                                    <p class="card__price-value">$0</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Register!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--2">1 year (pro) </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Unlimited video</li>
                                    <li>Sorce code available</li>
                                    <li>Downloading available</li>
                                    <li>Private tuitions available</li>
                                    <li>No advertisements</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-2">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$200</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Register!</a>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-1-of-3">
                    <div class="card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                            <h4 class="card__heading">
                                <span class="card__heading-span card__heading-span--3">Life time  (pro) </span>
                            </h4>
                            <div class="card__details">
                                <ul>
                                    <li>Unlimited video</li>
                                    <li>Sorce code available</li>
                                    <li>Downloading available</li>
                                    <li>Private tuitions available</li>
                                    <li>No advertisements</li>
                                </ul>
                            </div>

                        </div>
                        <div class="card__side card__side--back card__side--back-3">
                            <div class="card__cta">
                                <div class="card__price-box">
                                    <p class="card__price-only">Only</p>
                                    <p class="card__price-value">$1000</p>
                                </div>
                                <a href="#popup" class="btn btn--white">Register!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn btn--green">Register for 30 days trial</a>
            </div>
        </section>

        <section class="section-stories">
            <div class="bg-video">
                <video class="bg-video__content" autoplay muted loop>
                    <source src="img/visitor/video.mp4" type="video/mp4">
                    <source src="img/visitor/video.webm" type="video/webm">
                    Your browser is not supported!
                </video>
            </div>

            <div class="u-center-text u-margin-bottom-big">
                <h2 class="heading-secondary">
                    What our students have to say
                </h2>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/visitor/nat-8.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Abi Yoga</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">I love E-tution.com</h3>
                        <p>
                            I work in project management and joined E-Tution.com because I get great courses for less.
                            The instructors are fantastic, interesting, and helpful. I plan to use E-Tution.com for a long
                            time!. Thank you E-Tution.com! You've renewed my passion for learning
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="story">
                    <figure class="story__shape">
                        <img src="img/visitor/nat-9.jpg" alt="Person on a tour" class="story__img">
                        <figcaption class="story__caption">Yohan Randhir</figcaption>
                    </figure>
                    <div class="story__text">
                        <h3 class="heading-tertiary u-margin-bottom-small">WOW! My life is completely different now</h3>
                        <p>
                            I believe in lifelong learning and E-Tution.com is a great place to learn from
                            experts.
                            E-Tution.com is a life saver. I don't have the time or money for a college education.
                            The best part about here is the selection. You can find a course for anything you want to
                            learn!
                            I've learned a lot and recommend it to all my friends.
                        </p>
                    </div>
                </div>
            </div>

            <div class="u-center-text u-margin-top-huge">
                <a href="#" class="btn-text">Read all stories &rarr;</a>
            </div>
        </section>

        <section class="section-book">
            <div class="row">
                <div class="book">
                    <div class="book__form">
                        <form action="<?php echo URLROOT; ?>/visitor/mailer" class="form" method="post">
                            <div class="u-margin-bottom-medium">
                                <h2 class="heading-secondary">
                                    Send an email
                                </h2>
                            </div>

                            <div class="form__group">
                                <input name="mailer_name" type="text" class="form__input" placeholder="Full name" id="name" required >
                                <label for="name" class="form__label">Full name</label>
                            </div>

                            <div class="form__group">
                                <input name="mailer_email" type="email" class="form__input" placeholder="Email address" id="email" required>
                                <label for="email" class="form__label">Email address</label>
                            </div>

                            <div class="form__group">
                                <input name="mailer_message" type="text" class="form__input" placeholder="Message" id="message_idea" required>
                                <label for="message" class="form__label">Message</label>
                            </div>

                            <div class="form__group u-margin-bottom-medium">
                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="small" name="mailer_subject" value="Feedback"  checked="checked">
                                    <label for="small" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Feedback
                                    </label>
                                </div>

                                <div class="form__radio-group">
                                    <input type="radio" class="form__radio-input" id="large" name="mailer_subject" value="Issue">
                                    <label for="large" class="form__radio-label">
                                        <span class="form__radio-button"></span>
                                        Issue
                                    </label>
                                </div>
                            </div>

                            <div class="form__group">
                                <input class="btn btn--green" type="submit" name="submit" value="Submit &rarr;">
                            </div>
                            <?php echo $data['mailer_success'] ?>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="footer__logo-box">

            <picture class="footer__logo">
                <source srcset="img/visitor/logo-green-small-1x.png 1x, img/visitor/logo-green-small-2x.png 2x" media="(max-width: 37.5em)">
                <img srcset="img/visitor/logo-green-1x.png 1x, img/visitor/logo-green-2x.png 2x" alt="Full logo" src="img/visitor/logo-green-2x.png">
            </picture>



        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item"><a href="#" class="footer__link">About US</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Contact us</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Register</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Advertice</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
                <p class="footer__copyright">
                    Built by <a href="https://github.com/SachinKodagoda" class="footer__link">KODAGODA D.G</a>.<br/>
                    Copyright &copy; SLIIT
                </p>
            </div>
        </div>
    </footer>

    <div class="popup" id="popup">
        <div class="popup__content">
            <div class="popup__left">
                <img src="img/visitor/nat-8.jpg" alt="Tour photo" class="popup__img">
                <img src="img/visitor/nat-9.jpg" alt="Tour photo" class="popup__img">
            </div>
            <div class="popup__right">
                <a href="#section-tours" class="popup__close">&times;</a>
                <h2 class="heading-secondary u-margin-bottom-small">Register now</h2>
                <h3 class="heading-tertiary u-margin-bottom-small">Important &ndash; Please read these terms before
                    booking</h3>
                <p class="popup__text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua.
                    Sed sed risus pretium quam. Aliquam sem et tortor consequat id. Volutpat odio facilisis mauris sit
                    amet massa vitae. Mi bibendum neque egestas congue. Placerat orci nulla pellentesque dignissim enim
                    sit. Vitae semper quis lectus nulla at volutpat diam ut venenatis. Malesuada pellentesque elit eget
                    gravida cum sociis natoque penatibus et. Proin fermentum leo vel orci porta non pulvinar neque
                    laoreet.
                    Gravida neque convallis a cras semper. Molestie at elementum eu facilisis sed odio morbi quis.
                    Faucibus
                    vitae aliquet nec ullamcorper sit amet risus nullam eget. Nam libero justo laoreet sit. Amet massa
                    vitae tortor condimentum lacinia quis vel eros donec. Sit amet facilisis magna etiam. Imperdiet sed
                    euismod nisi porta.
                </p>
                <a href="#" class="btn btn--green">Register</a>
            </div>
        </div>
    </div>
    <?php require APPROOT . '/views/_includes/_footer.php'; ?>