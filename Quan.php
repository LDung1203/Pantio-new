<?php
    include 'php/auth_check.php';
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/timKiem_css.css">
        <link rel="stylesheet" href="font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
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
                <li class="hover-border"><a href="#">
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
        <div id="slide">
            <img src="https://theme.hstatic.net/1000392326/1000686717/14/ms_banner_img3.jpg?v=6814" alt="">
        </div>
        <div class="style-div style-div-top">
            <h1 class="style-font font-family">TẤT CẢ SẢN PHẨM PHẨM ĐANG CÓ MẶT LẠI SHOP</h1>
            <br>
            <img class="img-3que" src="img/3que.png" style="margin-bottom: 25px;">
        </div>
        <?php include "php/display.php" ?>
        <?php
        $type_to_display = "Quần"; // Loại sản phẩm bạn muốn hiển thị

        if (isset($productsByType[$type_to_display])) {
            $products = $productsByType[$type_to_display]; // Lấy sản phẩm theo loại
            ?>
                <?php foreach ($products as $product): ?>
                    <a href="thanhtoan/Mathang.php?id=<?php echo htmlspecialchars($product['id']); ?>">
                        <div class="img-dis" style="width: 33%!important;">
                            <?php 
                            // Chuyển đường dẫn ../ thành admin/
                            $imagePath = str_replace('../', 'admin/', $product['image']); 
                            ?>
                            <!-- Hiển thị ảnh sản phẩm -->
                            <img src="<?php echo htmlspecialchars($imagePath); ?>" 
                                class="img-border" 
                                style="width: 300px; height: 400px;" 
                                alt="Product Image">

                            <!-- Hiển thị tên sản phẩm -->
                            <a href="thanhtoan/Mathang.php?id=<?php echo htmlspecialchars($product['id']); ?>" class="img-name js-buy">
                                <?php echo htmlspecialchars($product['name']); ?>
                            </a>

                            <!-- Hiển thị giá sản phẩm -->
                            <p style="text-align: center;">Giá: <?php echo htmlspecialchars($product['price']); ?> VND</p>
                        </div>
                    </a>
                <?php endforeach; ?>
        <?php
        }else {
            echo "Không tìm thấy sản phẩm thuộc loại: " . htmlspecialchars($type_to_display);
        }
        ?>

        <!-- <br><br> -->
        <! DANH MỤC NỔI BẬT>
        <div class="category-new">
            <div class="style-div style-div-top">
                <h1 class="style-font">DANH MỤC NỔI BẬT</h1>
                <br>
                <img class="img-3que" src="img/3que.png">
            </div>
            <div class="content">
                <div class="box1 display">
                    <div class="box2 display"><img src="img/hmodule_tab_1_img1.png" alt=""></div>
                    <div class="box2 display"><img src="img/hmodule_tab_1_img2.png" alt="" style="margin: 0 11px;"></div>
                    <img src="img/hmodule_tab_1_img3.png" alt="" style="padding-top: 9px;">
                </div>
                <div class="box3 display">
                    <img src="img/fl5.png" alt="">
                </div>
                <div class="box3 display" style="    margin-left: 8px;">
                    <div class="box4"><img src="img/hmodule_tab_1_img5.png" alt="" style="margin-bottom: 5px;"></div>
                    <div class="box4"><img src="img/hmodule_tab_1_img6.png" alt=""></div>
                </div>
            </div>
            <div class="content-1">
                <img src="img/home-news_1024x1024.webp" alt="" class="display">
                <div class="ND">
                    <div class="style-div display">
                        <h1 class="style-font">PANTIO TÌM KIẾM ĐẠI LÝ HỢP TÁC KINH DOANH TRÊN TOÀN QUỐC</h1>
                        <img class="img-3que" src="img/3que.png">
                        <br>
                        <p>Với mong muốn mở rộng thị trường và trở thành một trong những địa điểm mua sắm hàng đầu của hàng triệu phái đẹp Việt, thương hiệu thời trang Pantio chính thức tuyển Đại lý hợp tác kinh doanh trên toàn quốc, chia sẻ cơ hội đầu tư kinh doanh không mất vốn - không hàng tồn kho tới các đối tác đầu tư trên toàn lãnh thổ Việt Nam.</p>
                        <button>Tìm hiểu thêm</button>
                    </div>
                </div>
            </div>
        </div>
        <! ĐĂNG KÝ THEO DÕI KÊNH FACEBOOK FANPAGE>
        <div class="advertisement">
            <div class="style-div " style="
                margin-top: 50px;">
                <h1 class="style-font">ĐĂNG KÝ THEO DÕI KÊNH FACEBOOK FANPAGE</h1>
                <br>
                <img class="img-3que" src="img/3que.png">
            </div>
            <div class="content-ad">
                <ul>
                    <li><img src="img/fl1.png" alt=""></li>
                    <li><img src="img/fl2.png" alt=""></li>
                    <li><img src="img/fl3.png" alt=""></li>
                    <li><img src="img/fl4.png" alt=""></li>
                </ul>
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