<?php

require_once ('process/dbh.php');
$sql = "SELECT employee.id,employee.firstName,employee.lastName,salary.base,salary.bonus,salary.total from employee,`salary` where employee.id=salary.id";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>
<head>
	<title>Payroll | Terminators.</title>
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

      <a href="salaryemp.php"class="active">
	  <i class="fas fa-hand-holding-usd"></i>
        <span>Payroll</span>
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
	<h2 style="font-family: 'Lobster', sans-serif; font-size: 45px; text-align: center;">Payroll </h2>
	<br>
		
	</div>
	
	<table>
			<tr>
				
				<th align = "center">Name</th>
				
				
				<th align = "center">Base Salary</th>
				
				<th align = "center">TotalSalary</th>
				
				
			</tr>
			
			<?php
				while ($employee = mysqli_fetch_assoc($result)) {
					echo "<tr>";
			
					echo "<td>".$employee['firstName']." ".$employee['lastName']."</td>";
					
					echo "<td>".$employee['base']."</td>";
					
					echo "<td>".$employee['total']."</td>"; 
					
					

				}


			?>
			
			</table>
</body>
</html>