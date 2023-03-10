<?php   
 session_start();  
 ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour Du Lịch Trong Nước - DANANG TRAVEL</title>
    <link rel="shortcut icon" type="image/png" href="../img/trangchu/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/style4.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="../js/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../js/bootstrap.min.js"></script>
</head>

<body>
    <div id="wrapper">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="../index.php"><img class="logo" src="../img/trangchu/logo.png"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    TOUR DU LỊCH
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">LOẠI HÌNH DU LỊCH</a>
                                    <a class="dropdown-item" href="../page/tour-trong-nuoc.php">TOUR TRONG NƯỚC</a>
                                    <a class="dropdown-item" href="../page/tour-nuoc-ngoai.php">TOUR QUỐC TẾ</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    DỊCH VỤ KHÁC
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="https://tripu.vn/vi/hotels">KHÁCH SẠN</a>
                                    <a class="dropdown-item" href="http://www.worldtrans.vn/">VẬN CHUYỂN</a>
                                    <a class="dropdown-item" href="#">VISA</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../blog/">TIN TỨC</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    KHUYẾN MÃI
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../page/khuyen-mai.php">TRẢ CHẬM 0%</a>
                                    <a class="dropdown-item" href="../page/khuyen-mai-vnpay.php">ƯU ĐÃI VNPAY</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../page/lien-he.php">LIÊN HỆ</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <?php  
                                if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {  
                                ?>
                            <div class="dashboard-tai-khoan-admin">
                                <div class="icon-tk">
                                    <img src="../dashboard/khachhang/images/faces/101087561_244942329931236_4761414423816437760_n.jpg" alt="..." class="rounded-circle">
                                </div>
                                <div class="dropdown ml-3 dropdown-tk">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        <p class="text-danger">ADMIN! <font style="color: rgb(119,119,119);">, KenDzz</font>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item item-tai-khoan" href="../dashboard/admin/index.php">Quản Lý</a>
                                        <button type="button" class="btn btn-outline-danger dang-xuat-home" onclick="dang_xuat()" id="logout">Đăng Xuất</button>
                                    </div>
                                </div>
                            </div>
                            <?php  
                                }
                                else if(isset($_SESSION['username']) && $_SESSION['username'] == "khachhang") {  
                                ?>
                            <div class="dashboard-tai-khoan-khach-hang">
                                <div class="icon-tk">
                                    <img src="../dashboard/khachhang/images/faces/86177336_1109730696026363_496206586843234304_o.jpg" alt="..." class="rounded-circle">
                                </div>
                                <div class="dropdown ml-3 dropdown-tk ">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        <p class="text-success">Xin Chào! <font style="color: rgb(119,119,119);">, Trương Xuân Khải</font>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item item-tai-khoan" href="../dashboard/khachhang/pages/samples/profile.php">Hồ sơ của tôi</a>
                                        <a class="dropdown-item item-tai-khoan" href="../dashboard/khachhang/index.php">Đơn hàng của tôi</a>
                                        <button type="button" class="btn btn-outline-danger dang-xuat-home" onclick="dang_xuat()" id="logout">Đăng Xuất</button>
                                    </div>
                                </div>
                            </div>
                            <?php  
                                }  
                            else  
                            {  
                                ?>
                            <div class="tai-khoan">
                                <div class="icon-tk">
                                    <i class="far fa-user-circle" style="font-size: 45px; color: rgb(119,119,119);"></i>
                                </div>
                                <div class="font-tk">
                                    <a data-toggle="modal" href="#myModal1" style="text-decoration: none;">TÀI KHOẢN</a>
                                </div>
                            </div>
                            <?php  
                                }  
                            ?>
                        </form>
                        <div class="modal" id="myModal1">
                            <div class="modal-dialog ">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Đăng nhập</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="container"></div>
                                    <div class="modal-body">
                                        <span id="error_message"></span>
                                        <div class="input-field">
                                            <input type="text" id="user" required="" />
                                            <label>Email hoặc Tên đăng nhập</label>
                                        </div>
                                        <div class="input-field">
                                            <input class="pswrd" id="pswrd" type="password" required="" />
                                            <span class="show" onclick="eyef()" aria-hidden="true"><i class="fas fa-eye"></i></span>
                                            <label>Mật khẩu</label>
                                        </div>
                                        <div style="text-align: right;"><a data-toggle="modal" href="#myModal3" style="text-decoration: none;">Quên mật khẩu?</a>
                                        </div>
                                        <div class="button-tai-khoan">
                                            <div class="inner"></div>
                                            <input type="submit" name="submit" id="submit-login" value="ĐĂNG NHẬP"></input>
                                        </div>
                                        <div class="auth" style="text-align: center; margin-bottom: 20px;">
                                            Hoặc đăng nhập với
                                        </div>
                                        <div class="links">
                                            <div class="facebook">
                                                <i class="fab fa-facebook-square"><span>Facebook</span></i>
                                            </div>
                                            <div class="google">
                                                <i class="fab fa-google-plus-square"><span>Google</span></i>
                                            </div>
                                        </div>
                                        <div class="signup" style="text-align: center;">Chưa có tài khoản? <a class="signup" data-toggle="modal" href="#myModal2" style="text-decoration: none;">Đăng ký ngay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal" id="myModal2" data-backdrop="static">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Đăng ký</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="container"></div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="input-field">
                                                <input type="text" required="" />
                                                <label>Họ tên</label>
                                            </div>
                                            <div class="input-field">
                                                <input type="text" required="" />
                                                <label>Tên đăng nhập</label>
                                            </div>
                                            <div class="input-field">
                                                <input class="pswrd" type="password" required="" />
                                                <span class="show">SHOW</span>
                                                <label>Mật khẩu</label>
                                            </div>
                                            <div class="input-field">
                                                <input class="pswrd" type="password" required="" />
                                                <label>Xác nhận mật khẩu</label>
                                            </div>
                                            <div class="input-field">
                                                <input type="email" required="" />
                                                <label>Email</label>
                                            </div>
                                            <div class="auth" style="text-align: center; margin-bottom: 20px;">
                                                Hoặc đăng ký với
                                            </div>
                                            <div class="links">
                                                <div class="facebook">
                                                    <i class="fab fa-facebook-square"><span>Facebook</span></i>
                                                </div>
                                                <div class="google">
                                                    <i class="fab fa-google-plus-square"><span>Google</span></i>
                                                </div>
                                            </div>
                                            <div class="button-tai-khoan">
                                                <div class="inner"></div>
                                                <input type="submit" name="" value="ĐĂNG KÝ"></input>
                                            </div>
                                            <div class="text-center">
                                                <a href="#myModal1" data-toggle="modal" style="text-decoration: none;" onclick="back_login_1()">
                                                    <i class="fas fa-arrow-left"></i> Quay lại đăng nhập
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal" id="myModal3" data-backdrop="static">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Quên mật khẩu</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="container"></div>
                                    <div class="modal-body">
                                        <form>
                                            <div class="input-field">
                                                <input type="text" required="" />
                                                <label>Tên đăng nhập</label>
                                            </div>
                                            <div class="input-field">
                                                <input type="email" required="" />
                                                <label>Email</label>
                                            </div>
                                            <div class="input-field">
                                                <input class="pswrd" type="password" required="" />
                                                <span class="show">SHOW</span>
                                                <label>Mật khẩu mới</label>
                                            </div>
                                            <div class="input-field">
                                                <input class="pswrd" type="password" required="" />
                                                <label>Xác nhận mật khẩu mới</label>
                                            </div>
                                            <div class="button-tai-khoan">
                                                <div class="inner"></div>
                                                <input type="submit" name="" value="CẤP LẠI MẬT KHẨU"></input>
                                            </div>
                                            <div class="text-center">
                                                <a href="#myModal1" data-toggle="modal" style="text-decoration: none;" onclick="back_login_2()">
                                                    <i class="fas fa-arrow-left"></i> Quay lại đăng nhập
                                                </a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $("#myModal2").on('show.bs.modal', function(e) {
        $("#myModal1").modal("hide");
    });
    $("#myModal3").on('show.bs.modal', function(e) {
        $("#myModal1").modal("hide");
    });
    </script>
    <div class="container clearfix">
        <div class="left-content">
            <div class="breadcrumb1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Trang Chủ</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Tour trong nước</li>
                    </ol>
                </nav>
            </div>
            <div class="panel">
                <div class="title-header">Địa điểm HOT trong nước</div>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Đà Nẵng</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Phú Quốc</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Nha Trang</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Phú Yên</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Đà Lạt</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Quy Nhơn</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Hà Nội</div>
                </a>
                <a href="#" style="text-decoration: none;">
                    <div class="content-panel">Hạ Long</div>
                </a>
            </div>
        </div>
        <div id="main" class="truncate">
            <div class="filter-header">
                <table class="table">
                    <tbody class="bg-light">
                        <tr>
                            <th scope="row">Sắp xếp theo:</th>
                            <td class="filter-content">Đề xuất</td>
                            <td><a href="#" style="text-decoration: none;">Tên tour</a></td>
                            <td><a href="#" style="text-decoration: none;">Giá từ thấp đến cao</a></td>
                            <td><a href="#" style="text-decoration: none;">Giá từ cao đến thấp</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="50">
                <span class="ribbon text-center font-weight-bold">
                    <p class="ribbon-text">Tour bán chạy</p>
                </span>
                <div class="img-header">
                    <img src="../img/tour/travel3.jpg">
                </div>
                <div class="p">
                    <a href="../bai-viet/du-lich-cao-nguyen-moc-chau.php" style="text-decoration: none; color: black;">
                        <h3>
                            CHƯƠNG TRÌNH DU LỊCH KHÁM PHÁ CAO NGUYÊN MỘC CHÂU</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 2 ngày – 1 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1-fix-rate" style="text-decoration: line-through;">2,990,000VND</p>
                    <p class="p1">1,590,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="200">
                <div class="img-header">
                    <img src="../img/tour/travel1.jpg">
                </div>
                <div class="p">
                    <a href="../bai-viet/kham-pha-nguom-ngao.php" style="text-decoration: none; color: black;">
                        <h3>
                            KHÁM PHÁ ĐÔNG BẮC HÀ NỘI - HỒ BA BỂ - THÁC BẢN GIỐC – ĐỘNG NGƯỜM NGAO</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 2 ngày – 1 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1">2,890,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="300">
                <div class="img-header">
                    <img src="../img/tour/ivivu-dao-phu-quoc-750x390.jpg">
                </div>
                <div class="p">
                    <a href="../bai-viet/phu-quoc-thien-duong-thao-ngoc.php" style="text-decoration: none; color: black;">
                        <h3>
                            Tour Phú Quốc 3N2D: Phú Quốc Thiên Đường Đảo Ngọc</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 3 ngày – 2 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1">3,690,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="400">
                <div class="img-header">
                    <img src="../img/tour/travel2.jpg">
                </div>
                <div class="p">
                    <a href="../bai-viet/kham-pha-con-duong-hanh-phuc.php" style="text-decoration: none; color: black;">
                        <h3>
                            KHÁM PHÁ CON ĐƯỜNG HẠNH PHÚC HÀ GIANG HÀ NỘI – HÀ GIANG – ĐỒNG VĂN – MÈO VẠC</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 2 ngày – 1 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1">1,590,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="500">
                <span class="ribbon text-center font-weight-bold">
                    <p class="ribbon-text">Tour được yêu thích</p>
                </span>
                <div class="img-header">
                    <img src="../img/tour/ivivu-ta-dung-topview-homestay-td.gif">
                </div>
                <div class="p">
                    <a href="../bai-viet/ta-dung-tay-nguyen.php" style="text-decoration: none; color: black;">
                        <h3>
                            Tour Tây Nguyên 2N1D: KDL Tà Đùng (Ngủ Lều)</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 2 ngày – 1 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1">790,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
            <div id="left" data-aos="fade-right" data-aos-delay="150">
                <span class="ribbon text-center font-weight-bold">
                    <p class="ribbon-text">Tour được yêu thích</p>
                </span>
                <div class="img-header">
                    <img src="../img/tour/ivivu-cau-rong-da-nang.gif">
                </div>
                <div class="p">
                    <a href="../bai-viet/kham-pha-con-duong-hanh-phuc.php" style="text-decoration: none; color: black;">
                        <h3>
                            Tour Đà Nẵng 3N2D: Cù Lao Chàm - Hội An - Bà Nà Hills (TD)</h3>
                    </a>
                    <p>Nhà cung cấp dịch vụ: <b>Liên Minh</b></p>
                    <p>Thời gian: 3 ngày – 2 đêm , phương tiện : ô tô</p>
                </div>
                <div class="rate-tour">
                    <p><i class="fas fa-phone-volume"></i> 0915.843.635 </p>
                    <p><i class="fas fa-info"></i> Ms Phương Anh</p>
                    <p class="p1">2.800,000<font style="font-size: 70%; margin-left: 5px;">VND</font>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="pt-3">
        <div class="footer1 mx-auto">
            <div class="about col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <a id="trai" href="#"><img src="../img/trangchu/logo.png" width="180px" alt=""></a>
                <br>
                <p></p>
                <p><span>CẦN GIÚP ĐỠ?</span>
                </p>
                <p style="width: 80%;">Nếu bạn cần bất kỳ sự trợ giúp nào, vui lòng liên hệ với chúng tôi. Chúng tôi đang ở đây 24/7 để hỗ trợ bạn!</p>
                <p><a href="#">info@chotour.vn</a></p>
                </p>
            </div>
            <div class="contact col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <h6 class="font-weight-bold text-uppercase mb-4">GIỚI THIỆU</h6>
                <p><a href="../page/info-tstar.php">Về chúng tôi</a></p>
                <p><a href="#">Điều kiện & Điều khoản</a></p>
                <h6 class="font-weight-bold text-uppercase mb-4 mt-4">CHẤP NHẬN THANH TOÁN</h6>
                <img src="//dulichviet.com.vn/images/pay.png" alt="PAYMENT">
            </div>
            <div class="contact col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <h6 class="font-weight-bold text-uppercase mb-4">THEO DÕI</h6>
                <a type="button" class="btn-floating btn-fb">
                    <i class="fab fa-facebook-f" style="font-size: 30px; color: #4267b2" aria-hidden="true"></i>
                </a>
                <a type="button" class="btn-floating btn-tw">
                    <i class="fab fa-twitter" style="font-size: 30px; color: #1da1f2" aria-hidden="true"></i>
                </a>
                <a type="button" class="">
                    <i class="fab fa-google-plus-g" style="font-size: 30px; color: #34a853" aria-hidden="true"></i>
                </a>
                <h6 class="font-weight-bold text-uppercase mb-4 mt-4">CHỨNG NHẬN</h6>
                <img src="../img/trangchu/20150827110756-dathongbao.png" style="width: 60%;">
                <a href="//www.dmca.com/Protection/Status.aspx?id=1b2ef7ab-51b9-478c-bdde-7f55d813f90b" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=1b2ef7ab-51b9-478c-bdde-7f55d813f90b" alt="DMCA.com Protection Status" class="mt-2"></a>
                <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
            </div>
            <div class="contact col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <h6 class="font-weight-bold text-uppercase mb-4">Thông tin</h6>
                <p><span><i class="fas fa-building"></i></span> Công ty Cổ phần T-Star Việt Nam</p>
                <p><span><i class="fas fa-map-marker-alt"></i></span>Phòng 1707. Toà nhà D1 Northen Diamond. 99 Đàm Quang Trung. Long Biên. Hà Nội. Việt Nam</p>
                <p><span><i class="fas fa-phone-square-alt"></i></span>+84 24 6255 3322</p>
                <p><span><i class="fas fa-envelope"></i> </span><a href="#">info@chotour.vn</a></p>
            </div>
            <div class="link">
            </div>
        </div>
        <div class="link1 py-3 text-center">
            Copyright &copy; All Right Reserved | Design by KENDZZ & CHUNKAI (19IT4)
        </div>
    </div>
    <div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left" title="Trở lên đầu trang"><i class="fas fa-chevron-left"></i><span class="glyphicon glyphicon-circle-arrow-up text-primary"></span></div>
    <script>
    $("#back-to-top").click(function() { return $("body, html").animate({ scrollTop: 0 }, 400), !1 });
    $(function() { $('[data-toggle="tooltip"]').tooltip() });
    </script>
    <!-- Load Facebook SDK for JavaScript -->
    <div id="fb-root"></div>
    <script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml: true,
            version: 'v7.0'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s);
        js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- Your Chat Plugin code -->
    <div class="fb-customerchat" attribution=setup_tool page_id="1766038873662301" logged_in_greeting="Tôi có thể giúp gì cho bạn 🤗😘" logged_out_greeting="Tôi có thể giúp gì cho bạn 🤗😘">
    </div>
    <!-- Push Notification -->
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
    window.OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
            appId: "069243cb-111a-484a-9e53-fe3d0e196fb2",
        });
    });
    </script>
    <script>
    AOS.init({
        offset: 0, // offset (in px) from the original trigger point
        duration: 1500,
    });
    </script>
</body>

</html>