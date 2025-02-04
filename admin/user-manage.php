<?php
include_once("config.php");
$query = mysqli_query($con, "SELECT * FROM admin");
?>
<!DOCTYPE HTML>
	<html>
	<head>
		<title>Manage User | Hospital</title>
		
		
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
								<h3 class="title1">Manage User</h3>


								<button type="submit" name="submit" class="btn btn-default right"
									style="background-color:rgba(97, 100, 193, 0.85);color:#fff;margin-left: 90%;"><a
										href="add-user.php" style="color:#fff;">ADD User</a></button>


								<div class="table-responsive bs-example widget-shadow">
									<h4>Update User:</h4>
									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Username</th>
												<th>Password</th>
												<th>Registration Date</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											while ($row = mysqli_fetch_array($query)) {
												echo "<tr>";
												echo "<td>".$row['id']."</td>";	
												echo "<td>".$row['username']."</td>";	
												echo "<td>".$row['password']."</td>";
												echo "<td>".$row['adminregdate']."</td>";	
												echo "<td> <a href='user-edit.php?id=$row[id]'>Edit
															</a> |
															<a href='delete.php?id=$row[id]'>Delete
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
	