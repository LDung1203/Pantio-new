<?php
$conn = mysqli_connect("localhost","root","","pantio");
$hmid=$_GET['hid'];
require_once("index.php");
$delete_sql="DELETE FROM user WHERE id='$hmid'";
mysqli_query($conn,$delete_sql);
header("location:../Khachhang.php");
?>