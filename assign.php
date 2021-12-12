<!DOCTYPE html>
<html>

<head>
   

    <!-- Title Page-->
    <title>Assign Project | Admin Panel</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
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

      <a href="assign.php"class="active">
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




    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Assign Project</h2>
                    <form action="process/assignp.php" method="POST" enctype="multipart/form-data">


                        

                         <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Employee ID" name="eid" required="required">
                        </div>





                        <div class="input-group">
                            <input class="input--style-1" type="text" placeholder="Project Name" name="pname" required="required">
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-1" type="date" placeholder="date" name="duedate" required="required">
                                   
                                </div>
                            </div>
                            
                        </div>
                        
                        



                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Assign</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>
<!-- end document-->
