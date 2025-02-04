<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM appointment WHERE id=$id");
if ($query) {

    echo '<script>alert("Appointment has been deleted")</script>';
    echo "<script>window.location.href='appointment-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>