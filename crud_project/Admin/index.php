<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Admin</h2>
<a href="add.php"> + Add Admin Info</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Admin ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>E-mail</th>
        <th>Contact no</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM admin_table");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['admin_id']}</td>
                <td>{$row['username']}</td>
                <td>{$row['password']}</td>
                <td>{$row['email']}</td>
                <td>{$row['contact_no']}</td>
                <td>
                    <a href='edit.php?admin_id={$row['admin_id']}'>Edit</a> |
                    <a href='delete.php?admin_id={$row['admin_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
