<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Management and Authentication</title>
    <link rel="stylesheet" href="style5.css">
</head>
<body>

<h2>Users Management</h2>
<a href="add.php"> + Add New Users</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Role</th>
        <th>Name</th>
        <th>DOB</th>
        <th>Gender</th>
        <th>Contact No</th>
        <th>E-mail</th>
        <th>Address</th>
        <th>Blood Type</th>
        <th>Department/Specialization</th>
        <th>User ID</th>
        <th>Password</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM users");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['id']}</td>
                <td>{$row['role']}</td>
                <td>{$row['name']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['email']}</td>
                <td>{$row['address']}</td>
                <td>{$row['blood_type']}</td>
                <td>{$row['department']}</td>
                <td>{$row['user_id']}</td>
                <td>{$row['password']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}'>Edit</a> |
                    <a href='delete.php?id={$row['id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
                </td>
            </tr>
            ";
        }
    } else {
        echo "<tr><td colspan='6'>No records found.</td></tr>";
    }
    ?>
</table>

</body>
</html>
