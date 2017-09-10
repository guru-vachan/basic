<?php
include("index1.php");
$sql=mysql_query('select *from exam'); 
?>
<html>
<head>
<title>list</title>
</head>
<a href="registration.php">NEW USER</a></br>
<table width=100% border="1">
   <tr>
      <th>ID</th>
      <th>FNAME</th>
      <th>LNAME</th>
      <th>EMAIL</th>
      <th>PASSWORD</th>
      <th>ICLASS</th>
      <th>SUBJECT</th>
      <th>PERCENTAGE</th>
      <th>SEX</th>
      <th>R_DATE</th>
	  <th>ACTION</th>
	</tr>
<?php	
	while($row=mysql_fetch_array($sql,MYSQL_ASSOC))
{?>
     <tr>
       <td><?php echo $row['id']; ?></td>	
       <td><?php echo $row['fname']; ?></td>	
       <td><?php echo $row['lname']; ?></td>	
       <td><?php echo $row['email']; ?></td>	
       <td><?php echo $row['password']; ?></td>	
       <td><?php echo $row['iclass']; ?></td>	
       <td><?php echo $row['subject']; ?></td>	
       <td><?php echo $row['percentage']; ?></td>	
       <td><?php echo $row['sex']; ?></td>	
       <td><?php echo $row['register_date']; ?></td>	
	   <td><a href= "edit1.php?id=<?php echo $row['id']; ?>">EDIT  &nbsp; <a href= "delete1.php?id=<?php echo $row['id']; ?>">DELETE </td>
	   
	   
	 </tr>
<?php
}?>	 
</table>
</html>