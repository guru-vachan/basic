<?php
require_once('startsession.php');
  // Generate the navigation menu
  $name=$_SESSION['name'];
  ?>
<!DOCTYPE html>
<!-- saved from url=(0048)file:///G:/MINOR%20PROJECT/WEBSITE/web/home.html -->
<html class="wf-adventpro-n4-active wf-adventpro-n7-active wf-andika-n4-active wf-active"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>The Guitarist Portal</title>
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="keywords" content="Forward Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="css/styles.css" rel="stylesheet" type="text/css" media="all">
<!-- js -->
<script src="js/jquery.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
	$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
});
});
</script>
<!-- start-smoth-scrolling -->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><link rel="stylesheet" href="./home_files/l" media="all"><script src="./home_files/advent-pro-n7,n4-default" type="text/javascript"></script>
</head>
	<body>
		<!-- header -->
		<div class="header">
			<div class="header-top">
				<!-- container -->
			<div class="container">
				 
					
					<?php include "header_top.php" ?>
					
					<div class="clearfix"> </div>
				</div>

				<!-- //container -->
			</div>
			<div class="header-middle">
				<!-- container -->
				<div class="container">
					<div class="header-middle-logo"><a href="index.php">Guitarist Portal</a>
					
					
					
					</div><div class="clearfix"> </div>
				<!-- //container -->
			</div>
		  <div class="top-nav">
				<!-- container -->
				<div class="container">
					<span class="menu">MENU</span>
					<?php include "user_menu.php" ?>
					<!-- script-for-menu -->
							 <script> 
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							
							</script>
						<!-- /script-for-menu -->
		    </div>
				<!-- //container -->
			</div>
			<div class="blue"> </div>
		</div>
		<!-- //header -->
		<!-- article -->
		<div class="article">
			<!-- container -->
		  <?php include "profile_pic.php" ?> </div>
<div style="padding:10px;" class="about-left pro_col1">
<fieldset>

 
<!---navigation-bar starts-->
<nav style="max-width:1000px" class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a class="navbar-brand" href="#">
	  <?php include_once "db_config.php";
$name=$_SESSION['name'];

$sql = mysql_query("select * from user where email='$name'");
while ($row = mysql_fetch_assoc($sql))
{

$uname=$row['uname'];
$pic=$row['pic'];
}
echo $uname;
?></a></div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="inverseNavbar1">
     <?php include "navmenu.php" ?>
      <form class="navbar-form navbar-right" role="search">

      </form>
      
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<!---navigation-bar ends-->

		  </div>

<div class="clearfix"> </div>
	</div>
    <br><br>
<br><br>
 <?php include_once "db_config.php";
$name=$_SESSION['name'];

$sql = mysql_query("select * from user where email='$name'");
while ($row = mysql_fetch_assoc($sql))
{

$uname=$row['uname'];
$email=$row['email'];
$mob=$row['mob'];
$gender=$row['gender'];
$city=$row['city'];
$instrument=$row['instrument'];
$address=$row['address'];
}

?>
<div class="container">
				<div class="match-table">
					<div class="table-rows">
						<div class="table-hedding">
						  <h3>Personal Details</h3>
						</div>
						<div class="table-row">
							<div class="t-match">
								<div class="col-md-4 table-address">
									<div class="list-hedding">
									  <h4>Name</h4>
									</div>
									<ul>
										<li><?php echo $uname;?></li>
										<li> </li>
										</ul>
								</div>
<div class="col-md-4 table-address">
  <div class="list-hedding">
    <h4>Email</h4>
  </div>
  <ul>
    <li><?php echo $email;?></li>
    <li> </li>
  </ul>
</div>
<div class="col-md-4 table-address">
  <div class="list-hedding">
    <h4>Mobile Numcer</h4>
  </div>
  <ul>
    <li><?php echo $mob;?></li>
    <li> </li></ul>
</div>
								<div class="clearfix"> </div>
							</div>
							<div class="t-match">
<div class="col-md-4 table-address">
			  <div class="list-hedding">
			    <h4>Instrument</h4>
			  </div>
								  <ul>
								    <li><?php echo $instrument;?></li>
								    <li> </li>
							      </ul>
							  </div>
<div class="col-md-4 table-address">
			  <div class="list-hedding">
			    <h4>City</h4>
			  </div>
								  <ul>
								    <li><?php echo $city;?></li>
								    <li> </li>
							      </ul>
							  </div>
<div class="col-md-4 table-address">
			    <div class="list-hedding">
			      <h4>Address</h4>
			    </div>
								  <ul>
								    <li><?php echo $address;?></li>
								    <li> </li>
							      </ul>
							  </div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
					<div class="table-rows">
						<div class="table-hedding" style="margin-top:40px;">
						  <h3>Media Content</h3>
						</div>
						<div class="table-row">

<div class="col-md-4 table-address">
			  <div class="list-hedding">
			    <h4>Videos</h4>
			  </div>
			
															<?php


include('db_config.php');

$result= mysql_query("SELECT COUNT(vid_id) AS vid_id FROM videos where user_id='$name'");

while($row = mysql_fetch_array($result))
{
 $vid_id=$row['vid_id'];
?>
								  <ul>
								    <li>Total Videos : <?php echo $vid_id;?> </li>
								   
							      </ul>
								  <?php } ?>
							  </div>
<div class="col-md-4 table-address">
			  <div class="list-hedding">
			    <h4>Audios</h4>
			  </div>
	<?php


include('db_config.php');

$result= mysql_query("SELECT COUNT(aud_id) AS aud_id FROM audio where user_id='$name'");

while($row = mysql_fetch_array($result))
{
 $audio_id=$row['aud_id'];
?>							  <ul>
								    <li>Total Audios : <?php echo $audio_id;?> </li>
								   
							      </ul>
								  <?php } ?>
							  </div>
<div class="col-md-4 table-address">
  <div class="list-hedding">
    <h4>Photos</h4>
  </div>
<?php


include('db_config.php');

$result= mysql_query("SELECT COUNT(pic_id) AS pic_id FROM photos where user_id='$name'");

while($row = mysql_fetch_array($result))
{
 $pic_id=$row['pic_id'];
?>							  <ul>
								    <li>Total Photos : <?php echo $pic_id;?> </li>
								   
							      </ul>
								  <?php } ?>
</div>
<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>	
			</div>
<br>

		<!-- footer -->
		<?php  include "footer.php" ?>
		<!-- //footer -->
		<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
									<a href="index.php#" id="toTop" style="display: none;"><span id="toTopHover"></span> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- content-Get-in-touch -->
	</div>
<a href="index.php#" id="toTop">To Top</a></body></html>
