<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes Home</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
<?php include "header.php"; ?>


<!-- Recent Uploads Div -->
    <div class="col-sm-12 row justify-content-between text-white mt-3">
        <div class="col-sm-3"><h4 style="font-family: 'Pacifico', cursive;">Recent Uploads</h4></div>
        <div class="col-sm-3"><a style="text-decoration: none; color: white;" href="all_songs.php"><h4>SEE ALL</h4></a></div>
    </div>
    
    <!-- List of Albums -->
    <!-- Row 1 Recent Uploads -->
    <div class="col-sm-12 row justify-content-between mb-4">

        <!-- Row 1 first div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/track1.png" alt="" class="img-fluid mt-3 rounded-top">
            <img src="images/album_background2.png" alt="" class="img-fluid rounded-bottom">
            
            <!-- Song title -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p>Rush</p>
                    <p>AYRA STAR</p>
                </div>

                <div class="col-4">
                    <a href="decoy2.php?track=1"><img src="images/play.png" class="img-fluid" alt="play"></a>
                </div>
            </div>

            <!-- Genre and duration -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:60%;">
                <div class="col-6">
                    <p>Genre</p>
                    <p>Duration</p>
                    <p><i class="bi bi-heart-fill"></i> Like</p>
                </div>

                <div class="col-5">
                    <p>R&B</p>
                    <p>3:05</p>
                </div>
            </div>

        </div>

        <!-- Row 1 second div -->
        <div class="col-sm-3" style="position: relative;"> 
            <img src="images/track2.png" alt="" class="img-fluid mt-3 rounded-top">
            <img src="images/album_background2.png" alt="" class="img-fluid rounded-bottom">

            <!-- Song title -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p>Kenkele</p>
                    <p>BUJU BNXN ft Wande Coal</p>
                </div>

                <div class="col-4">
                <a href="decoy2.php?track=2"><img src="images/play.png" class="img-fluid" alt="play"></a>
                </div>
            </div>

            <!-- Genre and duration -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:60%;">
                <div class="col-6">
                    <p>Genre</p>
                    <p>Duration</p>
                    <p><i class="bi bi-heart-fill"></i> Like</p>
                </div>

                <div class="col-5">
                    <p>Hiphop</p>
                    <p>3:34</p>
                </div>
            </div>

        </div>

        <!-- Row 1 third div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/track3.png" alt="" class="img-fluid mt-3 rounded-top">
            <img src="images/album_background2.png" alt="" class="img-fluid rounded-bottom">

            <!-- Song title -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p>Alajo Somolu</p>
                    <p>BRYMO</p>
                </div>

                <div class="col-4">
                <a href="decoy2.php?track=3"><img src="images/play.png" class="img-fluid" alt="play"></a>
                </div>
            </div>

            <!-- Genre and duration -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:60%;">
                <div class="col-6">
                    <p>Genre</p>
                    <p>Duration</p>
                    <p><i class="bi bi-heart-fill"></i> Like</p>
                </div>

                <div class="col-5">
                    <p>Fuji</p>
                    <p>3:30</p>
                </div>
            </div>

        </div>

        <!-- Row 1 fourth div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/track4.png" alt="" class="img-fluid mt-3 rounded-top">
            <img src="images/album_background2.png" alt="" class="img-fluid rounded-bottom">

            <!-- Song title -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p>Loaded</p>
                    <p>TIWA SAVAGE ft ASAKE</p>
                </div>

                <div class="col-4">
                <a href="decoy2.php?track=4"><img src="images/play.png" class="img-fluid" alt="play"></a>
                </div>
            </div>

            <!-- Genre and duration -->
            <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:60%;">
                <div class="col-6">
                    <p>Genre</p>
                    <p>Duration</p>
                    <p><i class="bi bi-heart-fill"></i> Like</p>
                </div>

                <div class="col-5">
                    <p>Jazz</p>
                    <p>2:37</p>
                </div>
            </div>

        </div>

    </div>
    

    <!-- Artists -->
    <div class="col-sm-12 row justify-content-between text-white">
        <div class="col-sm-3"><h4 style="font-family: 'Pacifico', cursive;">Artists</h4></div>
        <div class="col-sm-3"><a style="text-decoration: none; color: white;" href="all_artists.php"><h4>SEE ALL</h4></a></div>
    </div>

    <!-- Row 2 Artists -->
    <div class="col-sm-12 row justify-content-between text_orange">

        <!-- Row 2 first div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/artist1.png" alt="" class="img-fluid mt-3 rounded">
            
            <!-- Artist and Likes -->
            <div class="col-12 row justify-content-between text-white" style="position: absolute; top:35%;">
                <div class="col-8">
                    <p class="fw-bold">SANDRA</p>
                    <p>Artiste</p>
                    <p>2K Likes</p>
                </div>

                <div class="col-4">
                    <img src="images/play.png" class="img-fluid" alt="play">
                </div>
            </div>
        </div>

        <!-- Row 2 second div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/artist2.png" alt="" class="img-fluid mt-3 rounded">
            
            <!-- Artist and Likes -->
            <div class="col-12 row justify-content-between text-white" style="position: absolute; top:35%;">
                <div class="col-8">
                    <p class="fw-bold">CIDORF</p>
                    <p>Artiste</p>
                    <p>3K Likes</p>
                </div>

                <div class="col-4">
                    <img src="images/play.png" class="img-fluid" alt="play">
                </div>
            </div>
        </div>

        <!-- Row 2 third div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/artist3.png" alt="" class="img-fluid mt-3 rounded">
            
            <!-- Artist and Likes -->
            <div class="col-12 row justify-content-between text-white" style="position: absolute; top:35%;">
                <div class="col-8">
                    <p class="fw-bold">JAY RAGA</p>
                    <p>Artiste</p>
                    <p>1.5K Likes</p>
                </div>

                <div class="col-4">
                    <img src="images/play.png" class="img-fluid" alt="play">
                </div>
            </div>
        </div>

        <!-- Row 2 fourth div -->
        <div class="col-sm-3" style="position: relative;">
            <img src="images/artist4.png" alt="" class="img-fluid mt-3 rounded">
            
            <!-- Artist and Likes -->
            <div class="col-12 row justify-content-between text-white" style="position: absolute; top:35%;">
                <div class="col-8">
                    <p class="fw-bold">MABEL</p>
                    <p>Artiste</p>
                    <p>2.2K Likes</p>
                </div>

                <div class="col-4">
                    <img src="images/play.png" class="img-fluid" alt="play">
                </div>
            </div>
        </div>

    </div>

    <div id="play">
    <?php include "footer.php"; ?>
    </div>

    <!-- Closing -->
    </div>

    
</div>


    
</body>
</html>