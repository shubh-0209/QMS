<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Quiz</title>
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
      <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card my-5 p-3" style="border-radius:30px">
                    <h1 class="m-auto my-2">Add New Quiz</h1>
                    <div class="card-body">
                        <form action="" method="post">
                             <input class="subject form-control" type="text" placeholder="Enter Number of Subjects" name="subject" required><hr><br>
                             <h3>Quiz Details:</h3><br>
                             <input class="form-control" type="text" placeholder="Enter Quiz Name" name="quizName" required><br>
                             <textarea class="form-control" type="text" placeholder="Enter Quiz Rules" name="rules" cols="105" rows="4" required></textarea><br>
                             <input class="form-control" type="text" name="time" id="time" placeholder="Enter Quiz Time in Minutes" required><hr><br>
                             <h3>Quiz Starts At:</h3><br>
                             <input type="datetime-local" name="datetime" class="form-control" required><hr><br>
                             <h3>Alot Quiz To:</h3><br>
                             <select name="course" class="form-control mb-3" id="course" required>
                                <option value="btech">B.Tech</option>
                                <option value="mtech">M.Tech</option>
                                <option value="bsc">BSc</option>
                                <option value="bca">BCA</option>
                                <option value="mca">MCA</option>
                                <option value="mba">MBA</option>
                            </select>
                            <select name="year" class="form-control mb-3" id="year" required>
                                <option value="1">1st</option>
                                <option value="2">2nd</option>
                                <option value="3">3rd</option>
                                <option value="4">4th</option>
                            </select>
                            <div style="display: flex; align-items: end; justify-content: end; ">
                <button class="btn btn-outline-secondary" style="width: 50px;" name="submit">All</button><br>
                </div><br>
                <div>
                            <table class="table" style="border-collapse: collapse; text-align: center;">
                                <tbody>
                                    <tr>
                                        <th>Roll No</th>
                                        <th>Name</th>
                                        <th>Allotment</th>
                                    </tr>
                                    <tr>
                                        <td>12345</td>
                                        <td>Kaushik</td>
                                        <td>
                                            <input type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                          </div>
                            <div  class="d-flex align-self-end" style="display: flex; align-items: center; justify-content: end; ">
                              <button class="btn btn-outline-danger" style="width: 60px;"  name="submit">Alot</button><br>
                              </div>
                          </div>
                          <div >
                              <button class="btn btn-success" style="width: 100%" name="submit">ADD QUIZ</button><br>
                              </div>
                    </div>
                    </div>
                    </div>
</body>
</html>