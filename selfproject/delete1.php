<?php
include('index1.php');
$id=$_GET['id'];
$execsql=mysql_query("delete from exam where id=".(int)$id);
if(execsql)
{
 header("LOCATION:list.php");
 }
 else
 {
  echo "operation failed";
  }
?>