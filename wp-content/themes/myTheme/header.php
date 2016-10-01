<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title> <?php wp_title(); ?></title>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <?php wp_head(); ?>
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
