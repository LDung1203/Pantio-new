<?php
session_start();
session_unset();
session_destroy();

// Hiển thị thông báo đăng xuất
echo "<script>
    alert('Đăng xuất thành công!');
    window.location.href = '../Dangky.html'; // Chuyển hướng tới trang đăng nhập
</script>";

exit;
?>