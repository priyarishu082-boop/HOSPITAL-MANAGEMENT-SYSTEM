<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>LAB SECTION</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>


<form method="POST">
    <h2>LAB DETAILS</h2>

    <label>Lab ID </label>
    <input type="text" name="lab_id" required><br><br>
     
    <label>Technician name</label>
    <input type="text" name="technician_name" required><br><br>
    
    <label>Patient ID</label>
    <input type="text" name="patient_id" required><br><br>
    
    <label>Doctor ID:</label>
    <input type="text" name="doctor_id" required><br><br>
        
    <label>Test type</label>
    <input type="text" name="test_type" required><br><br>

    <label>Test date</label>
    <input type="date" name="test_date" required><br><br>
    
    <input type="submit" name="submit" value="Save">
    <input type="reset" name="reset" value="Reset"><br>
    
    <a href="index.php">Back</a>

</form>
<br>


<?php
if (isset($_POST['submit'])) {
    $technician_name  = $_POST['technician_name'];
    $patient_id  = $_POST['patient_id'];
    $doctor_id  = $_POST['doctor_id'];
    $test_type = $_POST['test_type'];
    $test_date = $_POST['test_date'];
   

    $sql = "INSERT INTO lab_test(technician_name, patient_id, doctor_id, test_type, test_date) 
            VALUES ('$lab_id', ' $technician_name ',' $patient_id', '$doctor_id','$test_type','$test_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
