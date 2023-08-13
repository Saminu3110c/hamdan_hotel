<?php
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'my_hotel';

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if(!$conn){
        die("connection failled! ".mysqli_connect_error());
    }

?>