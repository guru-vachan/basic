<?php
require_once('startsession.php');
  // Generate the navigation menu
  
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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
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
					<?php include "home_menu.php" ?>
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
<div class="container">		
<div class="sign_up">
			<!----------start form----------->
			<form class="sign" action="register_process.php" method="post" enctype="multipart/form-data">
				<div class="formtitle">Sign Up-It's free.</div>
				<!----------start top_section----------->
				<div class="top_section">
					<div class="section">
						<div class="input username">
							<input type="text"  name="uname" placeholder="User Name"  required/> <span><img src="images/select.png"/> </span>
							
						</div>
						<div class="input password">
							<input type="password" name="pwd" placeholder="Password" required/><span><img src="images/close.png"/></span>
						</div>
						<div class="clear"> </div>
					</div>
					<div class="section">
						<div class="input-sign email">
							<input type="email" name="email" placeholder="Email"  required /> 
						</div>
						
						
						
						<div class="clear"> </div>
					</div>
				</div>
				<!----------end top_section----------->
				<!----------start personal Details----------->
				<!----------start bottom-section----------->
				<div class="bottom-section">
					<div class="title">Personal Details</div>
					<!----------start name section----------->
					<div class="section">
						<div class="input-sign email">
							<input type="text" name="mob" placeholder="Contact number" maxlength="10"  required /> 
						</div>
						
						<div class="clear"> </div>
					</div>
					
						
						<div class="input-sign details">
							<input type="text" name="gender" placeholder="Gender" required/> 
						</div>
						
						<div class="clear"> </div>
					</div>
					<!----------start city section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text" name="city" placeholder="City" required/> 
						</div>
						<div class="input-sign details">
							<input type="text"  name="instrument" placeholder="Instrument" required/> 
						</div>
						
						<div class="clear"> </div>
					</div>
					<!----------start Address section----------->
					<div class="section">
						<div class="input-sign details">
							<input type="text"  name="address" placeholder="Address" required/> 
						</div>
						<div class="input-sign details">
						Upload pic :<input id="file" type="file" name="data_file"   />
						</div>
						<div class="clear"> </div>
					</div>
					
					<div class="submit">
						<input class="bluebutton submitbotton" name="regbtn" type="submit" value="Sign up" />
					</div>
				</div>
				<!----------end bottom-section----------->
			</form>
			<!----------end form----------->
		</div>
		
  </div>
   
 </div>    
		</br></br>
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