<?php
include('db_config.php');


if(isset($_POST['regbtn']))
{

$email=$_POST['email'];

$file=$_FILES['data_file']['name'];
$target_path = "upload/".$file;
 
$sql = "UPDATE user SET pic='$target_path' WHERE email='$email'";
$res = @mysql_query($sql,$connection) or die(mysql_error());
echo $sql;
if($res==1)
{
$run = move_uploaded_file($_FILES['data_file']['tmp_name'],$target_path);
echo "<script>alert('Updated successfully')</script>";
echo '<script>window.location="user_home.php"</script>';
}
}

?>

