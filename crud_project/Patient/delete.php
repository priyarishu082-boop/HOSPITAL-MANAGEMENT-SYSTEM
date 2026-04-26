<?php
include 'db.php';
$patient_id = $_GET['patient_id'];
$conn->query("DELETE FROM patient_table WHERE patient_id=$patient_id");
header("Location: index.php");
exit;
?>