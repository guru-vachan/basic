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

<link rel="stylesheet" type="text/css" href="chatfiles/chatstyle.css" />
<script type="text/javascript" src="chatfiles/chatfunctions.js"></script>
<style type="text/css" media="screen">
			.chat_time {
				font-style: italic;
				font-size: 9px;
			}
		</style>
		<script language="JavaScript" type="text/javascript">
			var sendReq = getXmlHttpRequestObject();
			var receiveReq = getXmlHttpRequestObject();
			var lastMessage = 0;
			var mTimer;
			//Function for initializating the page.
			function startChat() {
				//Set the focus to the Message Box.
				document.getElementById('txt_message').focus();
				//Start Recieving Messages.
				getChatText();
			}		
			//Gets the browser specific XmlHttpRequest Object
			function getXmlHttpRequestObject() {
				if (window.XMLHttpRequest) {
					return new XMLHttpRequest();
				} else if(window.ActiveXObject) {
					return new ActiveXObject("Microsoft.XMLHTTP");
				} else {
					document.getElementById('p_status').innerHTML = 'Status: Cound not create XmlHttpRequest Object.  Consider upgrading your browser.';
				}
			}
			
			//Gets the current messages from the server
			function getChatText() {
				if (receiveReq.readyState == 4 || receiveReq.readyState == 0) {
					receiveReq.open("GET", 'getChat.php?chat=1&last=' + lastMessage, true);
					receiveReq.onreadystatechange = handleReceiveChat; 
					receiveReq.send(null);
				}			
			}
			//Add a message to the chat server.
			function sendChatText() {
				if(document.getElementById('txt_message').value == '') {
					alert("You have not entered a message");
					return;
				}
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastMessage, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleSendChat; 
					var param = 'message=' + document.getElementById('txt_message').value;
					//param = 'id=' + document.getElementById('id').value;
					param += '&name=<?php echo $name ?>';
					param += '&chat=1';
					
					sendReq.send(param);
					document.getElementById('txt_message').value = '';
					
				}							
			}
			//When our message has been sent, update our page.
			function handleSendChat() {
				//Clear out the existing timer so we don't have 
				//multiple timer instances running.
				clearInterval(mTimer);
				getChatText();
			}
			//Function for handling the return of chat text
			function handleReceiveChat() {
				if (receiveReq.readyState == 4) {
					var chat_div = document.getElementById('div_chat');
					var xmldoc = receiveReq.responseXML;
					var message_nodes = xmldoc.getElementsByTagName("message"); 
					var n_messages = message_nodes.length
					for (i = 0; i < n_messages; i++) {
						var user_node = message_nodes[i].getElementsByTagName("user");
						var text_node = message_nodes[i].getElementsByTagName("text");
						var time_node = message_nodes[i].getElementsByTagName("time");
						chat_div.innerHTML += user_node[0].firstChild.nodeValue + '&nbsp;';
						chat_div.innerHTML += '<font class="chat_time">' + time_node[0].firstChild.nodeValue + '</font><br />';
						chat_div.innerHTML += text_node[0].firstChild.nodeValue + '<br />';
						chat_div.scrollTop = chat_div.scrollHeight;
						lastMessage = (message_nodes[i].getAttribute('id'));
					}
					mTimer = setTimeout('getChatText();',2000); //Refresh our chat in 2 seconds
				}
			}
			//This functions handles when the user presses enter.  Instead of submitting the form, we
			//send a new message to the server and return false.
			function blockSubmit() {
				sendChatText();
				return false;
			}
			//This cleans out the database so we can start a new chat session.
			function resetChat() {
				if (sendReq.readyState == 4 || sendReq.readyState == 0) {
					sendReq.open("POST", 'getChat.php?chat=1&last=' + lastMessage, true);
					sendReq.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
					sendReq.onreadystatechange = handleResetChat; 
					var param = 'action=reset';
					sendReq.send(param);
					document.getElementById('txt_message').value = '';
				}							
			}
			//This function handles the response after the page has been refreshed.
			function handleResetChat() {
				document.getElementById('div_chat').innerHTML = '';
				getChatText();
			}	
		</script>
<!-- start-smoth-scrolling -->
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.--><script>var __adobewebfontsappname__="dreamweaver"</script><link rel="stylesheet" href="./home_files/l" media="all"><script src="./home_files/advent-pro-n7,n4-default" type="text/javascript"></script>
</head>
	<body onLoad="javascript:startChat();">
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
<div id="chatarea">
		<p>Welcome <?php echo $name ;?></p>
		<p><a href="logout.php"> Sign out</a></p>
        <div id="chatrooms">
		
		
		</div>
 <div id="chatwindow">
 	
	
	<div id="div_chat" style="overflow: auto;" >
	
</div>


	 <div id="chatusers"><h2>Online users</h2>
		<form action="" method="post"> 
								  <p> <select id="chat_to" name="chat_to">
    								<option>--SelectID--</option>
									<?php include('db_config.php');
   									 $query = mysql_query("SELECT * from user");
										while($row = mysql_fetch_array($query)){?>
										<option>
										<?php echo $row['email'];
										$cemail = $row['email'];
										
										
										?></option>
										
										<?php }
										?>
										
									</select></p>
								  <input name="submit" type="submit" id="submit2" value="    Select ID   " />
	   </form>
	</div>
 </div>

		
							
		<form id="frmmain" name="frmmain" onSubmit="return blockSubmit();">
		  <p>
		    <?php
						  
						   $chat_to= $_POST['chat_to'];
						   
						   $_SESSION['id'] = $chat_to;
						   ?>
		    
		    <input type="text" readonly  name="id" value="<?php echo "$chat_to";?>"/> 					
	          <input type="button" name="btn_get_chat" id="btn_get_chat" value="Refresh Chat" onClick="javascript:getChatText();" />
	          <input type="button" name="btn_reset_chat" id="btn_reset_chat" value="Reset Chat" onClick="javascript:resetChat();" />
		    <br />
		  <div>
  <div>
  <?php
  $alink = (CHATLINK === 1) ? '<img src="chatex/url.png" alt="URL" title="Link" onclick="setUrl(\'txt_message\');" />' : '';
?>
  <img src="chatex/bold.png" alt="B" onclick="addChatBIU('[b]','[/b]', 'txt_message');" />
  <img src="chatex/italic.png" alt="I" onclick="addChatBIU('[i]','[/i]', 'txt_message');" />
  <img src="chatex/underline.png" alt="U" onclick="addChatBIU('[u]','[/u]', 'txt_message');" />
  <?php echo $alink; ?>
 &nbsp;&nbsp; 
  <img src="chatex/0.gif" alt=":)" title=":)" onclick="addSmile(':)', 'txt_message');" />
  <img src="chatex/1.gif" alt=":(" title=":(" onclick="addSmile(':(', 'txt_message');" />
  <img src="chatex/2.gif" alt=":P" title=":P" onclick="addSmile(':P', 'txt_message');" />
  <img src="chatex/3.gif" alt=":D" title=":D" onclick="addSmile(':D', 'txt_message');" />
  <img src="chatex/4.gif" alt=":S" title=":S" onclick="addSmile(':S', 'txt_message');" />
  <img src="chatex/5.gif" alt=":O" title=":O" onclick="addSmile(':O', 'txt_message');" />
  <img src="chatex/6.gif" alt=":=)" title=":=)" onclick="addSmile(':=)', 'txt_message');" />
  <img src="chatex/7.gif" alt=":|H" title=":|H" onclick="addSmile(':|H', 'txt_message');" />
  <img src="chatex/8.gif" alt=":X" title=":X" onclick="addSmile(':X', 'txt_message');" />
  <img src="chatex/9.gif" alt=":-*" title=":-*" onclick="addSmile(':-*', 'txt_message');" /></div>
  
  
 </div>
	          <input type="text" id="txt_message" name="txt_message" style="width: 447px;" />
  <input type="button" name="btn_send_chat" id="btn_send_chat" value="Send" onClick="javascript:sendChatText();" /></form>
	          
	      </p>
		  
		

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
	