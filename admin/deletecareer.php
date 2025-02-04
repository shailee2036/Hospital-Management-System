<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM careers WHERE id=$id");
if ($query) {

    echo '<script>alert("Career has been deleted")</script>';
    echo "<script>window.location.href='career-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>