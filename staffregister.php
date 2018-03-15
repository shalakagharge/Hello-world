<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>STAFFPROFILE</title>
<?php 
require('Connect.php');
?>

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
</head><body>
<h1 style="text-align: center; text-decoration: underline;"><big>REGISTER</big><br>
</h1>

<br>

<hr style="width: 100%; height: 2px;"><br>
<form method="post">
<h3>Staff ID:&nbsp;<input name="sid">
</h3>

<h3 style="text-align: left;"></h3>
<h3>Email: <input name="semail" value="email@gmail.com"></h3>


<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"><span style="color: black;"></span><span style="color: black;"></span></span></big><span style="color: rgb(204, 0, 0); font-weight: bold;">Set
your
USERNAME:</span><input style="color: rgb(204, 0, 0); font-weight: bold;" name="susername"></h3>
<big></big><big>
</big>

<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"><small>Set
your
PASSWORD</small>:</span><input style="color: rgb(204, 0, 0); font-weight: bold;" name="spassword"></big><span style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTE- Password
must be atleast 6 character long.</span><br>
</h3>




<h3 style="color: rgb(204, 0, 0); font-weight: bold;"><big><big><span style="text-decoration: underline;"></span></big></big></h3>

<h3 style="color: rgb(204, 0, 0); font-weight: bold;"><big>
</big></h3>

<pre><big><big><big><span style="font-family: Helvetica,Arial,sans-serif; font-weight: bold; text-decoration: underline;"></span><input style="font-family: Helvetica,Arial,sans-serif; font-weight: bold; text-decoration: underline;" name="submit" value="SUBMIT" type="submit"></big></big></big></pre>

<br>

<br>
</body></html>
<?php


// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    
    
    // get values form input text and number

    $sid = $_POST['sid'];
    $semail = $_POST['semail'];
    $susername = $_POST['susername'];
    $spassword = $_POST['spassword'];
    
    // connect to mysql database using mysqli

    
    // mysql query to insert data

    $query = "INSERT INTO staffdetails(`sid`, `semail`, `susername`, `spassword`) VALUES ('$sid','$semail','$susername','$spassword')";
    
    $result = mysqli_query($dbconnect,$query);
    
    // check if mysql query successful

    if($result)
    {
        echo 'Data Inserted';
    }
    
    
    
    mysqli_free_result($result);
    mysqli_close($dbconnect);
}

?>
