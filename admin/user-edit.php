<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM admin WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
	$pass = $resultData['password'];
	$username = $resultData['username'];
	$contactnumber = $resultData['mobile_number'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Edit USER | Hospital</title>
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
							<h3 class="title1">Update User</h3>
							<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Update User:</h4>
								</div>
								<div class="form-body">
									<form name="update_user" method="post" action="edit.php">
										<div class="form-group">
											<label for="exampleInputPassword1">User Name</label>
											<input type="text" id="username" name="username" class="form-control"
												placeholder="User Name" value="<?php echo $username; ?>"
												required="true">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Password</label>
											<input type="password" name="pass" id="pass" class="form-control"
												required="true" value="<?php echo $pass; ?>">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Mobile Number</label>
											<input type="text" id="contactnumber" name="contactnumber"
												class="form-control" placeholder="Mobile Number"
												value="<?php echo $contactnumber; ?>" required="true">
										</div>

										<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>

										<button type="submit" name="submit" class="btn btn-default">Update</button>
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