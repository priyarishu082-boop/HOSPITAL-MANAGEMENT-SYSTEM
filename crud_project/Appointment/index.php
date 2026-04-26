<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Appointment</title>
    <link rel="stylesheet" href="style3.css">
</head>
<body>

<h2>Appointment Section</h2>
<a href="add.php"> + Make New Appointment</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Appointment ID</th>
        <th>Doctor ID</th>
        <th>Patient Name</th>
        <th>Appointment Date</th>
        <th>Appointment_time</th>
        <th>Created At</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM appointment");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['appointment_id']}</td>
                <td>{$row['doctor_id']}</td>
                <td>{$row['patient_name']}</td>
                <td>{$row['appointment_date']}</td>
                <td>{$row['appointment_time']}</td>
                <td>{$row['created_at']}</td>
                <td>
                    <a href='edit.php?appointment_id={$row['appointment_id']}'>Edit</a> |
                    <a href='delete.php?appointment_id={$row['appointment_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
