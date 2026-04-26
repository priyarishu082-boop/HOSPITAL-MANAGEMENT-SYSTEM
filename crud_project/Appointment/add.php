<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Appointment Section</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>


<form method="POST">
    <h2>BOOK APPOINTMENT WITH DOCTOR</h2>

    <label>Doctor ID:</label>
    <input type="text" name="doctor_id" required><br><br>

    <label>Patient Name</label>
    <input type="text" name="patient_name" required><br><br>

    <label>Appointment Date:</label>
    <input type="date" name="appointment_date" required><br><br>

    <label>Appointment_time</label>
    <input type="time" name="appointment_time" ><br><br>

    <label>Created_at</label>
    <input type="time" name="created_at" ><br><br>

    <div class="button">
      <input type="submit" name="submit" value="Save"><br>
      <input type="reset" name="reset" value="Reset">
   </div>
   <a href="index.php">Back</a>
</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $doctor_id  = $_POST['doctor_id'];
    $patient_name  = $_POST['patient_name'];
    $appointment_date  = $_POST['appointment_date'];
    $appointment_time  = $_POST['appointment_time'];
    $created_at = $_POST['created_at'];
   

    $sql = "INSERT INTO appointment(doctor_id, patient_name, appointment_date, appointment_time, created_at) 
            VALUES ('$doctor_id', ' $patient_name ',' $appointment_date', ' $appointment_time','$created_at')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
