<?php
  //require 'Connect.php';
  
  mysql_connect('localhost','root','');
  
  mysql_select_db('details');

  $sql= "SELECT name, roll_no FROM admission ";

  $records=mysql_query($sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Student Data</title>
 <style type="text/css">
 	h1{
        background-color: #cc0000;
        border-radius: 5%;}

    table{
    	border-collapse: collapse;
    	width: 75%;
    	height: 75%;
    }

    table, th, td{
    	border: 2px solid black;
    }

    td{
    	padding: 15px;
    	height: 60px;
    	font-size: 20px;
    	
    }

    th{
    	padding: 15px;
    	height: 60px;
    	font-size: 30px;
    	background-color: #ffa07a;

    }
    
    tr:hover{background-color: #f5f5f5 }

 </style>
	
</head>
<body>
<h1 style="text-align: center; font-size: 42px; "><big>STUDENT DETAILS</big><br>
</h1>

<br>
<br>
<br>
<br>
<center>
	<table  cellpadding="1" cellspacing="1">
		<tr>
         <th>Name </th>
         <th>Roll No.</th>
		<tr>

		<?php

		while($stud=mysql_fetch_assoc($records)){
			echo "<tr>";

			echo "<td>".$stud['name']."</td>";

			echo "<td>".$stud['roll_no']."</td>";

			echo "</tr>";
		}
		?>	
	</table>
</center>
</body>
</html>