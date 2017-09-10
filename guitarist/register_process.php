<?php
include('db_config.php');


if(isset($_POST['regbtn']))
{
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];
$mob=$_POST['mob'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$instrument=$_POST['instrument'];
$address=$_POST['address'];
$file=$_FILES['data_file']['name'];
$target_path = "upload/".$file;
 
$sql="INSERT INTO user(uname,pwd, email, mob, gender, city,instrument,address,pic )VALUES ('$uname','$pwd','$email','$mob','$gender','$city','$instrument','$address','$target_path')";
$result=mysql_query($sql);
if($sql)
{
$run = move_uploaded_file($_FILES['data_file']['tmp_name'],$target_path);
echo "<script>alert('Registered successfully')</script>";
echo '<script>window.location="login.php"</script>';
}
}

?>

