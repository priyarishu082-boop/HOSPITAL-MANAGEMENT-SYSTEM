<?php
session_start();
session_destroy();
header("Location:\Project\sessions\logout.php");
exit();
?>
