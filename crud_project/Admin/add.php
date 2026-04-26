<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Add admin</title>
    <link rel="stylesheet" href="add.css">
</head>
<body>

<form method="POST">

    <label>Username</label>
    <input type="text" name="username" placeholder="Enter your name" required><br><br>

    <label>Password</label>
    <input type="password" name="password" required><br><br>
        
    <label>Email</label>
    <input type="text" name="email" required><br>
        
    <label>Contact No.</label>
    <input type="number" name="contact_no" required><br><br>
       
    <input type="submit" name="submit" value="Submit">

</form>
<br>
<a href="index.php">Back</a>

<?php
if (isset($_POST['submit'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email = $_POST['email'];
    $contact_no  = $_POST['contact_no'];
   
    $sql = "INSERT INTO admin_table (username, password, email, contact_no)
            VALUES ('$username','$password', '$email','$contact_no')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New record created successfully</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

</body>
</html>
