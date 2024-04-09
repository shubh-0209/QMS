<?php
include "config/config.php";

if(isset($_POST['submit'])){
    $name = str_replace(" ", "_", $_POST['subject']);
    $subject = $_POST['subject'];
    $description = $_POST['description'];

    $sql = "CREATE TABLE `$name` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `question` varchar(255) NOT NULL,
        `option1` varchar(255) NOT NULL,
        `option2` varchar(255) NOT NULL,
        `option3` varchar(255) NOT NULL,
        `option4` varchar(255) NOT NULL,
        `answer` varchar(255) NOT NULL,
        PRIMARY KEY (`id`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; ";
   
    $qry = "INSERT INTO pools VALUES('', '$subject', '$description')";

    if($conn->query($sql) == TRUE){
      if($conn->query($qry) == TRUE){
        echo "<script>alert('Added Successfully!');</script>";
        echo "<script>window.location.href='questions_pool.php';</script>";
      }
    }
    else{
      echo '<script> alert("Failed to Add Question Pool"); </script>';
    }
         
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Question</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card{
            align-items: end;
        }
        .subject{
            width: 100%;
        }
        body{
            height: 100vh;
        }
       
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark bg-gradient" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="idex.php">Quiz Manager</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="questions_pool.php">Questions Pool</a>
              </li>
              <li class="nav-item">
                <a class="nav-link " href="resultByRoll.php">
                    Result by Roll
                </a>
                
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle show" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Admin Action
                </a>
                <ul class="dropdown-menu bg-dark" style="border-radius:25px;padding:20px;overflow:hidden" data-bs-popper="static">
                    <li><a class="dropdown-item" href="create_quiz.php">Create New Quiz</a></li>
                    
                <li><a class="dropdown-item" href="all_quiz.php">All Quiz</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="add_pool.php">Add New Question Pool</a></li>
                </ul>
            </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </nav>
<div class="container-fluid h-100">
    <div class="row justify-content-center bg-dark bg-gradient" >
        <div class="col-md-7">
            <div class="card my-5 p-3" style="border-radius:30px">
        <h1 class="m-auto my-2">Add New Question Pool</h1>
        <div class="card-body">
            <form action="" method="post">
                <label for="subject">Subject</label><br>
                 <input class="subject form-control" type="text" placeholder="Enter Subject Name" name="subject" required><br><br>
                 <label for="description">Description</label><br>
               <textarea class="form-control" name="description" placeholder="Enter Description" id="Description" cols="105" rows="10" required></textarea>
              </div>
              <div class="card justify-content mt-4 mb-4">
                <button class="btn btn-outline-secondary" name="submit">Add</button>
              </form>
            </div>
            </div>
        </div>
    </div>
</div>

   
</body>
</html>