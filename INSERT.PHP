<form action=insert.php method=get>
<br><br>
<center><h1>SIGN UP HERE!!</h1></center>
<table border=1 align=center>
<tr><td>E-mail <td><input name=email>
<tr><td>Password<td><input type=password name=password>
<tr><td>Last Name <td><input name=lastname>
<tr><td>First Name <td><input name=firstname>
<tr><td>Middle Name <td><input name=middlename>
<tr><td><input type=submit name=save value='Sign Up'>
<td><input type=reset value=Clear>
 
</table>
</form>
 
<?php
if(isset($_GET['save']))
{
include("dbconnect.php");
$a=$_GET['email'];
$b=$_GET['password'];
$c=$_GET['lastname'];
$d=$_GET['firstname'];
$e=$_GET['middlename'];
 
// search the email if it already active
$query="select * from profile where (email='$a')";
$result=mysql_query($query) or die ("Error in query");
$bilang=mysql_num_rows($result);
if ($bilang==0)
{
// insert record
$insert="insert into profile values('$a','$b', '$c', '$d', '$e')";
mysql_query($insert);
print "<p align=center><font color=red><b>Record Saved</b></font>";
}
else
print "<center> SORRY <font color=red> $d </font> BUT EMAIL ALREADY EXISTS!!!</font>";
}
?>
<br><br>
<center>
<a href=login2.php>wew</a>