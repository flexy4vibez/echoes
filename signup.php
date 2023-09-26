<?php
include "session.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = addslashes($_POST["email"]);
    $password = addslashes($_POST["password"]);
    $nickname = addslashes($_POST["nickname"]);

    $sql_query = "INSERT INTO users (email, password, nickname) VALUES ('$email', '$password', '$nickname')";
    $result = mysqli_query($con, $sql_query);

    header("location: signin.php");

    if (!empty($result)) {
        $_SESSION["signup_status"] = "Registration successful. Login to access your profile.";
    } else {
        $_SESSION["signup_status"] = "Registration failed. Please, try again.";
    }
    
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Echoes - Signup</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body class="container-fluid">

    <!-- All content -->
    

        <!-- Logo and Echoes -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-2">
                <a href="index.php"><img src="images/favicon.png" alt="logo" class="img-fluid"></a>
            </div>

            <div class="col-2 mt-2">
                <h2>Echoes</h2>
            </div>
        </div>

        <!-- Sign up and start listening -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-8 text-center">
                <h2>Sign up for free and start listening</h2>
            </div>
        </div>

        <!-- Sign in with Facebook -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn background_blue btn-outline-primary rounded-pill text-white"><i class="bi bi-facebook me-3"></i><span class="fw-bold">Sign up with Facebook</span></a>
            </div>
        </div>

        <!-- Sign in with Google -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4 d-grid">
                <a href="" class="btn btn-white border border-2 border-dark rounded-pill"><img class="me-3 mb-1" src="images/google.png" alt=""><span class="fw-bold">Continue with Google</span></a>
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
                <h4>Sign up with your email address</h4>
            </div>
        </div>

        
        <!-- Sign up Form -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <form method="post">
                    <label for="" class="form-label"><h5>What's your email</h5></label>
                    <input type="email" name="email" required class="form-control" placeholder="Enter your email">

                    <label for="" class="form-label mt-2"><h5>Create a password</h5></label>
                    <input type="password" name="password" minlength="6" maxlength="20" required class="form-control" placeholder="Create a password">

                    <label for="" class="form-label mt-2"><h5>What should we call you?</h5></label>
                    <input type="text" name="nickname" maxlength="15" minlength="2" required class="form-control" placeholder="Enter a profile name">
                    <p>This appears on your profile</p>

                    <div class="col-12 text-center">
                        <button class="btn btn-outline-danger background_orange text-white rounded-pill mt-2" type="submit">Sign up</button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Got account already? -->
        <div class="col-12 row justify-content-center mt-4 mb-4">
            <div class="col-lg-4">
                <h3 class="line"><span class="line_text">Got account already?</span></h3>
                <div class="col-12 text-center">
                    <a href="signin.php" class="btn btn-outline-danger background_orange text-white rounded-pill mt-2">Sign in here</a>
                </div>
            </div>
        </div>

    

    
    
</body>
</html>