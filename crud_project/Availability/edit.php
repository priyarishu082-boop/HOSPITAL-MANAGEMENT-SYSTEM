<?php include 'db.php'; ?>

<?php
$availability_id = $_GET['availability_id'];
$result = $conn->query("SELECT * FROM doctor_availability WHERE availability_id=$availability_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $availability_id   = $_POST['availability_id'];
    $available_date  = $_POST['available_date'];
    $available_from  = $_POST['available_from'];
    $available_to  = $_POST['available_to'];
    $is_available = $_POST['is_available'];

    $sql = "UPDATE doctor_availability SET 
            availability_id='$availability_id', available_from='$available_from', available_to='$available_to', is_available='$is_available'
            WHERE availability_id=$availability_id";

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
    <title>Edit Doctor</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<form method="POST">
    <h3>Edit doctor availability schedule</h3>

    <label>Doctor ID</label>
    <input type="text" name="availability_id" value="<?php echo $row['availability_id']; ?>" required><br><br>

    <label>Available Date</label>
    <input type="date" name="available_date" value="<?php echo $row['available_date']; ?>"required><br><br>

    <label>Available From</label>
    <input type="time" name="available_from" value="<?php echo $row['available_from']; ?>" required><br><br>

    <label>Available To</label>
    <input type="time" name="available_to" value="<?php echo $row['available_to']; ?>" required><br><br>

    <label>Is Available</label>
    <select name="is_available" value="<?php echo $row['is_available']; ?>" required>
        <option value="yes">Yes</option>
        <option value="no">No</option>
    </select required><br><br>

    <input type="submit" name="submit" value="Save"><br>
    
   
   <br>
   <a href="index.php">Back</a>
</form>
<br>

</body>
</html>
