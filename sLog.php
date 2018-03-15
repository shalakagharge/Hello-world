<?php
  //session_start();
  //if (!isset($_SESSION['name']) || !isset($_SESSION['pswd'])) {
    //header('location:sLogin.php');
//}

  require 'Connect.php';

//$name = $_SESSION['name'];
//$pswd = $_SESSION['pswd'];

$query = "SELECT sname, roll_no FROM admission" ;
//$records=mysql_query($query);

?>
<!DOCTYPE html>
<html>
<head>
<title>Your Details</title>

</head>
<body>
<center>
	<table width="700" cellpadding="1" cellspacing="1">
		<tr>
			<th>Name</th>
			<th>Roll No.</th>
		<tr>
		
		<?php
         if($result=(mysqli_query($dbconnect,$query)))
         {
		   while($stud=mysql_fetch_assoc($result)) {
            echo "<tr>";

            echo "<td>".$stud['name']."</td>";

            echo "<td>".$stud['roll_no']."</td>";

            echo "<tr>";
		 }
		}
		 ?>
	</table>
</center>

</body>
</html>