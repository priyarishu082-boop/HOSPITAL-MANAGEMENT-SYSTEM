<?php
include 'db.php';
$doctor_id = $_GET['doctor_id'];
$conn->query("DELETE FROM doctors WHERE doctor_id=$doctor_id");
header("Location: index.php");
exit;
?>