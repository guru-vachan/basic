<?php 
//print_r($_SESSION['unm']); die();

//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>'; 

//echo $_SESSION['uid'];
//die;
require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="No such User";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Password Incorrect........";
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
			
			
	
			
			$unm=$_POST['usernm'];
			
			$q="select * from user where u_unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("wrong query");
			
			$row=mysqli_fetch_assoc($res);
			//echo "dcdwc";
			//$_SESSION
			if(!empty($row))
			{
				//echo "hii";
				if($_POST['pwd']==$row['u_pwd'])
				{
					//echo "h2";
					$_SESSION=array();
					//print_r($_SESSION['0']); die();
					$_SESSION['unm']=$row['u_unm'];
					$_SESSION['uid']=$row['u_pwd'];
					$_SESSION['type']=$row['Type'];
					$_SESSION['u_id']=$row['u_id'];
					//echo "h3";
					//print_r ($_SESSION['type']) ; 
					$_SESSION['status']=true;
					
					//echo '<pre>' . print_r($_SESSION, TRUE) . '</pre>';
					if($_SESSION['type']==0){
						//echo "hello";
						header("location:index.php");
					}
					else{
						//echo "hello1";
						header("location:admin/index.php");
					}
					
					
					
					
					
				}
				
				else
				{
					echo 'Incorrect Password....';
				}
			}
			else
			{
				echo 'Invalid User';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>