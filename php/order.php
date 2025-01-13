<?php
require_once("../connt/connect.php"); // Kết nối cơ sở dữ liệu

// Kiểm tra id sản phẩm
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID sản phẩm không hợp lệ.");
}
$product_id = intval($_GET['id']);

// Xử lý dữ liệu từ form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'] ?? null;
    $phone = $_POST['phone'] ?? null;
    $email = $_POST['email'] ?? null;
    $location = $_POST['location'] ?? null;
    $tinh_tp = $_POST['tinh_tp'] ?? null;  // Mã tỉnh
    $quan_huyen = $_POST['quan_huyen'] ?? null;  // Mã quận
    $payment = $_POST['payment'] ?? null;
    $soluong = $_POST['soluong'] ?? null;

    // Kiểm tra thông tin đầu vào
    if (empty($fullname) || empty($phone) || empty($email) || empty($location) || empty($tinh_tp) || empty($quan_huyen) || empty($payment) || empty($soluong)) {
        die("Vui lòng điền đầy đầy thông tin.");
    }
}
function getLocationName($code, $type) {
    $url = '';
    switch ($type) {
        case 'province':
            $url = "https://provinces.open-api.vn/api/p/{$code}";
            break;
        case 'district':
            $url = "https://provinces.open-api.vn/api/d/{$code}";
            break;
        case 'ward':
            $url = "https://provinces.open-api.vn/api/w/{$code}";
            break;
    }

    $data = @file_get_contents($url);
    if ($data) {
        $location = json_decode($data, true);
        return $location['name'] ?? 'Không tìm thấy tên';
    }
    return "Không tìm thấy dữ liệu cho mã {$code} ({$type})";
}

// Ví dụ sử dụng:
$tinh_tp_name = getLocationName($tinh_tp, 'province');
$quan_huyen_name = getLocationName($quan_huyen, 'district');

$sql = "INSERT INTO orders (product_id, fullname, phone, email, location, tinh_tp, quan_huyen, payment, so_luong)
         VALUES ('$product_id', '$fullname', '$phone', '$email', '$location', '$tinh_tp_name', '$quan_huyen_name', '$payment', '$soluong')";

if (mysqli_query($conn, $sql)) {
    echo "<script type='text/javascript'>
            alert('Bạn đã đặt hàng thành công, có vấn đề xin liên hệ sđt: 0352005165');
            // Đợi 3 giây trước khi chuyển hướng về index.php
            setTimeout(function() {
                window.location.href = '../index.php';
            }, 2000); // 3000ms = 3 giây
        </script>";
} else {
    echo "<script type='text/javascript'>
            alert('Có lỗi xảy ra. Vui lòng thử lại.');
            // Đợi 3 giây trước khi chuyển hướng về index.php
            setTimeout(function() {
                window.location.href = '../index.php';
            }, 2000); // 3000ms = 3 giây
        </script>";
}

// Close the connection
mysqli_close($conn);
?>
