<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

session_start();
include "db.php";

if(isset($_POST['name'])){
    $role = $_POST['role'];
    $name = $_POST['name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $blood_type = $_POST['blood_type'];
    $department = $_POST['department'];
    $password = $_POST['password'];

    $check = "SELECT * FROM users WHERE 
       email = '$email'"; 
    $result = mysqli_query($conn,$check); 

    if(mysqli_num_rows($result) > 0){
        echo "Email already exists!";
        exit();
    }

    $sql = "INSERT INTO users(role,name,dob,gender,contact_no,email,address,blood_type,department,password)
    VALUES('$role','$name','$dob','$gender','$contact_no','$email','$address','$blood_type','$department','$password')";

    if(mysqli_query($conn, $sql)){
        echo "Registration successful";
        header("refresh:2; url= ./sessions/login.php");
    }else{
        echo "Error: ".mysqli_error($conn);
    }
}

?>