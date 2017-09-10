<?php

 $con = mysql_connect("mysql.googiehost.com","u623865343_admin","12lion90");
 // if database is not found.
 $query=mysql_query("SET CHARACTER SET utf8") or die('Cannot select CHARACTER SET utf8: ' . mysql_error());
 // selection of database.
mysql_select_db("u623865343_data",$con);
?>