<?php include 'db.php'; ?>

<?php
$report_id = $_GET['report_id'];
$result = $conn->query("SELECT * FROM report WHERE report_id=$report_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    
    $patient_id  = $_POST['patient_id'];
    $doctor_id  = $_POST['doctor_id'];
    $diagnosis_details  = $_POST['diagnosis_details'];
    $prescription_details  = $_POST['prescription_details'];
    $date_of_issue = $_POST['date_of_issue'];
    $remarks = $_POST['remarks'];

    $sql = "UPDATE report SET 
            patient_id='$patient_id',doctor_id ='$doctor_id', diagnosis_details='$diagnosis_details', prescription_details='$prescription_details', date_of_issue='$date_of_issue',remarks='$remarks'
            WHERE report_id=$report_id";

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
    <title>Edit Report</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<form method="POST">

   <h3>Edit Medical Report</h3>

    <label>Patient ID</label>
    <input type="text" name="patient_id" value="<?php echo $row['patient_id']; ?>" required><br><br>
    
    <label>Doctor ID</label>
    <input type="text" name="doctor_id" value="<?php echo $row['doctor_id']; ?>" required><br><br>

    <label>Diagnosis Details</label>
    <input type="text" name="diagnosis_details" value="<?php echo $row['diagnosis_details']; ?>" required><br><br>

    <label>Prescription details</label>
    <input type="text" name="prescription_details"  value="<?php echo $row['prescription_details']; ?>" required><br><br>

    <label>Date of issue</label>
    <input type="date" name="date_of_issue"  value="<?php echo $row['date_of_issue']; ?>" required><br><br>

    <label>Remarks</label>
    <input type="text" name="remarks"  value="<?php echo $row['remarks']; ?>" required><br><br>
   
    <input type="submit" name="update" value="Update">
    <a href="index.php">Back</a>
</form>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
