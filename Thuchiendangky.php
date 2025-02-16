<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Thuchiendangky.css">
    <link rel="stylesheet" href="font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Orbitron:wght@400..900&family=Protest+Guerrilla&family=Shizuru&display=swap" rel="stylesheet">
</head>
<body>
    <p class="address">Địa chỉ hệ thống showroom</p>
    <div id="hostline">
        <p style="padding-left: 30px;" class="display">Đặt hàng online: 035200515 - Địa chỉ: Éo có đâu</p>
        <p style="text-transform: uppercase;
                    float: right;
                    padding-right: 30px;" class="display">Địa chỉ hệ thống showroom</p>
    </div>
    <header>
        <div class="logo display">
            <img src="img/logo.webp" alt="logo">
        </div>
        <ul class="nav display">
            <li style="border-bottom: 0.5px solid;"><a href="index.html">Trang chủ</a></li>
            <li class="hover-border"><a href="">
                Thời trang nữ
                <i class="fa-solid fa-caret-right"></i>
            </a></li>
            <li class="hover-border"><a href="">
                Thời trang nam
                <i class="fa-solid fa-caret-right"></i>
                <ul class="sub-nav">
                    <li style="border-bottom: 0.5px dashed #000;" class="sub-2"><a href="">
                        Áo
                        <ul class="sub-nav sub-nav-chdr">
                            <li style="border-bottom: 0.5px dashed #000;"><a href="">Campaign</a></li>
                            <li><a href="">Lookbook</a></li>
                        </ul>
                    </a></li>
                    <li><a href="">Quần</a></li>
                </ul>
            </a></li>
            <li class="hover-border"><a href="">JAN. BY PANTIO</a></li>
            <li class="hover-border"><a href="">
                Bộ sưu tập
                <i class="fa-solid fa-caret-right"></i>
                <ul class="sub-nav">
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Campaign</a></li>
                    <li><a href="">Lookbook</a></li>
                </ul>
            </a></li>
            <li class="hover-border"><a href="">
                Tin tức
                <i class="fa-solid fa-caret-right"></i>
                <ul class="sub-nav sub-1">
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Bài viết nổi bật</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Bản tin Pantio</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Xu hướng thơi trang</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Sự kiện</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                </ul>
            </a></li>
            <li style="transform: translateX(340px);" class="hover-border"><a href="">
                            Sản phẩm sale
                            <i class="fa-solid fa-caret-right"></i>
                        </a></li>
        </ul>
        <div class="search  display">
            <input type="text" placeholder="Tìm sản phẩm">
            <i class="fa-solid fa-magnifying-glass"></i>
        </div>
        <div class="user display">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-regular fa-circle-user"></i>
            <i class="fa-solid fa-bag-shopping"></i>
        </div>
    </header>
    <div class="section">
        <a href="index.html" style="text-decoration: none;
                        color: #000;">Trang chủ</a>
        <span>/</span>
        <span>Tài khoản</span>
    </div>
    <div id="content">
        <h3>ĐĂNG KÝ TÀI KHOẢN</h3>
        <div class="userbox">
            <form action="php/Dangky.php" method="post">
                <label for="phone">Số điện thoại *</label>
                <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                
                <label for="password">Tạo mật khẩu *</label>
                <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                
                <label for="checkpass">Nhập lại mật khẩu *</label>
                <input type="password" id="checkpass" name="checkpass" placeholder="Nhập lại mật khẩu" required>
                
                <button type="submit">Đăng ký</button>
                <a href="Dangky.html">Quay về</a>
            </form>
        </div>
    </div>
    <footer>
        <div class="ft-1" style="transform: translateY(-100px);">
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
        <div class="ft-1" style="transform: translateY(-40px);">
            <h3>Thông tin liên hệ</h3>
            <img src="img/Screenshot 2024-12-02 234340.png" alt="">
        </div>
        <div class="ft-1">
            <h3>Fanpage</h3>
            <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="">
        </div>
    </footer>
    <div class="footer-bottom"></div>
</body>
</html>