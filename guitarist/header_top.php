 <div class="header-top-left">
						<ul>
<?php
  
  
  if (isset($_SESSION['name'])) {
    echo '<li><a href="logout.php">Log Out (' . $_SESSION['name'] . ')</a></li>';
  }
  else {
  
    echo '<li><a href="login.php">Log In</a></li> ';
    echo '<li><a href="register.php">Sign Up</a></li>';
  }

?>

						  
						  
						</ul>
					</div>
<div class="header-top-right">
<form action="search.php" method="post">
							<input type="text" name="search" placeholder=" Search" required="">
							<input type="submit" value=" ">

							<div class="clearfix"> </div>
						</form>
						</div>
						
					
					

				</div>
				
				
				