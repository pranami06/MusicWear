<?php
/**
 * Created by PhpStorm.
 * User: ankit
 * Date: 13-12-2017
 * Time: 15:05
 */
require_once ("commonScripts.php");
require_once ("config.php");
?>
<body>
<!-- contact section -->
<section id="contact" class="section">
    <div class="container">
        <div class="section-header">
            <h1 style="color: steelblue" class="wow fadeInDown animated">Contact Us</h1>
            <p class="wow fadeInDown animated">For any suggestions or feedback please leave us a message</p>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 conForm">
                <div id="message"></div>
                <form method="post" action="php/contact.php" name="cform" id="cform">
                    <input name="name" id="name" type="text" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Your name..." >
                    <input name="email" id="email" type="email" class=" col-xs-12 col-sm-12 col-md-12 col-lg-12 noMarr" placeholder="Email Address..." >
                    <textarea name="comments" id="comments" cols="" rows="" class="col-xs-12 col-sm-12 col-md-12 col-lg-12" placeholder="Message..."></textarea>
                    <input type="submit" id="submit" name="send" class="submitBnt" value="Send">
                    <div id="simple-msg"></div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- contact section -->
<?php
require_once ("footer.php");
?>

