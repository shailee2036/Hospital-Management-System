<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM admin WHERE id=$id");
if ($query) {

    echo '<script>alert("User has been deleted")</script>';
    echo "<script>window.location.href='user-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>