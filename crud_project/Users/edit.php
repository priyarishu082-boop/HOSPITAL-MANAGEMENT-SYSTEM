<?php include 'db.php'; ?>

<?php
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM users WHERE id=$id");
$row = $result->fetch_assoc();

if (isset($_POST['update'])) {
    $role  = $_POST['role'];
    $name   = $_POST['name'];
    $dob = $_POST['dob'];
    $gender  = $_POST['gender'];
    $contact_no  = $_POST['contact_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood_type = $_POST['blood_type'];
    $department = $_POST['department'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    // $confirm_password = $_POST['confirm_password'];
    $created_at = $_POST['created_at'];

    $sql = "UPDATE user SET 
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

   <h3>Edit Users Info</h3>

    <label>Role</label>
    <input type="text" name="role" value="<?php echo $row['role']; ?>" required><br><br>
    
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
    
    <label>Date of birth:</label>
    <input type="date" name="dob" value="<?php echo $row['dob']; ?>" required><br><br>

    <label>Gender:</label>
    <select name="gender" id="choose" value="<?php echo $row['gender']; ?>" required>
        <option>--select the gender--</option>
        <option value="male">Male</option>
        <option value="Female">Female</option>
        <option value="Other">Other</option>
    </select><br><br>

    <label>Contact no</label>
    <input type="text" name="contact_no" value="<?php echo $row['contact_no']; ?>" required><br><br>

    <label>E-mail</label>
    <input type="text" name="email" value="<?php echo $row['email']; ?>" required><br><br>

    <label>Address:</label>
    <input type="text" name="address" value="<?php echo $row['address']; ?>" required><br><br>

    <label>Blood type</label>
    <select name="blood_type"  value="<?php echo $row['blood_type']; ?>" required>
        <option>---Select the blood group---</option>
        <option value="O+">O+</option>
        <option value="O-">O-</option>
        <option value="A">A</option>
        <option value="B+">B+</option>
        <option value="B-">B-</option>
    </select><br><br>

    <label>Department</label>
    <input type="text" name="department"  value="<?php echo $row['department']; ?>"required><br><br>
    
    <label>User id</label>
    <input type="text" name="user_id" value="<?php echo $row['user_id']; ?>" required><br><br>

    <label>Password</label>
    <input type="password" name="password" value="<?php echo $row['password']; ?>" required><br><br>

    <!-- <label>Confirm password</label>
    <input type="password" name="confirm_password" value="<?php echo $row['confirm_password']; ?>" required><br><br> -->

    <input type="submit" name="update" value="Edit Info">
    <a href="index.php">Back</a>
</form>
<br>
<!-- <a href="index.php">Back</a> -->

</body>
</html>
