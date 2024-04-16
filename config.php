<?php
$conn = mysqli_connect('localhost','root','123456','gallery');
if(!$conn)
{
    die(mysqli_connect_error());
}