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
        <div class="container-fluid row text-white px-o" style="background: #000000;">
            <div class="col-md-4 row justify-content-between mt-4">
                <!-- If a track is selected -->
                <?php if (!empty($_SESSION["new_track"])): ?>
                <div class="col-3">
                    <img src="<?php echo $_SESSION["music_fetched"]["cover_art"]; ?>" alt="" width="70" height="90" class="rounded-circle">
                </div>

                <div class="col-8 mt-4">
                    <h5><?php echo $_SESSION["music_fetched"]["title"]; ?></h5>
                    <p><?php echo $_SESSION["music_fetched"]["artist"]; ?></p>
                </div>
            </div>

            <div class="col-md-5 mt-4">
                <div class="mt-4"><audio src="<?php echo $_SESSION["music_fetched"]["song"]; ?>" controls autoplay></audio></div>
            </div>
                
            <div class="col-lg-3 mt-4 row justify-content-between">
                <div class="col-3 mt-4">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="30" height="30" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_221_194" transform="scale(0.0111111)"/>
                    </pattern>
                    <image id="image0_221_194" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFVElEQVR4nO2cW2gdRRjHp61ab1BEi0nFFwNVQV8U77aN0iBVFKkWxTfF4q2KaGviDTW+iCBCFBR80HqnKKmKUalWX2y0byLipZqneGtti5Xmpic/+TgTieXszOw5uzs7u/ODQyDJzM78mfPNN9/3zSoViUQikTmA44FB4FVgE7D0vz9GsgE4DviR/zMBPA8sz+gxEeAukmkAW4HzolIdAjyJnVngZWBZp8+rLcDluPMX0A8s9j3ukFd1I4Xgu4CLfI87SIAzgc3AtKPYfwMPAgt9jz1IgBOBR4G9joJ/Cpzke9zBAiwBngJmHMTeDfT6HnPQAMuB9x3EFpNzne/xBg+wFthjEVs21Dt8jzV4gGXAdofV/TiwwPd4SwNwOHC99h5WO7ZZBDykvQ6j2PnPIACAo4Adh4gzClzi2H41cMAi9u2q7gC3GQT6AOhx6OMs4DeLzb5W1RngWctqPAhsFFNh6aenRfRvPlPAKlVXgFtwQ8zLyZa+uixi/w50qzoCHOHoQcwdSPocVrbJjHxc2+M6TQ/iVuBnB7H/Ae609He2ZYN8QNUZ4GhgQNtlG4OWvvoMrp/8/kJVd4BTgG0OYg9Z+nnY0PYHMVsqFIB1Orc3DnypE6uyKlfKCu2g3wXAPQ4HkkGLSZKoXhL3qRAAluoNKokZPdEN7YYwgRXArxaxE222PNcQGzkQhBcCbMGdhhb9qrS7vjYlkk0xbZB9lkBUEptVACajXb4F1kuMI2Ui4CtDn7tNfjbwkSHhe64K1GS48j1wRYrndllW9o6kEyRwuiF5MKwqYDJceF2qlFKYEZPN3mhoK5maJLNWriIdmtGyPBCv5fwUG2SSN3IwKRCl02L7E9o9p8oEybYuCyQNdaPjOMT1S2LE0O6JhDYTpan1Axbq4pU8kc1pk6Of/Ymhn16Du5dUymB9bpFB+qJwEbvHcFwfNbR7qfSuHvZsRpYr22pGJEBk6KNlWgw4Q/vehzKgygLwBsUxbdsgdSDql4T2jxnaSR32fL4GjlVlAVhFsYzbXD8dYm3FzZZ2vcAjwE3AkapsYA7U5MFrlvEc1iLB+w1wjAoZil/V2E6QIqrOLb6pyxaWqNAB7vYg9K5a1UPTjISlqWHOkvWqDgDnOKaZ8uK7yidWaR4OJF3vmytVVaEZFjXVSxTJdlVFaB67P6c8zNoKaYKDZnJzOKUQU/rGVJf+9Ke4j+LKBlUlgKE2RF7Toh/JimfJZ6oqAPemnPx00kal831ZMtNJKUPZEq+NTlfyvP66yZ6VKmTkgiQwmXLS/ZY+789B6PKENNMCnAr80cakuwx9rtErPmteUSECnKDr0chKaOCyNr4drnyhQkMHz6VuLrOvMfmt5DnGVYC+8jsdTnpau3Dd+jOQs8jChKq4r1wGpEpqnQoFKVslPLaUpv4iJ1/ZN2Gt4nklVXl5A2mCQxIHuRh4r1KrWABOS/EOjLyQ8qu1LfKQUuz4p/4f+TkCXKpCQ8ccxvDLHuACyzgXB3tZXseV5Y61T36S06eqMsDbnkUeDc7OpgW4xrPIw5UIa3quabYxZLswXxmAfRRPQ4rFVZ3QPmuRTNby/RgFi7w3+OxHuxQo8pgciFRdKUjknXIgUnWmAJG31sJ9s5GzyC9IIbjvOZaCnASelZe0+p5bqchB5CngBt/zKhU6Epa1+7bC97zK+AaudzMUeazW7ltBIu+svfuWYC4kO5EVbwV/lazEIu8DPgSu9j2nUEUeqdU1sjwAnokiF/MuDdPVtLiSMxQ6qVYjipwlwItR5AKQ901osSf1K3mejhtfjgRbfBKJRCKRSESVin8B/7gt4AQrjd8AAAAASUVORK5CYII="/>
                    </defs>
                    </svg>
                    <p>Echo</p>
                </div>

                <div class="col-8 mt-2 text-center">
                <div class="fs-3 mt-1"><i class="bi bi-people"></i></div>
                <p>Invite Friends</p>
                </div>
            </div>
            <!-- End -->

            <!-- If no track is selected -->
            <?php else: ?>
                <div class="col-3">
                    <img src="images/artist1.png" alt="" width="70" height="90" class="rounded-circle">
                </div>

                <div class="col-8 mt-4">
                    <h5></h5>
                    <p></p>
                </div>
            </div>

            <div class="col-md-5 mt-4">
                <div class="mt-4"><audio src="" controls autoplay></audio></div>
            </div>
                
            <div class="col-lg-3 mt-4 row justify-content-between">
                <div class="col-3 mt-4">
                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <rect width="30" height="30" fill="url(#pattern0)"/>
                    <defs>
                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                    <use xlink:href="#image0_221_194" transform="scale(0.0111111)"/>
                    </pattern>
                    <image id="image0_221_194" width="90" height="90" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFoAAABaCAYAAAA4qEECAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFVElEQVR4nO2cW2gdRRjHp61ab1BEi0nFFwNVQV8U77aN0iBVFKkWxTfF4q2KaGviDTW+iCBCFBR80HqnKKmKUalWX2y0byLipZqneGtti5Xmpic/+TgTieXszOw5uzs7u/ODQyDJzM78mfPNN9/3zSoViUQikTmA44FB4FVgE7D0vz9GsgE4DviR/zMBPA8sz+gxEeAukmkAW4HzolIdAjyJnVngZWBZp8+rLcDluPMX0A8s9j3ukFd1I4Xgu4CLfI87SIAzgc3AtKPYfwMPAgt9jz1IgBOBR4G9joJ/Cpzke9zBAiwBngJmHMTeDfT6HnPQAMuB9x3EFpNzne/xBg+wFthjEVs21Dt8jzV4gGXAdofV/TiwwPd4SwNwOHC99h5WO7ZZBDykvQ6j2PnPIACAo4Adh4gzClzi2H41cMAi9u2q7gC3GQT6AOhx6OMs4DeLzb5W1RngWctqPAhsFFNh6aenRfRvPlPAKlVXgFtwQ8zLyZa+uixi/w50qzoCHOHoQcwdSPocVrbJjHxc2+M6TQ/iVuBnB7H/Ae609He2ZYN8QNUZ4GhgQNtlG4OWvvoMrp/8/kJVd4BTgG0OYg9Z+nnY0PYHMVsqFIB1Orc3DnypE6uyKlfKCu2g3wXAPQ4HkkGLSZKoXhL3qRAAluoNKokZPdEN7YYwgRXArxaxE222PNcQGzkQhBcCbMGdhhb9qrS7vjYlkk0xbZB9lkBUEptVACajXb4F1kuMI2Ui4CtDn7tNfjbwkSHhe64K1GS48j1wRYrndllW9o6kEyRwuiF5MKwqYDJceF2qlFKYEZPN3mhoK5maJLNWriIdmtGyPBCv5fwUG2SSN3IwKRCl02L7E9o9p8oEybYuCyQNdaPjOMT1S2LE0O6JhDYTpan1Axbq4pU8kc1pk6Of/Ymhn16Du5dUymB9bpFB+qJwEbvHcFwfNbR7qfSuHvZsRpYr22pGJEBk6KNlWgw4Q/vehzKgygLwBsUxbdsgdSDql4T2jxnaSR32fL4GjlVlAVhFsYzbXD8dYm3FzZZ2vcAjwE3AkapsYA7U5MFrlvEc1iLB+w1wjAoZil/V2E6QIqrOLb6pyxaWqNAB7vYg9K5a1UPTjISlqWHOkvWqDgDnOKaZ8uK7yidWaR4OJF3vmytVVaEZFjXVSxTJdlVFaB67P6c8zNoKaYKDZnJzOKUQU/rGVJf+9Ke4j+LKBlUlgKE2RF7Toh/JimfJZ6oqAPemnPx00kal831ZMtNJKUPZEq+NTlfyvP66yZ6VKmTkgiQwmXLS/ZY+789B6PKENNMCnAr80cakuwx9rtErPmteUSECnKDr0chKaOCyNr4drnyhQkMHz6VuLrOvMfmt5DnGVYC+8jsdTnpau3Dd+jOQs8jChKq4r1wGpEpqnQoFKVslPLaUpv4iJ1/ZN2Gt4nklVXl5A2mCQxIHuRh4r1KrWABOS/EOjLyQ8qu1LfKQUuz4p/4f+TkCXKpCQ8ccxvDLHuACyzgXB3tZXseV5Y61T36S06eqMsDbnkUeDc7OpgW4xrPIw5UIa3quabYxZLswXxmAfRRPQ4rFVZ3QPmuRTNby/RgFi7w3+OxHuxQo8pgciFRdKUjknXIgUnWmAJG31sJ9s5GzyC9IIbjvOZaCnASelZe0+p5bqchB5CngBt/zKhU6Epa1+7bC97zK+AaudzMUeazW7ltBIu+svfuWYC4kO5EVbwV/lazEIu8DPgSu9j2nUEUeqdU1sjwAnokiF/MuDdPVtLiSMxQ6qVYjipwlwItR5AKQ901osSf1K3mejhtfjgRbfBKJRCKRSESVin8B/7gt4AQrjd8AAAAASUVORK5CYII="/>
                    </defs>
                    </svg>
                    <p>Echo</p>
                </div>

                <div class="col-8 mt-2 text-center">
                <div class="fs-3 mt-1"><i class="bi bi-people"></i></div>
                <p>Invite Friends</p>
                </div>
            </div>
            <?php endif; ?>
            <!-- End -->
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