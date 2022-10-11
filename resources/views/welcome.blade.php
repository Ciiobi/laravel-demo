<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="/style/style.css">
    <link rel="stylesheet" href="/style/queries.css">
    <script src="javascript/script.js" defer></script>


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>



    <title>Laravel</title>

</head>

<body class="antialiased">
    <div class="page">
        <div class="wrapper">
            <header class="header">
                <div class="side-nav">
                    <button class="btn-mobile-nav">
                        <ion-icon class="icon-mobile-nav" name="close-outline"></ion-icon>
                    </button>
                    <div class="side-nav-logo">
                        <a href="#">
                            <img src="{{ URL('images/logo.svg') }}" alt="logo">
                        </a>
                    </div>

                    <div class="side-nav-menu">
                        <nav class="header-menu ">
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">fRANCEK</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">PHIBROWS</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">MICROPOINT</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">PHINJECTION
                                </a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">TESTIMONIALS</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">CLASSES</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">
                                    GALLERY</a>
                            </div>
                            <div class="header-menu-item">
                                <a href="#" class="header-menu-item-link">CONTACT</a>
                            </div>
                        </nav>
                    </div>

                    <div class="side-nav-social">
                        <ul class="index-about-social-container">
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-twitter"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-instagram">
                                    </ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-socialt-icon" name="logo-tumblr"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-youtube"></ion-icon>
                                </a>
                            </li>
                        </ul>

                        <div class="header-contact ">
                            <div class="header-contact-item">
                                <a href="tel:1234567890" class="header-mail">
                                    Phone: 1234567890
                                </a>
                            </div>

                            <div class="header-contact-item">
                                <a href="mailto:test@gmail.com" class="header-mail">
                                    Email: test@gmail.com
                                </a>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container">

                    <div class="header-lang-container">
                        <button class="btn-mobile-nav">
                            <ion-icon class="icon-mobile-nav" name="menu-outline"></ion-icon>
                        </button>
                        <div class="header-contact ">
                            <div class="header-contact-item">
                                <a href="tel:1234567890" class="header-mail">
                                    Phone: 1234567890
                                </a>
                            </div>
                            <div class="header-contact-line">|</div>
                            <div class="header-contact-item">
                                <a href="mailto:test@gmail.com" class="header-mail">
                                    Email: test@gmail.com
                                </a>
                            </div>
                        </div>
                        <div class="header-lang">
                            <img class="flag-img" src="{{ URL('images/great-britain-flag.png') }}" alt="">
                            <div class="header-contact-item">ENG</div>
                            <img class="flag-arow" src="{{ URL('images/flag-down-arow.svg') }}" alt="">
                        </div>
                    </div>
                    <div class="header-logo">
                        <a href="#">
                            <img src="{{ URL('images/logo.svg') }}" alt="logo">
                        </a>
                    </div>

                    <nav class="header-menu ">
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">fRANCEK</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">PHIBROWS</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">MICROPOINT</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">PHINJECTION
                            </a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">TESTIMONIALS</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">CLASSES</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">
                                GALLERY</a>
                        </div>
                        <div class="header-menu-item">
                            <a href="#" class="header-menu-item-link">CONTACT</a>
                        </div>
                    </nav>

                </div>
            </header>

            <main class="content">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL('images/carousel-1.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ URL('images/carousel-2.jpg') }}" alt=""></div>
                        <div class="swiper-slide"><img src="{{ URL('images/carousel-3.jpg') }}" alt=""></div>

                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="steps-container steps-hidden">
                    <div class="steps-element">
                        <a href="#">
                            <div class="steps-image-container">
                                <img class="full-width" src="{{ URL('images/steps1.png') }}" alt="steps1">
                            </div>
                            <div class="steps-number animation-left">
                                01
                                <div class="steps-text">phibrows</div>
                            </div>
                        </a>
                    </div>

                    <div class="steps-element">
                        <a href="#">
                            <div class="steps-image-container">
                                <img class="full-width" src="{{ URL('images/steps2.png') }}" alt="steps2">
                            </div>
                            <div class="steps-number ">
                                02
                                <div class="steps-text">micropoint</div>
                            </div>
                        </a>
                    </div>

                    <div class="steps-element">
                        <a href="#">
                            <div class="steps-image-container">
                                <img class="full-width" src="{{ URL('images/steps3.png') }}" alt="steps3">
                            </div>
                            <div class="steps-number">
                                03
                                <div class="steps-text">phinjection</div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="container">
                    <div class="index-about">
                        <div class="index-about-title">
                            <p>ABOUT FRANCEK PRSA</p>
                        </div>
                        <div class="index-about-subtitle">
                            <p>Welcome to Francek Prsa Microblaging Academy.</p>
                        </div>
                        <div class="index-about-text">
                            <P><strong> Prsa opened</strong> his first beauty salon in Germany in 1996. Today, he owns
                                and
                                franchises twelve salons with over 200 employees. Also, he founded and owns the Master
                                Academy in Germany where make-up artists and pro fessional hairdressers receive their
                                training.<br>
                                The world's most beautiful people can not do without his professional skills and his
                                guidance any more.</P>
                        </div>
                        <a href="#">
                            <p class="see-more-btn">see more</p>
                        </a>
                        <ul class="index-about-social-container">
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-facebook"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-twitter"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-instagram">
                                    </ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-socialt-icon" name="logo-tumblr"></ion-icon>
                                </a>
                            </li>
                            <li class="index-about-social-element">
                                <a class="index-about-social-link" href="#">
                                    <ion-icon class="index-about-social-icon" name="logo-youtube"></ion-icon>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="marketing-container" role="img">
                    <div class="container">
                        <ul class="marketing-elements-container">
                            <li class="marketing-element-container">
                                <div class="marketing-image">
                                    <img src="{{ URL('images/marketing1.svg') }}" alt="marketing1">
                                </div>
                                <p class="marketing-text">Marketing advices from our experts</p>
                            </li>
                            <li class="marketing-element-container">
                                <div class="marketing-image">
                                    <img src="{{ URL('images/marketing2.svg') }}" alt="marketing2">
                                </div>
                                <p class="marketing-text">Deluxe microblading KIT</p>
                            </li>
                            <li class="marketing-element-container">
                                <div class="marketing-image">
                                    <img src="{{ URL('images/marketing3.svg') }}" alt="marketing3">
                                </div>
                                <p class="marketing-text">6 months support & training</p>
                            </li>
                            <li class="marketing-element-container">
                                <div class="marketing-image">
                                    <img src="{{ URL('images/marketing4.svg') }}" alt="marketing4">
                                </div>
                                <p class="marketing-text">Kraft Master application</p>
                            </li>
                            <li class="marketing-element-container">
                                <div class="marketing-image">
                                    <img src="{{ URL('images/marketing5.svg') }}" alt="marketing5">
                                </div>
                                <p class="marketing-text">Access to all microblading products</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="container">
                    <div class="classes-container">
                        <h2 class="index-about-title classes-title">Latest Classes</h2>
                        <div class="class-swiper">
                            <div class="swipe-button swipe-button-previous">
                                <ion-icon class="swipe-button-icon" name="chevron-back-outline"></ion-icon>
                            </div>
                            <div class="swipe-button swipe-button-next">
                                <ion-icon class="swipe-button-icon" name="chevron-forward-outline"></ion-icon>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_99.jpg) ">
                        <p class="pesentation-text ">phibrows</p>
                    </div>
                </a>
                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_98.jpg) ">
                        <p class="pesentation-text aling-text-right ">micropoin</p>
                    </div>
                </a>
                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_97.jpg) ">
                        <p class="pesentation-text ">phinjection</p>
                    </div>
                </a>
                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_96.jpg) ">
                        <p class="pesentation-text aling-text-right">latest classes</p>
                    </div>
                </a>
                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_94.jpg) ">
                        <p class="pesentation-text ">francek</p>
                    </div>
                </a>
                <a href="#" class="listare-index-servicii">
                    <div class="presentation-element" role="img"
                        style="background-image: linear-gradient( rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(../images/Group_95.jpg) ">
                        <p class="pesentation-text aling-text-right">testimonials</p>
                    </div>
                </a>

            </main>
        </div>
        {{-- 
        <div class="container">
            <div class="testionial-container">
                <div class="index-testimonials-title index-about-title">testimonial</div>

                <div class="testimonial-swiper swiper-2 mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="{{ URL('images/Group_94.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ URL('images/Group_95.jpg') }}" alt="">
                        </div>
                        <div class="swiper-slide"><img src="{{ URL('images/Group_96.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div> --}}

        <footer class="footer">
            <div class="container">
                <div class="footer-logo-container">
                    <div class="footer-line"></div>
                    <div class="footer-logo">
                        <a href="#">
                            <img src="{{ URL('images/logo.svg') }}" alt="logo">
                        </a>
                    </div>
                    <div class="footer-line"></div>
                </div>
                <div class="footer-content">
                    <ul class="footer-element footer-hidden">
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">francek</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">phibrows</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">micropoint</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">phinjection</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">testimonials</a>
                        </li>
                    </ul>

                    <ul class="footer-element">
                        <li class="footer-item">Find more</li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">phishop</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">kraft master app</a>
                        </li>
                        <li class="footer-item">
                            <a href="#" class="footer-item-link">latest classes</a>
                        </li>
                    </ul>

                    <ul class="footer-element footer-hidden">
                        <li class="footer-item">
                            <ion-icon class="footer-social" name="logo-facebook"></ion-icon>
                            <a href="#" class="footer-item-link"> francek prsa</a>
                        </li>
                        <li class="footer-item">
                            <ion-icon class="footer-social" name="logo-youtube"></ion-icon>
                            <a href="#" class="footer-item-link"> our channel</a>
                        </li>
                        <li class="footer-item">
                            <ion-icon class="footer-social" name="logo-instagram"></ion-icon>
                            <a href="#" class="footer-item-link"> instagram</a>
                        </li>
                        <li class="footer-item">
                            <ion-icon class="footer-social" name="logo-tumblr"></ion-icon>
                            <a href="#" class="footer-item-link"> tumblr</a>
                        </li>
                        <li class="footer-item">
                            <ion-icon class="footer-social" name="logo-twitter"></ion-icon>
                            <a href="#" class="footer-item-link"> twitter</a>
                        </li>
                    </ul>

                    <ul class="footer-element">
                        <li class="footer-item">Importan Information</li>
                        <li class="footer-item">
                            <a href="#">terms & condition</a>
                        </li>
                        <li class="footer-item">
                            <a href="#">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-content">Copyright &copy; <span class="year">2020</span> Lorem ipsum dolor sit
                    amet, consectetur
                    adipisicing elit. Id, magni.</div>
            </div>
        </footer>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


</body>

</html>
