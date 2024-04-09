<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'qms';
$tz = 'Asia/Kolkata';


date_default_timezone_set($tz);

$conn = new mysqli($host, $user, $pass, $db);

if($conn -> connect_error){
    $connect_error = $conn -> connect_error;
    echo $connect_error;
}

session_start();

// if($_POST['logout']){
//     session_destroy();
// }

// if(!$_SESSION){
    // echo "<script> window.location.href='../login.php'</script>";
// }


?>
