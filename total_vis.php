<?php 
session_start();
include('emp_header.php');
include('config.php');
//echo $_SESSION['eid'];
$eid=$_SESSION['eid'];
$q=mysql_query("select * from emp_reg where name='$eid'");
$r=mysql_fetch_array($q);
$emp_id=$r['id'];
$query=mysql_query("select * from vis_reg where emp_name='$emp_id'");
echo '
<center>
<h1>Total Visitor List</h1>
<table border="5px solid balck" width="600px">
<thead>
<tr>
<th>Name</th>
<th>Phone Number</th>
<th>Email Id</th>
<th>Visitor From</th>
<th>Action</th>
</tr>
</thead>';
while($row=mysql_fetch_array($query))
{
echo '<tbody><tr>
<td>'.$row['name'].'</td>
<td>'.$row['phone_no'].'</td>
<td>'.$row['email_id'].'</td>
<td>'.$row['visitor_from'].'</td>'; ?>
<td><a href="chk.php?id=<?php echo $row['id']; ?>">Checkout</a>
</tr></tbody>
<?php
}
echo '</table></center>';
?>
