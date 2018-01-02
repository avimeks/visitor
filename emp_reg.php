<?php
include('header.php'); 
include('config.php');
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['ph_no'];
$email_id=$_POST['email'];
$al_email=$_POST['aemail'];
$work_time=$_POST['wtime'];
$pas=$_POST['pass'];
$cpas=$_POST['cpass'];
$department=$_POST['dpmt'];
$designation=$_POST['desig'];
$query=mysql_query("INSERT INTO `emp_reg`(`name`, `phno`, `email`, `alemail`,
 `working_time`, `pass`, `cpass`, `dpmt`, `desig`) 
VALUES ('".$name."','".$phone."','".$email_id."','".$al_email."','".$work_time."',
'".$pas."','".$cpas."','".$department."','".$designation."')");
if($query)
{
echo '<script>window.location="emp_reg.php";</script>';
}
else
{
die("Connection error:".mysql_error());
}
}
?>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Visitor Management System</title>
    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
	  <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
	tr,td{
		margin:5px;
		padding:5px;
	}
	</style>
</head>
<body>
<form method="post" action="">
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
				<center>
                    <h1 class="page-header">Employee Registration</h1>
                </div>
				
                <!-- /.col-lg-12 -->
<center>
<table cellspacing="70">
<tr>
<td>
<label>Name</label></td>
<td><input type="text" name="name" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Phone no</label></td>
<td><input type="text" name="ph_no" class="form-control" required></td>
</tr>
<tr>
<td>
<label>E-mail Id</label></td>
<td><input type="email" name="email" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Alternate E-mail Id</label></td>
<td><input type="email" name="aemail" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Working Time</label></td>
<td><input type="time" name="wtime" required>
</td>
</tr>
<tr>
<td>
<label>Password</label></td>
<td><input type="Password" name="pass" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Confirm Password</label></td>
<td><input type="Password" name="cpass" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Deparment</label></td>
<td><input type="text" name="dpmt" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Designation</label></td>
<td><input type="text" name="desig" class="form-control" required></td>
</tr>
<tr>
<td></td><td><input type="submit" name="submit" class="btn btn-primary" value="Register">
<button type="Reset" class="btn btn-primary" >Reset</button></td>
</tr>
</table>
</center>
</div>
</form>

	 <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="vendor/raphael/raphael.min.js"></script>
    <script src="vendor/morrisjs/morris.min.js"></script>
    <script src="data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>
	<!-- DataTables JavaScript -->
    <script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="vendor/datatables-responsive/dataTables.responsive.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>
</html>