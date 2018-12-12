<?php
    $server_username = "root";
    $server_password = "";
    $server_host = "localhost";
    $database = "royal_hotel";
    
    $conn = mysqli_connect($server_host,$server_username,$server_password,$database)
    or die("Not Connection Database");
    mysqli_query($conn,"SET NAME 'UTF8'")
?>