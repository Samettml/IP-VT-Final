<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <title>Scholar</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-scholar.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <!--

    TemplateMo 586 Scholar

    https://templatemo.com/tm-586-scholar

    -->
</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <h1>FREELANCE</h1>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Serach Start ***** -->
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                            <i class="fa fa-search"></i>
                        </form>
                    </div>
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <!-- ***** Serach Start ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section"><a href="#top" class="active">Anasayfa</a></li>
                        <li class="scroll-to-section"><a href="#services">Services</a></li>
                        <li class="scroll-to-section"><a href="#ilanlar">İlanlar</a></li>
                        <li class="scroll-to-section"><a href="#team">Team</a></li>

                        @guest
                            <!-- Kullanıcı giriş yapmamışsa -->
                            <li class="scroll-to-section"><a href="{{ route('login') }}">Login</a></li>
                            <li class="scroll-to-section"><a href="{{ route('register') }}">Register Now!</a></li>
                        @else
                            <!-- Kullanıcı giriş yapmışsa -->
                            <li class="scroll-to-section"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li class="scroll-to-section">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" style="border: none; background: none; color: #fff; cursor: pointer;">Logout</button>
                                </form>
                            </li>
                        @endguest





                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<div class="main-banner" id="top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-banner">
                    <div class="item item-1">
                        <div class="header-text">
                            <span class="category">Freelance İş İlanları</span>
                            <h2>Freelancerlar ve İşverenler İçin En Kolay Çözüm</h2>
                            <p>Bu platform, freelance işler için özel olarak tasarlanmıştır ve hem işverenler hem de freelancerlar için harika bir deneyim sunar.</p>
                            <div class="buttons">
                                <div class="main-button">
                                    <a href="#">Demo Talep Et</a>
                                </div>
                                <div class="icon-button">
                                    <a href="#"><i class="fa fa-play"></i> Platformu Keşfet</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item-2">
                        <div class="header-text">
                            <span class="category">En İyi Sonuç</span>
                            <h2>Çabanızın Karşılığını En İyi Şekilde Alın</h2>
                            <p>Platformumuz, freelance projelerinizi hızlı ve etkili bir şekilde yönetmenizi sağlar. İşverenler ve freelancerlar için optimize edilmiştir.</p>
                            <div class="buttons">
                                <div class="main-button">
                                    <a href="#">Demo Talep Et</a>
                                </div>
                                <div class="icon-button">
                                    <a href="#"><i class="fa fa-play"></i> Daha Fazla Bilgi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item item-3">
                        <div class="header-text">
                            <span class="category">Online İşler</span>
                            <h2>Zaman tasarrufu sağlamak için </h2>
                            <p>Freelance iş platformumuz, zamandan tasarruf etmenizi ve işinizi kolayca yönetmenizi sağlar. Her şey parmaklarınızın ucunda!</p>
                            <div class="buttons">
                                <div class="main-button">
                                    <a href="#">Daha Fazla Bilgi</a>
                                </div>
                                <div class="icon-button">
                                    <a href="#"><i class="fa fa-play"></i> Online İşler Hakkında</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="services section" id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="assets/images/service-01.png" alt="online degrees">
                    </div>
                    <div class="main-content">
                        <h4>Online Degrees</h4>
                        <p>Whenever you need free templates in HTML CSS, you just remember TemplateMo website.</p>
                        <div class="main-button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="assets/images/service-02.png" alt="short courses">
                    </div>
                    <div class="main-content">
                        <h4>SS</h4>
                        <p>You can browse free templates based on different tags such as digital marketing, etc.</p>
                        <div class="main-button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <div class="icon">
                        <img src="assets/images/service-03.png" alt="web experts">
                    </div>
                    <div class="main-content">
                        <h4>Web Experts</h4>
                        <p>You can start learning HTML CSS by modifying free templates from our website too.</p>
                        <div class="main-button">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



  @include('user.product')

<div class="section fun-facts">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="15000" data-speed="1000"></h2>
                                <p class="count-text ">Mutlu Müşteri</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="804" data-speed="1000"></h2>
                                <p class="count-text ">Aktif İlan</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter">
                                <h2 class="timer count-title count-number" data-to="250" data-speed="1000"></h2>
                                <p class="count-text ">Aktif Freelancer</p>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="counter end">
                                <h2 class="timer count-title count-number" data-to="15" data-speed="1000"></h2>
                                <p class="count-text ">Yıllık Deneyim</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="section testimonials">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="owl-carousel owl-testimonials">
                    <div class="item">
                        <p>“Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.”</p>
                        <div class="author">
                            <img src="assets/images/testimonial-author.jpg" alt="">
                            <span class="category">Full Stack Master</span>
                            <h4>Claude David</h4>
                        </div>
                    </div>
                    <div class="item">
                        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.”</p>
                        <div class="author">
                            <img src="assets/images/testimonial-author.jpg" alt="">
                            <span class="category">UI Expert</span>
                            <h4>Thomas Jefferson</h4>
                        </div>
                    </div>
                    <div class="item">
                        <p>“Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.”</p>
                        <div class="author">
                            <img src="assets/images/testimonial-author.jpg" alt="">
                            <span class="category">Digital Animator</span>
                            <h4>Stella Blair</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 align-self-center">
                <div class="section-heading">
                    <h6>YORUMLAR</h6>
                    <h2>What they say about us?</h2>
                    <p>You can search free CSS templates on Google using different keywords such as templatemo portfolio, templatemo gallery, templatemo blue color, etc.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section events" id="events">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-heading">
                    <h6>Schedule</h6>
                    <h2>Popüler İlanlar</h2>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                                <img src="assets/images/event-01.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul>
                                <li>
                                    <span class="category">Web Design</span>
                                    <h4>Basic web tasarımı</h4>
                                </li>
                                <li>
                                    <span>Date:</span>
                                    <h6>React</h6>
                                </li>
                                <li>
                                    <span>Duration:</span>
                                    <h6>22 Hours</h6>
                                </li>
                                <li>
                                    <span>Price:</span>
                                    <h6>$120</h6>
                                </li>
                            </ul>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                                <img src="assets/images/event-02.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul>
                                <li>
                                    <span class="category">Front End</span>
                                    <h4>New Design Trend</h4>
                                </li>
                                <li>
                                    <span>Language </span>
                                    <h6>React,Javascript</h6>
                                </li>
                                <li>
                                    <span>Duration:</span>
                                    <h6>30 Hours</h6>
                                </li>
                                <li>
                                    <span>Price:</span>
                                    <h6>$320</h6>
                                </li>
                            </ul>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-6">
                <div class="item">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="image">
                                <img src="assets/images/event-03.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <ul>
                                <li>
                                    <span class="category">Full Stack</span>
                                    <h4>Web Programming</h4>
                                </li>
                                <li>
                                    <span>Language </span>
                                    <h6>React,Javascript,PHP,Nodejs</h6>
                                </li>
                                <li>
                                    <span>Duration:</span>
                                    <h6>48 Hours</h6>
                                </li>
                                <li>
                                    <span>Price:</span>
                                    <h6>$440</h6>
                                </li>
                            </ul>
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-us section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6  align-self-center">
                <div class="section-heading">
                    <h6>BİZE KATIL</h6>
                    <h2>Hemen Üye Olun ve Serbest Çalışma Dünyasına Adım Atın!

                    </h2>
                    <p>Freelance iş dünyasına adım atmak veya projelerinizi paylaşarak doğru yeteneklere ulaşmak mı istiyorsunuz? Sitemize üye olun, ilanlarınızı paylaşın veya size en uygun işleri keşfedin.

                        .</p>
                    <div class="special-offer">
                        <span class="offer">off<br><em>25%</em></span>
                        <h6>Valide: <em>1 January 2025</em></h6>
                        <h4>Special Offer <em>25%</em> OFF!</h4>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-us-content">
                    <form id="contact-form" action="" method="post">
                        <div class="row">
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="name" name="name" id="name" placeholder="Your Name..." autocomplete="on" required>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <input type="text" name="email" id="email" pattern="[^ @]*@[^ @]*" placeholder="Your E-mail..." required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message" id="message" placeholder="Your Message"></textarea>
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="orange-button">Send Message Now</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <div class="col-lg-12">
            <p>Copyright © 2025  &nbsp;&nbsp;&nbsp; <a href="https://templatemo.com" rel="nofollow" target="_blank"></a></p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/isotope.min.js"></script>
<script src="assets/js/owl-carousel.js"></script>
<script src="assets/js/counter.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>
