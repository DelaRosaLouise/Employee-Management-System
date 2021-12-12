<?php

require_once ('process/dbh.php');
$sql = "SELECT * from `project` order by subdate desc";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Project Status |  Admin Panel | Terminators.</title>
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

      <a href="viewemp.php">
        <i class="fas fa-stream"></i>
        <span>VIEW EMPLOYEE</span>
      </a>

      <a href="assign.php">
         <i class="fas fa-calendar"></i>
        <span>ASSIGN PROJECT</span>
      </a>

      <a href="assignproject.php"class="active">
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
	<h2 style="font-family: 'Lobster', sans-serif; font-size: 45px; text-align: center;">Project Status </h2>
	<br>
		<table>
			<tr>

				
				<th align = "center">Emp. ID</th>
				<th align = "center">Project Name</th>
				<th align = "center">Due Date</th>
				<th align = "center">Submission Date</th>
				<th align = "center">Mark</th>
				<th align = "center">Status</th>
				<th align = "center">Option</th>
				
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
				
					echo "<td>".$employee['eid']."</td>";
					echo "<td>".$employee['pname']."</td>";
					echo "<td>".$employee['duedate']."</td>";
					echo "<td>".$employee['subdate']."</td>";
					echo "<td>".$employee['mark']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"mark.php?id=$employee[eid]&pid=$employee[pid]\">Mark</a>"; 

				}


			?>

		</table>
		
	
</body>
</html>