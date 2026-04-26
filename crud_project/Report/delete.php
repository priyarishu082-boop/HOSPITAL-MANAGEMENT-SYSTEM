<?php
include 'db.php';
$report_id = $_GET['report_id'];
$conn->query("DELETE FROM report WHERE report_id=$report_id");
header("Location: index.php");
exit;
?>