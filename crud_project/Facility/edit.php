<?php include 'db.php'; ?>

<?php
$patient_id = $_GET['patient_id'];
$result = $conn->query("SELECT * FROM facility_table WHERE patient_id=$patient_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $room_type   = $_POST['room_type'];
    $room_no   = $_POST['room_no'];
    $bed_allotted = $_POST['bed_allotted'];
    $equipment_used  = $_POST['equipment_used'];

    $sql = "UPDATE facility_table SET 
            room_type='$room_type', password ='$password', bed_alloted='$bed_alloted', contact='$contact_no'
            WHERE patient_id=$patient_id";

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
    <title>Edit Facility Info</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>

<form method="POST">
    <h3>Edit Facility Info</h3>

    <label>Room Type</label>
    <input type="text" name="room_type" value="<?php echo $row['room_type']; ?>" required><br><br>
    
    <label>Room No.</label>
    <input type="number" name="room_no" value="<?php echo $row['room_no']; ?>" required><br><br>

    <label>Bed Alloted</label>
    <input type="text" name="bed_allotted" value="<?php echo $row['bed_allotted']; ?>" required><br><br>

    <label>Equipment used</label>
    <input type="text" name="equipment_used" value="<?php echo $row['equipment_used']; ?>" required><br><br>

    <input type="submit" name="update" value="Update">
    <a href="index.php">Back</a>
</form>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
