<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
session_start();
include("db.php");

if(isset($_POST['login'])){

    $stmt = $conn->prepare("SELECT * FROM users WHERE name = ? AND password = ?");
    $name = $_POST['name'];
    $password = $_POST['password'];

    $stmt->bind_param("ss", $name, $password);
    $stmt->execute();

     $result = $stmt->get_result();

    if($result->num_rows == 1){
        

      $row = $result->fetch_assoc();

        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['role'] = $row['role'];


        if($user['role'] == "Admin"){
            header("Location:../Admin/Admin.php");
            exit();
        }
        elseif($_SESSION['role'] == "Doctor"){
            header("Location: ../Doctor/Doctor.php");
            exit();
        }
        else{
            header("Location:../Patient/Patient.php");
        }
    }
    else{
      echo "User not found";
    }
}
?>
