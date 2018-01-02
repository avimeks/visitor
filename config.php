<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "visitordb";
$con = mysql_connect($hostname,$username,$password);
mysql_select_db($database ,$con);
?>