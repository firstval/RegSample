<center><h1>search your files
<form action=search.php name=get>
<input name=hanap>
<input type=submit value=search name=search>
</form>

<?php 
if (isset($_GET['search']))
{
include ("dbconnect.php");
$hanap=$_GET['hanap'];
$sql="select * from profile where email like '%$hanap%'";
$result=mysql_query($sql);
$bilang=mysql_num_rows($result);
if ($bilang==0)
print "<font color=red>no record found</font>";
else 
{
print "<table border=1 align=center><tr><td>Email<td>Password<td>Lastname<td>Firstname<td>Middle Name";
while ($rows=mysql_fetch_array($result))
{
$a=$rows['email'];
$b=$rows['password'];
$c=$rows['lastname'];
$d=$rows['firstname'];
$e=$rows['middlename']; 
print "<tr><td>$a<td>$b<td>$c<td>$d<td>$e ";
}

print "</table><b><p align=center>$bilang</B> Total Students";
}
print "<p><a href=insert.php>Insert Another</a>";
}
?>