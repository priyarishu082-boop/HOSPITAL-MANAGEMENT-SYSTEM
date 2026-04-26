<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<form method="POST">
    <h2> + Add new Report</h2>
              
    <label>Patient ID</label>
    <input type="text" name="patient_id" placeholder="Enter patient ID" required></label><br><br>
           

    <label>Doctor ID</label>
    <input type="text" name="doctor_id" placeholder="Enter doctor ID" required></label><br><br>
            

    <label>Diagnosis details</label>
    <input type="text" name="diagnosis_details" placeholder="Enter diagnosis" required></label><br><br>
            

    <label>Prescription details</label>
    <textarea placeholder="Enter Prescription" name="prescription_details" required></textarea></label><br><br>
            

    <label>Date of issue</label>
    <input type="date" name="date_of_issue"></label><br><br>
            

    <label>Remarks</label>
    <textarea name="remarks"></textarea><br><br>
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="reset"><br><br>

    <a href="index.php">Back</a>

</form>
<br>


<?php
if (isset($_POST['submit'])) {
    $patient_id  = $_POST['patient_id'];
    $doctor_id  = $_POST['doctor_id'];
    $diagnosis_details  = $_POST['diagnosis_details'];
    $prescription_details  = $_POST['prescription_details'];
    $date_of_issue = $_POST['date_of_issue'];
    $remarks = $_POST['remarks'];
   

    $sql = "INSERT INTO report(patient_id, doctor_id, diagnosis_details, prescription_details, date_of_issue,remarks) 
            VALUES ('$patient_id', ' $doctor_id ',' $diagnosis_details', ' $prescription_details','$date_of_issue','$remarks')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
