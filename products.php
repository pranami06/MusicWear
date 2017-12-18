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

//arrays for collecting Product's details with brand name separately
$PNames = array();
$PPDescs = array();
$PPrices = array();
$PImages = array();
$PIDs = array();
$BrandNames = array();

//collecting details separately
foreach ($products as $product){
  $PNames[] = $product['PName'];
  $PPDescs[] = $product['PDesc'];
  $PPrices[] = $product['PPrice'];
  $PImages[] = $product['PImgID'];
  $PIDs[] = $product['PID'];
  $BrandNames[] = $product['BName'];
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
            <?php for($x = 0; $x<sizeof($PIDs); $x++){?>
                <div class="jumbotron col-lg-3 col-md-6 col-sm-6 products-div work">
                    <a href="viewProduct.php?PID=<?php echo $PIDs[$x]?>" class="work-box">
                        <img src="images/product_images/<?php echo $BrandNames[$x]?>/<?php echo $PImages[$x]?>" alt="">
                        <div class="overlay">
                            <div class="overlay-caption">
                                <p><span class="icon icon-magnifying-glass"></span></p>
                            </div>
                        </div><!-- overlay -->
                    </a>
                    <h4 class="products-name"><?php echo $PNames[$x]?></h4>
                    <h6 class="products-price">Price : $<?php echo $PPrices[$x]?></h6>
                </div>
            <?php }?>
    </div>
</section>
</div>
</body>
<?php
require_once ("footer.php");
?>
