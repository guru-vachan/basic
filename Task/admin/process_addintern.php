<?php
require('includes/config.php');


//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; 

//echo $_SESSION['uid'];
//die;
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['name']) || empty($_POST['description']) || empty($_POST['publisher']) || empty($_POST['price']))
		{
			$msg[]="Please full fill all requirement";
		}
		if(!(is_numeric($_POST['price'])))
		{
			$msg[]="Price must be in Numeric  Format...";
		}
		
		
		
		
		
		
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
			
		
			$b_nm=$_POST['name'];
			$b_cat=$_POST['cat'];
			
			$u_id = isset($_SESSION['u_id'])?$_SESSION['u_id']:'';
			//print_r ($_SESSION['u_id']);die();
			//echo $u_id;die();
			//$u_id=$_POST['u_id'];
			$b_desc=$_POST['description'];
			//$b_edition=$_POST['edition'];
			$b_publisher=$_POST['publisher'];			
		//	$b_isbn=$_POST['isbn'];
			//$b_pages=$_POST['pages'];
			$b_price=$_POST['price'];
			
			
		
			
			$query="insert into intern(u_id,b_nm,b_subcat,b_desc,b_publisher,b_price)
			values('$u_id','$b_nm','$b_cat','$b_desc','$b_publisher',$b_price)";
			
			mysqli_query($conn,$query) or die($query."Can't Connect to Query...");
			header("location:addintern.php");
		
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	