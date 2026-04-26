<?php include 'db.php'; ?>

<?php
$patient_id = $_GET['patient_id'];
$result = $conn->query("SELECT * FROM patient_table WHERE patient_id=$patient_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $name   = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $dob = $_POST['dob'];
    $gender  = $_POST['gender'];
    $blood_type = $_POST['blood_type'];
    $address = $_POST['address'];
    $admission_date = $_POST['admission_date'];
    $discharge_date = $_POST['discharge_date'];

    $sql = "UPDATE patient_table SET 
            name='$name', contact='$contact_no', dob ='$dob', gender='$gender', blood_type='$blood_type' , address='$address', admission_date='$admission_date',discharge_date='$discharge_date'
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
    <title>Edit Patient</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<form method="POST">
    <h3>Edit Patient</h3>

    <label>Name:</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    
    <label>Contact no:</label>
    <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" required><br><br>

    <label>Date of birth:</label>
    <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required><br><br>

    <label>Gender:</label>
    <select name="gender" id="choose" value="<?php echo $row['gender']; ?>" required>
        <option>--select the gender--</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Blood group:</label>
    <select name="blood_type"  value="<?php echo $row['blood_type']; ?>" required>
        <option>---Select the blood group---</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A">A</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
    </select><br><br>

    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br><br>

    <label>Admission date:</label>
    <input type="date" name="admission"  value="<?php echo $row['admission_date']; ?>"required><br><br>
    
    <label>Discharge date:</label>
    <input type="date" name="discharge" value="<?php echo $row['discharge_date']; ?>" required><br><br>

   
    <input type="submit" name="update" value="Update">
    <a href="index.php">Back</a>
</form>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
