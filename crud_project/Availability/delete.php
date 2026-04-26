<?php
include 'db.php';
$availability_id = $_GET['availability_id'];
$conn->query("DELETE FROM doctor_availability WHERE availability_id=$availability_id");
header("Location: index.php");
exit;
?>