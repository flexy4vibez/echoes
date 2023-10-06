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

<table class="table table-stripped table-hover table-bordered border-white text-white">
    <tr>
        <th>Song ID</th>
        <th>Genre</th>
        <th>Song Title</th>
        <th>Artist</th>
    </tr>

    <?php
    $id = 1;
    while ($id <= 2000):

    $sql_query = "SELECT * from songs WHERE id = '$id'";
    $result = mysqli_query($con, $sql_query);

    if (mysqli_num_rows($result) > 0):
    $data_fetched = mysqli_fetch_assoc($result);
    ?>
    
        <tr>
            <td><?php echo $data_fetched["id"]; ?></td>
            <td><?php echo $data_fetched["genre"]; ?></td>
            <td><?php echo $data_fetched["title"]; ?></td>
            <td><?php echo $data_fetched["artist"]; ?></td>
        </tr>

    <?php 
    endif;
    $id++;
    endwhile;
    ?>
    
    </table>

    <!-- Footer -->
    <?php include "footer.php"; ?>
    
    <!-- Closing -->
    </div>

    
</div>


    

    
</body>
</html>