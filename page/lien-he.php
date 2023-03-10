<?php   
 session_start();  
 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIÊN HỆ - DANANG TRAVEL</title>
    <link rel="shortcut icon" type="image/png" href="../img/trangchu/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/style5.css">
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/alertify.min.css">
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
</head>

<body>
    <div id="wrapper">
        <div class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
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
    <script type="text/javascript">
    $("#myModal2").on('show.bs.modal', function(e) {
        $("#myModal1").modal("hide");
    });
    $("#myModal3").on('show.bs.modal', function(e) {
        $("#myModal1").modal("hide");
    });
    </script>
    <div id="main">
        <div class="container">
            <div class="row">
                <div class="col-sm-7">
                    <p class="h3">Gửi thông tin liên hệ</p><br>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" class="form-control" id="inputName" placeholder="Họ và tên" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="inputPhone" placeholder="Số điện thoại" required>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Ghi chú" required></textarea>
                        </div>
                        <div class="h-captcha" data-sitekey="b3691d2a-2c8e-4ab9-9a0f-b67ef8740406"></div>
                        <button type="submit" class="btn btn-primary mt-1" onclick="lien_he()" style="width: 100%;">Gửi thông tin</button>
                    </form>
                    <div class="info-company mt-3">
                        <p class="h6 text-center"> Công ty Cổ phần T-Star Việt Nam</p>
                        <hr style="width: 90%">
                        <p>Phòng 1707. Toà nhà D1 Northen Diamond. 99 Đàm Quang Trung. Long Biên. Hà Nội. Việt Nam</p>
                        <p>ĐIỆN THOẠI: <font style="color: rgb(254,102,0);" class="font-weight-bold">+84 24 6255 3322</font>
                        </p>
                        <p>EMAIL: <font style="color: rgb(254,102,0);" class="font-weight-bold">info@chotour.vn</font>
                        </p>
                    </div>
                </div>
                <div class="col-sm-5" style="font-size: 13px; text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7671.356526100429!2d108.24954883811006!3d15.97816956438244!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108878ee1dbf%3A0xb466fcf06b910a38!2zS2hvYSBDw7RuZyBuZ2jhu4cgdGjDtG5nIHRpbiB2w6AgVHJ1eeG7gW4gdGjDtG5nIC0gxJDhuqFpIGjhu41jIMSQw6AgTuG6tW5n!5e0!3m2!1svi!2s!4v1588836726245!5m2!1svi!2s" width="100%" height="650" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="mt-5" class="map-contact"></iframe>
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
    $("#back-to-top").click(function() {
        return $("body, html").animate({
            scrollTop: 0
        }, 400), !1
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    });
    </script>
    <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
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
</body>

</html>