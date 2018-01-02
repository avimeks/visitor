<?php
include('config.php');
if(isset($_POST['vid']))
{
	$vid=$_POST['vid'];
	{
		$q=mysql_query("update vis_reg set status=0 where id='$vid'");
		echo "checkout success";
	}
	}

?>