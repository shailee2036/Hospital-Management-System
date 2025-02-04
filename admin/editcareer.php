<?php
include "config.php";
	if (isset($_POST['submit'])) {
        $id = $_POST['id'];
		$nameFirst = $_POST['nameFirst'];
		$nameLast = $_POST['nameLast'];
		$text2 = $_POST['text2'];
		$dob = $_POST['dob'];
		$select = $_POST['select'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$work = $_POST['work'];
		$skill = $_POST['skill'];
		// $apply = filter_var($_POST['apply'], FILTER_SANITIZE_STRING);
		$apply=$_POST['apply'];
		$job = $_POST['job'];
		$date = $_POST['date'];
		$status = $_POST['status'];
		$jdate = $_POST['jdate'];
        $query = mysqli_query($con, "UPDATE careers SET first_name='$nameFirst', last_name='$nameLast',address='$text2',date_of_birth='$dob',qualification='$select',email='$email',phone_number='$phone',work_experince='$work',skill='$skill', apply_for='$apply', job_time='$job',date='$date',status='$status', joiny='$jdate' WHERE id= $id");

		if ($query) {
			echo '<script>alert("Career has been Updated")</script>';
            echo "<script>window.location.href='career-manage.php'</script>";
		} else {
			echo '<script>alert("Something Went Wrong. Please try again.")</script>';
		}
	}
	?>
