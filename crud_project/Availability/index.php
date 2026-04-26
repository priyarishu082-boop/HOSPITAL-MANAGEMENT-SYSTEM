<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Check Doctor Availability</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Doctor Availability Schedule</h2>
<a href="add.php"> + Add Doctor availability schedule</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Availability ID</th>
        <th>Doctor ID</th>
        <th>Available Date</th>
        <th>Available From</th>
        <th>Available To</th>
        <th>Is Available</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM doctor_availability");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['availability_id']}</td>
                <td>{$row['doctor_id']}</td>
                <td>{$row['available_date']}</td>
                <td>{$row['available_from']}</td>
                <td>{$row['available_to']}</td>
                <td>{$row['is_available']}</td>
                <td>
                    <a href='edit.php?availability_id={$row['availability_id']}'>Edit</a> |
                    <a href='delete.php?availability_id={$row['availability_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
