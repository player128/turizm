<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2rizm</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom-select.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tarekraafat/autocomplete.js@10.2.7/dist/css/autoComplete.min.css">

</head>
<body>
    <header class="header">
        <div class="content container">
            <div class="header__top">
                <div class="logo">
                    <img src="img/logo.svg" alt="logo">
                </div>
                <ul class="header__menu">
                    <li class="header__menu-item header__menu-item--active">
                        <a href="#">home</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">hotels</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">restaurants</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">tours</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">destinations</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">activities</a>
                    </li>
                    <li class="header__menu-item">
                        <a href="#">contact</a>
                    </li>
                </ul>
                <div class="user-box">
                    <div class="user-box__hello">
                        <span>Holla,</span>
                         Ales Nesetril
                    </div>
                    <div class="user-box__avatar">
                    </div>
                </div>
            </div>
            <div class="header__content">
                <div class="title">
                    Discover the most engaging places
                </div>
                <button class="button">
                    <img src="img/Vector.svg" alt="">
                    <div class="button-text">
                        Discover on 3D Globe
                    </div>
                </button>
            </div>
            <form action="#" class="header__form" method="get">
                <div class="form__block block-location">
                    <div class="form__icon">
                        <img src="img/icons/loc.png" alt="location">
                    </div>
                    <div class="form__content">
                        <div class="form__title">Location</div>
                        <input autocomplete="off" type="text" id="location" name="location">
                    </div>
                </div>
                <div class="form__block">
                    <div class="form__icon">
                        <img src="img/icons/ac.svg" alt="activity">
                    </div>
                    <div class="form__content">
                        <div class="form__title">Activity</div>
                        <select name="activity" id="activity" class="form__select">
                            <option value="all">All Activities</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <div class="form__block">
                    <div class="form__icon">
                        <img src="img/icons/calendar.svg" alt="when">
                    </div>
                    <div class="form__content">
                        <div class="form__title">When</div>
                        <input name="date" type="date" placeholder="Choose a Date" class="form_input-when" id="date">
                    </div>
                </div>
                <div class="form__block">
                    <div class="form__icon">
                        <img src="img/icons/guests.svg" alt="guests">
                    </div>
                    <div class="form__content">
                        <div class="form__title">Guests</div>
                        <select name="guests" id="guests" class="form__select">
                            <option value="all">1 guest</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <button class="button-search">
                    <img src="img/icons/search.svg" alt="search">
                </button>
            </form>
        </div>
    </header>
    <main class="main">
        <div class="container">
            <h2 class="main__title">Popular Destinations</h2>
            <div class="main__wrapper container-pop__wrapper">
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card pop__card">
                    <img src="img/main/pop-01.jpg" alt="">
                    <div class="card__title">Big Sur</div>
                    <a href="#loc" class="card__link-location">California, USA</a>
                    <a href="##" class="card__link"></a>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="main__title main-all__title">
                Hotels and Restaurants
                <a href="#all" class="button-all">
                    View all
                    <img src="img/main/all.svg" alt="">
                </a>
            </h1>
            <div class="main__wrapper container-hotels__wrapper">
                <div class="main__card hotel__card">
                    <img src="img/main/hotel_1.jpg" alt="">
                    <div class="card__title">Monastero Santa Rosa Hotel & Spar</div>

                    <div class="card__footer">
                        <a href="#loc" class="card__link-location card-hotel__link-location">
                            Salerno, Italy
                        </a>

                        <div class="hotel__stars">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                        </div>
                    </div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/hotel_1.jpg" alt="">
                    <div class="card__title">Monastero Santa Rosa Hotel & Spar</div>

                    <div class="card__footer">
                        <a href="#loc" class="card__link-location card-hotel__link-location">
                            Salerno, Italy
                        </a>

                        <div class="hotel__stars">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_empty.svg" alt="">
                            <img src="img/main/stars/star_empty.svg" alt="">
                        </div>
                    </div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/hotel_1.jpg" alt="">
                    <div class="card__title">Monastero Santa Rosa Hotel & Spar</div>

                    <div class="card__footer">
                        <a href="#loc" class="card__link-location card-hotel__link-location">
                            Salerno, Italy
                        </a>

                        <div class="hotel__stars">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                        </div>
                    </div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/hotel_1.jpg" alt="">
                    <div class="card__title">Monastero Santa Rosa Hotel & Spar</div>

                    <div class="card__footer">
                        <a href="#loc" class="card__link-location card-hotel__link-location">
                            Salerno, Italy
                        </a>

                        <div class="hotel__stars">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                            <img src="img/main/stars/star_full.svg" alt="">
                        </div>
                    </div>
                    <a href="##" class="card__link"></a>
                </div>
            </div> 
        </div>
        <div class="container">
            <h1 class="main__title main-all__title">
                Travel Tips and Advice
                <a href="#all" class="button-all">
                    View all
                    <img src="img/main/all.svg" alt="">
                </a>
            </h1>
            <div class="main__wrapper container-travel__wrapper">
                <div class="main__card travel__card">
                    <img src="img/main/travel.jpg" alt="">
                    <div>
                        <div class="travel__text">
                            <div class="travel__title">East Village Ice Cream Crawl</div>
                            <span>
                                We will stop at five different world-class ice cream shops on this 1.5 mile 1.5 hour tour. At each ice cream store we'll explore the story behind the business and see what makes the ice cream unique as you savor every…
                            </span>
                        </div>
                        <div class="travel__footer">
                            <div class="travel__date travel__info">
                                <img src="img/main/travel_date.svg" alt="">
                                Today
                            </div>
                            <div class="travel__usere travel__info">
                                <img src="img/main/travel_user.svg" alt="">
                                Maria Philips
                            </div>
                            <div class="travel__comment travel__info">
                                <img src="img/main/travel_comment.svg" alt="">
                                2
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main__card travel__card">
                    <img src="img/main/travel.jpg" alt="">
                    <div>
                        <div class="travel__text">
                            <div class="travel__title">East Village Ice Cream Crawl</div>
                            <span>
                                We will stop at five different world-class ice cream shops on this 1.5 mile 1.5 hour tour. At each ice cream store we'll explore the story behind the business and see what makes the ice cream unique as you savor every…
                            </span>
                        </div>
                        <div class="travel__footer">
                            <div class="travel__date travel__info">
                                <img src="img/main/travel_date.svg" alt="">
                                Today
                            </div>
                            <div class="travel__usere travel__info">
                                <img src="img/main/travel_user.svg" alt="">
                                Maria Philips
                            </div>
                            <div class="travel__comment travel__info">
                                <img src="img/main/travel_comment.svg" alt="">
                                2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h1 class="main__title main-all__title">
                Activities
                <a href="#all" class="button-all">
                    View all
                    <img src="img/main/all.svg" alt="">
                </a>
            </h1>
            <div class="main__wrapper container-hotels__wrapper">
                <div class="main__card hotel__card">
                    <img src="img/main/activ_1.jpg" alt="">
                    <div class="card__title">Sailing</div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/activ_1.jpg" alt="">
                    <div class="card__title">Sailing</div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/activ_1.jpg" alt="">
                    <div class="card__title">Sailing</div>
                    <a href="##" class="card__link"></a>
                </div>
                <div class="main__card hotel__card">
                    <img src="img/main/activ_1.jpg" alt="">
                    <div class="card__title">Sailing</div>
                    <a href="##" class="card__link"></a>
                </div>
            </div> 
        </div>
        <div class="container">
            <div class="main__wrapper container-about__wrapper">
                <div class="about__block">
                    <div class="about__title">
                        About US
                    </div>
                    <div class="about__text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse a sapien justo. Nulla facilisis tristique imperdiet. Nullam a placerat odio. Sed in ex augue. Aliquam porta consectetur lorem sit amet ultrices. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                    <a href="#all" class="button-all about-button">
                        Read more
                        <img src="img/main/all.svg" alt="">
                    </a>
                </div>
                <img src="img/main/about.png" alt="">
            </div>
        </div>
    </main>

    <footer class="footer">
        <div class="container footer-content">
            <div class="footer__logo">
                <div class="footer__logo-text">
                    We always make our customers happy by providing as many choises as possible
                </div>
                <div class="social">
                    <a href="#social">
                        <img src="img/footer/facebook.svg" alt="">
                    </a>
                    <a href="#social">
                        <img src="img/footer/twitter.svg" alt="">
                    </a>
                    <a href="#social">
                        <img src="img/footer/instagram.svg" alt="">
                    </a>
                </div>
            </div>
            <div class="footer__links">
                <div class="links__about">
                    <div class="footer__title links__title">About</div>
                    <div class="links__list">
                        <a href="#">About Us</a>
                        <a href="#">Features</a>
                        <a href="#">News</a>
                        <a href="#">Menu</a>
                    </div>
                </div>
                <div class="links__company">
                    <div class="footer__title links__title">Company</div>
                    <div class="links__list">
                        <a href="#">Why 2rism</a>
                        <a href="#">Partner With Us</a>
                        <a href="#">FAQ</a>
                        <a href="#">Blog</a>
                    </div>
                </div>
                <div class="links__support">
                    <div class="footer__title links__title">Support</div>
                    <div class="links__list">
                        <a href="#">Account</a>
                        <a href="#">Support Center</a>
                        <a href="#">Feedback</a>
                        <a href="#">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="footer__mail">
                <div class="mail__title footer__title">
                    Subscribe on our destination review newsletters
                </div>
                <form class="form-mail">
                    <div class="form-mail__content">
                        <label for="mail">Your Email</label>
                        <input type="text" name="mail" class="user-mail">
                    </div>
                    <button class="mail-button">
                        <img src="img/footer/mail-button.png" alt="">
                    </button>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tarekraafat-autocomplete.js/10.2.7/autoComplete.min.js"></script>
    <script src="js/custom-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@easepick/bundle@1.2.1/dist/index.umd.min.js"></script>

    <script src="js/main.js"></script>
    <script src="js/input-loc.js"></script>

</body>
</html>