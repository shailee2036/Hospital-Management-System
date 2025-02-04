<?php
include "config.php";
$id = $_GET['id'];
$query = mysqli_query($con, "DELETE FROM contact_us WHERE id=$id");
if ($query) {
    echo '<script>alert("Contact Us has been deleted")</script>';
    echo "<script>window.location.href='contact-manage.php'</script>";
    
} else {
    echo '<script>alert("Something Went Wrong. Please try again.")</script>';
}

?>