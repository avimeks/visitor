<?php
include('config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$query=mysql_query("update vis_reg set status=0 where id='$id'");
	if($query)
	{
		echo '<script>window.location="checkin.php";</script>';
	}
}
?>