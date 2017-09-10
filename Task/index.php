<?php //require('includes/config.php');

ob_start();
session_start();
$conn=mysqli_connect("localhost","root","","Task")or die("Can't Connect...");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div style="padding-bottom: 25px;">
					<div>
							<img src="internship.jpg" alt="Smiley face" width="100%" height="300">
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">Welcome to 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'Internships';
								}
							?>
							</h1>
							
							<?php
												
												//$k=($page_current_page-1)*$page_per_page;
											
												$query1="select *from intern ";
	
												$res=mysqli_query($conn,$query1) or die("Can't Execute Query...");
	
												//$count=0;
												while($row=mysqli_fetch_assoc($res))
												{
														
													echo '
														<a href="detail.php?id='.$row['b_id'].'">
															
														<br> <h1>'.$row['b_nm'].'</h1></a>
														<br>'.$row['b_desc'].'</a>
														<br><h3>Stipend:'.$row['b_price'].'</h3></a>
													';
													//$count++;							
													
													
												}
											?>
							
							
							
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
