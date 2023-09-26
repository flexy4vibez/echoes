<?php
include "session.php";
session_destroy();
header("location: signin.php");
?>