<?php
include('config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysql_query("update emp_reg set status=0 where id='$id'");
	if($query)
	{
		header('location:emp_list.php');
	}
}
?>