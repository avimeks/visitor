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
    <title>Authentication of visitors check in & check out record</title>
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
</head>
<body>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-group fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
								<?php
								include('config.php');
								$query=mysql_query("select count(*) from vis_reg");
								$row=mysql_fetch_array($query);
								?>
                                    <div class="huge"><?php echo $row['count(*)']; ?></div>
                                    <div>Total Visitor!</div>
                                </div>
                            </div>
                        </div>
                        <a href="vl_report.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
								include('config.php');
								$query=mysql_query("select count(*) from emp_reg");
								$row=mysql_fetch_array($query);
								?>
                                    <div class="huge"><?php echo $row['count(*)']; ?></div>
									
                                    <div>Employee!</div>
                                </div>
                            </div>
                        </div>
                        <a href="el_report.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-user-plus fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
								include('config.php');
								$query=mysql_query("select count(*) from vis_reg where status=1");
								$row=mysql_fetch_array($query);
								?>
                                    <div class="huge"><?php echo $row['count(*)']; ?></div>
                                    <div>Checkin!</div>
                                </div>
                            </div>
                        </div>
                        <a href="a_checkin.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa fa-user-times fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <?php
								include('config.php');
								$query=mysql_query("select count(*) from vis_reg where status=0");
								$row=mysql_fetch_array($query);
								?>
                                    <div class="huge"><?php echo $row['count(*)']; ?></div>
                                    <div>Checkout!</div>
                                </div>
                            </div>
                        </div>
                        <a href="a_checkout.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
				
            </div>
			  <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Current Table
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
						<?php
//include('header.php');
include('config.php');
$query=mysql_query("SELECT * FROM `vis_reg` where DATE_FORMAT(`created_at`, '%Y-%m-%d') = CURRENT_DATE");
echo '

<h1>Visitor List</h1>
<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email Id</th>
<th>Employee Name</th>
<th>Visitor From</th>
</tr>
</thead>';
while($row=mysql_fetch_array($query))
{
echo '<tbody><tr>
<td>'.$row['name'].'</td>
<td>'.$row['phone_no'].'</td>
<td>'.$row['email_id'].'</td>
<td>'.$row['emp_name'].'</td>
<td>'.$row['visitor_from'].'</td>
</tr></tbody>';
}
echo '</table></center>';
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
</html>