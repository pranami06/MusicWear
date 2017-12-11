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
            //destroySession("ThisUser");
            return false;
        }
    }
}
function createNewUser($username, $firstname, $lastname, $email, $password){

}
?>