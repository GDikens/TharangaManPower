
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Project      : Tharanga Man Power
Author		 : Dineth Kariyawasam
Email	 	 : dineth.kari[at]gmail.com
-->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tharanga Man Power</title>

	<!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-datepicker.css" rel="stylesheet">

	<style>
		.content {
			margin-top: 80px;
		}
	</style>

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "tharangamanpower";

	$mydb = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	echo 'Database connected';

	if(mysqli_connect_errno()){
		echo 'Database Not Connected : '.mysqli_connect_error();
	}
	
	
	if(isset(_POST['insert'])){
		$id			= $_POST['employeeid'];
		$name		= $_POST['name'];
		$nic	 	= $_POST['nic'];
		$doe	 	= $_POST['doe'];
		$address	= $_POST['address'];
		$teleno		= $_POST['teleno'];
		$gender		= $_POST['gender'];
		
		
		$insert = mysqli_query($mydb,"INSERT INTO employee(EmployeeName, NIC, Address, Gender, DateEnrolled, TeleNo)
											VALUES('$name', '$nic', '$address', '$gender', '$doe', '$teleno')");
		if($insert){
			echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Employee Details recorded...</div>';
		}else{
			echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Oops! Some Error Occured...</div>';
		}
	}
?>
	
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand visible-xs-block visible-sm-block" href="">Home</a>
				<a class="navbar-brand hidden-xs hidden-sm" href="">Home</a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<li><a href="viewProfile.php">View Profile</a></li>
					<li class="active"><a href="addEmployee.php">Add Employee</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</nav>
	<div class="container">
		<div class="content">
			<h2>Tharanga Man Power &raquo; Employee Information Form</h2>
			<hr />

			<form class="form-horizontal" action="" method="POST">
				<div class="form-group">
					<label class="col-sm-3 control-label">EmployeeID</label>
					<div class="col-sm-2">
						<input type="text" name="employeeid" class="form-control" placeholder="####" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Full Name</label>
					<div class="col-sm-4">
						<input type="text" name="name" class="form-control" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">NIC</label>
					<div class="col-sm-4">
						<input type="text" name="nic" class="form-control" placeholder="#########V" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Date Enrolled</label>
					<div class="col-sm-4">
						<input type="text" name="doe" class="input-group date form-control" date="" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Address</label>
					<div class="col-sm-3">
						<textarea name="address" class="form-control"></textarea>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Telephone No</label>
					<div class="col-sm-3">
						<input type="text" name="teleno" class="form-control" placeholder="0##-#######" required>
					</div>
				</div>
				<div class="form-group">
					<label class="col-sm-3 control-label">Gender</label>
					<div class="col-sm-2">
						<select name="gender" class="form-control" required>
							<option value="male">Male</option>
							<option value="female">Female</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label class="col-sm-3 control-label">&nbsp;</label>
					<div class="col-sm-6">
						<input type="submit" name="insert" class="btn btn-sm btn-primary" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script>
	$('.date').datepicker({
		format: 'yyyy-mm-dd',
	})
	</script>
</body>
</html>
