<?php include 'db.php'; ?>

<?php
$doctor_id = $_GET['doctor_id'];
$result = $conn->query("SELECT * FROM doctors WHERE doctor_id=$doctor_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name   = $_POST['name'];
    $specialization  = $_POST['specialization'];
    $gender  = $_POST['gender'];
    $contact_no  = $_POST['contact_no'];
    $experience = $_POST['experience'];

    $sql = "UPDATE doctors SET 
            name='$name', specialization='$specialization', gender='$gender', contact_no='$contact_no', experience='$experience'
            WHERE doctor_id=$doctor_id";

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

<!-- <h2>Edit Doctor</h2> -->
<form method="POST">
   <div>
        <h3>Edit doctor details</h3>
    </div>    
    
    
    <label>Doctor Name:</label>
    <input type="text" name="name" value="<?php echo $row['doctor_name']; ?>" required><br><br>

    <label>Specialization</label>
    <input type="text" name="specialization" value="<?php echo $row['specialization']; ?>" required><br><br>

    <label>Gender:</label>
    <select name="gender" value="<?php echo $row['gender']; ?>" required>
        <option>---Select the gender---</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Contact No.:</label>
    <input type="text" name="contact_no"value="<?php echo $row['contact_no']; ?>"required><br><br>

    <label>Experience</label>
    <input type="text" name="experience" value="<?php echo $row['experience']; ?>" required><br><br>

    <input type="submit" name="submit" value="Save">
     <a href="index.php">Back</a>
</form>
<br>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
