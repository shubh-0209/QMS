<?php
include "../config/config.php";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $course = $_POST['course'];
    $year = $_POST['year'];
    $password = $_POST['password'];
    $pass = $_POST['pass'];

    if ($password != $pass){
        echo "<script>alert('Password don't match.');</script>";
    }
    else{
        $qry = "INSERT INTO users VALUES('$name', '$roll', '$email', '$course', '$year', '$password', '')";
    
        if($conn->query($qry) == TRUE){
            echo "<script>alert('User Registered Successfully!');</script>";
            echo "<script>window.location.href='../login.php';</script>";
        }
            else{
                echo "Error :" .$qry. "<br>" . $conn->error;
            }
      
        }
    
}


?>
