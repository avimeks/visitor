<?php
session_start();
include('config.php');
session_destroy();
header('location:emp_login1.php');

?>