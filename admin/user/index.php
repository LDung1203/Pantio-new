<?php
require "../../connt/connect.php"; // Kết nối đến cơ sở dữ liệu
global $conn;

$phone = isset($_POST["phone"]) ? $_POST["phone"] : null;
$pass = isset($_POST["password"]) ? $_POST["password"] : null;
$time = isset($_POST["registration_date"]) ? $_POST["registration_date"] : null;

if ($phone && $pass && $check) {
$addsql = "INSERT INTO user(`phone`, `password`, `registration_date`)
VALUES ('$phone','$pass','$time')";
mysqli_query($conn, $addsql);
}
