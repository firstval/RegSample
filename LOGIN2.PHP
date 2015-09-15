<head>
<style type="text/css">
body {background-color:#cd00ff;}   
	  
 form {
    width: 250px;
    padding: 20px;
    border: 1px solid #ffffff;
 
    /*** Adding in CSS3 ***/
 
    /*** Rounded Corners ***/
    -moz-border-radius: 20px;
    -webkit-border-radius: 20px;
 
    /*** Background Gradient - 2 declarations one for Firefox and one for Webkit ***/
    background:  -moz-linear-gradient(19% 75% 90deg,#4E0085, #ff9933);
    background:-webkit-gradient(linear, 0% 0%, 0% 100%, from(#ff9933), to(#4E0085));
 
    /*** Shadow behind the box ***/
    -moz-box-shadow:0px -5px 300px #ffffff;
    -webkit-box-shadow:0px -5px 300px #ffffff;
}

input {
    width: 230px;
    background: #cdff00;
    padding: 6px;
    margin-bottom: 10px;
    border-top: 1px solid #ad64e0;
    border-left: 0px;
    border-right: 0px;
    border-bottom: 0px;
 
    /*** Adding CSS3 ***/
 
    /*** Transition Selectors - What properties to animate and how long ***/
    -webkit-transition-property: -webkit-box-shadow, background;
    -webkit-transition-duration: 0.25s;
 
    /*** Adding a small shadow ***/
    -moz-box-shadow: 0px 0px 2px #000;
    -webkit-box-shadow: 0px 0px 2px #000;
}
input:hover {
    -webkit-box-shadow: 0px 0px 4px #000;
    background: #ffff00;
}

input.submit {
    width: 100px;
    color: #fff;
    text-transform: uppercase;
    text-shadow: #000 1px 1px;
    border-top: 1px solid #ad64e0;
    margin-top: 10px;
 
    /*** Adding CSS3 Gradients ***/
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));
    background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
}

input.reset {
    width: 100px;
    color: #fff;
    text-transform: uppercase;
    text-shadow: #000 1px 1px;
    border-top: 1px solid #ad64e0;
    margin-top: 10px;
 
    /*** Adding CSS3 Gradients ***/
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));
    background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
}
input.sign {
    width: 100px;
    color: #fff;
    text-transform: uppercase;
    text-shadow: #000 1px 1px;
    border-top: 1px solid #ad64e0;
    margin-top: 10px;
 
    /*** Adding CSS3 Gradients ***/
    background: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#963AD6), to(#781bb9));
    background:  -moz-linear-gradient(19% 75% 90deg,#781bb9, #963AD6);
}
  </style>
</head>
<br><br><br><br><br><br><center>
<form action="login2.php" method="post">
        <label><b><font color=ffff33><font face="Arial Black"><p align=left>EMAIL:</label>
            <input type="text" name="email" /> &nbsp &nbsp
        <label>PASSWORD:</label>
            <input type="password" name="password"  />
            <input type="submit" value="SUBMIT" name="submit" class="submit" /> &nbsp&nbsp&nbsp&nbsp
			<input type="reset" value="CLEAR" name="reset" class="reset" /> <br/> &nbsp &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp	&nbsp
 			<a href=insert.php> <input type=button value="SIGN UP" class="sign" /></a>
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