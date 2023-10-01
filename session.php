<?php
session_start();

$con = mysqli_connect('localhost', 'root', 'oluwayinka', 'echoes');

function check_login() {
    if (empty($_SESSION["record_found"])) {
        header("location: signin.php");
    }
}

?>