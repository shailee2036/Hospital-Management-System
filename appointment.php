<?php
session_start();
error_reporting(0);
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

    $query = mysqli_query($con, "insert into  appointment(name,mobile_number,email,date_of_birth,gender,services,appointment_date,appointment_time,address,doctor,medical_history,insurance_info,note)  value('$name','$phone','$email','$dob','$gender','$services','$adate','$aptime','$Address','$prdr','$medhis','$insinfo','$note')");
    if ($query) {
        echo "<script>alert('Appointment has been successfully added.');</script>";
        echo "<script>window.location.href = 'appointment.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }


}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment|  Hospital</title>
</head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
<meta name="description">


<link rel="stylesheet" href="appointment.css"><!--Appointment-->
<link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
<link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet" href="assets/tether/tether.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/as-pie-progress/css/progress.min.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
<link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
<link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="stylesheet" href="assets/formoid-css/recaptcha.css">
<link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
<link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
<link rel="stylesheet" href="appointment.css">

<body>
<!--NavBar-->
    <section class="menu cid-rGsqBtahAB" once="menu" id="menu1-1a">

        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg" style="background-color:white">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="doctor/logo.jpg" alt="not found" title="" style="height: 3rem;">
                    </a>
                </span>
                <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-5" href="index.php">
                        Hospital</a></span>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="index.php" aria-expanded="false">
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="services.php" aria-expanded="false">
                            Our Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="about.php" aria-expanded="false">
                            About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="doctors.php" aria-expanded="false">
                            Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="departments.php" aria-expanded="false">
                            Departments</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="career.php" aria-expanded="false">
                            Careers</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="contact.php" aria-expanded="false">
                            Contact us</a>
                    </li>

                    <div class="navbar-buttons mbr-section-btn"><a class="btn btn-sm btn-primary-outline display-4"
                            href="appointment.php">Appointment </a></div>


                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="admin.php" aria-expanded="false">
                            Login</a>
                    </li>

            </div>
            </div>
        </nav>
    </section>
    <br><br><br><br>
<!--Hero Section-->
    <section class="cid-rGsOE1E5qe" id="header1-1k">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 content align-left py-4 col-lg-5 ">

                    <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-2">We take Care of
                        Your Healthy Life</h1>
                    <p class="mbr-text pb-3 align-left mbr-fonts-style display-7"> A Person who has good physical health
                        is likely to have bodily functions and processes working at their peak.</p>

                    <div class="align-left mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                            href="contact.php">Enquire now</a></div>

                </div>

                <div class="col-md-12 col-lg-7 img-col">
                    <div class="mbr-figure">
                        <img src="doctor/appointment.jpg" alt="not found">
                    </div>

                </div>
            </div>
        </div>
    </section>
<!--Appointment Form-->
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 style="text-align: center;    color: #ed6436; font-size: 250%;"
                    class="card-title mbr-bold mbr-fonts-style display-5">Appointment Form</h1>
                <p style="text-align: center;" class="mbr-text pb-3 align-left mbr-fonts-style display-7"> Book your
                    appointment with Doctor.</p>
                <form method="post">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    required="true">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="phone">Mobile Number</label>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone"
                                    required="true" maxlength="10" minlength="10" pattern="^[6-9]\d{9}$">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="email">Email</label>
                                <input type="email" class="form-control" id="appointment_email" placeholder="Email"
                                    name="email" required="true">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="dob">Date Of Birth</label>
                                    <input type="date" class="form-control" placeholder="DOB" name="dob" id='dob'
                                        required="true">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="gender">Gender</label>
                                    <select name="gender" id="gender" required="true" class="form-control">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="TransGender">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="Subject">Services</label>
                                <select name="services" id="services" required="true" class="form-control">
                                    <option value="">Select Services</option>
                                    <option value="Surgery">Surgery</option>
                                    <option value="Cardiology">Cardiology</option>
                                    <option value="Neurology">Neurology</option>
                                    <option value="Psychiatryt">Psychiatryt</option>
                                    <option value="Haematology">Haematology</option>
                                    <option value="Paediatric">Paediatric</option>
                                    <option value="Gynaecology & Obstetrics">Gynaecology & Obstetrics</option>
                                    <option value="Oncology">Oncology</option>
                                    <option value="Laboratory">Laboratory</option>
                                </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="textarea">Appointment Date</label>
                                    <input type="date" class="form-control appointment_date" placeholder="Date"
                                        name="adate" id='adate' required="true">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="aptime">Appointment Time</label>
                                    <select name="aptime" id="aptime" required="true" class="form-control">
                                        <option value="">Select Time</option>
                                        <option value="9:00 A.M - 11:00 A.M">9:00 A.M - 11:00 A.M</option>
                                        <option value="11:00 A.M - 1:00 P.M">11:00 A.M - 1:00 P.M</option>
                                        <option value="1:00 P.M - 3:00 P.M">1:00 P.M - 3:00 P.M</option>
                                        <option value="3:00 P.M - 5:00 P.M">3:00 P.M - 5:00 P.M</option>
                                        <option value="5:00 P.M - 7:00 P.M">5:00 P.M - 7:00 P.M</option>
                                        <option value="7:00 P.M - 9:00 P.M">7:00 P.M - 9:00 P.M</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="Address">Address</label>
                                <input type="text" class="form-control" id="Address" placeholder="Address"
                                    name="Address" required="true">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="prdr">Doctor</label>
                                    <select name="prdr" id="prdr" required="true" class="form-control" required="true">
                                        <option value="">Select Doctor</option>
                                        <option value="Dr. Varun Sibal (Cardiologist)">Dr. Varun Sibal (Cardiologist)
                                        </option>
                                        <option value="Dr. Prakash Bhatt (Neurologist)">Dr. Prakash Bhatt (Neurologist)
                                        </option>
                                        <option value="Dr. Jilan Shah(Psychiatrist)">Dr. Jilan Shah(Psychiatrist)
                                        </option>
                                        <option value="Dr. Mitesh Halvawala(Haematologist)">Dr. Mitesh
                                            Halvawala(Haematologist)</option>
                                        <option value="Dr. Bhushit Gadhiya(Paediatrist)">Dr. Bhushit
                                            Gadhiya(Paediatrist)</option>
                                        <option value="Dr. Krupaba Vala(Gynaecologist & Obstetrics)">Dr. Krupaba
                                            Vala(Gynaecologist & Obstetrics)</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                <label class="control-label" for="medhis">Medical History</label>
                                <input type="text" class="form-control" id="medhis" placeholder="Medical History"
                                    name="medhis" required="true">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="insinfo">Insurance Information</label>
                                <input type="text" class="form-control" id="insinfo" placeholder="Insurance Information"
                                    name="insinfo" required="true">
                            </div>

                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <label class="control-label" for="note">Note</label>
                                <input type="text" class="form-control" id="note" placeholder="Note" name="note"
                                    required="true">
                            </div>

                            <div class="col-md-12">
                                <div class="form-group text-center">
                                    <button type="submit" name="submit" class="btn btn-primary btn-lg active">Book
                                        Appointment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer>
        <section class="form cid-rGtxJnmlVA" id="footer2-2o">


            <div class="container">
                <div class="row">


                    <div class="col-md-6 title-col align-left col-lg-3">

                        <div class="item-wrap pb-4">
                            <div class="icons-wrap" id="middle">
                                <img src="doctor/logo.jpg" alt="not found">
                                <h2 class="title1 align-left p-0 mbr-bold mbr-fonts-style display-5">Hospital
                                </h2>
                            </div>
                        </div>
                        <div class="socicon-wrap" id="center">
                            <span class="mbr-iconfont socicon-twitter socicon"></span>
                            <span class="mbr-iconfont socicon-instagram socicon"></span>
                            <span class="mbr-iconfont socicon-youtube socicon"></span>

                        </div>


                    </div>


                    <div class="col-md-6 col-lg-3">

                        <h2 class="title align-left mbr-bold pb-2 mbr-fonts-style display-5"> Hospital Address</h2>

                        <div class="align-wrap align-left">

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">

                                    <span class="mbr-iconfont mbrib-pin"></span>

                                    <h3 class="icon-title align-left mbr-regular mbr-fonts-style display-4"
                                        id="address">
                                         Bhavnagar, Gujarat 364001</h3>

                                </div>


                            </div>

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">
                                    <span class="mbr-iconfont mbrib-clock"></span>
                                    <h3 class="icon-title mbr-regular mbr-fonts-style display-4">Mon - Sun: 8AM -
                                        8PM</h3>
                                </div>
                            </div>

                            <div class="item-wrap">
                                <div class="icons-wrap pb-2">

                                    <span class="mbr-iconfont mbrib-mobile2"></span>

                                    <h3 class="icon-title align-left mbr-regular mbr-fonts-style display-4">
                                        <a href="tel:9328256707">9328256707</a>
                                    </h3>


                                </div>

                            </div>

                        </div>

                    </div>


                    <div class="col-md-6 col-lg-3">


                        <h2 class="title mbr-bold align-left pb-2 mbr-fonts-style display-5">Quick links</h2>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="index.php">Home</a></h3>



                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="services.php">Our Services</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="about.php">About us</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="appointment.php">Appointment</a></h3>

                        <h3 class="links-title align-left pb-2 mbr-regular mbr-fonts-style display-4"><a
                                href="contact.php">Contact Us</a></h3>





                    </div>




                    <div class="col-md-6 col-lg-3 mbr-form" data-form-type="formoid">

                        <div class="google-map">
                            <iframe width="100%" height="200%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.1574983535406!2d72.13475987580757!3d21.735418963131988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a0c40b36b27%3A0x78efa767f46d9844!2sITHub%20Software%20Solution%20%26%20Website%20Development!5e0!3m2!1sen!2sin!4v1706848546583!5m2!1sen!2sin"></iframe>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </footer>

    <section class="cid-rGsJ0Syn9D" id="footer1-1b">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">
                    <p class="mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a href="#"
                            style="color:white">Shailee Shah</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>