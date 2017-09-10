<?php 
session_start();
$_SESSION['data']=$_POST[data];
header('location:s1.php');

?>
