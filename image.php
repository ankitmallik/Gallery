<?php
include('config.php');
session_start();

if (isset($_POST['submit'])) {
   

    $image_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'images/' . $image_name;
     $id = $_SESSION['user_id'];
    $query = mysqli_query($conn, "insert into images(image,user)values('$image_name','$id')");
    if (move_uploaded_file($tempname, $folder)) {
        echo "<script>
        alert('image uploaded');
        </script>";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="contianer">
        <button><a href="index.php">Back</a></button>
        <h1>Add image!</h1>

        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Add Image</button>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>