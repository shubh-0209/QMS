<?php

include "../includes/config.php";

$qry = "SELECT * FROM pools";
$result = $conn->query($qry);

if($result->num_rows>0){
  // $row = $result->fetch_assoc();
  // print_r($row);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quesion Pool</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">Quiz Manager</a>
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
                <ul class="dropdown-menu bg-light" style="border-radius:25px;padding:20px;overflow:hidden" data-bs-popper="static">
                    <li><a class="dropdown-item" href="create_newQuiz.php">Create New Quiz</a></li>
                    
                <li><a class="dropdown-item" href="all_quiz.php">All Quiz</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="add_newQues.php">Add New Question Pool</a></li>
                </ul>
            </li>
            </ul>
            <form class="d-flex" role="search">
              <button class="btn btn-outline-danger" type="submit">Logout</button>
            </form>
          </div>
        </div>
      </nav>

      <?php
              foreach ($result as $r) {
                # code...
                echo '<div class="row justify-content-center">
                  <div class="col-md-3">
                <div class="card my-5 p-3" style="border-radius:30px">
                      <h3 class="text-center">' . $r['name'] . '</h3>
                      <h6><b>Course:</b> B.Tech <br>
                      <b>Year:</b> 2nd</h6> <br>
                      <div class="d-flex justify-content-between">
        
                        <button class="btn btn-outline-secondary">View Details</button>
                        <button class="btn btn-outline-danger">Delete Pool</button>
                        </div>
                      </div>
                      </div>';
              }};
                      ?>
  </div>
  </div>
</body>
</html>


