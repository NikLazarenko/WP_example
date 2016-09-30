<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>Kyte</title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="row">
                <div class="header__logo">
                    <a href=" <?php echo home_url();?>">KYTE</a>
                </div>

                <div class="header__mobile-panel">
                    <div class="header__mobile-button">
                        <button class="hamburger hamburger--3dx-r" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>

                <div class="header__menu">
                    <ul>
                        <li class="header__menu-item"><a class="header__menu-link" href="#home">Home</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="#about">About</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="#portfolio">Portfolio</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="#blog">Journal</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="#">Features</a></li>
                        <li class="header__menu-item"><a class="header__menu-link" href="#contact">Contact</a></li>
                    </ul>
                </div>

                <div class="header__mobile-menu">
                    <ul>
                        <li class="header__mobile-item"><a class="header__mobile-link" href="#home">Home</a></li>
                        <li class="header__mobile-item"><a class="header__mobile-link" href="#about">About</a></li>
                        <li class="header__mobile-item"><a class="header__mobile-link" href="#portfolio">Portfolio</a></li>
                        <li class="header__mobile-item"><a class="header__mobile-link" href="#blog">Blog</a></li>
                        <li class="header__mobile-item"><a class="header__mobile-link" href="#contact">Contact</a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <section class="main-banner" id="home">
        <div class="container">
            <div class="row">
                <div class="main-banner__caption">
                    <div class="main-banner__general-caption">I’m Kyte Brooten</div>
                    <div class="main-banner__secondary-caption">Frelance photographer</div>
                    <div class="main-banner__social">
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-dribbble" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="main-banner__social-link">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>A little about me</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row--padding about__general-row">
                <div class="col-md-4 cancel-padding">
                    <div class="about__photo"></div>
                </div>
                <div class="col-md-8 cancel-padding">
                    <p class="about__text-title">Vestibulum ligut praesent commodo cursus magna, scelerisque  sit consectetur et. Cum sociis natoque penatibus et magnis dis tellus parturient pharetra montes.</p>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Maecenas sed diam eget risus varius blandit sit amet non magna. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit, fusce dapibus, tellus ac cursus commodo.</p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 about--column-padding">
                    <h3>What i do</h3>
                    <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Vestibulum id ligula porta felis euismod semper. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.  Consectetur adipiscing vestibulum id ligula porta felis euismod semper. Maecenas faucibus mollis interdum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum ullamcorper.</p>
                </div>
                <div class="col-md-4 about--column-padding">
                    <h3>What my process</h3>
                    <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Maecenas faucibus mollis interdum. Nullam quis risus eget urna mollis ornare vel eu leo. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                </div>
                <div class="col-md-4 about--column-padding">
                    <h3>What my skills</h3>
                    <p>Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Donec sed odio dui. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec ullamcorper nulla non metus auctor fringilla. Aenean eu leo quam. </p>
                </div>
            </div>

            <div class="row">
                <a href="#contact" class="button about__button">Hire me</a>
            </div>
        </div>
    </section>

    <section class="portfolio" id="portfolio">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>My portfolio</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row--padding">
                <h3 class="portfolio__subtitle">Conceptual</h3>
                <p class="portfolio__section-desc">Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio__items">
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/conceptual1.jpg" alt="photo1">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/conceptual2.jpg" alt="photo2">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/conceptual3.jpg" alt="photo3">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/conceptual4.jpg" alt="photo4">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row--padding">
                <h3 class="portfolio__subtitle">Black & White</h3>
                <p class="portfolio__section-desc">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row portfolio__items">
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black1.jpg" alt="black photo1">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black2.jpg" alt="black photo2">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black3.jpg" alt="black photo3">
                    </div>
                </div>
                <div class="col-lg-4 portfolio__item--padding">
                    <div class="portfolio__item">
                        <img src="<?php bloginfo('template_url')?>/img/black4.jpg" alt="black photo4">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="blog" id="blog">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>Latest blog posts</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row blog__row">
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog1.jpg" alt="blog photo1">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">21 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">27 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Tortor Ullamcorper Fringilla Cras Euismod</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog2.jpg"  alt="blog photo2">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">15 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">17 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Maecenas sed diam eget risus varius blandit</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>

            <div class="row blog__row">
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog3.jpg"  alt="blog photo3">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">11 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">53 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Risus Fermentum Malesuada Justo Tellus</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-md-6 blog__item--padding">
                    <figure class="blog__item">
                        <img src="<?php bloginfo('template_url')?>/img/blog4.jpg"  alt="blog photo4">
                        <figcaption class="blog__item-caption">
                            <div class="blog__item-panel">
                                <div class="blog__item-info">09 may 2013 &nbsp; | &nbsp;  Macro, photography</div>
                                <div class="blog__item-likes">35 <i class="fa fa-heart" aria-hidden="true"></i></div>
                            </div>
                            <div class="blog__item-description">
                                <h3 class="blog__item-title">Fringilla Parturient Consectetur Egestas Inceptos</h3>
                                <p>Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur. Vivamus sagittis lacus  augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <div class="section-title">
            <div class="container">
                <div class="row row--padding">
                    <span>Get in touch</span>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-7 contact--padding">
                    <form>
                        <input class="contact__field" type="text" placeholder="Your name">
                        <input class="contact__field" type="email" placeholder="E-mail">
                        <input class="contact__field" type="text" placeholder="The subject">
                        <textarea class="contact__field contact__textarea" placeholder="Your message"></textarea>
                        <button type="button" class="button">submit</button>
                    </form>
                </div>

                <div class="col-md-4 col-sm-5">
                    <div class="contact__details">
                        <h3 class="contact__details-title">Contact details</h3>
                        <p class="contact__detail-desc">Fusce dapibus, tellus commodo, tortor mauris condimentum utellus fermentum, porta sem malesuada magna. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia.</p>
                        <ul>
                            <li class="contact__info-item contact__address">Moonshine Street No: 14/05</li>
                            <li class="contact__info-item contact__phone">Light City, Jupiter</li>
                            <li class="contact__info-item contact__message">0247 541 65 87</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <footer class="footer">
        <div class="container">
            <div class="row row--padding">
                <span class="footer__copyright">&copy; 2013 Kyte. All rights reserved. Theme by elemis.</span>
                <div class="footer__social">
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/mPageScroll2id.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>