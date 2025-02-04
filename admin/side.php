<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="side.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>


    <title>Dashboard Sidebar Menu</title>

    <style>
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80vh;
    }
    .card {
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 40px;
        text-align: center;
        max-width: 500px;
        width: 100%;
    }
    .card h1 {
        font-size: 36px;
        margin-bottom: 0px;
        color: #333;
    }
    .card p {
        font-size: 18px;
        margin-bottom: 0px;
        color: #666;
    }
    
    .fab {
        font-size: 48px;
        margin-bottom: 20px;
        color: #007bff;
    }
</style>

</head>

<body>
<div class="col-lg-2">
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="../doctor/logo.jpg" alt="">
                </span>

                <div class="text logo-text">
                    <span class="name"> Hospital</span>

                </div>
            </div>

            <i class='bx bx-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu">

            

                <li class="nav-link">
                       

                    <li class="nav-link">
                        <a href="side.php">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>

                    </li>


                    <li class="nav-link">
                        <a href="user-manage.php">
                            <i class='bx bx-user icon'></i>
                            <span class="text nav-text">User</span>
                        </a>

                    </li>

                    <li class="nav-link">
                        <a href="career-manage.php">
                            <i class="fa fa-graduation-cap icon" aria-hidden="true"></i>
                            <span class="text nav-text">Manage Jobs</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="contact-manage.php">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Contact Us</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="appointment-manage.php">
                            <i class='bx bx-heart icon'></i>
                            <span class="text nav-text">Appointments</span>
                        </a>
                    </li>

            
                <div class="bottom-content">
                <li class="">
                    <a href="../admin.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>




            </div>

        

            </div>
        </div>

        <script src="side.js"></script>
        </nav>

        </div>
        <div class="col-lg-10">

        <div class="container">
    <div class="card">
        <i class="fas fa-user-cog fab"></i>
        <h1>Welcome to the Hospital Management system</h1>
        <p>This is your dashboard where you can manage everything.</p>
       
    </div>
</div>


        </div>
</body>

</html>