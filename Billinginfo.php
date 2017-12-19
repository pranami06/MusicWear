<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 19-12-2017
 * Time: 00:21
 */
require_once ("commonScripts.php");
require_once ("config.php");
?>
<body>
<?php
require_once("navigationMenu.php");
?>
<!-- Billing info section -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-header">
            <h1 style="color: steelblue" class="wow fadeInDown animated">Billing Information</h1>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 conForm">
                <form name='Billingform' action="# method="post">
                    <input name="Fname" id="Fname" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your First name..." required >
                    <input name="Lname" id="Lname" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Your Last name" required >
                    <input name="street" id="street" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Street" required >
                    <input name="city" id="city" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="City" required >
                    <input name="Zip" id="Zip" type="number" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Zip" required >
                    <input name="Country" id="Country" type="text" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Country" required >
                    <button type="submit" id="submit" name="send" class="submitBnt">Continue to checkout</button>
                </form>
                <br>
            </div>
        </div>
<!-- Billing info section -->
<?php
require_once ("footer.php");
?>

