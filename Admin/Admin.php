<?php
session_start();

if(!isset($_SESSION['id'])||
$_SESSION['role'] != "Admin"){
    echo $_SESSION['role'];
    // header("Location: ./Login form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <!-- ----------HEADER----------- -->

    <header class="header">
        <div class="logo"><img src="../assets/Logo.png" alt="HMS" width="80px"></div>
        <h1>HOSPITAL MANAGEMENT SYSTEM</h1></br>
    </header>

    <nav class="top-nav">
        <ul>
            <li><a href="../Homepage.php">Home</a></li>
            <li><a href="./Navbar/About_us.php">About us</a></li>
            <li><a href="Doctor.php">Doctor</a></li>
            <li><a href="./Navbar/Patient.php">Patient</a></li>
            <li><a href="./Navbar/Lab.php">Lab</a></li>
            <li><a href="./Navbar/Services.php">Services</a></li>
            <!-- <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li> -->
        </ul>
    </nav>

    <div class="main-content">
        <div class="sticy-nav">
            <div class="sticy-nav-icons">

                <!-- MOBILE VIEW -->
                <div class="mobile-header">
                    <span class="hamburger" onClick="toggleMenu()"><i class="fa-solid fa-bars"></i></span>
                </div>

                <p><i class="fa-regular fa-user nav-item" class="top"></i> Welcome Admin, <?php echo $_SESSION['name'];?> </h1>
                </p>

            </div>

            <div class="sticky-nav-options">
                <input type="text" placeholder="search .....">
                <!-- <button><i class="fa-solid fa-download" style="margin-right:15px"></i>Help</button> -->
            </div>
        </div>

    </div>

    <!-- BANNER -->
    <div class="admin-banner">

        <button class="banner"><a href="../crud_project/Appointment/index.php" class="appointment">View Patients</a></button>
        <button class="banner"><a href="../crud_project/Report" class="lab-report">View Doctors</a></button>

    </div>

    <!-- DASHBOARD -->
    <div class="container">
        <div class="sidebar" id="sidebar">

            <ul>
                <li><a href="Doctor.php" class="dashboard"><i class="fa-brands fa-microsoft"></i> Dashboard</a></li>
                <li><a href="../crud_project/Doctor"><i class="fa-regular fa-user nav-item"></i> Edit/delete Doctor</a></li>
                <li><a href="../crud_project/Appointment"><i class="fa-solid fa-circle-user"></i> Edit/delete Patient</a></li>
                <li><a href="../crud_project/Report"><i class="fa-solid fa-book-medical"></i> Edit Lab-reports</a></li>
                <li><a href="../crud_project/Report"><i class="fa-solid fa-book-medical"></i> Edit Appointment</a></li>
                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>

        </div>

        <!-- SECTION -->
        <section class="section">
            <div class="section-content">
                <h2>Admin's Panel</h2>

                <div class="cards-container">

                    <div class="cards">
                        <img src="../assets/totalpatient.png" class="card-img">
                        <a href="#" class="card-title">Total Patients</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/image3.png" class="card-img">
                        <a href="#" class="card-title">Today's Appointment</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/prescription.webp" class="card-img">
                        <a href="../crud_project/Report/add.php" class="card-title">Most requested test</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/lab.jpg" class="card-img">
                        <a href="../crud_project/Lab/add.php" class="card-title">Request lab Test</a>
                    </div>

                </div>

                <div class="cards-container">
                     <div class="cards">
                        <img src="../assets/facility.jpg" class="card-img">
                        <a href="../crud_project/Facility" class="card-title">View Patients availing faclities</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/feedback.webp" class="card-img">
                        <a href="../crud_project/Availability" class="card-title">Edit Doctor Availability</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/feedback.webp" class="card-img">
                        <a href="../crud_project/Feedback/add.php" class="card-title">Give Feedback</a>
                    </div>
                </div>

            </div>
        </section>

    </div>
    </div>



    <!-- FOOTER -->
    <footer>
        <div class="footer">
            <div class="Address">
                <h4><i class="fa-solid fa-location-dot"></i> Address</h4>
                <p>XYZ Deoghar, jharkhand</p>
                <p>India, PIN-814152</p>
            </div>

            <div class="Help">
                <h4><i class="fa-brands fa-hire-a-helper"></i> Help Desk</h4>
                <p>06778987373</p>
                <p>saturday- 8:30AM to 4:30 PM</p>
                <p>Sunday/Holiday - Closed</p>

            </div>

            <div class="Email">
                <h4><i class="fa-solid fa-envelope"></i> Email Address</h4>
                <p>admin@hospital.edu.in</p>
                <p>www.hospitalmanage.edu.in</p>
            </div>

        </div>
        <div class="hms">
            <p>&copy; 2026 | HOSPITAL MANAGEMENT SYSTEM | Web-development made with &hearts; by Rishu</p>
        </div>

    </footer>

    <!-- MOBILE VIEW -->
    <script>
        function toggleMenu() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>

</body>

</html>