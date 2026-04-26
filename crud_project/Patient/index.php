<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Patient Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Patient List</h2>
<a href="add.php"> + Add New Patient</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Patient ID</th>
        <th>Name</th>
        <th>Contact</th>
        <th>Date of birth</th>
        <th>Gender</th>
        <th>Blood group</th>
        <th>Address</th>
        <th>Admission date</th>
        <th>discharge date</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM patient_table");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['patient_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['contact_no']}</td>
                <td>{$row['dob']}</td>
                <td>{$row['gender']}</td>
                <td>{$row['blood_type']}</td>
                <td>{$row['address']}</td>
                <td>{$row['admission_date']}</td>
                <td>{$row['discharge_date']}</td>
                <td>
                    <a href='edit.php?patient_id={$row['patient_id']}'>Edit</a> |
                    <a href='delete.php?patient_id={$row['patient_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
