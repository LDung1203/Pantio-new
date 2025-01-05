<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Data Visualization</title>
    <meta name="description" content="">
    <meta name="author" content="templatemo">
    <!-- 
    Visual Admin Template
    http://www.templatemo.com/preview/templatemo_455_visual_admin
    -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,700' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/templatemo-style.css" rel="stylesheet">
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>  
    <!-- Left column -->
    <div class="templatemo-flex-row">
      <div class="templatemo-sidebar">
        <header class="templatemo-site-header">
          <div class="square"></div>
          <h1>Visual Admin</h1>
        </header>
        <div class="profile-photo-container">
          <img src="images/profile-photo.jpg" alt="Profile Photo" class="img-responsive">  
          <div class="profile-photo-overlay"></div>
        </div>      
        <!-- Search box -->
        <form class="templatemo-search-form" role="search">
          <div class="input-group">
              <button type="submit" class="fa fa-search"></button>
              <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">           
          </div>
        </form>
        <div class="mobile-menu-icon">
            <i class="fa fa-bars"></i>
          </div>
        <nav class="templatemo-left-nav">          
          <ul>
            <li><a href="Trangchu.php"><i class="fa fa-home fa-fw"></i>TRANG CHỦ</a></li>
            <li><a href="#"  class="active"><i class="fa fa-bar-chart fa-fw"></i>THÔNG TIN</a></li>
            <li><a href="Khachhang.php"><i class="fa fa-users fa-fw"></i>KHÁCH HÀNG</a></li>
            <li><a href="Dondathang.php"><i class="fa fa-sliders fa-fw"></i>ĐƠN ĐẶT HÀNG</a></li>
            <li><a href="../Dangky.html"><i class="fa fa-eject fa-fw"></i>ĐĂNG XUẤT</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase" style="text-align: right;">
                <li><a href="../Dangky.html" style="    line-height: 50px;">Sign out</a></li>
                <img src="../img/357444673_1702327550214019_4545460425657428332_n.jpg" alt="" class="img-thumbnail" 
                style="width: 50px;
                height: 50px;
                border-radius: 25px;">
              </ul>   
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container"> 
          <div class="container">
            <div class="panel panel-primary" style="    width: 85%;">
                <div class="panel-heading text-center" style="background: #1f9cca">
                    <h2><strong><i class="fa fa-table"></i> BẢNG QUẢN LÝ SẢN PHẨM</strong></h2>
                </div>
                <div class="panel-body">
                    <form class="form-inline text-center" style="margin-bottom: 20px;" method="post">
                        <input type="text" name="search" class="form-control" placeholder="Nhập thông tin tìm kiếm" style="width: 300px;">
                        <button type="submit" name="find" class="btn btn-info"><i></i> Tìm kiếm</button>
                        <a href="" class="btn btn-secondary"><i class="fa fa-list"></i> Hiển thị tất cả</a>
                        <a href="thongtin/addproduct.php" class="btn btn-success" style="margin-left: 10px;"><i class="fa fa-user-plus"></i> Thêm sản phẩm</a>
                    </form>

                    <?php
                        require_once "../connt/connect.php";
                        global $conn;

                        $sql = "SELECT * FROM product";
                        if (isset($_POST['find'])) {
                            $search = $_POST['search'];

                            if (!empty($search)) {
                                $sql = "SELECT * FROM product WHERE name LIKE '%$search%' ";
                            }
                        }

                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);

                        if (isset($_POST['find']) && empty($search)) {
                            echo '<div class="alert alert-warning text-center">Vui lòng nhập để tìm kiếm.</div>';
                        } elseif (isset($_POST['find']) && $count <= 0) {
                            echo '<div class="alert alert-danger text-center">Không tìm thấy kết quả nào với từ khóa: <strong>' . $search . '</strong></div>';
                        } elseif (isset($_POST['find']) && $count > 0) {
                            echo '<div class="alert alert-success text-center">Tìm thấy <strong>' . $count . '</strong> kết quả với từ khóa: <strong>' . $search . '</strong></div>';
                        }
                    ?>

                    <table class="table table-bordered table-hover text-center">
                        <thead class="bg-info">
                        <tr>
                            <th>ID</th>
                            <th>Tên sản phẩm</th>
                            <th>Loại</th>
                            <th>Mô tả sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Ghi chú</th>
                            <th>Ảnh</th>
                            <th>Tùy chọn</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>{$row['id']}</td>";
                                echo "<td>{$row['name']}</td>";
                                echo "<td>{$row['type']}</td>";
                                echo "<td>{$row['describe']}</td>";
                                echo "<td>{$row['quantity']}</td>";
                                echo "<td>{$row['price']}</td>";
                                echo "<td>{$row['note']}</td>";

                                if (!empty($row['image']) && file_exists($row['image'])) {
                                    echo "<td><img src='" . htmlspecialchars($row['image']) . "' alt='Sản phẩm' class='img-fluid' style='max-width: 100px; max-height: 100px; object-fit: cover;'></td>";
                                } else {
                                    echo "<td>Ảnh không tồn tại</td>";
                                }
                                echo "<td>
                                    <a href='thongtin/edit.php?hid={$row['id']}' class='btn btn-warning btn-sm'>
                                        <i class='fa fa-edit'></i> Sửa
                                    </a>
                                    <a href='thongtin/delete.php?hid={$row['id']}' onclick='return confirm(\"Bạn có muốn xóa sản phẩm này không?\");' class='btn btn-danger btn-sm'>
                                        <i class='fa fa-trash'></i> Xóa
                                    </a>
                                </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='9'>Không có dữ liệu</td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <footer class="text-right">
          <p>Đây là trang admin đẹp nhât thế giới
          Designed by <a href="" target="_parent">LD:1203</a></p>
        </footer>        
        </div>
      </div>
    </div>
  </body>
</html>