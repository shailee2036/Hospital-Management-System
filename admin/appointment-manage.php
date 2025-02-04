<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM appointment");
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Appointment Manage| Hospital</title>

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
								<h3 class="title1">Appointment Manage</h3>
								<div class="table-responsive bs-example widget-shadow">
									<h4>Appointment Manage:</h4>
									<table class="table table-bordered">
										<thead>
											<tr>
                                                <th>#</th>
												<th>Name</th>
												<th>Mobile Number</th>
												<th>Email</th>
												<th>Date Of Birth</th>
												<th>Gender</th>
												<th>Services</th>
												<th>Appointment Date</th>
												<th>Appointment Time</th>
                                                <th>Address</th>
												<th>Doctor</th>
												<th>Medical History</th>
												<th>Insurance Information</th>
												<th>Note</th>
												<th>Next Visit</th>
                                                <th>Medicine</th>
												<th>Report</th>
												<th>Remark</th>
												<th>Doctor Note</th>
												<th>Action</th>
											
											</tr>
										</thead>
										<tbody>
											<?php
											while ($row = mysqli_fetch_array($query)) {
												echo "<tr>";
                                                echo "<td>".$row['id']."</td>";	
												echo "<td>".$row['name']."</td>";	
												echo "<td>".$row['mobile_number']."</td>";	
												echo "<td>".$row['email']."</td>";
												echo "<td>".$row['date_of_birth']."</td>";
                                                echo "<td>".$row['gender']."</td>";
                                                echo "<td>".$row['services']."</td>";
                                                echo "<td>".$row['appointment_date']."</td>";
                                                echo "<td>".$row['appointment_time']."</td>";	
												echo "<td>".$row['address']."</td>";	
												echo "<td>".$row['doctor']."</td>";	
												echo "<td>".$row['medical_history']."</td>";
												echo "<td>".$row['insurance_info']."</td>";
                                                echo "<td>".$row['note']."</td>";
                                                echo "<td>".$row['next_visit']."</td>";
                                                echo "<td>".$row['medicine']."</td>";
                                                echo "<td>".$row['report']."</td>";	
												echo "<td>".$row['remark']."</td>";	
												echo "<td>".$row['note_doctor']."</td>";	
												echo "<td> <a href='appointment-edit.php?id=$row[id]'>Edit
                                                </a> |
												<a href='deleteappointment.php?id=$row[id]'>Delete
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
	