<?php include 'db.php'; ?>

<?php
$lab_id = $_GET['lab_id'];
$result = $conn->query("SELECT * FROM lab_test WHERE lab_id=$lab_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $technician_name  = $_POST['technician_name'];
    $patient_id = $_POST['patient_id'];
    $doctor_id  = $_POST['doctor_id'];
    $test_date = $_POST['test_date'];
    $test_type = $_POST['test_type'];

    $sql = "UPDATE lab_test SET 
            technician_name='$technician_name',patient_id='$patient_id',doctor_id='$doctor_id', test_date='$test_date, test_type=$test_type'
            WHERE lab_id=$lab_id";

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
    <title>Edit lab details</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<form method="POST">
    <h3>Edit lab details</h3>

    <label>Technician name</label>
    <input type="text" name="technician_name" value="<?php echo $row['technician_name']; ?>"required><br><br>
    
    <label>Patient ID</label>
    <input type="text" name="patient_id" value="<?php echo $row['patient_id']; ?>"required><br><br>
    
    <label>Doctor ID:</label>
    <input type="text" name="doctor_id" value="<?php echo $row['doctor_id']; ?>" required><br><br>
        
    <label>Test type</label>
    <input type="text" name="test_type" value="<?php echo $row['test_type']; ?>"required><br><br>

    <label>Test date</label>
    <input type="date" name="test_date"  value="<?php echo $row['test_date']; ?>"required><br><br>

    <input type="submit" name="submit" value="Save">
    <a href="index.php">Back</a>

</form>
<br>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
