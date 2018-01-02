<?php
include('config.php');
if(isset($_POST['vid']))
{
	$vid=$_POST['vid'];
	{
		$q=mysql_query("update vis_reg set status=1 where id='$vid'");
		echo "checkin success";
	}
	}

?>