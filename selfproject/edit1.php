<?php
include('index1.php');
if(isset($_GET['id'])){
$id=$_GET['id'];

//echo($id);
$sql = mysql_query("SELECT * FROM `exam` WHERE `id` =".(int)$id);
$row = mysql_fetch_array($sql,MYSQL_ASSOC);

	/* echo '<pre>';
	print_r($row);  */
	$mchecked = '';
	$fchecked = '';
	if($row['sex']=='male'){
	$mchecked = "checked ='checked'";
	}else{
	$fchecked = "checked ='checked'";
	}
}
if($_POST){
  
   $update=$_POST['id'];
   
    //print($update); die;
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$email = $_POST['Email'];
	$password = $_POST['pwd'];
	$Iclass=$_POST['iclass'];
	$subject=$_POST['subject'];
	$percentage=$_POST['per'];
	$sex = $_POST['sex'];
	if(isset($_FILES['file']['name']) && $_FILES['file']['name']!='')
	{
		//echo getExtension($_FILES['file']['name']);die;
		$file = pathinfo($_FILES['file']['name']);
		$filename = $file['filename'].time(); 
		$extension = $file['extension']; 
		$filename = $filename.'.'.$extension; 
		if(move_uploaded_file($_FILES["file"]["tmp_name"], "profile/" . $filename)){
		@unlink("profile/" . $_POST['previous_profile']);
			$profile = $filename;
	  }
	  }
	$register_date = date('Y-m-d H:i:s');
	
$execsql=mysql_query("UPDATE exam SET `fname`='".$fname."',`lname`='".$lname."',`email`='".$email."',`password`='".$password."',`iclass`=".$Iclass.",`subject`='".$subject."',`percentage`=".$percentage.",`sex`='".$sex."',`register_date`='".$register_date."' where id=".(int)$update);
if($execsql)
 {
 header("Location:list.php");
 }
 else
 {
  echo "operation failed";
  }
 
}
  ?>
<html>
<head>
<title>signIn</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $id;?>"/>
FirstName:<input type="text" name="fname" value="<?php echo $row['fname'];?>"/> &nbsp LastName:<input type="text" name="lname"value="<?php echo $row['lname'];?>"/><br/><br/>
Email:<input type="text" name="Email" value="<?php echo $row['email'];?>"/><br/><br/>

<fieldset>
  <legend>Acedmic_Information:</legend>
  Class:<input type="text" name="iclass" size="20" value="<?php echo $row['iclass'];?>"/><br/>
  Subject:<select name="subject">
            <option value="Math">Math</option>
			<option  value="biology">Biology</option>
			<option  value="Art"> Art</option>
			</select><br/>
  Percentage:<input type="text" name="per" value="<?php echo $row['percentage'];?>"/>
  </fieldset>
   Sex: <input type="radio" name="sex" value="male" <?php echo $mchecked;?>/>Male
    <input type="radio" name="sex" value="female"  <?php echo $fchecked;?>/>Female<br/><br/><br/>
   <?php if(isset($row['file']) && $row['file']!=NULL){ ?>
	<img src="profile/<?php echo $row['file'];?>" alt="profile" width="100" height="100"/><br/></br/>
	<input type="hidden" name="previous_profile" value="<?php echo $row['file'];?>"/>
	<?php }?>
	<input type="file" name="file"/>
  <input type="submit" value="submit"/>
  </form>
  </body>
  </html>