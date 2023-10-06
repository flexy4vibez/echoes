<?php
include "session.php";
$_SESSION["new_track"] = $_GET["track"];
header("location: index.php#play");
?>
