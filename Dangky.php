<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Dangky.css">
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
            <li style="border-bottom: 0.5px solid;"><a href="index.php">Trang chủ</a></li>
            <li class="hover-border"><a href="Ao.php">
                Áo
                <i class="fa-solid fa-caret-right"></i>
            </a></li>
            <li class="hover-border"><a href="Chanvay.php">
                Chân váy
                <i class="fa-solid fa-caret-right"></i>
            </a></li>
            <li class="hover-border"><a href="Quan.php">
                Quần
                <i class="fa-solid fa-caret-right"></i>
            </a></li>
            <li class="hover-border"><a href="Dam.php">
                Đầm
                <i class="fa-solid fa-caret-right"></i>
            </a></li>
            <li class="hover-border"><a href="">JAN. BY PANTIO</a></li>
            <li class="hover-border"><a href="">
                Bộ sưu tập
                <i class="fa-solid fa-caret-right"></i>
                <ul class="sub-nav">
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Campaign(Đang phát triển)</a></li>
                    <li><a href="">Lookbook(Đang phát triển)</a></li>
                </ul>
            </a></li>
            <!-- <li class="hover-border"><a href="">
                Tin tức
                <i class="fa-solid fa-caret-right"></i>
                <ul class="sub-nav sub-1">
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Bài viết nổi bật (Đang phát triển)</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Bản tin Pantio (Đang phát triển)</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Xu hướng thơi trang (Đang phát triển)</a></li>
                    <li style="border-bottom: 0.5px dashed #000;"><a href="">Sự kiện (Đang phát triển)</a></li>
                    <li><a href="">Tuyển dụng</a></li>
                </ul>
            </a></li> -->
            <li style="transform: translateX(250px);" class="hover-border"><a href="">
                            Sản phẩm sale (Đang phát triển)
                            <i class="fa-solid fa-caret-right"></i>
                        </a></li>
        </ul>
        <div class="search-container display">
            <form method="GET" action="timKiem/timKiem.php" class="search">
                <input type="text" name="search" id="search-input"
                    placeholder="Tìm sản phẩm..."
                    value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
                <button type="submit" id="search-button">
                    <i class="fa-solid fa-magnifying-glass" style="transform: translate3d(0px, 1px, 0px);"></i>
                </button>
            </form>
        </div>
        <div class="user display">
            <a href="https://www.youtube.com/watch?v=Xnc36Q42jo0"><i class="fa-solid fa-headphones" style="padding-left: 40px"></i></a>
        </div>
    </header>
    <div class="section">
        <a href="index.html" style="text-decoration: none;
                        color: #000;">Trang chủ</a>
        <span>/</span>
        <span>Tài khoản</span>
    </div>
    <div id="content">
        <h1>Đăng nhập</h1>
        <div class="enter">
            <div class="log-in">
                <h3>Đăng nhập bằng tài khoản</h3>
                <p>Nếu bạn đã có tài khoản, hãy đăng nhập để tích lũy điểm thành viên và nhận được những ưu đãi tốt hơn!</p>
                <form action="php/Dangnhap.php" method="post">
                    <label for="phone" class="phone">Số điện thoại</label>
                    <input type="text" id="phone" name="phone" placeholder="Nhập số điện thoại" required>
                    <label for="password" class="pass">Mật khẩu</label>
                    <input type="password" id="password" name="password" placeholder="Nhập mật khẩu" required>
                    <button type="submit">Đăng nhập</button>
                </form>
                
            </div>
            <div class="log-out">
                <h3>Khách hàng mới của Pantio</h3>
                <p>Nếu chưa có tải khoản , hãy đăng ký ngay !</p>
                <a href="Thuchiendangky.php"><button>Đăng ký</button></a>
                
            </div>
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