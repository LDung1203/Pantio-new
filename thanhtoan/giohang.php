<?php
    include '../php/auth_check.php';
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> -->
        <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"> -->
        <link rel="stylesheet" href="../css/cart.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/timKiem_css.css">
        <link rel="stylesheet" href="../font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agu+Display&family=Rampart+One&family=Rubik+Puddles&family=Rubik+Vinyl&display=swap" rel="stylesheet">
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
                        padding-right: 30px;
                        font-size: 14px;" class="display">Địa chỉ hệ thống showroom</p>
        </div>
        <header>
            <div class="logo display">
                <img src="../img/logo.webp" alt="logo">
            </div>
            <ul class="nav display">
                <li style="border-bottom: 0.5px solid;"><a href="#">Trang chủ</a></li>
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
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <div class="user display">
                <i class="fa-regular fa-circle-user" style="transform: translateY(8px);
                                                            text-align: center;"><p>User</p></i>
                <a href="php/Dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </header>
        <div class="section">
            <a href="index.php" style="text-decoration: none;
                            color: #000;">Trang chủ</a>
            <span>/</span>
            <span>Giỏ hàng</span>
        </div>
        <div class="cart-section">
            <div class="style-div style-div-top">
                <h1 class="style-font font-family">GIỎ HÀNG CỦA BẠN</h1>
                <br>
                <img class="img-3que" src="../img/3que.png">
            </div>
            <?php
            require_once("connnect.php");
            global $conn;
            $list= "SELECT * FROM `danhsachlop`";
            $result=mysqli_query($conn,$list);
            while($r = mysqli_fetch_assoc($result)){
            ?>
            <div class="content">
                <div class="product display">
                    <img src="../img/onl1.png" alt="" style="    margin-right: 150px;">
                    <h3 class="display" style="transform: translateY(-52px);"><?php echo $r['product'] ?></h3>
                </div>
                <div class="total-price display">
                    <h3 class="giohang"><?php echo $r['price'] ?><span id="total-price">VNĐ</span></h3>
                    <h3 class="giohang"><?php echo $r['so_luong'] ?></h3>
                    <h3 class="giohang"><?php echo ($r['price']*$r['so_luong']) ?><span id="total-price-final">VN</span></h3>
                </div>
                <div class="button-div display">
                    <button onclick="location.href='checkout.php'">Thanh toán</button>
                </div>
            </div>
            <?php
            }
            ?>
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
                <img src="../img/Screenshot 2024-12-02 234340.png" alt="">
            </div>
            <div class="ft-1">
                <h3>Fanpage</h3>
                <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="">
            </div>
        </footer>
        <div class="modal js-modal">
            <div class="modal-container js-modal-container">
                <div class="modal-close js-modal-close">
                    <i class="fa-solid fa-x"></i>
                </div>
    
                <!-- <header class="modal-header">
                    <i class="modal-heading-icon ti-bag"></i>
                    Tickets
                </header> -->
            </div>
        </div>
        <div class="footer-bottom"></div>
        <!-- <script src="js/script.js"></script> -->
    </body>
    </html>