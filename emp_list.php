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
.scollit
{
	height:550px;
	overflow-y:scroll;
	overflow-x:hidden;
	
}
</style>
</head>
<body>
<?php
include('header.php');
include('config.php');
$query=mysql_query("select * from emp_reg where status=1");
echo '
<center>
<h1>Employee List</h1>
<div class="scollit">
<table style="margin-left:300px" "margin-right:300px" width="300px" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th>S.NO</th>
<th>Employee Name</th>
<th>Phone No</th>
<th>Email Id</th>
<th>Working Time</th>
<th>Department</th>
<th>Designation</th>
<th></th>
<th></th>
</tr>
</thead>';
$i=1;
while($row=mysql_fetch_array($query))
{
echo '<tbody><tr>
<td style="counter-increment:serial;content:counter(serial);">'.$i.'</td>
<td>'.$row['name'].'</td>
<td>'.$row['phno'].'</td>
<td>'.$row['email'].'</td>
<td>'.$row['working_time'].'</td>
<td>'.$row['dpmt'].'</td>
<td>'.$row['desig'].'</td>';?>
<td><a href="emp_update.php?id=<?php echo $row['id'];?>">Edit</a></td>
<td><a href="emp_delete.php?id=<?php echo $row['id'];?>">Delete</a></td>
</tr></tbody>
<?php 
$i++;
}
echo '</table></div></center>';
?>
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