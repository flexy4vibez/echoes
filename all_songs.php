<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echoes - Recent Uploads</title>
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body>
<?php 
include "header.php";



?>

<!-- Songs Display Loop -->
<div class="col-12 mx-auto row justify-content-between">
    <?php
    $id = 1;
    while ($id <= 2000):

    $sql_query = "SELECT * from songs WHERE id = '$id'";
    $result = mysqli_query($con, $sql_query);

    if (mysqli_num_rows($result) > 0):
    $data_fetched = mysqli_fetch_assoc($result);
    $track_id = $data_fetched["id"];
    ?>
    
    <div class="col-sm-3 mt-3" style="position: relative;">
        <img src="<?php echo $data_fetched["cover_art"]; ?>" alt="" width="1000" class="img-fluid rounded">

        <!-- Song title -->
        <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p><?php echo $data_fetched["title"]; ?></p>
                    <p><?php echo $data_fetched["artist"]; ?></p>
                </div>

                <div class="col-4">
                    <a href="decoy.php?track=<?php echo $track_id; ?>"><img src="images/play.png" class="img-fluid" alt="play"></a>
                </div>
        </div>

        
        <div class="text-white fw-bold" style="background-image: url('images/album_background2.png'); background-repeat:no-repeat; background-size:cover;">
            <p>Genre: <?php echo $data_fetched["genre"]; ?></p>
            <p><i class="bi bi-heart-fill"></i> Like</p>
        </div>
    </div>
    <?php 
    endif;
    $id++;
    endwhile;
    ?>

    
</div>

    <?php
    

    ?>

    <!-- Footer -->
    <div id="play">
        <?php include "footer.php"; ?>
    </div>
    
    <!-- Closing -->
    </div>

    
</div>


    

    
</body>
</html>