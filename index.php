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
<!-- popular product section -->
<section id="gallery" class="gallery section">
    <div class="container-fluid">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Our Best selling Products</h2>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/beats/2.png" class="work-box"> <img src="images/product_images/beats/2.png" alt="">
                    <h4 style="color: steelblue">Beats Studio-3</h4>
                    <h6 style="color: red">Price - $249.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/JBL/5.jpg" class="work-box"> <img src="images/product_images/JBL/5.jpg" alt="">
                    <h4 style="color: steelblue">JBL E45BT</h4>
                    <h6 style="color: red">Price - $149.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/Marshall/3.png" class="work-box"> <img src="images/product_images/Marshall/3.png" alt="">
                    <h4 style="color: steelblue">Marshall monitor 2.0</h4>
                    <h6 style="color: red">Price - $149.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/V-moda/1.jpg" class="work-box"> <img src="images/product_images/V-moda/1.jpg" alt="">
                    <h4 style="color: steelblue">V-moda crossfade</h4>
                    <h6 style="color: red">Price - $299.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/V-moda/2.jpg" class="work-box"> <img src="images/product_images/V-moda/2.jpg" alt="">
                    <h4 style="color: steelblue">V-moda Zn</h4>
                    <h6 style="color: red">Price - $149.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/Skullcandy/3.jpg" class="work-box"> <img src="images/product_images/Skullcandy/3.jpg" alt="">
                    <h4 style="color: steelblue">Skullcandy Crusher</h4>
                    <h6 style="color: red">Price - $99.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/JBL/6.jpg" class="work-box"> <img src="images/product_images/JBL/6.jpg" alt="">
                    <h4 style="color: steelblue">JBL Reflect miniBT</h4>
                    <h6 style="color: red">Price - $39.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/product_images/Marshall/1.jpg" class="work-box"> <img src="images/product_images/Marshall/1.jpg" alt="">
                    <h4 style="color: steelblue">Marshal ModeEQ</h4>
                    <h6 style="color: red">Price - $79.00</h6>
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
<!-- popular products -->

<!-- Testimonials section -->
<section id="testimonials" class="section testimonials no-padding">
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <img style="width: 200px; height: 200px;position: absolute" src="images/product_images/Marshall/marshall_monitorbt_900x900b_t_347.png">
                                <h4>Top Deals</h4>
                                <h1>"Marshal Monitor 2.0 Bluetooth headset" </h1>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <img style="width: 200px; height: 200px; position: absolute" src="images/product_images/beats/41m-yVNdofL._SL500_AC_SS350_.jpg">
                                <h1>  "Beats pro"</h1>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1> </h1>
                            </blockquote>
                        </div>
                    </li>
                    <li>
                        <div class="col-md-12">
                            <blockquote>
                                <h1></h1>
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
