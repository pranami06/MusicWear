<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 13-12-2017
 * Time: 12:55
 */
require_once ("commonScripts.php");
require_once ("config.php");
?>
<body>
<?php
require_once("navigationMenu.php");
?>
<!-- Headphone section -->
<section id="services" class="services service-section">
    <div class="container">
        <div class="section-header">
            <h2 style="color: white" class="wow fadeInDown animated"><br>Shop by Brands</h2>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-2 services text-center"> <span class="icon icon-recycle"></span>
                <div class="services-content">
                    <a href="ourTeam.php" class="work-box">
                        <img style="height: 300px; width: 300px;" src="images/product_images/beats/beats-by-dre-wallpaper-20869-21406-hd-wallpapers.jpg" alt="">
                    </a>
                    <h3 style="color: white">BEATS</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
                <div class="services-content">
                    <a href="#" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/product_images/JBL/maxresdefault.jpg" alt="">
                    </a>
                    <h3 style="color: white">JBL</h3>
                </div>
            </div>
        </div>
        <div class="row no-padding">
            <div class="col-md-4 col-sm-6 col-md-offset-2 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="#" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/product_images/Marshall/3125820-marshall-wallpapers.jpg" alt="">
                    </a>
                        <h3 style="color: white">Marshall</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="#" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/product_images/Skullcandy/skullcandy_wallpaper_background_by_timsaunders-d50835r.jpg" alt="">
                    </a>
                    <h3 style="color: white">Skullcandy</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-2 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="#" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/product_images/Sony/wonderful-sony-wallpaper-41202-42212-hd-wallpapers.jpg" alt="">
                    </a>
                    <h3 style="color: white">Sony</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="#" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/product_images/V-moda/download.png" alt="">
                    </a>
                    <h3 style="color: white">V-moda</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!--headphone section-->
<?php
require_once ("footer.php");
?>