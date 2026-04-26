<?php
include 'db.php';
$lab_id = $_GET['lab_id'];
$conn->query("DELETE FROM lab_test WHERE lab_id=$lab_id");
header("Location: index.php");
exit;
?>