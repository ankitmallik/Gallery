<?php
include('config.php');
if(isset($_GET['deleteid']))
{
    $id = $_GET['deleteid'];

    $del = "DELETE FROM images WHERE id = '$id'";
    $result = mysqli_query($conn,$del);
    if($result)


    
    {
    
        header('location:show.php');
    }
}