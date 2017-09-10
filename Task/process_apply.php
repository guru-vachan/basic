<?php //session_start();
		//echo "rfre";
		require('includes/config.php');
		//add item
		 $b_id = $_GET['b_id'];
		 $emp_id = $_GET['emp_id'];
		 $u_id = $_GET['u_id'];
		//echo $b_id ;
		//echo $u_id ;
		//die();
		$query="insert into dashboard(emp_id,u_id,b_id)
			values('$emp_id','$u_id','$b_id')";
			
		
		$bad=mysqli_query($conn,$query) ;
		if($bad){
			echo "<script>
				alert('Apply Successfully');
				window.location.href='index.php';
				</script>";

			
			//header("location: index.php");
		}
		else
		{
		
		
		echo '<h4>You have already applied for it there are many more options to avail here.</h3>
				<img src="ninja.jpg" alt="Smiley face">' ;
		
		}
		
?>