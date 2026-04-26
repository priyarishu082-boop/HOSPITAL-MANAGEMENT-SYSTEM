<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Facility</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<form method="POST">
    <h2>Facility Allotted</h2>

    <label>Room type</label>
    <input type="text" name="room_type" required><br><br>

    <label>Room no</label>
    <input type="number" name="room_no" required><br><br>
        
    <label>Bed allotted</label>
    <input type="text" name="bed_allotted" required><br><br>
        
    <label>Equipment used</label>
    <input type="text" name="equipment_used" required><br><br>
       
    <input type="submit" name="submit" value="Submit">
    <input type="reset" name="reset" value="Reset">

    <a href="index.php">Back</a>

</form>
<br>


<?php
if (isset($_POST['submit'])) {
    $room_type   = $_POST['room_type'];
    $room_no   = $_POST['room_no'];
    $bed_allotted = $_POST['bed_allotted'];
    $equipment_used  = $_POST['equipment_used'];
   

    $sql = "INSERT INTO facility_table (room_type, room_no, bed_allotted, equipment_used)
            VALUES ('$room_type','$room_no', '$bed_allotted','$equipment_used')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
