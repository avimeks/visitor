<?php
include('header.php'); 
include('config.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$gender=$_POST['gender'];
$phone=$_POST['pno'];
$email_id=$_POST['email'];
$al_email=$_POST['aemail'];
$em_name=$_POST['ename'];
$pas=$_POST['pass'];
$cpas=$_POST['cpass'];
$material=$_POST['mat'];
$vis_from=$_POST['vfrom'];
$adds=$_POST['addr'];
$query=mysql_query("UPDATE `vis_reg`(`name`, `gender`, `phone_no`, `email_id`, `alt_email`, 
`emp_name`, `pass`, `cpass`, `material`, `visitor_from`, `address`)
VALUES ('".$name."','".$gender."','".$phone."','".$email_id."','".$al_email."',
'".$em_name."','".$pas."','".$cpas."','".$material."','".$vis_from."','".$adds."') where id='$id'");
if($query)
{
echo '<script>window.location="vis_list.php";</script>';
}

}
$query1=mysql_query("select * from vis_reg where id='$id'");
$row=mysql_fetch_array($query1);

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
                    <h1 class="page-header">Visitor Registration</h1>
                </div>
			
                <!-- /.col-lg-12 -->
            </div>
<center>

<table cellspacing="70">
<tr>
<td>
<label>Name</label></td>
<td><input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Gender</label></td>
<td>
  <input type="radio" name="gender" value="male" checked> Male
  <input type="radio" name="gender" value="female"> Female
  <input type="radio" name="gender" value="other"> Other  

</td>
</tr>
<tr>
<td>
<label>Phone no</label></td>
<td><input type="text" name="pno" value="<?php echo $row['phone_no'];?>" class="form-control" required></td>
</tr>
<tr>
<td>
<label>E-mail Id</label></td>
<td><input type="email" name="email" value="<?php echo $row['email_id'];?>" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Alternate E-mail Id</label></td>
<td><input type="email" name="aemail" value="<?php echo $row['alt_email'];?>" class="form-control" required></td>
<tr>
<td>
<label>Employee Name</label></td>
<td><select name="ename">
  <option value="<?php echo $row['emp_name'];?>"><?php echo $row['emp_name'];?></option>
  <?php
  $query1=mysql_query("select * from emp_reg");
  while($row1=mysql_fetch_array($query))
  {
	  ?>
	  <option value="<?php echo $row1['name'];?>"><?php echo $row1['name']; ?></option>
	  <?php
  }
  ?>
</select> 
</td>
</tr>
<tr>

<td>

<label>Password</label></td>
<td><input type="text" name="pass" value="<?php echo $row['pass'];?>" class="form-control " required></td>
</tr>
<tr>
<td>
<label>Confirm Password</label></td>
<td><input type="text" name="cpass" value="<?php echo $row['cpass'];?>" class="form-control" required></td>
</tr>
<tr>
<td>
<label>Material</label></td>
<td><input type="text" name="cpass" value="<?php echo $row['material'];?>" class="form-control" required></td> 
</td>
</tr>
<tr>
<td>
<label>Visitor From</label></td>
<td><input type="text" name="cpass" value="<?php echo $row['visitor_from'];?>" class="form-control" required></td> 
</td>
</tr>
<tr>
<td>
<label>Address</label></td>
<td><textarea name="addr" value=""><?php echo $row['address'];?></textarea></td>
</tr>
<tr>
<td>
<td><input type="submit" name="submit" class="btn btn-primary" value="Register"></td>
</td></tr>

</table>
<?php } ?>

</center>
</div>
</form>
</div>
	</div>
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