<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Patient</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<form method="POST">
    <h2>Add Patient Details</h2>

    <label>Name</label>
    <input type="text" name="name" placeholder="Enter your name" required><br><br>

        
    <label>Contact No.</label>
    <input type="number" name="contact_no" required><br><br>

       
    <label>Date Of Birth </label>
    <input type="date" name="date_of_birth" required><br><br>

    <label>Gender</label>
    <select name="gender" id="gender">
        <option>Choose the gender</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
        <option value="Transgender">Transgender</option>
    </select><br><br>
    

    <label>Blood type</label>
    <select name="blood_type ">
        <option>Select the blood group</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A">A</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
    </select><br><br>
        
    <label>Address</label>
    <input type="text" name="address" required><br><br>
        
    <label>Admission date</label>
    <input type="date" name="admission_date" required><br><br>
    
    <label>Discharge date:</label>
    <input type="date" name="discharge_date" required><br><br>
       
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset"><br>

    <a href="index.php">Back</a>


</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $contact_no  = $_POST['contact_no'];
    $dob = $_POST['dob'];
    $gender  = $_POST['gender'];
    $blood_type = $_POST['blood_type'];
    $address = $_POST['address'];
    $admission_date = $_POST['admission_date'];
    $discharge_date = $_POST['discharge_date'];
   

    $sql = "INSERT INTO patient_table (name, contact_no, dob, gender, blood_type, address, admission_date, discharge_date) 
            VALUES ('$name', '$contact_no', '$dob','$gender', ' $blood_type','$address','$admission_date','$discharge_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
