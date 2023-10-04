<?php
include "session.php";
echo "I am here <br>";
$_SESSION["new_track"] = $_GET["track"];
echo $_SESSION["new_track"];
header("location: all_songs.php#play");
?>
