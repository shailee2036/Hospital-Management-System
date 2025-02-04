<?php

session_start();
error_reporting(0);
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
    $apply = $_POST['apply'];
    $job = $_POST['job'];

    $query = mysqli_query($con, "insert into  careers(id,first_name,last_name,address,date_of_birth,qualification,email,phone_number,work_experince,skill,apply_for,job_time)  value('$id','$nameFirst','$nameLast','$text2','$dob','$select','$email','$phone','$work','$skill','$apply','$job')");
    if ($query) {
        echo "<script>alert('Career has been successfully added.');</script>";
        echo "<script>window.location.href = 'career.php'</script>";

    } else {
        echo "<script>alert('Something Went Wrong. Please try again.');</script>";
    }


}
?>
<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
    <meta name="description">

    <title> CAREER | Hospital </title>
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons2/mobirise2.css">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.css">
    <link rel="stylesheet" href="assets/formstyler/jquery.formstyler.theme.css">
    <link rel="stylesheet" href="assets/datepicker/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/formoid-css/recaptcha.css">
    <link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">


</head>

<body>
  
<!--Navbar-->
    <section class="menu cid-rGsqBtahAB" once="menu" id="menu1-16">




        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <!-- <div class="container"> -->
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

                    <li class="nav-item">
                        <a class=" btn btn-sm btn-primary-outline display-4" href="appointment.php"
                            aria-expanded="false">
                            Appointment</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="admin.php" aria-expanded="false">
                            Login</a>
                    </li>
                </ul>
            </div>
            <!-- </div> -->
        </nav>
    </section>
   <br><br><br><br>
<!--Hero Section-->
    <section class="cid-rGtxb2K4QX" id="header2-2g">

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-12 col-lg-7 img-col">
                    <div class="mbr-figure">
                        <img src="doctor/career.jpg" alt="not found">
                    </div>

                </div>


                <div class="col-md-12 content align-left py-4 col-lg-5">

                    <h1 class="mbr-section-title align-left mbr-bold pb-3 mbr-fonts-style display-2"> "Empowering
                        Health, Building Futures: Your Career Awaits"</h1>
                    <p class="mbr-text pb-3 align-left mbr-fonts-style display-7">
                        Find out what you like doing best, and get someone to pay you for doing it.
                    </p>

                    <div class="align-left mbr-section-btn"><a class="btn btn-md btn-primary display-4"
                            href="contact.php">Appointment</a></div>

                </div>

            </div>
        </div>
    </section>
<!--Job form-->
    <section class="form cid-rGtxy1TdOd" id="form3-2m">


        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 style="text-align: center;    color: #ed6436; font-size: 250%;"
                        class="card-title mbr-bold mbr-fonts-style display-5">Job Form</h1>
                    <p style="text-align: center;" class="mbr-text pb-3 align-left mbr-fonts-style display-7">
                        Transforming Lives, One Role at a Time: Join Our Hospital Family</p>
                </div>

                <div class="col-lg-12 mx-auto mbr-form" data-form-type="formoid">
                    <!--Formbuilder Form-->
                    <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input
                            type="hidden" name="email" data-form-email="true">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some problem!</div>
                        </div>
                        <div class="dragArea form-row">
                            
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="nameFirst">
                                <h4>First Name</h4>
                                <input type="text" name="nameFirst" placeholder="First Name" data-form-field="nameFirst"
                                    class="form-control display-7" value="" id="nameFirst-form1-3l" required>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 form-group" data-for="nameLast">
                                <h4>Last Name</h4>
                                <input type="text" name="nameLast" placeholder="Last Name" data-form-field="nameLast"
                                    class="form-control display-7" value="" id="nameLast-form1-3l" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 form-group" data-for="text2">
                                <h4>Address</h4>
                                <input type="text" name="text2" placeholder="Address" data-form-field="text"
                                    class="form-control display-7" value="" id="text2-form1-3l"required>
                            </div>
                            <div data-for="date" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <h4>Date Of Birth</h4>
                                <input type="date" name="dob" placeholder="DOB" data-form-field="dob"
                                    class="form-control display-7" value="2023-02-06" id="dob" required>
                            </div>
                            <div data-for="select" class="col-lg-6 col-md-12 col-sm-12 select form-group">
                                <h4>Qualification</h4>
                                <select name="select" data-form-field="select" class="form-control display-7"
                                    id="skill" >
                                    <option value="">Select Qualification</option>
                                    <option value="MD(Cardiology)">MD(Cardiology) </option>
                                    <option value="DM(Neurology)">DM(Neurology)</option>
                                    <option value="MD(Psychiatry)">MD(Psychiatry)</option>
                                    <option value="MD(Psychiatry)">DM(Haematology)</option>
                                    <option value="MD(Psychiatry)">PhD(Paediatrict Surgery)</option>
                                    <option value="MD(Psychiatry)">MD(Gynaecology & Obstetrics)</option>
                                    <option value="MD(Psychiatry)">MD(Medicine)</option>
                                    <option value="MD(Psychiatry)">DM (Oncology)</option>
                                    <option value="MD(Psychiatry)"> MSc(Intensive Care Medicine)</option>
                                    <option value="MD(Psychiatry)">Bsc(Nursing)</option>
                                    <option value="MD(Psychiatry)">Other</option>
                                </select>
                            </div>
                            <div data-for="email" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <h4>Email</h4>
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email"
                                    class="form-control display-7" value="" id="email-form1-3l" required>
                            </div>
                            <div data-for="phone" class="col-lg-6 col-md-12 col-sm-12 form-group">
                                <h4>Phone Number</h4>

                                <input type="text" name="phone" placeholder="Phone" data-form-field="phone"
                                    class="form-control display-7" value="" id="phone-form1-3l" maxlength="10"
                                    minlength="10" pattern="^[6-9]\d{9}$" required>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 select form-group">
                                <h4>Work Experince</h4>
                                <input type="text" name="work" placeholder="Work Experince" data-form-field="work"
                                    class="form-control display-7" value="" id="work" required>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 select form-group">
                                <h4>Skill</h4>
                                <input type="text" name="skill" placeholder="Skill" data-form-field="skill"
                                    class="form-control display-7" value="" id="skill" required>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 select form-group">
                                <h4>Apply For</h4>
                                <select name="apply" data-form-field="select" class="form-control display-7" id="apply">
                                    <option value="Doctor">Doctor</option>
                                    <option value="Nurse">Nurse</option>
                                    <option value="Assistant">Assistant</option>
                                </select>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 select form-group">
                                <h4>Job Time</h4>
                                <select name="job" data-form-field="select" class="form-control display-7" id="job">
                                    <option value="Full-Time">Full-Time</option>
                                    <option value="Part-Time">Part-Time</option>
                                    <option value="Internship">Internship</option>
                                </select>

                            </div>

                            <div class="col-auto">
                                <button type="submit" name="submit" class="btn btn-primary display-7">SEND</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </section>
<!--Achievements Section-->
    <section class="progress-bars2 counters cid-rGtBgCg3f6" id="counters1-31">





        <div class="container">
            <h2 class="mbr-section-title mbr-bold pb-5 align-center mbr-fonts-style display-2">

                <div><span style="color: inherit; font-size: 3.6rem;">Our Achievements</span><br></div>
            </h2>

            <div class="row justify-content-center">
                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">OPERATION</h4>
                        <img src="doctor/operation.jpg" alt="not found">

                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            400</h3>

                    </div>
                </div>


                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">DEPARTMENTS</h4>
                        <img src="doctor/department.jpg" alt="not found">

                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            15</h3>

                    </div>
                </div>

                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">Doctors</h4>
                        <img src="doctor/doctor.jpg" alt="not found">

                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            40</h3>

                    </div>
                </div>

                <div class="card col-6 col-md-6 col-lg-3">
                    <div class="card-ico">
                        <h4 class="mbr-content-title mbr-semibold mbr-fonts-style display-4">AWARDS</h4>
                        <img src="doctor/award.jpg" alt="not found">

                    </div>
                    <div class="card-text">
                        <h3 class="count mbr-semibold mbr-fonts-style display-2">
                            321</h3>

                    </div>
                </div>



            </div>
        </div>
    </section>


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
                        <!--Formbuilder Form-->
                        <div class="google-map">
                            <iframe width="100%" height="200%" frameborder="0" scrolling="no" marginheight="0"
                                marginwidth="0"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.1574983535406!2d72.13475987580757!3d21.735418963131988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a0c40b36b27%3A0x78efa767f46d9844!2sITHub%20Software%20Solution%20%26%20Website%20Development!5e0!3m2!1sen!2sin!4v1706848546583!5m2!1sen!2sin"></iframe>
                        </div>
                        <!--Formbuilder Form-->
                    </div>
                </div>
            </div>
        </section>
    </footer>


    <section class="cid-rGsJ0Syn9D" id="footer1-17">





        <div class="container">
            <div class="media-container-row align-center mbr-white">
                <div class="col-12">
                <p class= " mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a href="#"
                        style="color:white">Shailee Shah</a>
                    </p>
                </div>
            </div>
        </div>
    </section>


    <script src="assets/web/assets/jquery/jquery.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/tether/tether.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>
    <script src="assets/mbr-tabs/mbr-tabs.js"></script>
    <script src="assets/mbr-switch-arrow/mbr-switch-arrow.js"></script>
    <script src="assets/smoothscroll/smooth-scroll.js"></script>
    <script src="assets/formstyler/jquery.formstyler.js"></script>
    <script src="assets/formstyler/jquery.formstyler.min.js"></script>
    <script src="assets/datepicker/jquery.datetimepicker.full.js"></script>
    <script src="assets/viewportchecker/jquery.viewportchecker.js"></script>
    <script src="assets/dropdown/js/nav-dropdown.js"></script>
    <script src="assets/dropdown/js/navbar-dropdown.js"></script>
    <script src="assets/theme/js/script.js"></script>
    <script src="assets/formoid/formoid.min.js"></script>
</body>

</html>