<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
    <link rel="stylesheet" href="../css/Mathang.css">
    <link rel="stylesheet" href="../css/trangmua.css">
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
                <img src="../img/logo.webp" alt="logo">
            </div>
            <ul class="nav display">
                <li style="border-bottom: 0.5px solid;"><a href="../index.php">Trang chủ</a></li>
                <li class="hover-border"><a href="../Ao.php">
                    Áo
                    <i class="fa-solid fa-caret-right"></i>
                </a></li>
                <li class="hover-border"><a href="../Chanvay.php">
                    Chân váy
                    <i class="fa-solid fa-caret-right"></i>
                </a></li>
                <li class="hover-border"><a href="../Quan.php">
                    Quần
                    <i class="fa-solid fa-caret-right"></i>
                </a></li>
                <li class="hover-border"><a href="../Dam.php">
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
                <a href="../php/Dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </header>
    <div class="section">
        <!-- Trang chủ con bên trái -->
        <a href="index.html" style="text-decoration: none;
                            color: #000;">Trang chủ</a>
        <span>/</span>
        <!-- Thời trang nữ -->
        <span>Thời trang nữ</span>
        <span>/</span>
        <span>Tên sản phẩm</span> <!--Tên sản phẩm-->
    </div>
    <!-- Danh mục chọn đồ bên trái -->
    <div id="content">
                                                            <!--Khung bán đồ-->
        <div class="buy">
            <div class="bshirt">
                <?php include "../php/product_thanhtoan.php"; ?>
                <img src="../admin/uploads_img/<?php echo htmlspecialchars($product['image']); ?>" alt="Product Image">
                    <div class="buy-tensp">
                                                                <!--Mục trên-->
                        <h3 style="text-align: center;"><?php echo htmlspecialchars($product['name']); ?></h3>
                        <br>
                        <h3>Mã sản phẩm: <?php echo htmlspecialchars($product['id']); ?></h3>
                        <br><br>
                        <a style="font-size: 17px">Giá: <a style="color: red; font-size: 25px"> <?php echo htmlspecialchars($product['price']); ?> VND</a><a style="text-decoration: underline;color: red; font-size: 25px">đ</a></a>
                        <br>
                        <a>----------------------------------------------------------------------------------</a>
                        <br>
                                                                <!--Mục giữa-->
                        <strong>Mô tả:</strong> 
                        <p><?php echo nl2br(htmlspecialchars($product['describe'])); ?></p>
                        <br>
                        <a>----------------------------------------------------------------------------------</a>
                                                                <!--Mục số lượng-->
                        <br>
                        <a>Số Lượng:</a>
                        <div class="buy-sl">
                            <form action="thanhtoan.php?id=<?php echo htmlspecialchars($product['id']); ?>" method="post">
                                <div class="sl"> <a id="decrease">-</a></div>
                                <div class="sl"> <input type="number" id="quantity" class="quantity-display" value="1" readonly name="soluong"></div>
                                <div class="sl"> <a id="increase">+</a></div>
                                <br> <div class="buy-buy">      
                                                                        <!--Phần mua-->
                                <a href="../index.php"><div class="buy-them">Quay lại</div></a>                              
                                <button type="submit"><div class="buy-mua">Mua Ngay</div></button>
                                    
                                </div>
                            </form>
                        </div>
                        <script src="../js/soluong.js"></script>
                        
            </div>
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
</body>
</html>