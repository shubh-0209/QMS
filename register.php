<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid" style="height: 100vh;">
        <div class="card col-md-3 m-auto text-center bg-dark text-light" style="margin-top: 15vh!important; border-radius: 30px;" >
            <div class="card-header">
                <h2>Register</h2>
            </div>
            <div class="card-body d-flex justify-content-center">
                <form action="callback/register_callback.php" method="post">
                    <input type="text" class="form-control mb-3" name="name" id="name" placeholder="Enter Your Name" required>
                    <input type="number" name="roll" class="form-control mb-3" id="roll" placeholder="Enter Your Roll Number" required>
                    <input type="email" name="email" class="form-control mb-3" id="email" placeholder="Enter Your Email" required>
                    <select name="course" class="form-control mb-3" id="course">
                        <option value="btech">B.Tech</option>
                        <option value="mtech">M.Tech</option>
                        <option value="bsc">BSc</option>
                        <option value="bca">BCA</option>
                        <option value="mca">MCA</option>
                        <option value="mba">MBA</option>
                    </select>
                    <select name="year" class="form-control mb-3" id="year">
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="4">4th</option>
                    </select>
                    <input type="password" class="form-control mb-3" name="password" id="password" placeholder="Create Password" required>
                    <input type="password" class="form-control mb-3" name="pass" id="pass" placeholder="Confirm Password" required>
                    <input type="submit" class="form-control mb-3 bg-success" value="REGISTER" class="sub" name="submit">
                </form>
            </div>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>