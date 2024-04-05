<?php
include "../includes/config.php";

if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
    $description = $_POST['description'];

   
        $qry = "INSERT INTO pools VALUES('', '$subject', '$description')";
    
        if($conn->query($qry) == TRUE){
            echo "<script>alert('Added Successfully!');</script>";
            echo "<script>window.location.href='../questions_pool.php';</script>";
        }
            else{
                echo "Error :" .$qry. "<br>" . $conn->error;
            }
      
        }


?>