<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

        <?php
        // Select music to be played
        if (!empty($_SESSION["new_track"])) {
            $id = $_SESSION["new_track"];

            $sql_query = "SELECT * FROM songs WHERE id = '$id'";
            $result = mysqli_query($con, $sql_query);

            if (mysqli_num_rows($result) > 0) {
            $music_fetched = mysqli_fetch_assoc($result);
            $_SESSION["music_fetched"] = $music_fetched;
            }
        }
        ?>


        <?php if (!empty($_SESSION["record_found"])): ?>
        <!-- Footer signed in -->
        <div class="container-fluid row justify-content-between text-white px-o" style="background: #000000;">
            <div class="col-md-3">
                <p class="pb-2">Lorem Ipsum</p>
            </div>

            <div class="col-md-5">
                <audio src="<?php echo $_SESSION["music_fetched"]["song"]; ?>" controls autoplay></audio>
            </div>
                
            <div class="col-md-3">
                <p>Echo Invite friends</p>
            </div>
        </div>
        <?php else: ?>

        <!-- Footer Not signed in -->
        
        <div class="container-fluid row justify-content-between footer_background text-white px-o">
            <div class="col-md-4">
                <p class="py-2" style="font-family: 'Pacifico', cursive;">welcome to echoes</p>
                <p class="pb-2">Sign up and get unlimited songs</p>
            </div>
                
            <div class="col-md-2">
                <a href="signup.php" class="btn btn-outline-danger background_orange text-white mt-4 rounded-pill">Sign up free</a>
            </div>
        </div>
        <?php endif; ?>
    
</body>
</html>