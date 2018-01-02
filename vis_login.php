<?php
include('config.php');
if(isset($_POST['submit']))
{
$username=$_POST['uname'];
$password=$_POST['pass'];
$query=mysql_query("select * from vis_reg where name='$username' and pass='$password'");
if(mysql_num_rows($query)>0)
{
header('location:dashboard.php');
}
else
{
echo '<script>alert("Username password mismatched");</script>';
}
}
?>
<html>
<head>
<title>visitor login page</title>
<style>
div.a
{
background-color:#c2c2a3;
margin:150px 400px 100px 350px;
}
.h
{
padding-top:50px;
}
</style>
</head>
<body>
<form method="post" action="">
<center>
<div class="a">
<h2 class="h">Visitor Login Page</h2>
<table cellspacing="20">
<tr>
<td>
<label>UserName</label></td>
<td><input type="text" name="uname" required></td>
</tr>
<tr>
<td>
<label>Password</label></td>
<td><input type="password" name="pass" required></td>
</tr>
<td>
</td>
<td><center><input type="submit" name="submit" value="submit"></center></td>
<td><a href="index.php" class="btn btn-primary">Back</a></td>
</table>
</div>
</form>
</body>
</html>