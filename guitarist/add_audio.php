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
		<?php include "profile_pic.php" ?>
  </div>
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
      
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<!---navigation-bar ends-->

		  </div>

<div class="clearfix"> </div>
	</div>
 
<div class="container">		
<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="add_audio_process.php" method="post" enctype="multipart/form-data">
				<div class="formtitle">Add Audio.</div>
				<!----------start top_section----------->
				<div class="top_section">
					<div class="section">
						<div class="input-sign details">
							<input type="email" name="email" placeholder="Email" readonly value="<?php echo $name;?>"  required />
							
						</div>
						<div class="input password">
							<input type="text" name="title" placeholder="Title" required/>
						</div>
						<div class="clear"> </div>
					</div>
					
				</div>
				<br>
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					
					<div class="section">
						<div class="input-sign details">
							<input type="text"  name="comment" placeholder="Comment" required/> 
						</div>
						<div class="input-sign details">
						<input type="text"  name="rdate" placeholder="Date" readonly value="<?php echo date("Y/m/d"); ?>" required/>
						</div>
						
						
						
						
						
						<div class="clear"> </div>
					</div>
					</div>	
					<div class="input-sign email">
							Upload audio :<input id="file" type="file" name="data_file"   />
						</div>
					<div class="submit">
						<input class="bluebutton submitbotton" name="regbtn" type="submit" value="Submit" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div>
		
  </div>

<?php include_once "db_config.php";
$name=$_SESSION['name'];

$sql = mysql_query("select * from audio where user_id='$name'");
while ($row = mysql_fetch_assoc($sql))
{

$title=$row['title'];
$audio=$row['audio'];
$comment=$row['comment'];
$rdate=$row['rdate'];

echo '<div class="container">
<div class="row">
<div class="col-lg-12">
<div>
<div class="col-lg-7">
<h3>'.$title.'</h3>
<audio style="margin-left:110px;" controls>
  <source src="'.$audio.'" style="height:350px" type="audio/mpeg"></source></audio>
<h3></h3>
</div>
<div class="col-lg-5">
<h3><br></h3> 
<div class="about-right-info">
<h4>Posted on -'.$rdate.'</h4>
<h3></h3>		  
</div>'.$comment.'<h3></h3>	
</div>
<div class="clearfix"> </div>
</div></div>
';

 }

?>
</div>

</div>

		<!-- //contact -->
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
	