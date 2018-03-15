<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
 
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>profile</title>

  
  
  <style type="text/css">
h3 {
  color: #cc0000;
background-color: #D3D3D3;
border-radius: 5%;

}
h1{
background-color: #cc0000;
border-radius: 5%;}

  </style>
</head>
<body>
<?php

	$dbconnect=mysqli_connect("localhost","root","","details");
if(mysqli_connect_errno($dbconnect)){
echo "failed to connect";
}
else {echo "successful";}
?></body>
</html>