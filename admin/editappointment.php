<?php
include "config.php";
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $services = $_POST['services'];
    $adate = $_POST['adate'];
    $aptime = $_POST['aptime'];
    $Address = $_POST['Address'];
    $prdr = $_POST['prdr'];
    $medhis = $_POST['medhis'];
    $insinfo = $_POST['insinfo'];
    $note = $_POST['note'];
    $nextvisit = $_POST['nextvisit'];
    $medicine = $_POST['medicine'];
    $report = $_POST['report'];
    $remark = $_POST['remark'];
    $ynote = $_POST['ynote'];
    $query = mysqli_query($con, "UPDATE appointment SET name='$name', mobile_number='$phone',email='$email',date_of_birth='$dob',gender='$gender',services='$services',appointment_date='$adate',appointment_time='$aptime',address='$Address', doctor='prdr', medical_history='$medhis',insurance_info='$insinfo',note='$note', next_visit='$nextvisit',medicine='$medicine',report='$report',remark='$remark',note_doctor='$ynote' WHERE id= $id");

    if ($query) {
        echo '<script>alert("Appointment has been Updated")</script>';
        echo "<script>window.location.href='appointment-manage.php'</script>";
    } else {
        echo '<script>alert("Something Went Wrong. Please try again.")</script>';
    }
}
?>