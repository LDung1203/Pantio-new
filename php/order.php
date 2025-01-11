<?php
require_once("../connt/connect.php"); // Kết nối cơ sở dữ liệu

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("ID sản phẩm không hợp lệ.");
}

$product_id = intval($_GET['id']);

// Lấy thông tin sản phẩm từ bảng product
$sql = "SELECT * FROM product WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $product_id);
$stmt->execute();
$product_result = $stmt->get_result();

if ($product_result->num_rows > 0) {
    $product = $product_result->fetch_assoc();
} else {
    die("Không tìm thấy sản phẩm.");
}

// Lấy thông tin từ form thanh toán
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $location = $_POST['location'];
    $payment_method = $_POST['payment'];
    
    // Lưu thông tin đơn hàng vào bảng order
    $order_sql = "INSERT INTO `order` (product_id, fullname, phone, email, location, payment_method, product_name, product_price, product_image) 
                  VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $order_stmt = $conn->prepare($order_sql);
    $order_stmt->bind_param("issssssss", $product_id, $fullname, $phone, $email, $location, $payment_method, $product['name'], $product['price'], $product['image']);
    
    if ($order_stmt->execute()) {
        echo "<script>
                alert('Đặt hàng thành công!');
                window.location.href = 'thank_you_page.php'; // Chuyển hướng tới trang cảm ơn
              </script>";
    } else {
        echo "<script>
                alert('Có lỗi xảy ra. Vui lòng thử lại.');
              </script>";
    }
}
?>
