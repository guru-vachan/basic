<?php
$con = mysql_connect('localhost','root','');
if($con){
//echo 'connect';
}else{
echo mysql_error();
}
mysql_select_db('myself',$con);
?>