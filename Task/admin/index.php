<?php //session_start();

	require('includes/config.php');
//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
//die;

	if(!(isset($_SESSION['status'])&& $_SESSION['type']==1))
	{
		//header("location:../index.php");
	}
	
	$id = isset($_SESSION['u_id'])?$_SESSION['u_id']:'';
	
	$query1="select *from dashboard where emp_id=$id";
	
	$res=mysqli_query($conn,$query1) or die("Can't Execute Query...");

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

<!-- end header -->
<!-- start page -->

<div id="page">
	<!-- start content -->
	<div id="content">
		<div class="post">
			<h1 class="title">Welcome to Admin .....</h1>
			<div class="entry">
				<?php
				
						
												
												
												while($row=mysqli_fetch_assoc($res))
												{
														
												echo '<table border="0"  width="100%" bgcolor="#ffffff">
												
											
												
													
														
															<tr valign="top">
																<td align="right" width="10%">Intern Id</td>
																<td width="6%">: </td>
																<td align="left">'.$row['b_id'].'</td>
															
																<td align="right">User_id</td>
																<td>: </td>
																<td align="left">'.$row['u_id'].'</td>
																
															</tr>											
															
															
															
															
															
															
														</table>';
						
												}?>
			</div>
			
		</div>
		
	</div>
	<!-- end content -->
	<!-- start sidebar -->
	
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
