<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/18/2017
 * Time: 3:10 AM
 */
require_once ("commonScripts.php");
require_once ("config.php");

unset($_SESSION['shoppingCart']);
$productID = $_POST['pId'];
$productQty = $_POST['qty'];
$brandID = $_POST['bID'];
addToCart($productID,$productQty);
//header("location:products.php?BId=".$brandID);
?>