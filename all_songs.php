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

<!-- Test Loop -->



<div class="col-12 mx-auto row justify-content-between">
    <?php
    $id = 11;
    while ($id <= 2000):

    $sql_query = "SELECT * from songs WHERE id = '$id'";
    $result = mysqli_query($con, $sql_query);

    if (mysqli_num_rows($result) > 0):
    $data_fetched = mysqli_fetch_assoc($result);
    ?>
    <div class="col-sm-3 mt-3" style="position: relative;">
        <img src="<?php echo $data_fetched["cover_art"]; ?>" alt="" width="1000" class="img-fluid">

        <!-- Song title -->
        <div class="col-12 row justify-content-between text-white fw-bold" style="position: absolute; top:10%;">
                <div class="col-8">
                    <p><?php echo $data_fetched["title"]; ?></p>
                    <p><?php echo $data_fetched["artist"]; ?></p>
                </div>

                <div class="col-4">
                    <img src="images/play.png" class="img-fluid" alt="play">
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




    

    

    <!-- Footer -->
    
    <div class="container-fluid row justify-content-between footer_background text-white px-o">
        <div class="col-sm-4">
            <p class="py-2" style="font-family: 'Pacifico', cursive;">welcome to echoes</p>
            <p class="pb-2">Sign up and get unlimited songs</p>
        </div>
            
        <div class="col-sm-2">
            <a href="{{url('sign_up')}}" class="btn btn-outline-danger background_orange text-white mt-4 rounded-pill">Sign up free</a>
        </div>
    </div>
    
    <!-- Closing -->
    </div>

    
</div>


    

    
</body>
</html>