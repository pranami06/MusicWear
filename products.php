<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/17/2017
 * Time: 12:26 AM
 */
require_once ("commonScripts.php");
require_once ("config.php");

//collecting BrandID
$brandID = $_GET["BId"];

//fetching products based on Brand ID
$products = fetchProductsBasedOnBID($brandID);

//arrays for collecting Product's details separately
$PNames = array();
$PPDescs = array();
$PPrices = array();
$PImages = array();
$PIDs = array();

//collecting details separately
foreach ($products as $product){
  $PNames[] = $product['PName'];
  $PPDescs[] = $product['PDesc'];
  $PPrices[] = $product['PPrice'];
  $PImages[] = $product['PImgID'];
  $PIDs[] = $product['PID'];
}
?>
<body>
<?php
require_once("navigationMenu.php");
?>
<section id="gallery" class="gallery section">
    <div class="container-fluid">
        <div class="section-header">
            <h2 class="wow fadeInDown animated">Our Products</h2>
        </div>
        <div class="row no-gutter">
            <div class="jumbotron col-lg-3 col-md-6 col-sm-6 col-md-offset-1 work">
                <a href="#" class="work-box">
                    <img src="images/product_images/beats/<?php echo $PImages[0]?>.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div><!-- overlay -->
                </a>
                <h4 class="products-name"><?php echo $PNames[0]?></h4>
                <h6 style="color: red">Price - $249.00</h6>
            </div>
            <div class="jumbotron col-lg-3 col-md-6 col-sm-6 work products-div">
                <a href="#" class="work-box">
                    <img src="images/product_images/beats/<?php echo $PImages[1]?>.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a>
                <h4 class="products-name"><?php echo $PNames[1]?></h4>
                <h6 style="color: red">Price - $149.00</h6>
            </div>
            <div class="jumbotron col-lg-3 col-md-6 col-sm-6 work products-div">
                <a href="images/headphone%20product%20images/Marshall/marshall_monitorbt_900x900b_t_347.png" class="work-box">
                    <img src="images/headphone%20product%20images/Marshall/marshall_monitorbt_900x900b_t_347.png" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a>
                <h4 class="products-name">Marshall monitor 2.0</h4>
                <h6 style="color: red">Price - $149.00</h6>
            </div>
            <div class="col-md-offset-1"></div>
        </div>
        <div class="row no-gutter">
            <div class="jumbotron col-lg-3 col-md-6 col-sm-6 col-md-offset-2 work">
                <a href="images/headphone%20product%20images/V-moda/71dxCQKqqAL._SY355_.jpg" class="work-box">
                    <img src="images/headphone%20product%20images/V-moda/71dxCQKqqAL._SY355_.jpg" alt="">
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a>
                <h4 class="products-name">V-moda crossfade</h4>
                <h6 class="products-price">Price - $299.00</h6>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work products-div"><a href="images/headphone%20product%20images/V-moda/Headphone-zone-v-moda-forza-metallo-black-earphone_1_900x.jpg" class="work-box"> <img src="images/headphone%20product%20images/V-moda/Headphone-zone-v-moda-forza-metallo-black-earphone_1_900x.jpg" alt="">
                    <h4 style="color: steelblue">V-moda Zn</h4>
                    <h6 style="color: red">Price - $149.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work products-div"><a href="images/headphone%20product%20images/Skullcandy/5589000_rd.jpg" class="work-box"> <img src="images/headphone%20product%20images/Skullcandy/5589000_rd.jpg" alt="">
                    <h4 style="color: steelblue">Skullcandy Crusher</h4>
                    <h6 style="color: red">Price - $99.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
        </div>
        <div class="row no-gutter">
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-offset-2 work"> <a href="images/headphone%20product%20images/JBL/JBL-handsfree-earphone-wired-buy-online-sri-lanka-choice-lk-4.jpg" class="work-box"> <img src="images/headphone%20product%20images/JBL/JBL-handsfree-earphone-wired-buy-online-sri-lanka-choice-lk-4.jpg" alt="">
                    <h4 style="color: steelblue">JBL Reflect miniBT</h4>
                    <h6 style="color: red">Price - $39.00</h6>
                    <div class="overlay">
                        <div class="overlay-caption">
                            <p><span class="icon icon-magnifying-glass"></span></p>
                        </div>
                    </div>
                    <!-- overlay -->
                </a> </div>
            <div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/headphone%20product%20images/Marshall/51E80Hj3f+L._SL500_AC_SS350_.jpg" class="work-box"> <img src="images/headphone%20product%20images/Marshall/51E80Hj3f+L._SL500_AC_SS350_.jpg" alt="">
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

</div>
</body>
