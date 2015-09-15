<center><br><br><br><br>
<form action="login.php" method="post">
<table border=1>
<tr> <td> EMAIL <td> <input type="text" name=email>
<tr> <td> PASSWORD <td> <input type=password name=password>
<tr> <td> <input type=submit value=LOGIN name=submit> <td> <input type=reset value=CLEAR> <a href=insert.php> <input type=button value="SIGN UP"></a>
</table
</form>

<?php
session_start();
if(isset($_POST['submit']))
{
$a = $_POST['email'];
$b = $_POST['password'];
include("dbconnect.php");
$sql="SELECT * from profile where (email='$a' and password='$b')";
$result=mysql_query($sql);
$bilang=mysql_num_rows($result);
if($bilang==0)
	print "<font color=red> Email or Password are invalid";
else
	header("location:display.php");
}
?>