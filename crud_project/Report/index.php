<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>report</title>
    <link rel="stylesheet" href="style4.css">
</head>
<body>

<h2>Report Section</h2>
<a href="add.php"> + Add New report</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        <th>Report ID</th>
        <th>Patient ID</th>
        <th>Doctor ID</th>
        <th>Diagnosis Details</th>
        <th>Prescription Details</th>
        <th>Date Of Issue</th>
        <th>Remarks</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM report");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['report_id']}</td>
                <td>{$row['patient_id']}</td>
                <td>{$row['doctor_id']}</td>
                <td>{$row['diagnosis_details']}</td>
                <td>{$row['prescription_details']}</td>
                <td>{$row['date_of_issue']}</td>
                <td>{$row['remarks']}</td>
                <td>
                    <a href='edit.php?report_id={$row['report_id']}'>Edit</a> |
                    <a href='delete.php?report_id={$row['report_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
