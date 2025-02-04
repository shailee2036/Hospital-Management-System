<?php

session_start();
error_reporting(0);
include "config.php";


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $mobilenumber = $_POST['mobilenumber'];
    $email = $_POST['email'];

    $query = mysqli_query($con, "insert into  contact_us(name,mobile_number,email	
    )  value('$username','$mobilenumber','$email')");
    if ($query) {
        echo "<script>alert('Contact has been successfully added.');</script>";
        echo "<script>window.location.href = 'contact.php'</script>";

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

    <title>CONTACT |  Hospital</title>
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
           
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="index.php">
                        <img src="doctor/logo.jpg" alt="Mobirise" title="" style="height: 3rem;">
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
                            href="appointment.php">Appointment</a></div>

                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="admin.php" aria-expanded="false">

                            Login</a>
                    </li>
            </div>
            </div>
        </nav>
    </section>
   <br><br><br><br>

    <section class="features1 cid-rGtBD2aWsp" id="map1-39">
        <div class="container-fluid">
            <div class="row">
<!--Map Section-->
                <div class="col-md-12 svg-col col-lg-8">
                    <svg width="100%" height="100%" preserveAspectRatio="none" viewBox="0 0 600 355" style="">
                        <path fill="red"
                            d="M-12.90108,-24.49671L-33.23076,13.96482C44.79122,45.83296 142.04396,30.44834 222.8132,16.71208C303.58244,2.97582 334.35167,35.94286 352.48354,72.20659C370.61541,108.47032 384.90111,119.45933 437.64838,130.44835C490.39564,141.43736 499.18684,144.18462 518.41761,164.51429C537.64839,184.84395 539.82415,209.11209 532.41759,235.16484C525.01102,261.21758 500.81316,277.79341 491.75824,284.61539C482.70332,291.43736 462.90108,303.06814 437.91209,306.04396C412.9231,309.01978 407.40657,311.3099 353.2967,307.14286C299.18683,302.97582 292.02196,305.26594 268.68132,306.59341C245.34068,307.92088 228.85716,312.31647 172.8132,320.00879C116.76924,327.70111 84.35166,337.04177 44.79122,334.84396C5.23078,332.64615 -11.27474,328.89231 -32.96704,323.62638C-54.65933,318.36044 -31.03296,380.44836 -30.76923,380.21978C-31.03296,380.44836 152.48353,393.08572 154.68134,392.53627C156.87914,391.98682 504.68135,393.63517 504.3956,393.40659C504.68135,393.63517 659.07696,385.39341 658.79121,385.16484C659.07696,385.39341 642.59344,177.7011 644.24179,174.40439C645.89014,171.10769 638.19784,20.00878 637.09894,9.01977C636.00003,-1.96924 643.69234,-47.57364 625.56047,-48.67254C607.4286,-49.77144 280.50552,-39.33188 279.95606,-40.43078C279.40661,-41.52968 208.52748,-28.34287 153.58243,-32.18902C98.63738,-36.03518 42.04397,-29.44177 -12.90108,-24.49671z"
                            id="svg_10" class=""></path>
                    </svg>

                    <div class="google-map"> <iframe width="100%" height="200%" frameborder="0" scrolling="no"
                            marginheight="0" marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.1574983535406!2d72.13475987580757!3d21.735418963131988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f5a0c40b36b27%3A0x78efa767f46d9844!2sITHub%20Software%20Solution%20%26%20Website%20Development!5e0!3m2!1sen!2sin!4v1706848546583!5m2!1sen!2sin"></iframe>
                    </div>
                </div>


<!--Card info Section-->
                <div class="card col-12 col-md-6 col-lg-5 card-col m-auto">
                    <div class="card-head">
                        <img src="doctor/contact.jpg" alt="" title="">
                    </div>
                    <div class="card-wrapper">
                        <div class="item">
                            <div class="card-img">
                                <span class="mbr-iconfont mbrib-pin"></span>
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-bold mbr-fonts-style display-5">Address</h4>
                                <p class="mbr-text pb-3 mbr-fonts-style display-4">Bhavnagar, Gujarat 364001
                                </p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card-img">
                                <span class="mbr-iconfont mbrib-alert"></span>
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-bold mbr-fonts-style display-5">Telephone</h4>
                                <p class="mbr-text pb-3 mbr-fonts-style display-4"><a href="tel:9328256707">9328256707
                                    </a></p>
                            </div>
                        </div>

                        <div class="item">
                            <div class="card-img">
                                <span class="mbr-iconfont mbrib-letter"></span>
                            </div>
                            <div class="card-box">
                                <h4 class="card-title mbr-bold mbr-fonts-style display-5">E-mail</h4>
                                <p class="mbr-text pb-3 mbr-fonts-style display-4"><a
                                        href="mailto:shailee2036@gmail.com">shailee2036@gmail.com</a></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<!--Contact Us Form -->
    <section class="form cid-rGtxy1TdOd" id="form3-2m">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-6 my-auto img-col">
                    <div class="mbr-figure">
                        <img src="doctor/receptionist2 copy.jpg" alt="not found">
                    </div>

                </div>

                <div class="col-lg-6 m-auto mbr-form" data-form-type="formoid">
                    <!--Formbuilder Form-->
                    <form method="POST" class="mbr-form form-with-styler" data-form-title="Form Name"><input
                            type="hidden" name="email" data-form-email="true"
                            value="yQKlLoRFWk8KujFoZO1QUmoPXBZebeeoopEVqVEiyrzK8BVNOuPSQR3fFbj+RI5zGalFrmA3Pq6UBai4fxKGopF/himIWIQV8LVYpwGHKYJmRyc/t+cNTbtMA+2u+DKQ.RylYoDTBAPqUrGlFg0b0qOH7Ei4VsGyd8Abo5iQyNcPAiHo18Vmv8zy5hKBe0iGr85KNpFaWu5N/wez9FkvD3mmofabI7+WBqmJZ+7l5f/IVNLjXU3koWy+foCel4oKz">
                        <div class="form-row">
                            <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for
                                filling out the form!</div>
                            <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">Oops...!
                                some problem!</div>
                        </div>
                        <div class="dragArea form-row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h4 class="mbr-semibold mbr-fonts-style display-7">Do you want to be Healthy?
                                </h4>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h5 class="mbr-bold pb-3 mbr-fonts-style display-2">Contact Us</h5>
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <!-- <input type="id" name="id" data-form-field="select"
                                    class="form-control display-7" id="select-form3-2m" placeholder="id"> -->
                            </div>
                            <div data-for="select" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="text" name="username" data-form-field="select"
                                    class="form-control display-7" id="select-form3-2m" placeholder="Enter your name.." required>
                            </div>
                            <div data-for="number" class="col-lg-12 col-md-12 col-sm-12 form-group">

                                <input type="tel" name="mobilenumber" placeholder="Enter Your Mobile Number..."
                                    id="number-form3-2m" class="form-control display-7" data-form-field="number" required>

                            </div>
                            <div data-for="email" class="col-lg-12 col-md-12 col-sm-12 form-group">
                                <input type="email" name="email" placeholder="E-mail" data-form-field="email"
                                    class="form-control display-7" value="" id="email-form3-2m" required>
                            </div>
                            <div class="col-auto">
                                <button type="submit" name="submit" class="btn btn-primary display-7">SEND</button>
                            </div>
                        </div>
                    </form>
                    <!--Formbuilder Form-->
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
                <p class=" mbr-text mb-0 mbr-fonts-style display-7">Designed and Developed by <a href="#"
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