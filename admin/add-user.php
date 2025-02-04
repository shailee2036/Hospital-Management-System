<?php


include "config.php";

	if (isset($_POST['submit'])) {
		$id = $_POST['id'];
		$pass = $_POST['pass'];
		$adminname = $_POST['adminname'];
		$username = $_POST['username'];
		$contactnumber = $_POST['contactnumber'];
		$branch = $_POST['branch'];
		$city = $_POST['city'];
		$query = mysqli_query($con, "insert into  admin(id,password,adminname,username,mobile_number,branch,city) value('$id','$pass','$adminname','$username','$contactnumber','$branch','$city')");
		if ($query) {
			echo "<script>alert('User has been added.');</script>";
			echo "<script>window.location.href = 'add-user.php'</script>";

		} else {
			echo "<script>alert('Something Went Wrong. Please try again.');</script>";
		}
	}
	else {
	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title> ADD USER | Hospital</title>

		
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link href="css/font-awesome.css" rel="stylesheet">
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
			rel='stylesheet' type='text/css'>
		
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/custom.css" rel="stylesheet">
		
	</head>

	<body class="cbp-spmenu-push">
		<div class="row">
			<div class="col-lg-2">
				<?php include_once('side.php'); ?>
			</div>
			<div class="col-lg-10">
				<div class="main-content">
					
					<div id="page-wrapper">
						<div class="main-page">
							<div class="forms">
								<h3 class="title1">Add User</h3>
								<div class="form-grids row widget-shadow" data-example-id="basic-forms">
									<div class="form-title">
										<h4>Add User</h4>
									</div>
									<div class="form-body">
										<form method="post">
										<div class="form-group">
												<label for="exampleInputEmail1">id</label>
												<input type="text" class="form-control" id="id" name="id"
													placeholder="id">
											</div>

											<div class="form-group">
												<label for="exampleInputEmail1">Admin Name</label>
												<input type="text" class="form-control" id="adminname" name="adminname"
													placeholder="Admin Name">
											</div>
											<div class="form-group">

												<label for="exampleInputPassword1">User Name</label>
												<input type="text" id="username" name="username" class="form-control">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Mobile Number</label>
												<input type="text" id="contactnumber" name="contactnumber"
													class="form-control" value="">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="password" name="pass" id="pass" class="form-control">
											</div>

											<div class=" form-group">
												<label for="exampleInputPassword1">Branch</label>

												<select name="branch" class="form-control " id="apply">
													<option value="Bhavnagar">Bhavnagar</option>
													<option value="Surat">Surat</option>
													<option value="Rajkot">Rajkot</option>
												</select>
											</div>
											<div class=" form-group">
												<label for="exampleInputPassword1">City</label>

												<select name="city" class="form-control " id="apply">
													<option value="Bhavnagar">Bhavnagar</option>
													<option value="Surat">Surat</option>
													<option value="Rajkot">Rajkot</option>
												</select>
											</div>
											<button type="submit" name="submit" class="btn btn-default">ADD</button>
										</form>
									</div>

								</div>


							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
					
	</body>

	</html>
	<?php } ?>