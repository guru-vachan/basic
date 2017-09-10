<?php 
session_start();
$_SESSION['data']=$_POST[data];
header('location:activity1.php');

?>
