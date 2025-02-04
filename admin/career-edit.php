<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM careers WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
    $nameFirst = $resultData['first_name'];
	$nameLast = $resultData['last_name'];
	$text2= $resultData['address'];
	$dob= $resultData['date_of_birth'];
	$select = $resultData['qualification'];
	$email = $resultData['email'];
    $phone = $resultData['phone_number'];
	$work = $resultData['work_experince'];
	$skill = $resultData['skill'];
    $apply = $resultData['apply_for'];
	$job = $resultData['job_time'];
	$date= $resultData['date'];
    $status = $resultData['status'];
	$jdate = $resultData['joiny'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Career Edit|  Hospital</title>
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
							<h3 class="title1">Update Career</h3>
							<div class="form-grids row widget-shadow" data-example-id="basic-forms">
								<div class="form-title">
									<h4>Update Career:</h4>
								</div>
								<div class="form-body">
									<form name="update_career" method="post" action="editcareer.php">
                                    <div class="form-group">
													<label for="nameFirst">First Name</label>
													<input type="text" id="nameFirst" name="nameFirst" class="form-control"
														placeholder="First Name" value="<?php echo $nameFirst; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="nameLast">Last Name</label>
													<input type="text" id="nameLast" name="nameLast" class="form-control"
														placeholder="Last Name" value="<?php echo $nameLast; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="text2">Address</label>
													<input type="text" id="text2" name="text2" class="form-control"
														placeholder="Address" value="<?php echo $text2; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="dob">Date Of Birth</label>
													<input type="date" id="dob" name="dob" class="form-control"
														placeholder="DOB" value="<?php echo $dob; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="select">Qualification</label>
													<select name="select" data-form-field="select" class="form-control"
														id="skill" required="true">
														<option value="<?php echo $select; ?>">
															<?php echo $select; ?>
														</option>
														<option value="MD(CARDDI0LOGY)">MD(CARDDI0LOGY) </option>
														<option value="DM(Neurology)">DM(Neurology)</option>
														<option value="MD(Psychiatry)">MD(Psychiatry)</option>
													</select>
												</div>
												<div class="form-group">
													<label for="email">Email</label>
													<input type="email" id="email-form1-3l" name="email" class="form-control"
														placeholder="E-mail" value="<?php echo $email; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="phone">Phone Number</label>
													<input type="text" name="phone" id="phone-form1-3l" placeholder="Phone"
														class="form-control" required="true"
														value="<?php echo $phone; ?>" maxlength="10"
														pattern="[0-9]+">
												</div>
												<div class="form-group">
													<label for="work"></label> Work Experince
													<input type="text" name="work" placeholder="Work Experince" id="work"
														class="form-control" placeholder="Work Experince"
														value="<?php echo $work; ?>" required="true">
												</div>
												<div class="form-group">
													<label for="skill">Skill</label>
													<input type="text" name="skill" placeholder="Skill" id="skill"
														class="form-control" value="<?php echo $skill; ?>"
														required="true">
												</div>
												<div class="form-group">
													<label for="apply">Apply For</label>
													<select name="apply" data-form-field="select" class="form-control"
														id="apply" required="true">

														<option value="<?php echo $apply; ?> ">
															<?php echo $apply; ?>
														</option>
														<option value="Doctor">Doctor</option>
														<option value="Nurse">Nurse</option>
														<option value="Assistant">Assistant</option>
													</select>
												</div>
												<div class="form-group">
													<label for="job">Job Time</label>
													<select name="job" data-form-field="select" class="form-control" id="job"
														required="true">
														<option value="<?php echo $job; ?> ">
															<?php echo $job; ?>
														</option>
														<option value="Full-Time">Full-Time</option>
														<option value="Part-Time">Part-Time</option>
														<option value="Internship">Internship</option>
													</select>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1"> Interview Date</label>
													<input type="date" id="date" name="date" class="form-control"
														placeholder="Date" value="<?php echo $date; ?>" required="true">
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">Status</label>
													<select name="status" data-form-field="select" class="form-control"
														id="status" required="true">
														<option value="<?php echo $status; ?> ">
															<?php echo $status; ?>
														</option>
														<option value="Accept">Accept</option>
														<option value="Reject">Reject</option>
													</select>
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1"> Joining Date</label>
													<input type="date" id="jdate" name="jdate" class="form-control"
														placeholder="Joining Date" value="<?php echo $jdate; ?>"
														required="true">
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