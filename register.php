<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>
 
  <meta content="text/html; charset=ISO-8859-1" http-equiv="content-type">
  <title>PROFILE</title>
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
<h3>Student Name:&nbsp;&nbsp; <input name="name" value="-"><br>
</h3>

<h3 style="text-align: left;">Roll
No:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input name="roll no" value="enter here"><br>
</h3>

<h3>Year: &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
<select name="YEAR">
<option selected="selected">F.E</option>
<option>S.E</option>
<option>T.E</option>
<option>B.E</option>
<optgroup label=""></optgroup>
</select>
</h3>

<h3>Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<textarea cols="25" rows="5" name="address"></textarea></h3>

<h3>Date of Birth:&nbsp;&nbsp;&nbsp; <input name="dob" value="--/--/----">
</h3>

<h3>E-mail Address:<input name="email" value="email@gmail.com"></h3>

<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"><small>Gender:&nbsp;</small>&nbsp;&nbsp;&nbsp;
<input checked="checked" name="gender" value="FEMALE" type="radio"><span style="color: black;">FEMALE</span>&nbsp; <input name="gender" value="MALE" type="radio"><span style="color: black;">MALE</span></span></big></h3>
<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"></span></big></h3>
<big><span style="color: rgb(204, 0, 0); font-weight: bold;">
</span></big>
<h3><big><small><span style="color: rgb(204, 0, 0); font-weight: bold;">Set your
USERNAME:</span></small><input style="color: rgb(204, 0, 0); font-weight: bold;" name="username"></big><big>
</big></h3>
<big>
</big>
<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"><small>
Set your
PASSWORD</small>:</span><input style="color: rgb(204, 0, 0); font-weight: bold;" name="password"></big><span style="color: black;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; NOTE- Password
must be atleast 6 character long.</span><br>
</h3>
<big><span style="color: rgb(204, 0, 0); font-weight: bold;">
</span></big>
<h3><big><span style="color: rgb(204, 0, 0); font-weight: bold;"><small>Folder:&nbsp;</small>&nbsp;&nbsp;&nbsp; </span><a style="color: rgb(0, 0, 153); font-weight: bold;" href="https://www.google.co.in/?gws_rd=ssl" target="_blank">Click link
to view folder (documents)</a></big><big>
</big></h3>
<h3><big>
</big></h3>

<h3 style="color: rgb(204, 0, 0); font-weight: bold;"><big><big><span style="text-decoration: underline;"></span></big></big></h3>

<h3 style="color: rgb(204, 0, 0); font-weight: bold;"><big>
</big></h3>
<pre>&nbsp;&nbsp;&nbsp;&nbsp; <big><big><big><span style="font-family: Helvetica,Arial,sans-serif; font-weight: bold; text-decoration: underline;"></span><input style="font-family: Helvetica,Arial,sans-serif; font-weight: bold; text-decoration: underline;" name="submit" value="SUBMIT" type="submit"></big></big></big></pre>

<br>
</form>
</body></html>


<?php


// php code to Insert data into mysql database from input text
if(isset($_POST['submit']))
{
    
    
    // get values form input text and number

    $name = $_POST['name'];
    $roll_no = $_POST['roll_no'];
    $YEAR = $_POST['YEAR'];
$address = $_POST['address'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
    
    // connect to mysql database using mysqli

    
    // mysql query to insert data

    $query = "INSERT INTO admission(`name`, `roll_no`, `YEAR`, `address`, `dob`, `email`, `gender`, `username`, `password`) VALUES ('$name','$roll_no','$YEAR','$address','$dob','$email','$gender','$username','$password')";
    
    $result = mysqli_query($dbconnect,$query);
    

    if($result)
    {
        echo 'Data Inserted';
    }
    
    
    
    mysqli_free_result($result);
    mysqli_close($dbconnect);
}

?>
