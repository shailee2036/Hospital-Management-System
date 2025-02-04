<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM careers");
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Career Manage|  Hospital</title>

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
							<div class="tables">
								<h3 class="title1">Career Manage</h3>
								<div class="table-responsive bs-example widget-shadow">
									<h4>Career Manage:</h4>
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
											while ($row = mysqli_fetch_array($query)) {
												echo "<tr>";
                                                echo "<td>".$row['id']."</td>";	
												echo "<td>".$row['first_name']."</td>";	
												echo "<td>".$row['last_name']."</td>";	
												echo "<td>".$row['address']."</td>";
												echo "<td>".$row['email']."</td>";
                                                echo "<td>".$row['phone_number']."</td>";
                                                echo "<td>".$row['apply_for']."</td>";
                                                echo "<td>".$row['job_time']."</td>";
												echo "<td> <a href='career-edit.php?id=$row[id]'>Edit
                                                </a> |
												<a href='deletecareer.php?id=$row[id]'>Delete
												</a>
														</td>
												</tr>";
												
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
			
	</body>

	</html>
	