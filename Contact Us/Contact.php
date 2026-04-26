<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Contact.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header class="header">
        <div class="logo"><img src="../assets/Logo.png" alt="HMS" width="80px"></div>

        <h1>HOSPITAL MANAGEMENT SYSTEM</h1></br>
        <!-- <p>“Complete care in just one click”</p> -->
    </header>

    <nav class="top-nav">
        <ul>
            <li><a href="../Homepage/Homepage.php">Home</a></li>
            <li><a href="../About_us.php">About us</a></li>
            <li><a href="Doctor.php">Doctor</a></li>
            <li><a href="../Patient.php">Patient</a></li>
            <li><a href="../Lab.php">Lab</a></li>
            <li><a href="../Services.php">Services</a></li>
            <!-- <li><a href="#"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></li> -->
        </ul>
    </nav>

    <div class="map">

        <div class="main">
            <h2 class="main-title"><i class="fa-solid fa-location-dot"></i> LOCATION</h2>
        </div>

        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3632.4232383738536!2d86.6104549751499!3d24.43609707820871!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f13ef928db2cff%3A0x7394cef0c1a6d8c2!2sAll%20India%20Institute%20of%20Medical%20Sciences%2C%20Deoghar!5e0!3m2!1sen!2sin!4v1772768274263!5m2!1sen!2sin"
            width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
        <p class="para">Reach hospital by follow the given location</p>

    </div>

    <!-- GENERAL FAQS -->

    <div class="faq-container">

        <h2>General FAQs</h2>
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