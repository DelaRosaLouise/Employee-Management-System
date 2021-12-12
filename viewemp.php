<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `employee` , `rank` WHERE employee.id = rank.eid";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>View Employee |  Admin Panel | Terminators.</title>
	<link rel="stylesheet" type="text/css" href="styleview.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>

<body>
	
<input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>

    <div class="sidebar">
      <header>TERMINATORS</header>
	  
      <a href="aloginwel.php">
	  <i class="fas fa-house-user"></i>
        <span>HOME</span>
      </a>

      <a href="addemp.php">
	  <i class="fas fa-plus-square"></i>
        <span>ADD EMPLOYEE</span>
      </a>

      <a href="viewemp.php"class="active">
        <i class="fas fa-stream"></i>
        <span>VIEW EMPLOYEE</span>
      </a>

      <a href="assign.php">
         <i class="fas fa-calendar"></i>
        <span>ASSIGN PROJECT</span>
      </a>

      <a href="assignproject.php">
	  <i class="fas fa-tasks"></i>
        <span>PROJECT STATUS</span>
      </a>

      <a href="salaryemp.php">
	  <i class="fas fa-hand-holding-usd"></i>
        <span>PAYROLL</span>
      </a>

      <a href="empleave.php">
        <i class="far fa-envelope"></i>
        <span>EMPLOYEE LEAVE</span>
      </a>

	  <a href="alogin.html">
	  <i class="fas fa-sign-out-alt"></i>
        <span>LOG OUT</span>
      </a>

    </div>
	
	<div class="divider"></div>
	<br>
	<h2 style="font-family: 'Lobster', sans-serif; font-size: 45px; text-align: center;">Employees </h2>
	<br>
		<table>
			<tr>

				<th align = "center">Picture</th>
				<th align = "center">Name</th>
				<th align = "center">Email</th>
				<th align = "center">Birthday</th>
				<th align = "center">Gender</th>
				<th align = "center">Contact</th>
				<th align = "center">Address</th>
				<th align = "center">Department</th>
				<th align = "center">Point</th>
				
				
				<th align = "center">Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td><img src='process/".$employee['pic']."' height = 60px width = 60px></td>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['email']."</td>";
					echo "<td>".$employee['birthday']."</td>";
					echo "<td>".$employee['gender']."</td>";
					echo "<td>".$employee['contact']."</td>";
					echo "<td>".$employee['address']."</td>";
					echo "<td>".$employee['dept']."</td>";
					echo "<td>".$employee['points']."</td>";

					echo "<td><a href=\"edit.php?id=$employee[id]\">Edit</a> | <a href=\"delete.php?id=$employee[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

				}


			?>

		</table>
		
	
</body>
</html>