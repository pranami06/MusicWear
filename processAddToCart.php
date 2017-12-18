<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/18/2017
 * Time: 3:10 AM
 */
require_once ("commonScripts.php");
require_once ("config.php");

//unset($_SESSION['shoppingCart']);
$productID = $_GET['pId'];
//print "quantity is : " .$productQty;
//$brandID = $_POST['bID'];
addToCart($productID,$productQty = 1);
//header("location:viewProduct.php?BId=".$brandID);
?>