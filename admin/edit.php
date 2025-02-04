<?php
include_once("config.php");
if (isset($_POST['submit'])) 
{
	$id = $_POST['id'];
	$pass = $_POST['pass'];
	$username = $_POST['username'];
	$contactnumber = $_POST['contactnumber'];
		$query = mysqli_query($con, "UPDATE admin SET password= '$pass', username= '$username', mobile_number= '$contactnumber' WHERE id= $id");
		
		if ($query) {

			echo '<script>alert("User has been Updated")</script>';
			echo "<script>window.location.href='user-manage.php'</script>";
			
		} else {
			echo '<script>alert("Something Went Wrong. Please try again.")</script>';
		}

	}
?>
