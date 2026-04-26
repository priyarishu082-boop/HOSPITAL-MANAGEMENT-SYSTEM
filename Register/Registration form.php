<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>

    <header>
        <h1>Hospital management system</h1>
        <!-- <p>New User Registration</p> -->
        <h3>&starf; New User Registration</h3>
    </header>
    <section>
    <main>
        <form action="/action.php">
            <p><u> REGISTER YOURSELF </u></p>

            <fieldset>

             <legend for="user_type">User Type</legend>

             <label for="role">Register As</label>
             <select name="role" value="role">
                <option>Select role</option>
                <option value="patient">Patient</option>
                <option value="doctor">Doctor</option>
                <option value="admin">Admin</option>
             </select>
            </fieldset>

         <fieldset>
            <legend>Personal Details</legend>

            <label for="name">Name</label>
            <input type="text" class="name" placeholder="Enter your name" required><br>

            <label for="dob">Date of birth</label>
            <input type="date" class="dob" value="dob" required><br>

            <label for="gender">Gender</label>
            <select name="gender" value="gender">
                <option value=" ">Select gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select required><br>

            <label for="contact_no">Contact Number</label>
            <input type="number" class="contact_no" placeholder="Enter your contact no"  required><br>

            <label for="email">E-mail</label>
            <input type="text" class="email" placeholder="Enter your e-mail"  required><br>

            <label for="address">Address</label>
            <input type="text" name="address"  placeholder="Enter your address" required><br>

            </fieldset>


            <fieldset>
            <legend>Medical Details</legend>
            <label for="blood_type">Blood type</label>
            <select name="blood_type" value="blood_type">

                <option value="">Select blood group</option>
                <option>A</option>
                <option>B+</option>
                <option>B-</option>
                <option>O+</option>
                <option>O-</option>
                <option>AB</option>
            </select>

            <label for="department">Department / Specialization</label>
            <input type="text" placeholder="Enter your department" >
         </fieldset>

         <fieldset>
         <legend>Login Credentials</legend>

         <label for="user_id">User ID :</label>
         <input type="text" class="user_id" placeholder="Enter your user id" required>

         <label for="password">Create password</label>
         <input type="password" class="password" placeholder="Create your password" required>

         <label for="password">Confirm your password</label>
         <input type="password" class="password" placeholder="Confirm your password" required>
         </fieldset>

         <div class="action">
         <input type="submit" value="Register">&nbsp;&nbsp;
         <input type="reset" value="Clear">
         </div>
         
        </form>
        </section>

    </main>

    <footer>
        <p>&copy; Hospital Management System </p>
    </footer>
    
</body>
</html>