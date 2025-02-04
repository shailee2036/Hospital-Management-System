<?php
include_once("config.php");
$id = $_GET['id'];
$query = mysqli_query($con, "SELECT * FROM appointment WHERE id = '$id'");
while ($resultData = mysqli_fetch_array($query)) {
    $name = $resultData['name'];
    $phone = $resultData['mobile_number'];
    $email = $resultData['email'];
    $dob = $resultData['date_of_birth'];
    $gender = $resultData['gender'];
    $services = $resultData['services'];
    $adate = $resultData['appointment_date'];
    $aptime = $resultData['appointment_time'];
    $Address = $resultData['address'];
    $prdr = $resultData['doctor'];
    $medhis = $resultData['medical_history'];
    $insinfo = $resultData['insurance_info'];
    $note = $resultData['note'];
    $nextvisit = $resultData['next_visit'];
    $medicine = $resultData['medicine'];
    $report = $resultData['report'];
    $remark = $resultData['remark'];
    $ynote = $resultData['note_doctor'];
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title>Appointment Edit| Hospital</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic'
        rel='stylesheet' type='text/css'>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <link href="css/custom.css" rel="stylesheet">
</head>

<body class="cbp-spmenu-push">
    <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2">
            <?php include_once('side.php'); ?>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10">
            <div class="main-content">
                <div id="page-wrapper">
                    <div class="main-page">
                        <div class="forms">
                            <h3 class="title1">Update Career</h3>
                            <div class="form-grids row widget-shadow" data-example-id="basic-forms">
                                <div class="form-title">
                                    <h4>Update Career:</h4>
                                </div>
                                <div class="form-body">
                                    <form name="update_career" method="post" action="editappointment.php">
                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" id="name" placeholder="Name"
                                                name="name" value="<?php echo $name; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone">Mobile Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                placeholder="Phone" value="<?php echo $phone; ?>" required="true"
                                                maxlength="10" pattern="[0-9]+">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="appointment_email"
                                                placeholder="Email" name="email" value="<?php echo $email; ?>"
                                                required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="dob">Date Of Birth</label>
                                            <input type="date" class="form-control" placeholder="DOB" name="dob"
                                                id='dob' value="<?php echo $dob; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" id="gender" required="true" class="form-control">
                                                <option value="<?php echo $gender; ?>">
                                                    <?php echo $gender; ?>
                                                </option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="TransGender">TransGender</option>
</select>
                                        </div>
                                        <div class="form-group">
                                            <label for="services">Services</label>
                                            <select name="services" id="services" required="true" class="form-control">
                                                <option value="<?php echo $services; ?>">
                                                    <?php echo $services; ?>
                                                </option>
                                                <option value="Surgery">Surgery</option>
                                                <option value="Cardiology">Cardiology</option>
                                                <option value="Neurology">Neurology</option>
                                                <option value="Psychiatryt">Psychiatryt</option>
                                                <option value="Haematology">Haematology</option>
                                                <option value="Paediatric">Paediatric</option>
                                                <option value="Gynaecology & Obstetrics">Gynaecology & Obstetrics
                                                </option>
                                                <option value="Oncology">Oncology</option>
                                                <option value="Laboratory">Laboratory</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="adate">Appointment Date</label>
                                            <input type="date" class="form-control " placeholder="Date" name="adate"
                                                id='adate' value="<?php echo $adate; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="aptime">Appointment Time</label>
                                            <select name="aptime" id="aptime" required="true" class="form-control">
                                                <option value="<?php echo $aptime; ?>">
                                                    <?php echo $aptime; ?>
                                                <option value="9:00 A.M - 11:00 A.M">9:00 A.M - 11:00 A.M</option>
                                                <option value="11:00 A.M - 1:00 P.M">11:00 A.M - 1:00 P.M</option>
                                                <option value="1:00 P.M - 3:00 P.M">1:00 P.M - 3:00 P.M</option>
                                                <option value="3:00 P.M - 5:00 P.M">3:00 P.M - 5:00 P.M</option>
                                                <option value="5:00 P.M - 7:00 P.M">5:00 P.M - 7:00 P.M</option>
                                                <option value="7:00 P.M - 9:00 P.M">7:00 P.M - 9:00 P.M</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="Address">Address</label>
                                            <input type="text" class="form-control" id="Address" placeholder="Address"
                                                name="Address" value="<?php echo $Address; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="apply">Apply For</label>
                                            <label for="prdr">Doctor</label>
                                            <select name="prdr" id="prdr" required="true" class="form-control"
                                                required="true">
                                                <option value="<?php echo $prdr; ?> ">
                                                    <?php echo $prdr; ?>
                                                <option value="Dr. Varun Sibal (Cardiologist)">Dr. Varun Sibal
                                                    (Cardiologist)</option>
                                                <option value="Dr. Prakash Bhatt (Neurologist)">Dr. Prakash Bhatt
                                                    (Neurologist)</option>
                                                <option value="Dr. Jilan Shah(Psychiatrist)">Dr. Jilan
                                                    Shah(Psychiatrist)</option>
                                                <option value="Dr. Mitesh Halvawala(Haematologist)">Dr. Mitesh
                                                    Halvawala(Haematologist)</option>
                                                <option value="Dr. Bhushit Gadhiya(Paediatrist)">Dr. Bhushit
                                                    Gadhiya(Paediatrist)</option>
                                                <option value="Dr. Krupaba Vala(Gynaecologist & Obstetrics)">Dr. Krupaba
                                                    Vala(Gynaecologist & Obstetrics)</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="medhis">Medical History</label>
                                            <input type="text" class="form-control" id="medhis"
                                                placeholder="Medical History" name="medhis"
                                                value="<?php echo $medhis; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="insinfo">Insurance Information</label>
                                            <input type="text" class="form-control" id="insinfo"
                                                placeholder="Insurance Information" name="insinfo"
                                                value="<?php echo $insinfo; ?>" required="true">
                                        </div>
                                        <div class="form-group">
                                            <label for="note">Note</label>
                                            <input type="text" class="form-control" id="note" placeholder="Note"
                                                name="note" value="<?php echo $note; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="nextvisit">Next Appointment</label>
                                            <input type="date" class="form-control" id="nextvisit"
                                                placeholder="Next Appointment" name="nextvisit"
                                                value="<?php echo $nextvisit; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="medicine">Medicine List</label>
                                            <input type="text" class="form-control" id="medicine"
                                                placeholder="Medicine List" name="medicine"
                                                value="<?php echo $medicine; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="report">Report</label>
                                            <input type="text" class="form-control" id="report" placeholder="Report"
                                                name="report" value="<?php echo $report; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="remark">Remark</label>
                                            <input type="text" class="form-control" id="remark" placeholder="Remark"
                                                name="remark" value="<?php echo $remark; ?>" required="true">
                                        </div>

                                        <div class="form-group">
                                            <label for="ynote">Your Note</label>
                                            <input type="text" class="form-control" id="ynote" placeholder="Your Note"
                                                name="ynote" value="<?php echo $ynote; ?>" required="true">
                                        </div>

                                        <input type="hidden" name="id" value=<?php echo $_GET['id']; ?>></td>

                                        <button type="submit" name="submit" class="btn btn-default">Update</button>
                                    </form>
                                </div>

                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>

</html>