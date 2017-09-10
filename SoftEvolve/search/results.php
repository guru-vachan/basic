<!DOCTYPE html>
<?php
include("config.php");

?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>SoftEvolve</title>
    
    
    
    
        <link rel="stylesheet" href="css/style1.css">

    
    
    
  </head>

  <body>

    <body>
	
	<header>

		<nav>

			<a href="index.html"><h1>SoftEvolve</h1></a>
			
		
             	

		</nav>

	</header>
              
        
     
    
     <div class="filter">

		<div class="categoryContainer">

			<h2>SRS DOC</h2>
			
			<ul class="filterButtons">
				<li>Home</li>
				<li>About Us</li>
				<li>Blog</li>
				
			</ul>

		</div>

	</div> <!-- End filter div -->

	

    	
<div class="main">

			<div class="product cat">
    
     <div class="productDetails">

     
     <div class="row">
     
     <?php
	 
	 if(isset($_GET['search']))
	 {
     $search_query=$_GET['term'];
		
	 $get_srs="select * from srst where key1 like '%$search_query%' ";
 
 $run_srs=mysql_query($get_srs);

while($row_srs=mysql_fetch_array($run_srs))
{
	$id1=$row_srs['id'];
	
	$title=$row_srs['name'];
	
	$image1=$row_srs['photo'];
	$link1 = $row_srs['link'];

echo 
	" 
	  <img src='images/$image1' width='300px' height='300px'>
	
	  <h4>$title</h4>
	 <p>Click On GET SRS to open file</p>
	  
<h6><a href='$link1' target='_blank' >GET SRS</a></h6>
  <hr>
	";

}

	 }
	 
	 ?>
   </div>
</div> <!-- End product -->
</div>  </div>


</div>

     
    
  

</body>
<footer>
		<hr>
		<div class="copyright">&copy;SoftEvole</div>
<hr>
	</footer>
	

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    
        <script src="js/index1.js"></script>
</html>