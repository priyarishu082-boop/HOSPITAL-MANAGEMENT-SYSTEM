<?php
include 'db.php';
$user_id = $_GET['user_id'];
$conn->query("DELETE FROM feedback WHERE user_id=$user_id");
header("Location: index.php");
exit;
?>