<?php

require_once ('process/dbh.php');

//$sql = "SELECT * from `employee_leave`";
$sql = "Select employee.id, employee.firstName, employee.lastName, employee_leave.start, employee_leave.end, employee_leave.reason, employee_leave.status, employee_leave.token From employee, employee_leave Where employee.id = employee_leave.id order by employee_leave.token";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Employee Leave | Admin Panel | Terminators.</title>
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

      <a href="assignproject.php">
	  <i class="fas fa-tasks"></i>
        <span>PROJECT STATUS</span>
      </a>

      <a href="salaryemp.php">
	  <i class="fas fa-hand-holding-usd"></i>
        <span>Payroll</span>
      </a>

      <a href="empleave.php"class="active">
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
	<h2 style="font-family: 'Lobster', sans-serif; font-size: 45px; text-align: center;">Employee  Leaves </h2>
	<br>

		<table>
			<tr>
			
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Total Days</th>
				<th>Reason</th>
				<th>Status</th>
				<th>Options</th>
			</tr>

			<?php
				while ($employee = mysqli_fetch_assoc($result)) {

				$date1 = new DateTime($employee['start']);
				$date2 = new DateTime($employee['end']);
				$interval = $date1->diff($date2);
				$interval = $date1->diff($date2);
				//echo "difference " . $interval->days . " days ";

					echo "<tr>";
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['start']."</td>";
					echo "<td>".$employee['end']."</td>";
					echo "<td>".$interval->days."</td>";
					echo "<td>".$employee['reason']."</td>";
					echo "<td>".$employee['status']."</td>";
					echo "<td><a href=\"approve.php?id=$employee[id]&token=$employee[token]\"  onClick=\"return confirm('Are you sure you want to Approve the request?')\">Approve</a> | <a href=\"cancel.php?id=$employee[id]&token=$employee[token]\" onClick=\"return confirm('Are you sure you want to deny the request?')\">Deny</a></td>";

				}


			?>

		</table>
		
	</div>
</body>
</html>