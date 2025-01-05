<?php
    $conn = mysqli_connect("localhost","root","","pantio");
    if(!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
?>