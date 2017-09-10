<?php 
session_start();
$_SESSION['data']=$_POST[data];
header('location:class1.php');

?>
