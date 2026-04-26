<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Doctor availability</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<form method="POST">
    <h2>+ Add Doctor availability</h2>

    <label>Doctor ID</label>
    <input type="text" name="doctor_id" required><br><br>

    <label>Available Date</label>
    <input type="date" name="available_date" required><br><br>

    <label>Available From</label>
    <input type="time" name="available_from" ><br><br>

    <label>Available To</label>
    <input type="time" name="available_to" ><br><br>

    <label>Is Available</label>
    <select name="is_available">
        <option>-------------Choose--------------</option>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select required><br><br>


    <div class="button">
      <input type="submit" name="submit" value="Save"><br>
      <input type="reset" name="reset" value="Reset">
   </div>
   <br>

   <a href="index.php">Back</a>
</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $doctor_id  = $_POST['doctor_id'];
    $available_date  = $_POST['available_date'];
    $available_from  = $_POST['available_from'];
    $available_to  = $_POST['available_to'];
    $is_available = $_POST['is_available'];
   

    $sql = "INSERT INTO doctor_availability(doctor_id, available_date, available_from, available_to, is_available) 
            VALUES ('$doctor_id', ' $available_date ',' $available_from', ' $available_to','$is_available')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1 style='color:green;'>New record created successfully</h1>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
