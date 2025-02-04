<?php


include "config.php";
if (strlen($_SESSION['bpmsaid'] == 0)) {
	header('location:logout.php');
} else {
	// Code for deletion
	if ($_GET['action'] == 'delete') {

		$id = intval($_GET['id']);
		$query = mysqli_query($con, "delete from careers where id='$id'");
		if ($query) {
			echo "<script>alert('Career deleted.');</script>";
			echo "<script>window.location.href='manage-career.php'</script>";
		} else {
			echo "<script>alert('Something Went Wrong. Please try again.');</script>";
			echo "<script>window.location.href='manage-career.php'</script>";
		}
	}



	?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>Manage Career |  Hospital</title>

		<script
			type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- Custom CSS -->
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<!-- font CSS -->
		<!-- font-awesome icons -->
		<link href="css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome icons -->
		<!-- js-->
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		<!--webfonts-->
		<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
			rel='stylesheet' type='text/css'>
		<!--//webfonts-->
		<!--animate-->
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
		<script src="js/wow.min.js"></script>
		<script>
			new WOW().init();
		</script>
		<!--//end-animate-->
		<!-- Metis Menu -->
		<script src="js/metisMenu.min.js"></script>
		<script src="js/custom.js"></script>
		<link href="css/custom.css" rel="stylesheet">
		<!--//Metis Menu -->
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
							<div class="tables">
								<h3 class="title1">Manage Career</h3>

								<div class="table-responsive bs-example widget-shadow">
									<h4>Update Career:</h4>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>First Name</th>
												<th>Last Name</th>
												<th>Address</th>
												<th>Email</th>
												<th>Phone Number</th>
												<th>Apply For</th>
												<th>Job Time</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$ret = mysqli_query($con, "select *from careers");
											$cnt = 1;
											while ($row = mysqli_fetch_array($ret)) {

												?>

												<tr>
													<th scope="row">
														<?php echo $cnt; ?>
													</th>
													<td>
														<?php echo $row['first_name']; ?>
													</td>
													<td>
														<?php echo $row['last_name']; ?>
													</td>
													<td>
														<?php echo $row['address']; ?>
													</td>
													<td>
														<?php echo $row['email']; ?>
													</td>
													<td>
														<?php echo $row['phone_number']; ?>
													</td>
													<td>
														<?php echo $row['apply_for']; ?>
													</td>
													<td>
														<?php echo $row['job_time']; ?>
													</td>
													<td>
														<a href="edit-career.php?editid=<?php echo $row['id']; ?>">
															<i class="fa fa-edit"></i>
														</a> |
														<a href="manage-career.php?action=delete&&id=<?php echo $row['id']; ?>"><i
																class="fa fa-trash-o" aria-hidden="true"></i></a>

													</td>
												</tr>
												<?php
												$cnt = $cnt + 1;
											} ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>

			<script src="js/classie.js"></script>
			<script>
				var menuLeft = document.getElementById('cbp-spmenu-s1'),
					showLeftPush = document.getElementById('showLeftPush'),
					body = document.body;

				showLeftPush.onclick = function () {
					classie.toggle(this, 'active');
					classie.toggle(body, 'cbp-spmenu-push-toright');
					classie.toggle(menuLeft, 'cbp-spmenu-open');
					disableOther('showLeftPush');
				};

				function disableOther(button) {
					if (button !== 'showLeftPush') {
						classie.toggle(showLeftPush, 'disabled');
					}
				}
			</script>
			
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>
			
			<script src="js/bootstrap.js"> </script>
	</body>

	</html>
<?php } ?>