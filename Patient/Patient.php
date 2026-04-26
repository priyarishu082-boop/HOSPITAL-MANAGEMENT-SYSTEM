<?php
session_start();

if(!isset($_SESSION['id'])||
$_SESSION['role'] != "Patient"){
    echo $_SESSION['role'];
    // header("Location: ../Login form.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Dashboard</title>
    <link rel="stylesheet" href="Patient.css">
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

    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="sticy-nav">
            <div class="sticy-nav-icons">

                <!-- MOBILE VIEW -->
                <!-- JAVASCRIPT -->
                <div class="mobile-header">
                    <span class="hamburger" onClick="toggleMenu()"><i class="fa-solid fa-bars"></i></span>
                </div>

                <p><i class="fa-regular fa-user nav-item" class="top"></i> Welcome, <?php echo $_SESSION['name'];?>  </h1>
                </p>

            </div>

            <div class="sticky-nav-options">
                <input type="text" placeholder="search .....">
                <button><i class="fa-solid fa-download" style="margin-right:15px"></i>Help</button>
            </div>
        </div>

    </div>

    <!-- BANNER -->
    <div class="patient-banner">

        <button class="banner"><a href="../crud_project/Doctor" class="lab-report">Find a Doctor</a></button>
        <button class="banner"><a href="../crud_project/Appointment/add.php" class="appointment">Book Appointment</a></button>
        <!-- <button class="banner"><a href="../crud_project/Lab" class="lab-report">My Report</a></button> -->

    </div>

    <!-- DASHBOARD -->
    <div class="container">
        <div class="sidebar" id="sidebar">

            <!-- <h2><i class="fa-brands fa-microsoft"></i> DASHBOARD</h2> -->
            <ul>
                <li><a href="Patient.php" class="dashboard"><i class="fa-brands fa-microsoft"></i> Dashboard</a></li>
                <li><a href="/crud_project/Doctor"><i class="fa-solid fa-circle-user"></i> Users Profile</a></li>
                <li><a href="/crud_project/Appointment"><i class="fa-solid fa-book-medical"></i> View Appointment</a></li>
                <li><a href="/crud_project/Lab/add.php"><i class="fa-solid fa-prescription-bottle-medical"></i> Request Lab-Test</a>
                <li><a href="../Contact Us/Contact.php"><i class="fa-solid fa-phone"></i> Contact Us</a>
                </li>
                <!-- <li><a href="#"><i class="fa-solid fa-prescription-bottle-medical"></i> Prescription</a></li> -->
                <!-- <i class="fa-solid fa-circle-user"> -->
                <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
            </ul>

        </div>
        
        <section class="section">
            <div class="section-content">
        
                <h2>Reports and Prescriptions</h2>

                <div class="cards-container">

                    <div class="cards">
                        <img src="../assets/doctor1.webp" class="card-img">
                        <a href="../crud_project/Availability">Check Doctor Availability</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/labtest.jpg" class="card-img">
                        <a href="../crud_project/Report">View Lab-Test Reports</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/pres.jpg" class="card-img">
                        <a href="../crud_project/Report">View Prescription</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/facility.jpg" class="card-img">
                        <a href="../Services/Services.php">View facility Available</a>
                    </div>

                    <div class="cards">
                        <img src="../assets/blood.jpg" class="card-img">
                        <a href="../crud_project/Feedback/add.php">Check blood availability </a>
                    </div>

                    <div class="cards">
                        <img src="../assets/feedback.webp" class="card-img">
                        <a href="../crud_project/Feedback/add.php">Give Feedback</a>
                    </div>
                </div>

            </div>
        </section>

    </div>

    <section class="section-area">
        <div class="section-content">
            <h2>STATISTICS</h2>

            <div class="card-area">
                <div class="card">
                    <img src="../assets/totalpatient.png" class="card-img">
                    <h3 class="card-title">Total patients</h3>
                    <p class="card-info">1300+</p>
                </div>

                <div class="card">
                    <img src="../assets/image3.png" class="card-img">
                    <h3 class="card-title">Today's patients record</h3>
                    <p class="card-info">141</p>
                </div>

                <div class="card">
                    <img src="../assets/image3.png" class="card-img">
                    <h3 class="card-title">Total Appointments</h3>
                    <p class="card-info">138</p>
                </div>

                <div class="card">
                    <img src="../assets/image3.png" class="card-img">
                    <h3 class="card-title">Total Emergency case</h3>
                    <p class="card-info">19</p>
                </div>

                <div class="card">
                    <img src="../assets/image3.png" class="card-img">
                    <h3 class="card-title">Lab test happend</h3>
                    <p class="card-info">132</p>
                </div>

                <div class="card">
                    <img src="../assets/image3.png" class="card-img">
                    <h3 class="card-title">Cancelled Appointment today</h3>
                    <p class="card-info">3</p>
                </div>

            </div>

        </div>
    </section>

    <div class="div">
        <h2 class="div-title">WELCOME TO HOSPITAL MANAGEMENT SYSTEM</h2>
        <p class="para">Welcome!! Our aim behind creating this project is to integrate patient to doctors and also to
            reduce manual work for managing hospital work efficiently. <br>
            Our priority to make this website user-friendly, so that patients can inetrate through it in better way.
        </p>
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

    <!-- JS -->
    <!-- MOBILE VIEW -->
    <script>
        function toggleMenu() {
            document.getElementById("sidebar").classList.toggle("active");
        }
    </script>

    <!-- <script src="Javascript/Patient.js"></script> -->


</body>

</html>