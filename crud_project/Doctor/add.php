<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Doctor</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<!-- <h2> + Add New Doctor </h2> -->
<form method="POST">
    <h2> + Add New Doctor </h2>

    <label>Doctor Name</label>
    <input type="text" name="name" required><br><br>

    <label>Specialization</label>
    <input type="text" name="specialization" required><br><br>

    <label>Gender</label>
    <select name="gender" id="choose">
        <option>---Select the gender---</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Contact No.</label>
    <input type="text" name="contact_no" required><br><br>

    <label>Experience</label>
    <input type="text" name="experience" ><br><br>

    <input type="submit" name="submit" value="Add">
    <a href="index.php">Back</a>

</form>
<br>

<?php
if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $specialization  = $_POST['specialization '];
    $gender  = $_POST['gender'];
    $contact_no  = $_POST['contact_no'];
    $experience = $_POST['experience'];
   

    $sql = "INSERT INTO doctors (name, specialization, gender, contact_no, experience) 
            VALUES ('$name', ' $specialization ',' $gender', ' $contact_no','$experience')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
