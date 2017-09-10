  <div style="width:240px; height:220px; padding-left:10px; padding-right:30px;" class="col-md-4 about-left">
         <?php include_once "db_config.php";
$name=$_SESSION['name'];

$sql = mysql_query("select * from user where email='$name'");
while ($row = mysql_fetch_assoc($sql))
{

$uname=$row['uname'];
$pic=$row['pic'];
}
echo 
 '<img style="height:200px; width:200px;" src="'.$pic.'" class="img-circle img-responsive" alt="Placeholder image">';?>
 <div class="submit"><form  action="change_pic_process.php" method="post" enctype="multipart/form-data">
 <input type="hidden" name="email" placeholder="email"value="<?php echo $name; ?>"  required/>
 Change Profile pic :<input id="file" type="file" name="data_file"   />
						<input class="bluebutton submitbotton" name="regbtn" type="submit" value="Change photo" />
						</form>
					</div>