<? php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
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
            <form method="POST">
                <p><u> REGISTER YOURSELF </u></p>

                <fieldset>

                    <legend>User Type</legend>

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
                    <input type="text" name="name" placeholder="Enter your name" required><br>

                    <label for="dob">DOB</label>
                    <input type="date" name="dob" value="dob" required><br>

                    <label for="gender">Gender</label>
                    <select name="gender" value="gender">
                        <option value=" ">Select gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select required><br>

                    <label for="contact_no">Contact Number</label>
                    <input type="number" name="contact_no" placeholder="Enter your contact no" required><br>

                    <label for="email">E-mail</label>
                    <input type="text" name="email" placeholder="Enter your e-mail" required><br>

                    <label for="address">Address</label>
                    <input type="text" name="address" placeholder="Enter your address" required><br>

                </fieldset>


                <fieldset>
                    <legend>Medical Details</legend>
                    <label for="blood_type">Blood type</label>
                    <select name="blood_type" value="blood_type">

                        <option>Select blood group</option>
                        <option>A</option>
                        <option>B+</option>
                        <option>B-</option>
                        <option>O+</option>
                        <option>O-</option>
                        <option>AB</option>
                    </select>

                    <label for="department">Department / Specialization</label>
                    <input type="text" name="department" placeholder="Enter your department">
                </fieldset>

                <fieldset>
                    <legend>Login Credentials</legend>

                    <label for="user_id">User ID</label>
                    <input type="text" name="user_id" placeholder="Enter your user id" required>

                    <label for="password">Create password</label>
                    <input type="password" name="password" placeholder="Create your password" required>

                    <label for="password">Confirm password</label>
                    <input type="password" name="confirm_password" placeholder="Confirm your password" required>

                    <!-- <label for="date">Created at</label>
                    <input type="date" name="created_at"required> -->

                </fieldset>

                <div class="action">
                    <input type="submit" name="submit" value="submit">&nbsp;&nbsp;
                    <input type="reset" name="clear" value="Clear">
                </div>
                <a href="index.php">Back</a>

            
    </section>

    </main>
    <footer>
        <p>&copy; Hospital Management System </p>
    </footer>
    </form>
    <br>
    <!-- <a href="index.php">Back</a> -->

    <?php
if (isset($_POST['submit'])) {
    $role  = $_POST['role'];
    $name   = $_POST['name'];
    $dob = $_POST['dob'];
    $gender  = $_POST['gender'];
    $contact_no  = $_POST['contact_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood_type = $_POST['blood_type'];
    $department = $_POST['department'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password != $confirm_password){
        echo "<p style='color:red;'>password do not match </p>";
        exit;
    }

    $hashed_password = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (role, name, dob, gender,contact_no, email, address, blood_type, department, user_id, password) 
            VALUES ('$role', '$name', '$dob', '$gender','$contact_no', '$email','$address', '$blood_type', '$department', '$user_id', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>You Registerd successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }

    // if($conn->query($sql)){
    //     echo "<h1 style='color:green;'>Registered successfully</h1>";
    // }
    // else{
    //     echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    // }
}
?>

</body>

</html>