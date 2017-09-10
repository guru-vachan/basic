<?php
require('includes/config.php');
//echo "jknjrtnkr";
 //$i=$_GET['sid'];
//echo $i;
//die;

			$query="delete from intern where b_id =".$_GET['sid'];
		
			mysqli_query($conn,$query) or die("can't Execute...");
			
			
			header("location:all_intern.php");

?>