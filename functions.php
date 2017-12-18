<?php
/**
 * Created by PhpStorm.
 * User: jhawa
 * Date: 12/10/2017
 * Time: 3:02 PM
 */

//function for checking if User is Logged In
function isUserLoggedIn(){
    global $loggedInUser,$mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserName,
		Password
		FROM ".$db_table_prefix."user_info
		WHERE
		UserName = ?
		AND
		Password = ?
		LIMIT 1");
    $stmt->bind_param("is", $loggedInUser->user_name, $loggedInUser->hash_pw);
    $stmt->execute();
    $stmt->store_result();
    $num_returns = $stmt->num_rows;
    $stmt->close();

    if($loggedInUser == NULL)
    {
        return false;
    }
    else
    {
        if ($num_returns > 0)
        {
            return true;
        }
        else
        {
            destroySession("ThisUser");
            return false;
        }
    }
}

//Destroys a session as part of logout
function destroySession($name)
{
    if(isset($_SESSION[$name]))
    {
        $_SESSION[$name] = NULL;
        unset($_SESSION[$name]);
    }
}

//function to fetch all Users
function fetchAllUsers(){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
		UID,
		FName,
		LName,
		Email,
		UserName,
		Password
		FROM " . $db_table_prefix . "user_info"
    );
    $stmt->execute();
    $stmt->bind_result($UID, $FName, $LName, $Email, $UserName, $Password);
    while ($stmt->fetch()){
        $row[] = array('UID' => $UID,
            'FName' => $FName,
            'LName' => $LName,
            'Email' => $Email,
            'UserName' => $UserName,
            'Password' => $Password);
    }
    $stmt->close();
    return ($row);
}

//function for generating random user id
function generateUserID(){
    $character_array = array_merge(range('a', 'z'), range(0, 9), range('A','Z'));
    $userID = "";
    for ($i = 0; $i < 6; $i++) {
        $userID .= $character_array[rand(
            0, (count($character_array) - 1)
        )];
    }
    return $userID;
}

//function to check if userExists
function checkIfUserExists($userName){
    //collecting all users data
    $db_Users = fetchAllUsers();

    //getting randomly generated UserID
    $UID = generateUserID();

    $ifUserExists = false;

    //checking if userID or userName already Exists
    foreach ($db_Users as $db_User){
        if($db_User['UserName'] == $userName || $db_User['UID']== $UID){
            $ifUserExists = true;
            break;
        }
        else{
            $ifUserExists = false;
        }
    }
    return array($ifUserExists,$UID,$userName);

}

//function for generating hash password
function generateHash($plainText, $salt = NULL) {
    if ($salt === NULL) {
        $salt = substr(md5(uniqid(rand(), TRUE)), 0, 25);
    }
    else {
        $salt = substr($salt, 0, 25);
    }
    return $salt . sha1($salt . $plainText);
}

//function for creating new user
function createNewUser($email, $firstname, $lastname, $username, $password){
    global $mysqli, $db_table_prefix;

    //collecting information about if user already exists
    $ifUserExists = checkIfUserExists($username);
    $duplicateUser = $ifUserExists[0];

    //creating new user if user not exists (checking based on username or user id)
    if($duplicateUser == false){
        $UID = $ifUserExists[1];
        $UserName = $ifUserExists[2];
        $hashPassword = generateHash($password);
        $stmt = $mysqli->prepare(
            "INSERT INTO " . $db_table_prefix . "user_info (
		UID,
		FName,
		LName,
		Email,
		UserName,
		Password
		)
		VALUES (
		?,
		?,
		?,
		?,
		?,
		?
		)"
        );
        $stmt->bind_param("ssssss", $UID, $firstname, $lastname, $email, $UserName, $hashPassword);
        $result = $stmt->execute();
        $stmt->close();
    }
    else{
        //if user already exists
        $result = 0;
    }

    return $result;
}

//function for fetching UserData based on Username
function fetchThisUser($username){
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		UserName,
		FName,
		Email,
		Password
		FROM ".$db_table_prefix."user_info
		WHERE
		UserName = ?
		LIMIT 1");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($UserName, $FName, $Email, $Password);
    $stmt -> execute();
    while ($stmt->fetch()){
        $row = array(
            'UserName' => $UserName,
            'FName' => $FName,
            'Email' => $Email,
            'Password' => $Password
        );
    }
    $stmt->close();
    return ($row);
}

//function to submit message in db
function submitMessage($name,$email,$comments){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "INSERT INTO " . $db_table_prefix . "contact_us (
            CEmail,
            CName,
		    CMessage
            )
            VALUES (            
            ?,
            ?,
            ?
            )"
    );
    $stmt->bind_param("sss", $email, $name, $comments);
    $result = $stmt->execute();
    $stmt->close();
    return $result;
}

//function to fetch products based on Brand ID
function fetchProductsBasedOnBID($BId){
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		p.PID,
		p.PImgID,
		p.BID,
		p.PName,
		p.PDesc,
		p.PPrice,
		b.BName
		FROM ".$db_table_prefix."product_info p
		JOIN ".$db_table_prefix."brand_info b
		ON
		p.BID = b.BID
		WHERE
		p.BID = ?
		");
    $stmt->bind_param("i", $BId);
    $stmt->execute();
    $stmt->bind_result($PID, $PImgID, $BID, $PName, $PDesc, $PPrice, $BName);
    $stmt -> execute();
    while ($stmt->fetch()){
        $row[] = array(
            'PID' => $PID,
            'PImgID' => $PImgID,
            'BID' => $BID,
            'PName' => $PName,
            'PDesc' => $PDesc,
            'PPrice' => $PPrice,
            'BName' => $BName
        );
    }
    $stmt->close();
    return ($row);

}

//function for fetching Brands Image ID
function fetchAllBrandImgID(){
    global $mysqli, $db_table_prefix;
    $stmt = $mysqli->prepare(
        "SELECT
		BImgID,
		BName
		FROM " . $db_table_prefix . "brand_info"
    );
    $stmt->execute();
    $stmt->bind_result($BImgID, $BName);
    while ($stmt->fetch()){
        $row[] = array(
            'BImgID' => $BImgID,
            'BName' => $BName
        );
    }
    $stmt->close();
    return ($row);
}



function fetchThisProductDetails($prodID){
    global $mysqli,$db_table_prefix;
    $stmt = $mysqli->prepare("SELECT
		PName,
		PDesc,
		PPrice
		FROM ".$db_table_prefix."product_info
		WHERE
		PID = ?
		LIMIT 1");
    $stmt->bind_param("s", $prodID);
    $stmt->execute();
    $stmt->bind_result($PName, $PDesc, $PPrice);
    $stmt -> execute();
    while ($stmt->fetch()){
        $row = array(
            'PName' => $PName,
            'PDesc' => $PDesc,
            'PPrice' => $PPrice
        );
    }
    $stmt->close();
    return ($row);
}

function updateProductQuantity($pID){

}

//function to add products to cart
function addToCart($pID, $prodQty){
    print "In function";
    //print "this is ". (!is_array($_SESSION['shoppingCart']);

    if(is_array($_SESSION['cart'])){
        print "Inside session exist";
        if(product_exists($pID)) return;
        print "after prod";
        $max=count($_SESSION['cart']);
        print $max;
        $thisproduct = fetchThisProductDetails($pID);
        //$_SESSION['shoppingCart'][$max]['product_code']=$thisproduct['product_code'];
        $_SESSION['cart'][$max]['product_name']=$thisproduct['PName'];
        $_SESSION['cart'][$max]['product_desc']=$thisproduct['PDesc'];
        $_SESSION['cart'][$max]['product_price']=$thisproduct['PPrice'];
        $_SESSION['cart'][$max]['product_code']=$pID;
        $_SESSION['cart'][$max]['qty']=$prodQty;
        $_SESSION['cart'][$max]['count'] = $max;
    }
    else{
        $_SESSION['cart'] = array();
        $thisproduct = fetchThisProductDetails($pID);

        //$_SESSION['shoppingCart'][0]['product_code']=$thisproduct['product_code'];
        $_SESSION['cart'][0]['product_name']=$thisproduct['PName'];
        $_SESSION['cart'][0]['product_desc']=$thisproduct['PDesc'];
        $_SESSION['cart'][0]['product_price']=$thisproduct['PPrice'];
        $_SESSION['cart'][0]['product_code']=$pID;
        $_SESSION['cart'][0]['qty']=$prodQty;
    }
}

//function to check if product already exists in cart

function product_exists($pid){
    $max=count($_SESSION['cart']);
    $productExists=0;
    for($i=0;$i<$max;$i++){
        print "in loop";
        if($pid==$_SESSION['cart'][$i]['product_code']){
            $productExists=1;
            break;
        }
    }
    print "<br>".$productExists;
    return $productExists;
}
?>