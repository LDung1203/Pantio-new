<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    echo "<script>
    alert('Quý khách cần đăng nhập trước!');
    window.location.href = 'Dangky.php'; // Chuyển hướng tới trang đăng nhập
    </script>";
    exit;
}
?>