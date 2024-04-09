<?php

include "../config/config.php";

if(!$_SESSION){
    session_start();
}

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
}

$qry = "SELECT * FROM users where email = '$email' and password = '$password'";
$result = $conn->query($qry);

if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    
        echo "<script>alert('LOGIN SUCCESSFULLY!');</script>";
        if($row['admin'] == 1){
            $_SESSION['admin'] = $row['roll'];
             echo "<script>alert('Admin');</script>";
             echo "<script>window.location.href='../index.php';</script>";

        }
        else{
            $_SESSION['user'] = $row['roll'];
             echo "<script>alert('User');</script>";
             echo "<script>window.location.href='../../index.php';</script>";
        }
    }

else{
    echo "Error" .$qry. "<br>" .$conn->error;
}
?>