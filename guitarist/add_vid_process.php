<?php
include('db_config.php');


if(isset($_POST['regbtn']))
{

$email=$_POST['email'];
$title=$_POST['title'];
$comment=$_POST['comment'];
$rdate=$_POST['rdate'];
$file=$_FILES['data_file']['name'];
$target_path = "upload/".$file;
 
$sql="INSERT INTO videos(user_id,vid,title,comment,rdate)VALUES ('$email','$target_path','$title','$comment','$rdate')";
$result=mysql_query($sql);
echo $sql;
if($sql)
{
$run = move_uploaded_file($_FILES['data_file']['tmp_name'],$target_path);

echo "<script>alert('Registered successfully')</script>";
echo '<script>window.location="add_video.php"</script>';
}
}

?>

