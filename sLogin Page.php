<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
<meta content="text/html; charset=ISO-8859-1" http-equiv="content-type"><title>Login Page
</title>

<style>
input[type=submit] {
width: 200%;
background-color: #DC143C;
color: black;
padding: 14px 20px;
margin: 8px 0;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #B22222;
}
div {
border-radius: 2px;
background-color: #f2f2f2;
padding: 20px;
}</style>
</head><body>
<img src="http://www.rait.ac.in/wp-content/uploads/2015/01/logo1.png" alt="rait" style="width: 100%; height: 20%;">
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
&nbsp; &nbsp;
<h1 style="text-align: left;"> &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;
&nbsp; &nbsp;<span style="font-family: Arial;"> <span style="color: rgb(155, 0, 0);">&nbsp;</span></span><big style="font-weight: normal; font-family: Arial; color: rgb(153, 0, 0); font-size: 46px;">WELCOME
TO RAIT</big></h1>
<br>
&nbsp;<br>
<div style="text-align: center; font-size: 24px;"><form method="post"> <input style="width: 30%; font-size: 26px;" name="LOGIN" value="LOGIN" type="submit" > &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <input style="width: 30%; font-size: 26px;" name="staffregister" value="REGISTER" type="submit"> </form>&nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp;<br>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</body></html>


<?php
if(isset($_POST['LOGIN'])){
header('location:sLogin.php');
}
 
if(isset($_POST['staffregister'])){
header('location:staffregister.php');
}


?>