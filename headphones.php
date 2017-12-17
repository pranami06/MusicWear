<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 13-12-2017
 * Time: 12:55
 */
require_once ("commonScripts.php");
require_once ("config.php");
$brandImgIDs = fetchAllBrandImgID();
$brand = array();
foreach ($brandImgIDs as $brandImgID){
    $brand[] = $brandImgID;
}
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
                    <a href="products.php?BId=1" class="work-box">
                        <img style="height: 300px; width: 300px;" src="images/brands/<?php echo $brand[0]['BImgID']?>.jpg" alt="">
                    </a>
                    <h3 style="color: white">BEATS</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-heart"></span>
                <div class="services-content">
                    <a href="products.php?BId=2" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/brands/<?php echo $brand[1]['BImgID']?>.jpg" alt="">
                    </a>
                    <h3 style="color: white">JBL</h3>
                </div>
            </div>
        </div>
        <div class="row no-padding">
            <div class="col-md-4 col-sm-6 col-md-offset-2 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="products.php?BId=3" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/brands/<?php echo $brand[2]['BImgID']?>.jpg" alt="">
                    </a>
                        <h3 style="color: white">Marshall</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="products.php?BId=4" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/brands/<?php echo $brand[3]['BImgID']?>.jpg" alt="">
                    </a>
                    <h3 style="color: white">Skullcandy</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-md-offset-2 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="products.php?BId=5" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/brands/<?php echo $brand[4]['BImgID']?>.jpg" alt="">
                    </a>
                    <h3 style="color: white">Sony</h3>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-megaphone"></span>
                <div class="services-content">
                    <a href="products.php?BId=6" class="work-box">
                        <img style="height: 300px; width: 300px" src="images/brands/<?php echo $brand[5]['BImgID']?>.png"" alt="">
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