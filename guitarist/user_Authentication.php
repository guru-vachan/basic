<?php

ob_start();

include('db_config.php');
session_start();


$User_Name = $_POST['email'];
$Password = $_POST['pwd'];


    $result = mysql_query("select * from user where email='$User_Name' and pwd='$Password'");

    if ($row == mysql_fetch_array($result)) {
	

        header("location:index.php");
    } else  {
        $_SESSION['name'] = $User_Name;
        header("location:user_home.php");
    }
	
 

?>