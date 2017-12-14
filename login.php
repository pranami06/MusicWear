<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/10/2017
 * Time: 1:15 AM
 */
require_once ("commonScripts.php");
require_once ("config.php");
//Prevent the user visiting the logged in page if he/she is already logged in
if(isUserLoggedIn()) {
    header("Location: index.php"); die();
}

//Form Posted
if(!empty($_POST))
{
    $errors = array();
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if(count($errors) == 0)
    {
        //retrieve the records of the user who is trying to login
        $userdetails = fetchThisUser($username);

        //Hash the password and use the salt from the database to compare the password.
        $entered_pass = generateHash($password,$userdetails["Password"]);

        if($entered_pass != $userdetails["Password"])
        {

            $errors[] = "invalid password";
        }
        else
        {
            //Passwords match! we're good to go'
            //Transfer some db data to the session object
            $loggedInUser->email = $userdetails["Email"];
            $loggedInUser->user_id = $userdetails["UserID"];
            $loggedInUser->hash_pw = $userdetails["Password"];
            $loggedInUser->first_name = $userdetails["FirstName"];
            $loggedInUser->last_name = $userdetails["LastName"];
            $loggedInUser->username = $userdetails["UserName"];
            $loggedInUser->member_since = $userdetails["MemberSince"];

            //pass the values of $loggedInUser into the session -
            // you can directly pass the values into the array as well.

            $_SESSION["ThisUser"] = $loggedInUser;

            //now that a session for this user is created
            //Redirect to this users account page
            header("Location: index.php");
            die();
        }

    }
}



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
        <div id="errors">
            <?php print_r($errors);?>
        </div>
        <form name='login' action="<?php $_SERVER['PHP_SELF']?>" method="post">
            <div id="login-box">
                <div class="logo">
                    <img src="images/login.jpg" class="img img-responsive img-circle center-block"/>
                    <h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
                </div><!-- /.logo -->
                <div class="controls">
                    <input type="text" name="username" placeholder="Username" class="form-control controlSpacing" required />
                    <input type="password" name="password" placeholder="Password" class="form-control" required />
                    <button type="submit" class="btn btn-default btn-block btn-custom">Login</button>
                    <div class="row">
                        <div class="col-sm-7">
                            <a class="loginLinks" href="#ResetPassword">Forgot Password</a>
                        </div>
                        <div class="col-sm-5">
                            <a class="loginLinks" href="createAccount.php">Create Account</a>
                        </div>
                    </div>
                </div><!-- /.controls -->
            </div><!-- /#login-box -->
        </form>
    </div><!-- /.container -->
    <div id="particles-js"></div>
</body>