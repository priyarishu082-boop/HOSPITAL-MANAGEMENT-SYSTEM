<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Review Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>FEEDBACK</h2>
<a href="add.php"> + Add Feedback</a>
<br><br>

<table border="1" cellpadding="10">
    <tr>
        
        <th>User ID</th>
        <th>Username</th>
        <th>Comment</th>
        <th>Rating</th>
        <th>Date of Submission</th>
        <th>Action</th>
    </tr>

    <?php
    $result = $conn->query("SELECT * FROM feedback");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>{$row['user_id']}</td>
                <td>{$row['user_name']}</td>
                <td>{$row['comment']}</td>
                <td>{$row['rating']}</td>
                <td>{$row['date_of_submission']}</td>
                <td>
                    <a href='edit.php?user_id={$row['user_id']}'>Edit</a> |
                    <a href='delete.php?user_id={$row['user_id']}' onclick='return confirm(\"Are you sure?\")'>Delete</a>
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
