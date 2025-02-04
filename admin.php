<?php
include "config.php";


if(isset($_POST['submit'])){

    $uname = $_POST['user'];
    $password = $_POST['pass'];


    if ($uname != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from admin where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: admin/side.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="shortcut icon" href="doctor/logo.jpg" type="image/x-icon">
  <title>LOGIN | Hospital </title>
  <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css'>
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Poppins&amp;display=swap'>
<link rel="stylesheet" href="admin.css">

</head>
<body>

<div class="wrapper">
  <div class="login_box">
  <form method="post" action="">
    <div class="login-header">
      <span>Login</span>
    </div>
    
    <div class="input_box">
      <input type="text" name="user"  class="input-field" placeholder="Username" required>
      <i class="bx bx-user icon" style="color: #48fcff;"></i>

    </div>

    <div class="input_box">
      <input type="password" name="pass" id="pass" class="input-field" placeholder="Password" required>
     <i class="bx bx-lock-alt icon" style="color: #48fcff;"></i>
    </div>

    <div class="input_box" >
      <input type="submit" class="input-submit" value="Login" name="submit" >
    </div>

    <div class="input_box">
        <a href="index.php" class="back">Back to Home</a>
    </div>
</form>
  </div>
</div>

  
</body>
</html>