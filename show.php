<?php
include('config.php');
session_start();


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<style>
    img {
        height: 200px;
        width: 200px;
    }
</style>

<body>
    <h1>Your Image</h1>
    <a href="logout.php">logout</a>

    <div class="container text-center">
        <div class="row">

            <?php

            if (isset($_SESSION['user_id'])) {

$id = $_SESSION['user_id'];

                $sql = "SELECT * FROM images WHERE user = '$id'";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>


                        <div class="card" style="width: 18rem;">
                            <img src="images/<?php  echo $row['image'];  ?>" class="card-img-top" alt="...">
                         
                        </div>


            <?php }
                }
            }

            ?>




        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>