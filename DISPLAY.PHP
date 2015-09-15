<center><h1>List of Users
<?php 
  include ("dbconnect.php");
  $sql="select * from profile order by email asc";
  $result=mysql_query($sql);
  print "<table border=1 align=center><tr><td>Email<td>Password<td>Last Name<td>First Name<td>Middle Name<td>Edit<td>Delete";
while ($rows=mysql_fetch_array($result))
 {
    $a=$rows['email'];
    $b=$rows['password'];
    $c=$rows['lastname'];
    $d=$rows['firstname'];
    $e=$rows['middlename'];  
    print "<tr><td>$a<td>$b<td>$c<td>$d<td>$e<td><a href=edit.php><img src=1.jpg></a><td><a href=delete.php><img src=2.jpg></a> ";
}
 
$bilang=mysql_num_rows($result);
print "</table><b><p align=center>$bilang</B>  Total Students";
print "<p><a href=insert.php>Insert Another</a>";
?>