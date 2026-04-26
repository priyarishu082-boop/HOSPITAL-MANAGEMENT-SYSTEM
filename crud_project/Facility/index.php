<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Facility Management</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Facility</h2>
<a href="add.php"> + Add new Facility </a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Patient ID</th>
        <th>Room Type</th>
        <th>Room No.</th>
        <th>Bed Alloted</th>
        <th>Equipments used</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM facility_table");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['patient_id']}</td>
                <td>{$row['room_type']}</td>
                <td>{$row['room_no']}</td>
                <td>{$row['bed_allotted']}</td>
                <td>{$row['equipment_used']}</td>
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
