<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Visual Admin Dashboard - Manage Users</title>
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
            <li><a href="Thongtin.php"><i class="fa fa-bar-chart fa-fw"></i>THÔNG TIN</a></li>
            <li><a href="#"><i class="fa fa-map-marker fa-fw"></i>KHÁCH HÀNG</a></li>
            <li><a href="Dondathang.php"><i class="fa fa-sliders fa-fw"></i>ĐƠN ĐẶT HÀNG</a></li>
            <li><a href="../Dangky.php"><i class="fa fa-eject fa-fw"></i>ĐĂNG XUẤT</a></li>
          </ul>  
        </nav>
      </div>
      <!-- Main content --> 
      <div class="templatemo-content col-1 light-gray-bg">
        <div class="templatemo-top-nav-container">
          <div class="row">
            <nav class="templatemo-top-nav col-lg-12 col-md-12">
              <ul class="text-uppercase" style="text-align: right;">
                <li><a href="login.html" style="    line-height: 50px;">Sign out</a></li>
                <img src="../img/357444673_1702327550214019_4545460425657428332_n.jpg" alt="" class="img-thumbnail" 
                style="width: 50px;
                height: 50px;
                border-radius: 25px;">
              </ul>  
            </nav> 
          </div>
        </div>
        <div class="templatemo-content-container">
          <div class="templatemo-content-widget no-padding">
            <div class="panel panel-default table-responsive">
              <table class="table table-striped table-bordered templatemo-user-table">
                <thead>
                  <tr>
                    <td><a href="" class="white-text templatemo-sort-by"># <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Số điện thoại <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Mật khẩu <span class="caret"></span></a></td>
                    <td><a href="" class="white-text templatemo-sort-by">Ngày tạo tài khoản <span class="caret"></span></a></td>
                    <td>Delete</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      date_default_timezone_set('Asia/Ho_Chi_Minh');
                      require_once("../connt/connect.php");
                      global $conn;
                      $list= "SELECT * FROM `user`";
                      $result=mysqli_query($conn,$list);
                      while($r = mysqli_fetch_assoc($result)){
                      ?>
                          <tr>
                              <td><?php echo $r['id'] ?></td>
                              <td><?php echo $r['phone'] ?></td>
                              <td><?php echo $r['password'] ?></td>
                              <td><?php echo $r['registration_date'] ?></td>ss
                              <td>
                                  <a class="btn btn-danger" href="user/delete.php?hid=<?php echo $r['id'] ?>">Xóa</a>
                              </td>
                          </tr>
                      <?php
                      }
                      ?>
              </table>    
            </div>                          
          </div>          
          <div class="templatemo-flex-row flex-content-row">
            <div class="col-1">              
              <div class="templatemo-content-widget pink-bg">
                <i class="fa fa-times"></i>                
                <h2 class="text-uppercase margin-bottom-10">Thông báo</h2>
                <p class="margin-bottom-0">
                  <?php
                  // Truy vấn để kiểm tra khách hàng mới đăng ký hôm nay
                    $sql = "SELECT * FROM `user` WHERE DATE(registration_date) = CURDATE()";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        echo "Có " . $result->num_rows . " khách hàng mới đăng ký hôm nay!<br>";
                        
                        // In danh sách khách hàng mới
                        while ($row = $result->fetch_assoc()) {
                            echo "Khách hàng ID: " . $row['id'] . " - Số điện thoại: " . $row['phone'] . "<br>";
                        }
                    } else {
                        echo "Không có khách hàng mới đăng ký hôm nay.";
                    } 
                  ?>
                </p>                  
              </div>                       
            </div>                       
          </div> <!-- Second row ends -->
          <div class="templatemo-flex-row flex-content-row">
            <div class="templatemo-content-widget white-bg col-2">
      
              </div>             
            </div>
            <div class="templatemo-content-widget white-bg col-1 text-center templatemo-position-relative">
              <i class="fa fa-times"></i>
              <img src="images/bicycle.jpg" alt="Bicycle" class="img-circle img-thumbnail margin-bottom-30">
              <h2 class="text-uppercase blue-text margin-bottom-5">Admin</h2>
              <h3 class="text-uppercase margin-bottom-70">Dũng đẹp trai</h3>
              <div class="templatemo-social-icons-container">
                <div class="social-icon-wrap">
                  <i class="fa fa-facebook templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-twitter templatemo-social-icon"></i>  
                </div>
                <div class="social-icon-wrap">
                  <i class="fa fa-google-plus templatemo-social-icon"></i>  
                </div>                
              </div>
            </div>
            <div class="templatemo-content-widget white-bg col-1 templatemo-position-relative templatemo-content-img-bg">
              <img src="https://aeonmall-hadong.com.vn/wp-content/uploads/2019/10/dsc01723-750x468.jpg" alt="Sunset" class="img-responsive content-bg-img">            
            </div>
          </div>
          <footer class="text-right">
            <p>Đây là trang admin đẹp nhât thế giới
            | Designed by <a href="" target="_parent">LD:1203</a></p>
          </footer>         
        </div>
      </div>
    </div>
    
    <!-- JS -->
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      <!-- jQuery -->
    <script type="text/javascript" src="js/templatemo-script.js"></script>      <!-- Templatemo Script -->
    <script>
      $(document).ready(function(){
        // Content widget with background image
        var imageUrl = $('img.content-bg-img').attr('src');
        $('.templatemo-content-img-bg').css('background-image', 'url(' + imageUrl + ')');
        $('img.content-bg-img').hide();        
      });
    </script>
  </body>
</html>