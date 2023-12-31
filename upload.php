<?php
include "session.php";
check_login();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $genre = addslashes($_POST["genre"]);
    $title = addslashes($_POST["title"]);
    $artist = addslashes($_POST["artist"]);
    $genre = addslashes($_POST["other_genre"]);
    
    

    // Upload cover art and song
    if (!empty($_FILES["cover_art"]["name"]) && !empty($_FILES["song"]["name"])) {
        $cover_art_folder = "cover_arts/";
        $songs_folder = "songs/";

        $destination1 = $cover_art_folder . $_FILES["cover_art"]["name"];
        move_uploaded_file($_FILES["cover_art"]["tmp_name"], $destination1);

        $destination2 = $songs_folder . $_FILES["song"]["name"];
        move_uploaded_file($_FILES["song"]["tmp_name"], $destination2); 
    }

    $cover_art = $destination1;
    $song = $destination2;
    

    // Insert all into database
    $sql_query = "INSERT INTO songs (genre, title, artist, cover_art, song) VALUES ('$genre', '$title', '$artist', '$cover_art', '$song')";
    $result = mysqli_query($con, $sql_query);

    header("location: all_songs.php");
    
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

        <!-- Upload songs and start sharing -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-8 text-center">
                <h2>Upload songs and start sharing</h2>
            </div>
        </div>

        
        <!-- Sign up Form -->
        <div class="col-12 row justify-content-center mt-4">
            <div class="col-sm-4">
                <form method="post" enctype="multipart/form-data">
                    <label for="" class="form-label"><h5>Genre</h5></label>
                    <select class="form-select form-select-sm" name="genre" id="genre" required onchange="show_other()">
                    <option value="Hiphop">Hiphop</option>
                    <option value="Fuji">Fuji</option>
                    <option value="Jazz">Jazz</option>
                    <option value="R&B">R&B</option>
                    <option value="Gospel">Gospel</option>
                    <option value="Afro Beat">Afro Beat</option>
                    <option value="Pop">Pop</option>
                    <option value="Rock">Rock</option>
                    <option value="Rhythm and Blues">Rhythm and Blues</option>
                    <option value="Raggae">Raggae</option>
                    <option value="Country Music">Country Music</option>
                    <option value="Classical">Classical</option>
                    <option value="Other">Other</option>
                    </select>

                    <div class="mt-2" id="other_genre" style="display: none;">
                        <label for="" class="form-label"><h5>Specify the Genre</h5></label>
                        <input type="text" name="other_genre" minlength="2" maxlength="90" class="form-control" placeholder="Genre">
                    </div>

                    <label for="" class="form-label mt-2"><h5>Title</h5></label>
                    <input type="text" name="title" minlength="2" maxlength="90" required class="form-control" placeholder="Song title">

                    <label for="" class="form-label mt-2"><h5>Artist</h5></label>
                    <input type="text" name="artist" maxlength="90" minlength="2" required class="form-control" placeholder="Artist">
                    
                    <div class="mt-2">
                        <h5>Upload cover art (jpg, jpeg, png)</h5>
                        <input type="file" name="cover_art">
                    </div>

                    <div class="mt-2">
                        <h5>Upload song (mp3)</h5>
                        <input type="file" name="song">
                    </div>

                    <div class="col-12 text-center">
                        <button class="btn btn-outline-danger background_orange text-white rounded-pill mt-2" type="submit">Upload</button>
                    </div>

                </form>
            </div>
        </div>

        <script>
            function show_other() {
               let genre = document.getElementById("genre").value;
               let other_genre = document.getElementById("other_genre");

               if (genre == "Other") {
                other_genre.style.display = "block";
               }
               else {
                other_genre.style.display = "none";
               }
            }
        </script>
    
</body>
</html>