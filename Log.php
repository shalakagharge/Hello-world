<?php
  session_start();
  if (!isset($_SESSION['name']) || !isset($_SESSION['pswd'])) {
    header('location:Login.php');
}

  require 'Connect.php';

$name = $_SESSION['name'];
$pswd = $_SESSION['pswd'];

$query = "SELECT * FROM admission WHERE username='$name' and password='$pswd'";


        if($result=(mysqli_query($dbconnect,$query)))
        { 
            //if(mysqli_num_rows($result) > 0)
            {
                while($row = mysqli_fetch_array($result))
                {

                    $name       =$row["name"];
                    $roll_no    =$row["roll_no"];
                    $YEAR       =$row["YEAR"];
                    $address    =$row["address"];
                    $dob    =$row["dob"];
                    $email =$row["email"];
                    $gender     =$row["gender"];
                    $username      =$row["username"];

                }
            }   
        }
        $_SESSION['name']=$name;
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Details</title>
</head>
<body>
<h1> <b>&nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; YOUR DETAILS</b></h1>
<center>
		<table>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Name :</b></td>
				<td colspan="2" align="right"><?php echo $name; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Roll No.:</b></td>
				<td colspan="2" align="right"><?php echo $roll_no; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Year:</b></td>
				<td colspan="2" align="right"><?php echo $YEAR; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Address:</b></td>
				<td colspan="2" align="right"><?php echo $address; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Date of Birth :</b></td>
				<td colspan="2" align="right"><?php echo $dob; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Email id:</b></td>
				<td colspan="2" align="right"><?php echo $email; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Gender :</b></td>
				<td colspan="2" align="right"><?php echo $gender; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><b>Username :</b></td>
				<td colspan="2" align="right"><?php echo $username; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>

		</table>
		</center>
</body>
</html>