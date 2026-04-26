<?php include 'db.php'; ?>

<?php
$admin_id = $_GET['admin_id'];
$result = $conn->query("SELECT * FROM admin_table WHERE admin_id=$admin_id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $username   = $_POST['username'];
    $password   = $_POST['password'];
    $email = $_POST['email'];
    $contact_no  = $_POST['contact_no'];

    $sql = "UPDATE admin_table SET 
            username='$username', password ='$password', email='$email', contact='$contact_no'
            WHERE admin_id=$admin_id";

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
    <title>Edit Admin Info</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>


<form method="POST">

    <h3>Edit Admin Info</h3>
    <label>Username</label>
    <input type="text" name="username" value="<?php echo $row['username']; ?>" required><br><br>
    
    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password']; ?>" required><br><br>

    <label>Email</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br><br>

    <label>Contact no</label>
    <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" required><br><br>

    <input type="submit" name="update" value="Update">
    <a href="index.php">Back</a>
</form>
<br>


</body>
</html>
