<?php
include "session.php";

if (empty($_SESSION["record_found"])) {
    header("location: index.php");
    die;
}

session_destroy();
header("location: signin.php");
?>