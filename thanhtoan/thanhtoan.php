<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/thanhtoan.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Protest+Guerrilla&family=Shizuru&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo display">
            <a href="../index.php"><img src="../img/logo.webp" alt="logo" style = "margin-top: 100px; margin-left:325%;"  ></a>
        </div>
    </header>
    <div class="section">
        <a href="../index.php" style="text-decoration: none;
                        color: #000;">Trang chủ</a>
        <span>/</span>
        <span>Thông tin thanh toán</span>
    </div>
    <div class = "flex-container">
        <div id="content" class="form-group" style="margin-left: 80px;">
            <h2>THÔNG TIN THANH TOÁN</h2>
            <div class="userbox">
                <?php include '../php/product_thanhtoan.php'; ?>
                <?php
                $soluong = $_POST['soluong'] ?? 1; // Gán giá trị mặc định là 1 nếu không có
                ?>
                <form action="../php/order.php?id=<?php echo htmlspecialchars($product['id']); ?>" method="post">
                    <input type="hidden" name="id" value="<?php echo htmlspecialchars($product['id']); ?>">
                    <input type="hidden" name="soluong" value="<?php echo htmlspecialchars($soluong); ?>">
                    <div class="flex-container">
                        <div class="form-group">
                            <input type="text" id="fullname" name="fullname" placeholder="Họ và tên" required>
                        </div>
                        <div class="form-group">
                            <input type="text" id="phone" name="phone" placeholder="Số điện thoại" required pattern="[0-9]{10}">
                        </div>
                    </div>
                    <input type="type" id="email" name="email" placeholder="Email" required>
                    <input type="text" id="location" name="location" placeholder="Địa chỉ" required>
                    
                    <div class = "flex-container diadiem">
                        <div class="form-group">
                            <select id="tinh_tp" name="tinh_tp" style="cursor: pointer;" required>
                                <option value="" type="text">Chọn tỉnh/thành phố</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <select id="quan_huyen" name="quan_huyen" required disabled style="cursor: pointer;">
                                <option value="" type="text">Chọn quận huyện</option>
                            </select>
                        </div>

                        <script>
                            // Gọi API lấy danh sách tỉnh/thành phố
                            fetch('https://provinces.open-api.vn/api/p/')
                                .then(response => response.json())
                                .then(data => {
                                    const tinhTpDropdown = document.getElementById('tinh_tp');
                                    data.forEach(province => {
                                        const option = document.createElement('option');
                                        option.value = province.code; // Mã số tỉnh
                                        option.textContent = province.name; // Tên tỉnh
                                        tinhTpDropdown.appendChild(option);
                                    });
                                })
                                .catch(error => console.error('Lỗi khi tải danh sách tỉnh/thành phố:', error));

                            // Sự kiện khi chọn tỉnh/thành phố
                            document.getElementById('tinh_tp').addEventListener('change', function () {
                                const tinhTpCode = this.value; // Mã số của tỉnh đã chọn
                                const quanHuyenDropdown = document.getElementById('quan_huyen');

                                // Reset dropdown quận/huyện và phường/xã
                                quanHuyenDropdown.innerHTML = '<option value="">Chọn quận huyện</option>';
                                quanHuyenDropdown.disabled = true;

                                if (tinhTpCode) {
                                    // Gọi API lấy danh sách quận/huyện dựa trên mã tỉnh
                                    fetch(`https://provinces.open-api.vn/api/p/${tinhTpCode}?depth=2`)
                                        .then(response => response.json())
                                        .then(data => {
                                            if (data.districts && data.districts.length > 0) {
                                                data.districts.forEach(district => {
                                                    const option = document.createElement('option');
                                                    option.value = district.code; // Mã số quận
                                                    option.textContent = district.name; // Tên quận
                                                    quanHuyenDropdown.appendChild(option);
                                                });
                                                quanHuyenDropdown.disabled = false;
                                            } else {
                                                // Thông báo nếu không có quận/huyện nào
                                                const option = document.createElement('option');
                                                option.textContent = "Không có quận/huyện nào.";
                                                quanHuyenDropdown.appendChild(option);
                                                quanHuyenDropdown.disabled = false;
                                            }
                                        })
                                        .catch(error => console.error('Lỗi khi tải danh sách quận/huyện:', error));
                                }
                            });

                        </script>
                        
                    </div>
                    <br>
                        <g>Chọn phương thức thanh toán:</g>
                        <div class="form-check"><i class="fa-solid fa-wallet" style="font-size: 24px; color: #000;"></i>
                            <label class="form-check-label" for="cash">Thanh toán tiền mặt khi nhận hàng</label>
                            <input class="form-check-input" type="radio" name="payment" id="cash" value="tiền mặt">
                        </div>
                        <div class="form-check"><i class="fa-solid fa-credit-card" style="font-size: 24px; color: #000;"></i>
                            <label class="form-check-label" for="online">Thanh toán chuyển khoản khi nhận hàng</label>
                            <input class="form-check-input" type="radio" name="payment" id="online" value="chuyển khoản">
                        </div>
                    <button type="submit" class="btn" style="    transform: translate3d(-4px, -95px, 0px);">Đặt hàng</button>
                </form>
            </div>  
        </div>
        <div id="content" class="form-group">
            <fieldset class="border p-4 rounded w-50 mx-auto" style="width:69%!important;">
                <img src="../admin/uploads_img/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image" style="width:100%;">
            </fieldset>
        </div>
    </div>

    <footer>
        <div class="ft-1" style="transform: translateY(-123px);">
            <h3>THỜI TRANG PANTIO</h3>
            <p style="text-align: justify;">Luôn đón đầu các xu hướng thời trang trên thế giới, Pantio hướng tới phong cách thời trang tối giản, trẻ trung và hiện đại. Cùng Pantio tự tin định hình phong cách thời trang của chính mình, để đón nhận thành công trong cuộc sống. “Pantio - Thấu hiểu từng phong cách”.</p>
        </div>
        <div class="ft-1">
            <h3>Hỗ trợ mua hàng</h3>
            <ul class="link">
                <div class="collum">
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Tìm kiếm</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Chính sách mua hàng</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Chính sách đổi trả</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Chính sách bảo hành</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Chính sách thẻ thành viên - thẻ VIP</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Điều khoản dịch vụ</a></li>
                </div>
                <div class="collum">
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Áo nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Áo dài nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Áo 2 dây</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Áo khoác nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Đồ ngủ nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Đầm thời trang</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Đầm dự tiệc</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Quần dài nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Quần short nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Quần jean nữ</a></li>
                    <li><a href=""><i class="fa-solid fa-right-long"></i>Đầm hoa</a></li>
                </div>
                <div class="social-network" style="transform: translateY(50px);">
                    <i class="fa-brands fa-facebook-f" style="padding: 10px 13px;"></i>
                    <i class="fa-brands fa-youtube"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </ul>
        </div>
        <div class="ft-1" style="    transform: translateY(-224px);">
            <h3>Thông tin liên hệ</h3>
            <img src="../img/Screenshot 2024-12-02 234340.png" alt="">
        </div>
        <div class="ft-1" style="    transform: translateY(-176px);">
            <h3>Fanpage</h3>
            <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="">
        </div>
    </footer>
    <div class="modal js-modal">
        <div class="modal-container js-modal-container">
            <div class="modal-close js-modal-close">
                <i class="fa-solid fa-x"></i>
            </div>

        </div>
    </div>
    <div class="footer-bottom"></div>
</body>
</html>