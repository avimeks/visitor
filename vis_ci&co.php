<?php
include('header.php');
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
	<!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="vendor/metisMenu/metisMenu.min.js"></script>
<script>
function chk(val)
{
	$.ajax({
	type:"POST",
	data:"vid="+val,
	url:"getChk.php",
	success:function(data){
		alert(data);
	}
	});
}
function chkout(val)
{
	$.ajax({
	type:"POST",
	data:"vid="+val,
	url:"getChkout.php",
	success:function(data){
		alert(data);
	}
	});
}
</script>
</head>
<body>
<form>
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Visitor Checkin & checkout</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<center>
<div class="g">

<table cellspacing="20">
<tr>
<td>
<label>select to checkin</label></td>
<td><select name="vname" onchange="chk(this.value);">
  <?php
  $query=mysql_query("select * from vis_reg where status=0");
  while($row=mysql_fetch_array($query))
  {
	  ?>
	  <option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
	  <?php
  }
  ?>

</select> 
</td>
<td>
<label>select to checkout</label></td>
<td><select name="vname" onchange="chkout(this.value);">
  <?php
  $query=mysql_query("select * from vis_reg where status=1");
  while($row=mysql_fetch_array($query))
  {
	  ?>
	  <option value="<?php echo $row['id'];?>"><?php echo $row['name']; ?></option>
	  <?php
  }
  ?>

</select>
</tr>
</center>
</table>
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