<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOSPITAL MANAGEMENT SYSTEM</title>
    <link rel="icon" href="../assets/Logo.png">
    <link rel="stylesheet" href="style2.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;700&display=swap" rel="stylesheet">

</head>

<body>
    <!-- ----------HEADER----------- -->
    <header class="header">
        <div class="logo"><img src="../assets/Logo.png" alt="HMS" width="80px"></div>

        <h1>HOSPITAL MANAGEMENT SYSTEM</h1></br>
        <!-- <p>“Complete care in just one click”</p> -->
    </header>

    <nav class="top-nav">
        <ul>
            <li><a href="Homepage.php">Home</a></li>
            <li><a href="../About Us/About_us.php">About us</a></li>
            <li><a href="../Doctor/Doctor.php">Doctor</a></li>
            <li><a href="../Patient/Patient.php">Patient</a></li>
            <li><a href="../Lab/Lab.php">Lab</a></li>
            <li><a href="../Services/Services.php">Services</a></li>
            <!-- <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li> -->
        </ul>
    </nav>

    <!-- SIDEBAR -->
    <div class="container">
        <div class="sidebar">
            <h2>DASHBOARD</h2>

            <div class="nav">
                <div class="nav-option">
                    <i class="fa-regular fa-user nav-item"></i>
                    <a href="../Register/Registration form.php" class="register">Register</a>
                </div>

                <div class="nav-option">
                    <i class="fa-solid fa-address-card"></i>
                    <a href="../Login/Login form.php" class="login">Login</a>
                </div>

                <div class="nav-option">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                    <a href="../Admin/Admin.php">Admin</a>
                </div>

                <div class="nav-option">
                    <i class="fa-solid fa-phone"></i>
                    <a href="../Contact Us/Contact.php">Contact Us</a>
                </div>

                <!-- <div class="nav-option">
                    <i class="fa-solid fa-gear"></i>
                    <a href="#">Settings</a>
                </div> -->

                <div class="nav-option">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <a href="./sessions/logout.php">Logout</a>
                </div>

            </div>

        </div>

        <section class="section">
            <div class="section-content">
                <h2>Welcome! to Hospital Management System</h2>
                <h2>“Complete care in just one click”</h2>&nbsp;&nbsp;
                <h3>Hospital management system is a digital platform designed to manage healthcare services</h3>

            </div>
        </section>

    </div>

    <!-- MAIN CONTAINER -->

    <div class="main-content">
        <h2>Provides a complete care</h2>
        <div class="cards-container">
            <div class="card">
                <img src="../assets/doctor.jpg" class="card-img">
                <p class="card-title">Top Doctors Available here</p>
                <p class="card-info">Provides best and complete care for patients, feeling like home</p>
            </div>

            <div class="card">
                <img src="../assets/labtest.jpg" class="card-img">
               <p class="card-title">All Lab test available</p>
                <a href="#" class="card-info">All tests are available here, need not to rush anywhere.</a>
            </div>

            <div class="card">
                <img src="../assets/facility.jpg" class="card-img">
                <p class="card-title">Check Facilities available</p>
                <a href="#" class="card-info">Ambulance , X-rays, MRI, Ct-scan all types of check up are possible here , using new tools and technologies.</a>

            </div>

            <div class="card">
                <img src="../assets/blood.jpg" class="card-img">
                <p class="card-title">Blood group available</p>
                <a href="#" class="card-info">If you want to donate blood feel free to reach us.</a>
            </div>

            <div class="card">
                <img src="../assets/time.webp" class="card-img">
                <p class="card-title">24 * 7 ready for help.</p>
                <a href="#" class="card-info">Patient care is our concern.</a>
            </div>

        </div>

        <h2>Events and Achievements</h2>
        <div class="cards-container">
            <div class="card">
                <img src="../assets/achievement1.webp" class="card-img">
               <p class="card-title">Every doctor is getting rewarded</p>
                <a href="#" class="card-info">Best doctors known for his excellent work.</a>
           </div>

            <div class="card">
                <img src="../assets/image.png" class="card-img">
                <p class="card-title">Celebrating Doctor's day</p>
                <a href="#" class="card-info">A doctor confrence celebration for our doctors and staff.</a>
          </div>

            <div class="card">
                <img src="../assets/revieww.jpg" class="card-img">
                <p class="card-title">Give feedback & Review</p>
                <a href="#" class="card-info">Your review matters us a lot</a>
            </div>

            <div class="card">
                <img src="../assets/hospitalimage.avif" class="card-img">
                <p class="card-title">View Testimonials</p>
                <!-- <p class="card-info">Thank you so much for your love & affection.</p> -->
                <a href="#" class="card-info">Thank you so much for your love & affection.</a>
          </div>

        </div>

    </div>
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
            <p>&copy; 2026 | HOSPITAL MANAGEMENT SYSTEM | Web-development made with &hearts; by Rishu Priya</p>
        </div>

    </footer>
    <script src="../JAVASCRIPT/Faq.js"></script>
</body>

</html>