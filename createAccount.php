<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/10/2017
 * Time: 2:17 AM
 */
require_once ("commonScripts.php");
?>
<body>
<header id="header">
    <div class="header-content clearfix"> <span class="logo"><a href="index.php">MusicWear</a></span>
        <nav class="navigation" role="navigation">
            <ul class="primary-nav">
                <li><a href="#banner">Home</a></li>
                <li><a href="#intro">Headphones</a></li>
                <li><a href="#services">Accessories</a></li>
                <li><a href="#gallery">Cart</a></li>
            </ul>
        </nav>
        <a href="#" class="nav-toggle">Menu<span></span></a>
    </div>
</header>
<div class="container">
    <div id="login-box">
        <div class="logo">
            <img src="images/login.jpg" class="img img-responsive img-circle center-block"/>
            <h1 class="logo-caption"><span class="tweak">R</span>egister</h1>
        </div><!-- /.logo -->
        <div class="controls">
            <input type="text" name="fname" placeholder="First Name" class="form-control controlSpacing" />
            <input type="text" name="lname" placeholder="Last Name" class="form-control controlSpacing" />
            <input type="text" name="email" placeholder="Email" class="form-control controlSpacing" />
            <input type="password" name="password" placeholder="Password" class="form-control controlSpacing" />
            <input type="password" name="confirmPassword" placeholder="Confirm Password" class="form-control" />
            <button type="button" class="btn btn-default btn-block btn-custom">Create Account</button>
            <div class="row">
                <div class="col-sm-6"></div>
                <div class="col-sm-6">
                    <a class="loginLinks" href="login.php">Already a member</a>
                </div>
            </div>
        </div><!-- /.controls -->
    </div><!-- /#login-box -->
</div><!-- /.container -->
<div id="particles-js"></div>
</body>
