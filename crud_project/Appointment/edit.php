<?php include 'db.php'; ?>

<?php
$appointment_id = $_GET['appointment_id'];
$result = $conn->query("SELECT * FROM appointment WHERE appointment_id=$appointment_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $doctor_id  = $_POST['doctor_id'];
    $patient_name  = $_POST['patient_name '];
    $appointment_date  = $_POST['appointment_date'];
    $appointment_time  = $_POST['appointment_time'];
    $created_at = $_POST['created_at'];

    $sql = "UPDATE appointment SET 
            doctor_id='$doctor_id', patient_name='$patient_name', appointment_date='$appointment_date', appointment_time='$appointment_time', created_at='$created_at'
            WHERE appointment_id=$appointment_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Appointment</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<form method="POST">
    <div>
        <h3>Edit your Appointment</h3>
    </div>

    <label>Doctor ID:</label>
    <input type="text" name="doctor_id"  value="<?php echo $row['doctor_id']; ?>"required><br><br>

    <label>Patient Name</label>
    <input type="text" name="patient_name"  value="<?php echo $row['patient_name']; ?>" required><br><br>

    <label>Appointment Date:</label>
    <input type="date" name="appointment_date"  value="<?php echo $row['appointment_date']; ?>" required><br><br>

    <label>Appointment_time</label>
    <input type="time" name="appointment_time"  value="<?php echo $row['appointment_time']; ?>" required><br><br>

    <label>Created_at</label>
    <input type="time" name="created_at" value="<?php echo $row['created_at']; ?>" required ><br><br>

    <input type="submit" name="submit" value="Save">
    <a href="index.php">Back</a>

</form>
<br>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
