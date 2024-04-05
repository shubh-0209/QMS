<?php

include "../includes/config.php";

if(!$_SESSION){
    session_start();
}

if(isset($_POST['submit'])){
    $email = 'email';
    $password = 'password';
}

$qry = "SELECT * FROM users where email = '$email' and password = '$password'";

if($conn->query($qry) == TRUE){
    echo "<script>alert('LOGIN SUCCESSFULLY!');</script>";
    $result = $conn->query($qry);

        if($r['admin'] == 1){
            $_SESSION['admin'] = $r['roll'];
            echo "<script>alert('Admin');</script>";
            echo "<script>window.location.href='../admin/index.php';</script>";

        }
        else{
            $_SESSION['user'] = $r['roll'];
            echo "<script>alert('Admin');</script>";
            echo "<script>window.location.href='../index.php';</script>";
        }
    }

else{
    echo "Error" .$qry. "<br>" .$conn->error;
}
?>