<?
 /* echo '<pre>';
print_r($_SERVER);die;  */
 include('index1.php');
if($_POST){
    
	/* echo '<pre>';
	print_r ($_FILES); */
   
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['Email'];
	$password = $_POST['pwd'];
	$Iclass=$_POST['iclass'];
	$subject=$_POST['subject'];
	$percentage=$_POST['per'];
	$sex = $_POST['sex'];
	$register_date = date('Y-m-d H:i:s');
	if(isset($_FILES['photo']['name'])&&$_FILES['photo']['name']!="")
	{
	$photo=pathinfo($_FILES['photo']['name']);
	$name=$photo['filname'].time();
	$extansion=$photo['extansion'];
	$name=$name.".".$extansion;
   }	
    $sql ="INSERT INTO `exam`(`fname`, `lname`, `email`, `password`, `iclass`, `subject`, `percentage`, `sex`,`file`,`register_date`) VALUES ('".$fname."','".$lname."','".$email."','".$password."',".$Iclass.",'".$subject."',".$percentage.",'".$sex."','".$name."','".$register_date."')";
	//echo $sql;die;
	$execsql = mysql_query($sql);
	
 if($execsql){
 // echo 'Record insert successfully';
   header("location:list.php");
  }
 else
 {
  echo "Record insert unsuccessfully.";
 }
	}
?>
<html>
<head>
<title>signIn</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">

FirstName:<input type="text" name="fname"> &nbsp LastName:<input type="text" name="lname"><br/><br/>
Email:<input type="text" name="Email"><br/><br/>
Password:<input type="password" name="pwd"><br/><br/>
<fieldset>
  <legend>Acedmic_Information:</legend>
  Class:<input type="text" name="iclass" size="20"/><br/>
  Subject:<select name="subject">
            <option value="Math">Math</option>
			<option  value="biology">Biology</option>
			<option  value="Art"> Art</option>
			</select><br/>
  Percentage:<input type="text" name="per">
  </fieldset>
  Sex:<input type="radio" name="sex" value="male">Male<br/>
     &nbsp &nbsp &nbsp       <input type="radio" name="sex" value="Female">Female<br/>
 <input type="file" name="photo"/>
  <input type="submit" value="submit">
  </form>
  </body>
  </html>