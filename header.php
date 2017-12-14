<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/6/2017
 * Time: 6:42 PM
 */
?>
<!-- header section -->
<section class="banner" role="banner" id="banner">
    <header id="header">
        <div class="header-content clearfix"> <span class="logo"><a href="index.php">MusicWear</a></span>
            <nav class="navigation" role="navigation">
                <ul class="primary-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="headphones.php">Headphones</a></li>
                    <li><a href="#services">Accessories</a></li>
                    <?php if (isUserLoggedIn()){?>
                        <li><a href="login.php">Log Out</a></li>
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
