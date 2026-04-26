<?php
session_start();

if(!isset($_SESSION['id'])||
$_SESSION['role'] != "Doctor"){
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
    <title>Doctor</title>
    <link rel="stylesheet" href="Doctor.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <header class="header">
        <div class="logo"><img src="../assets/Logo.png" alt="HMS" width="80px"></div>

        <h1>HOSPITAL MANAGEMENT SYSTEM</h1><br>
        <!-- <p>“Complete care in just one click”</p> -->
    </header>

    <nav class="top-nav">
        <ul>
            <li><a href="../Homepage/Homepage.php">Home</a></li>
            <li><a href="../About Us/About_us.php">About us</a></li>
            <li><a href="../Doctor/Doctor.php">Doctor</a></li>
            <li><a href="../Patient/Patient.php">Patient</a></li>
            <li><a href="../Lab/Lab.php">Lab</a></li>
            <li><a href="../Services/Services.php">Services</a></li>
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
               
                <p><i class="fa-regular fa-user nav-item" class="top"></i>Welcome, <?php echo $_SESSION['name'];?> </h1></p>

            </div>

            <div class="sticky-nav-options">
                <input type="text" placeholder="search .....">
                <button><i class="fa-solid fa-download" style="margin-right:15px"></i>Help</button>
            </div>
        </div>

    </div>


    <!-- DOCTOR BANNER -->
    <div class="doctor-banner">
    
        <button class="banner"><a href="../crud_project/Appointment/index.php" class="appointment">View Appointment</a></button>
        <button class="banner"><a href="../crud_project/Report" class="lab-report">Request Lab test</a></button>

    </div>

    <!-- DASHBOARD -->
    <div class="container">
        <div class="sidebar" id="sidebar">
            
            <ul>
                <li><a href="../Doctor/Doctor.php" class="dashboard"><i class="fa-brands fa-microsoft"></i> Dashboard</a></li>
                <li><a href="../crud_project/Doctor"><i class="fa-regular fa-user nav-item"></i> View Doctors</a></li>
                <li><a href="../crud_project/Appointment"><i class="fa-solid fa-circle-user"></i> Edit Appointment</a></li>
                <li><a href="../crud_project/Report"><i class="fa-solid fa-book-medical"></i> Edit Lab-reports</a></li>
                <li><a href="../Login/Login form.php"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>
            
        </div>

        <section class="section">
            <div class="section-content">
                <h2>Doctor's Panel</h2>

                <div class="cards-container">

                    <div class="cards">
                        <img src="../assets/totalpatient.png" class="card-img">
                        <a href="#" class="card-title">Total Patients</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/image3.png" class="card-img">
                        <a href="#" class="card-title">Total Appointment</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/prescription.webp" class="card-img">
                        <a href="../crud_project/Report/add.php" class="card-title">Add reports perscription</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/lab.jpg" class="card-img">
                        <a href="../crud_project/Lab/add.php" class="card-title">View lab reports</a>
                    </div>
                </div>
                

                <div class="cards-container">
                    <div class="cards">
                        <img src="../assets/facility.jpg" class="card-img">
                        <a href="../crud_project/Facility" class="card-title">Check Facility availing patient</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/blood.jpg" class="card-img">
                        <a href="#" class="card-title">Blood group available</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/pic.webp" class="card-img">
                        <a href="../crud_project/Admin/Admin.php" class="card-title">Contact Admin</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/feedback.webp" class="card-img">
                        <a href="../crud_project/Feedback/add.php" class="card-title">Give Feedback</a>
                    </div>
                </div>

            </div>
        </section>
    </div>

    <div class="div">
        <h2 class="div-title">Experienced Doctors</h2>
        <p class="para">Top toctors available here , feels like home.</p>
    </div>


    <!-- GENERAL FAQS -->
    <div class="faq-container">

        <h2 class="head">General FAQs</h2>
        <div class="faq">
            <button class="question">How to book an appointment ?</button>

            <div class="answer">
                <p>First Login Yourself, if new then register yourself then on Patients's dashboard find a doctor from
                    which you want to appointment with then click on book appointment by just filling some details.</p>
            </div>
        </div>

        <div class="faq">
            <button class="question">How to reach the hospital ?</button>

            <div class="answer">
                <p>Go on contact us there is detailed map just follow it and also number & address is available.</p>
            </div>
        </div>

        <div class="faq">
            <button class="question">What are the services available ?</button>

            <div class="answer">
                <p>Simply go to services on top of navbar and check the available facilities.</p>
            </div>
        </div>

        <div class="faq">
            <button class="question">Is the Lab-Test available here ?</button>

            <div class="answer">
                <p>Absolutely yes, you just have to click on request lab test.</p>
            </div>
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
    function toggleMenu(){
        document.getElementById("sidebar").classList.toggle("active");
    }
    </script>

    <script src="../JAVASCRIPT/Faq.js"></script>
</body>

</html>