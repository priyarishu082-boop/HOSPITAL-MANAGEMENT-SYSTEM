<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>DOCTOR</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>

<h2>Doctors</h2>
<a href="add.php"> + Add New Doctor</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Doctor ID</th>
        <th>Doctor Name</th>
        <th>Specialization</th>
        <th>Gender</th>
        <th>Contact Number</th>
        <th>Experience</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM doctors");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['doctor_id']}</td>
                <td>{$row['doctor_name']}</td>
                <td>{$row['specialization']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['experience']}</td>
                <td>
                    <a href='edit.php?doctor_id={$row['doctor_id']}'>Edit</a> |
                    <a href='delete.php?doctor_id={$row['doctor_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
