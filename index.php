<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/6/2017
 * Time: 4:57 PM
 */
require_once ("commonScripts.php");
require_once ("config.php");
?>
<body>
<section class="banner" role="banner" id="banner">
    <header id="header">
        <div class="header-content clearfix"> <span class="logo"><a href="index.php">MusicWear</a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="headphones.php">Headphones</a></li>
                    <li><a href="#services">Accessories</a></li>
                    <?php if (isUserLoggedIn()){?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hi &nbsp <?php echo "$loggedInUser->first_name";?>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li style="background-color: transparent"><a href="logOut.php">Log Out</a></li>
                            </ul>
                        </li>
                        <li><a href="#gallery">Cart</a></li>
                    <?php }else{?>
                        <li><a href="login.php">Login</a></li>
                        <li><a href="#gallery">Cart</a></li>
                    <?php } ?>
                </ul>
            </nav>
            <a href="#" class="nav-toggle">Menu<span></span></a>
        </div>
    </header>
    <!-- banner text -->
    <div class="container">
        <div class="col-md-10">
            <div class="banner-text text-center">
                <h1>Listen Music in Style</h1>
            </div>
            <!-- banner text -->
        </div>
    </div>
</section>
<!-- header section -->
<!-- gallery section -->
<section id="gallery" class="gallery section">
    <div class="container-fluid">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Events</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/01.jpg" class="work-box"> <img src="images/portfolio/01.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/02.jpg" class="work-box"> <img src="images/portfolio/02.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/03.jpg" class="work-box"> <img src="images/portfolio/03.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/04.jpg" class="work-box"> <img src="images/portfolio/04.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/05.jpg" class="work-box"> <img src="images/portfolio/05.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/06.jpg" class="work-box"> <img src="images/portfolio/06.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/07.jpg" class="work-box"> <img src="images/portfolio/07.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/portfolio/08.jpg" class="work-box"> <img src="images/portfolio/08.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
        </div>
    </div>
</section>
<!-- gallery section -->

<!-- our team section -->
<section id="tours" class="section teams">
    <div class="container">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Upcoming Shows</h2>
            <p class="wow fadeInDown animated">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa <br> semper aliquam quis mattis quam.</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="images/pic2.jpg" class="img-responsive" alt="">
            </div>
            <div class="col-md-6">
                <div class="col-md-11">
                    <h3>Our Tours</h3>
                    <ul class="tour-list">
                        <li>
                            <div class="tour-date">16<span>Feb<br><em>2016</em></span></div>
                            <div class="tour-info">NewYork, US - <a href="#">Music Area</a></div>
                            <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
                        </li>
                        <li>
                            <div class="tour-date">22<span>Mar<br><em>2016</em></span></div>
                            <div class="tour-info">Delhi, Ind - <a href="#">Open Theater</a></div>
                            <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
                        </li>
                        <li>
                            <div class="tour-date">12<span>April<br><em>2016</em></span></div>
                            <div class="tour-info">Texas, US - <a href="#">Eden Gardens</a></div>
                            <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
                        </li>
                        <li>
                            <div class="tour-date">26<span>April<br><em>2016</em></span></div>
                            <div class="tour-info">England, UK - <a href="#">BNK Stadium</a></div>
                            <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
                        </li>
                        <li>
                            <div class="tour-date">10<span>June<br><em>2016</em></span></div>
                            <div class="tour-info">Tokiyo, Japan - <a href="#">KMT Grounds</a></div>
                            <div class="tour-ticket"><a href="#">Buy Ticket</a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Chris Mentsl</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Praesent eget risus vitae massa Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Kristean velnly</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>Markus Denny</p>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1>"Vitae massa semper aliquam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent eget risus vitae massa
                                    semper aliquam quis mattis consectetur adipiscing elit.." </h1>
                                <p>John Doe</p>
                            </blockquote>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials section -->
<?php
require_once ("footer.php");
?>
