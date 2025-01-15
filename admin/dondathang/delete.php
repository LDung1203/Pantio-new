<?php
    require_once "../../connt/connect.php";
    global $conn;
    $hid=$_GET['hid'];
    $delete_sql="DELETE FROM orders WHERE id='$hid'";
    if(mysqli_query($conn,$delete_sql)){echo 'true';}else{echo 'false';}
    header("location:../Dondathang.php");