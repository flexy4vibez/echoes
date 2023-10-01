<?php
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql_query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $sql_query);

    if (mysqli_num_rows($result) > 0) {
        $record_found = mysqli_fetch_assoc($result);
        $_SESSION["record_found"] = $record_found;

        $match_password = password_verify($password, $_SESSION["record_found"]["password"]);
    }

    if (!empty($_SESSION["record_found"]) && $match_password) {
        header("location: index.php");
    } else {
        $error = "Wrong email or password. Check and try again.";
    }
    
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echoes - Signin</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body class="container-fluid">

    <!-- All content -->

        <!-- Signup Status -->
        <div class="col-sm-4 mx-auto">
            <h3 class="text-center text-success">
            <?php
            if (!empty($_SESSION["signup_status"])) {
            echo $_SESSION["signup_status"];
            session_destroy();
            }
            ?>
            </h3>
        </div>

        <!-- Signin Error -->
        <div class="col-sm-4 mx-auto">
            <h3 class="text-center text-danger">
            <?php
            if (!empty($error)) {
            echo $error;
            session_destroy();
            }
            ?>
            </h3>
        </div>

        <!-- Logo and Echoes -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-2">
            <a href="index.php"><img src="images/favicon.png" alt="logo" class="img-fluid"></a>
            </div>

            <div class="col-2 mt-2">
                <h2>Echoes</h2>
            </div>
        </div>

        <!-- Sign in and start listening -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-8 text-center">
                <h2>Sign in and start listening</h2>
            </div>
        </div>

        <!-- Sign in with Facebook -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn background_blue btn-outline-primary rounded-pill text-white"><i class="bi bi-facebook me-3"></i><span class="fw-bold">Sign in with Facebook</span></a>
            </div>
        </div>

        <!-- Sign in with Google -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn btn-white border border-2 border-dark rounded-pill"><img class="me-3 mb-1" src="images/google.png" alt=""><span class="fw-bold">Sign in with Google</span></a>
            </div>
        </div>

        <!-- Or -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <h3 class="line"><span class="line_text">Or</span></h3>
            </div>
        </div>

        <!-- Sign in with Your Email Address -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 text-center">
                <h4>Sign in with your email Address</h4>
            </div>
        </div>

        

        <!-- Sign in Form -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <form action="" method="post">
                    <label for="" class="form-label"><h5>Email</h5></label>
                    <input type="email" name="email" id="" class="form-control" placeholder="Enter your email">

                    <label for="" class="form-label mt-2"><h5>Password</h5></label>
                    <input type="password" name="password" id="" class="form-control" placeholder="Enter your password">

                    <div class="col-12 text-center">
                        <button class="btn btn-outline-danger background_orange text-white rounded-pill mt-2" type="submit">Sign in</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Got no account yet? -->
        <div class="col-12 row justify-content-center mt-4 mb-4">
            <div class="col-lg-4">
                <h3 class="line"><span class="line_text">Got no account yet?</span></h3>
                <div class="col-12 text-center">
                    <a href="signup.php" class="btn btn-outline-danger background_orange text-white rounded-pill mt-2">Register Here</a>
                </div>
            </div>
        </div>

    

    
    
</body>
</html>