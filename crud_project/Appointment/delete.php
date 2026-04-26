<?php
include 'db.php';
$appointment_id = $_GET['appointment_id'];
$conn->query("DELETE FROM appointment WHERE appointment_id=$appointment_id");
header("Location: index.php");
exit;
?>