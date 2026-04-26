<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Lab Management</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

<h2>Lab Details</h2>
<a href="add.php"> + Add New Lab details</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Lab ID</th>
        <th>Technician Name</th>
        <th>Patient ID</th>
        <th>Doctor ID</th>
        <th>Test Date</th>
        <th>Test Type</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM lab_test");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['lab_id']}</td>
                <td>{$row['technician_name']}</td>
                <td>{$row['patient_id']}</td>
                <td>{$row['doctor_id']}</td>
                <td>{$row['test_date']}</td>
                <td>{$row['test_type']}</td>
                <td>
                    <a href='edit.php?lab_id={$row['lab_id']}'>Edit</a> |
                    <a href='delete.php?lab_id={$row['lab_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
