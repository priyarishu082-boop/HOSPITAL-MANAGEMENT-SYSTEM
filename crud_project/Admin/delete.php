<?php
include 'db.php';
$admin_id = $_GET['admin_id'];
$conn->query("DELETE FROM patient_table WHERE admin_id=$admin_id");
header("Location: index.php");
exit;
?>