<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "yasogami_hotel";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_errno()){
        echo "Failed to connect to MySQL : " . mysqli_connect_error();
    }
?>