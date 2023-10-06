<?php
include "session.php";
$_SESSION["new_track"] = $_GET["track"];
header("location: all_songs.php#play");
?>
