<?php
    include '../php/auth_check.php';
?> 
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="../css/timKiem_css.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../font/fontawesome-free-6.5.2-web/fontawesome-free-6.5.2-web/css/all.css">
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
                <li style="border-bottom: 0.5px solid;"><a href="../index.php">Trang chủ</a></li>
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
                <a href="../php/Dangxuat.php"><i class="fa-solid fa-right-from-bracket"></i></a>
            </div>
        </header>
    <div id="content"> 
        <div class="section">
            <!-- Trang chủ con bên trái -->
            <a href="../index.html" style="text-decoration: none;
                                color: #000;">Trang chủ</a>
            <span>/</span>
            <!-- Thời trang nữ -->
            <span>Tìm kiếm</span>
            <span>/</span>

        </div>

        <h1 class="style-font" align="center" style="padding-top: 20px">KẾT QUẢ TÌM KIẾM</h1>

        <!---------------------------Hiển thị kết quả tìm kiếm và phân trang-->

        <?php
        require_once('../connt/connect.php');

        // Số lượng sản phẩm trên mỗi trang
        $limit = 6;

        // Xác định trang hiện tại
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $offset = ($page - 1) * $limit;

        //------------------------------------------------------------------------------------------

        // Lấy giá trị tìm kiếm từ form
        if (isset($_GET['search']) && $_GET['search'] !== '') {
            $searchValue = mysqli_real_escape_string($conn, trim($_GET['search']));

            // Truy vấn tìm kiếm sản phẩm với LIMIT và OFFSET
            $query = "SELECT * FROM product 
                    WHERE name LIKE '%$searchValue%' 
                    OR `describe` LIKE '%$searchValue%' 
                    OR price LIKE '%$searchValue%' 
                    LIMIT $limit OFFSET $offset";

            $result = mysqli_query($conn, $query);

            echo '<div class="search-results">';

            // Hiển thị kết quả tìm kiếm
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo '<div class="product-item">';
                    
                    // Xử lý đường dẫn hình ảnh
                    $imagePath = str_replace('../uploads_img/', '../admin/uploads_img/', $row['image']);
                    echo '<img src="' . htmlspecialchars($imagePath) . '" class="product-image" style="height: 77%;" alt="' . htmlspecialchars($row['name']) . '">';
                    
                    // Hiển thị tên sản phẩm và giá
                    echo '<div class="product-name">' . htmlspecialchars($row['name']) . '</div>';
                    echo '<div class="product-price">' . number_format($row['price'], 0, ',', '.') . 'đ</div>';
                    
                    // Sửa button với onclick
                    echo '<button onclick="window.location.href=\'../thanhtoan/Mathang.php?id=' . htmlspecialchars($row['id']) . '\'" class="buy-button">Xem chi tiết</button>';
                    
                    echo '</div>';
                }
            } else {
                echo '<div class="no-results">Không tìm thấy sản phẩm nào phù hợp.</div>';
            }

            echo '</div>';

            // Lấy tổng số sản phẩm để tính số trang
            $countQuery = "SELECT COUNT(*) AS total FROM product 
                        WHERE name LIKE '%$searchValue%' 
                        OR `describe` LIKE '%$searchValue%' 
                        OR price LIKE '%$searchValue%'";
            $countResult = mysqli_query($conn, $countQuery);
            $totalRows = mysqli_fetch_assoc($countResult)['total'];
            $totalPages = ceil($totalRows / $limit);

            // Hiển thị phân trang
            echo '<div class="pagination">';

            // Liên kết đến trang trước
            if ($page > 1) {
                echo '<a href="?search=' . urlencode($searchValue) . '&page=' . ($page - 1) . '">&laquo; Trang trước</a>';
            }

            // Liên kết đến các trang
            for ($i = 1; $i <= $totalPages; $i++) {
                echo '<a href="?search=' . urlencode($searchValue) . '&page=' . $i . '"';
                if ($i == $page) {
                    echo ' class="active"'; // Làm nổi bật trang hiện tại
                }
                echo '>' . $i . '</a>';
            }

            // Liên kết đến trang sau
            if ($page < $totalPages) {
                echo '<a href="?search=' . urlencode($searchValue) . '&page=' . ($page + 1) . '">Trang sau &raquo;</a>';
            }

            echo '</div>';
        }
        ?>

        <! ĐĂNG KÝ THEO DÕI KÊNH FACEBOOK FANPAGE>
        <div class="advertisement">
            <div class="style-div " style="
                margin-top: 50px;">
                <h1 class="style-font">ĐĂNG KÝ THEO DÕI KÊNH FACEBOOK FANPAGE</h1>
                <br>
                <img class="img-3que" src="../img/3que.png">
            </div>
            <div class="content-ad">
                <ul>
                    <li><img src="../img/fl1.png" alt=""></li>
                    <li><img src="../img/fl2.png" alt=""></li>
                    <li><img src="../img/fl3.png" alt=""></li>
                    <li><img src="../img/fl4.png" alt=""></li>
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