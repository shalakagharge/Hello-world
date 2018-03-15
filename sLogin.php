<?php
//session_start();
?>

<!DOCTYPE html>
<html>
<head>
<script>
function validateform(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
}else if((password.length<6) ||(password.length==' ') ){  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script>
</head>

<style>
input[type=text], select {
    width: 50%;
    height:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   font-size: 20px;
}

input[type=password], select {
    width: 50%;
height:50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    font-size: 20px;
    
}

input[type=submit] {
    width: 50%;
    background-color: #DC143C;
    color: black;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: bold;
    font-size: 20px;
}

input[type=submit]:hover {
    background-color: #B22222;
    
}

div {
    width: 50%;
    height: 50%;
    align: center;
    border-radius: 2px;
    background-color: #f2f2f2;
    padding: 20px;
}
.center {
    margin: auto;
    width: 50%;
    border: 3px solid #800000;
    padding: 10px;
    text-align: center;
    font-size: 20px;
   font-weight : bold; 
}
</style>
<body>

<h3 style="text-align: left; color: #8B0000; font-family: Arial; font-size: 36px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
&nbsp; LOGIN</h3>

<div class="center">
  <form name="myform" method="post" action="display.php" onsubmit="return validateform()" >  
Username: &nbsp; &nbsp; &nbsp; <input type="text" name="susername" required><br/>  
Password: &nbsp;              <input type="password" name="spassword"><br/>  
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<input type="submit" value="LOGIN" name="LOGIN">  
</form>  
</div>

</body>
</html>
<?php
if(isset($_POST['LOGIN'])){
     $_SESSION['name']=$_POST['susername'];
$_SESSION['pswd']=$_POST['spassword'];

header('location:display.php');
}
?>

