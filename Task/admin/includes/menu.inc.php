<ul>
			<li class="current_page_item"><a href="index.php">Dashboard</a></li>
			<li><a href="category.php">Category</a></li>
			<li><a href="subcategory.php">Sub_Category</a></li>
			<li><a href="all_intern.php">Interns</a></li>
			<li class="last"><a href="#">Contact</a></li>
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
				else
				{
					echo '<li><a href="../logout.php">Logout</a></li>';
				}
			?>
			
		</ul>