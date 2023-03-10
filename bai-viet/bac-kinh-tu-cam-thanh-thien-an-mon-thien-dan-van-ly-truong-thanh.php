<?php   
 session_start();  
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>BẮC KINH – TỬ CẤM THÀNH – THIÊN AN MÔN – THIÊN ĐÀN – VẠN LÝ TRƯỜNG THÀNH</title>
    <link rel="shortcut icon" type="image/png" href="../img/trangchu/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/style1.css" />
    <script src="../js/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/alertify.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <script src="../js/jquery.min.js"></script>
    <script type="text/javascript" src="../lib/alertifyjs/alertify.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/func.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>

<body>
    <div id="wrapper">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="../index.php"><img class="logo" src="../img/trangchu/logo.png" /></a>
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
    <div class="container-fluid clearfix">
        <div id="left">
            <div class="breadcrumb1">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                        <li class="breadcrumb-item"><a href="../page/tour-nuoc-ngoai.php">Tour nước ngoài</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bắc Kinh- Tủ Cấm Thành - Thiên An Môn - Vạn Lý Trường Thành</li>
                    </ol>
                </nav>
            </div>
            <div class="title">
                <h4>BẮC KINH – TỬ CẤM THÀNH – THIÊN AN MÔN – THIÊN ĐÀN – VẠN LÝ TRƯỜNG THÀNH</h4>
            </div>
            <img src="../img/tour/travel6.jpg" />
            <div class="under-img">
                <p class="order" href="../check-out/checkout-bac-kinh-tu-cam-thanh-thien-an-mon-thien-dan.php" style="color: white; margin-right: 20px;">Đang bán chạy</p>
                <p style="font-size: 14px; color: red;">Đã có 4 khách đặt trong 24h qua</p>
            </div>
            <div class="dat-tour-mobile mt-2">
                <div class="card-body card-menu-1" style="padding: 10px;">
                    <div style="margin-bottom:15px;position:relative;">
                        <div class="b-iamsafe">Điểm đến <span class="hidden-xs">du lịch </span>an toàn</div>
                        <div style="position:absolute;top: 3px;left: 3px;">
                            <div style="width:50px;height:40px;background:#fff;border-top-left-radius:5px;border-bottom-left-radius:5px;padding:7px 10px;">
                                <img src="../img/tour/safe.png" style="height:27px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-text" style="font-size: 14px;">
                        <p>Nhà cung cấp dịch vụ: <b> Liên Minh</b></p>
                        <p>Thời gian: 5 ngày - 4 đêm</p>
                        <p>Liên hệ: 0915.843.635 Ms Phương Anh</p>
                        <p class="coin" style="">
                            <span style="font-size: 14px;"><b>Giá: </b></span>
                            <span class="p1" style="font-weight: bold; color: orange; margin-left: 160px; font-size: 20px;">790,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></span>
                        </p>
                        <div>
                            <a class="order" href="../check-out/check-out-bac-kinh-van-ly-truong-thanh.php" style="color: white;background: #FF8008;background: -webkit-linear-gradient(to right, #FFC837, #FF8008);background: linear-gradient(to right, #FFC837, #FF8008);"><i class="fas fa-cart-plus"></i> Đặt tour</a>
                        </div>
                    </div>
                </div>
                <div style="height: 10px; border: none;"></div>
                <div class="sticky-top card-menu-2">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" aria-controls="v-pills-home" aria-selected="true">CHƯƠNG TRÌNH TOUR</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" aria-controls="v-pills-profile" aria-selected="false">CHÍNH SÁCH GIÁ</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-contact" aria-controls="v-pills-messages" aria-selected="false">ĐIỀU KHOẢN & QUY ĐỊNH</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#fb-root" aria-controls="v-pills-messages" aria-selected="false">BÌNH LUẬN</a>
                    </div>
                    <script>
                        $(document).ready(function(){
                    // Add smooth scrolling to all links
                    $("a").on('click', function(event) {

                      // Make sure this.hash has a value before overriding default behavior
                      if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                          scrollTop: $(hash).offset().top
                        }, 900, function(){
                     
                          // Add hash (#) to URL when done scrolling (default click behavior)
                          window.location.hash = hash;
                        });
                      } // End if
                    });
                  });
                  </script>
                </div>
            </div>
            <div class="lich-trinh">
                <p>Giới thiệu</p>
            </div>
            <div class="p">
                <p>
                    Nói đến du lịch Trung Quốc không thể không đến Bắc Kinh vì Bắc Kinh hiện nay là thành phố thủ đô của Trung Quốc, là trung tâm kinh tế, chính trị, văn hoá lớn. Bắc Kinh là thành phố du lịch nổi tiếng thế giới với rất
                    nhiều di sản văn hoá thế giới tập trung tại đây. Du khách đến với Bắc Kinh sẽ được thăm Cố Cung (Tử Cấm Thành) với 9999,5 gian điện nguy nga, nơi cư ngụ của các Hoàng đế Trung Quốc trong suốt gần 500 năm. Đây cũng là
                    cung điện lớn nhất và được bảo tồn nguyên vẹn nhất thế giới. Quý khách thăm Di Hoà Viên là cung điện Mùa Hè của Từ Hy Thái Hậu tận mắt chứng kiến ăn chơi xa xỉ cuả người phụ nữ nổi tiếng trong lịch sử Trung Quốc. Đã
                    đến với Bắc Kinh, du khách nào cũng bị choáng ngợp trước sự hùng vĩ của Vạn Lý trường thành - một kỳ quan duy nhất của thế giới được nhìn thấy từ mặt trăng, nơi đây đã từng chứng kiến gần 1 triệu lần cảnh mặt trời
                    mọc. Thời gian không làm phôi pha nét đẹp, Vạn lý Trường thành mãi là sự canh giữ bến bờ của cõi vĩnh hằng.
                </p>
            </div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=553253088944677&autoLogAppEvents=1" nonce="We78lelb"></script>
            <div class="fb-like mt-4" data-href="https://chunkaiin.site/cuoiky" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
            <div class="tintin">
                <div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="lich-trinh">
                        <p>Chương trình tour</p>
                    </div>
                    <div class="info-time" id="info-time">
                        <p>
                            <b class="h5">NGÀY 01: HÀ NỘI – BẮC KINH (Ăn: Trưa MB/ Tối)</b>
                            <p>03:00 Xe Ô tô và Hướng dẫn viên đón Quý khách tại điểm hẹn (Nhà Hát Lớn) khởi hành đi sân bay Quốc Tế Nội Bài đáp chuyến bay CA742 (05:45 – 10:25) đi Bắc Kinh. Sau khi đoàn hạ cánh nhập cảnh, xe và HDV đưa
                                quý khách đi ăn trưa. Chiều đoàn bắt đầu tham quan thủ đô Bắc Kinh với những điểm:</p>
                            <p>- Quảng Trường Thiên An Môn: Trung tâm chính trị của Bắc Kinh, Quảng trường lớn nhất thế giới, rộng hơn 50 mẫu với Đại Lễ Đường, Lăng Mao Chủ Tịch, Đài Tưởng Niệm các anh hùng liệt sỹ... </p>
                            <p>- Thăm quan Cố Cung: Cung điện lớn nhất Thế Giới với 9.999 gian điện nguy nga tráng lệ, nổi tiếng thế giới với hàng trăm bộ phim nói về lịch sử 24 đời vua Trung Hoa đã định đô tại đây. </p>
                            <p>- Xem biểu diễn nghệ thuật xiếc Trung Hoa. </p>
                            <p>Quý khách ăn tối -. Sau bữa tối xe đưa đoàn về khách sạn nhận phòng nghỉ ngơi. </p>
                            <p>Quý khách nghỉ đêm tại Bắc Kinh.</p>
                            <p style="text-align: center;"><img src="../img/tour/travel5.jpg" style="width: 650px; height: 390px;">
                                <p style="text-align: center;font-style: italic; color: #333;">Bắc Kinh.</p>
                            </p>
                            <b class="h5">NGÀY 02: BẮC KINH – VẠN LÝ TRƯỜNG THÀNH (Ăn: Sáng/ Trưa/ Tối )</b>
                            <p>Quý khách ăn sáng tại khách sạn, sau đó, xe đưa Quý khách đi thăm: </p>
                            <p>- Vạn Lý Trường Thành - một kỳ quan duy nhất của thế giới được nhìn thấy từ mặt trăng, nơi đây đã từng chứng kiến gần 1 triệu lần cảnh mặt trời mọc. Thời gian không làm phôi pha nét đẹp, Vạn lý Trường thành
                                mãi là sự canh giữ bến bờ của cõi vĩnh hằng. </p>
                            <p>- Quý khách tham quan Cửa hàng chế tác ngọc Kim Tứ Duy. </p>
                            <p>Bữa trưa quý khách thưởng thức Lẩu đặc sản của Bắc Kinh. </p>
                            <p>Chiều: Quý khách tham quan: </p>
                            <p>- Thập Tam Lăng (Định Lăng) - lăng mộ của 13 đời vua triều Minh. Thập Tam Lăng được xây dựng từ năm 1409 cho đến 1644, rộng trên 40 km vuông với tường thành bao bọc dài 40 km. Mỗi lăng mộ toạ lạc trên một gò
                                cao và nối với lăng mộ khác bằng lối đi gọi là "thần đạo". Hai bên thần đạo có hai hàng tượng lính gác, lạc đà, voi, và quái thú bằng đá để canh giữ lăng. Cổng đá vào lăng xây năm 1540, cao 14 mét, và rộng 19
                                mét.</p>
                            <p>- Quý khách được kiểm tra và tư vấn sức khỏe miễn phí tại nhà thuốc lâu đời Đồng Nhân Đường nổi tiếng Trung Quốc. </p>
                            <p>Tháng 05 + 06 là mùa Quả Anh Đào chín mọng tại huyện Xương Bình, quý khách được vào tham quan và tự do mua những sản vật địa phương tại Vườn Anh Đào. </p>
                            <p>Quý khách dùng bữa tối tại nhà hàng và nghỉ đêm tại khách sạn ở Bắc Kinh
                            </p>
                            <p style="text-align: center;"><img src="../img/tour/vanly-truongthanh.jpg" style="width: 650px; height: 390px;">
                                <p style="text-align: center;font-style: italic; color: #333;">Vạn Lý Trường Thành.</p>
                            </p>
                            <b class="h5">NGÀY 03: BẮC KINH – DI HÒA VIÊN (Ăn: Sáng /Trưa/Tối) </b>
                            <p> Sau khi dùng bữa sáng tại khách sạn, xe đón đoàn đưa Quý khách đi tham quan: </p>
                            <p>- Trung tâm nghiên cứu văn hóa Phong Thủy Bắc Kinh, nơi trưng bày linh vật của Bắc Kinh – Tỳ Hưu </p>
                            <p>- Di Hoà Viên - là cung điện Mùa Hè của Từ Hy Thái Hậu với Cung Từ Hy, Tháp Dâng Hương, Hồ Côn Minh, Vạn Thọ Đường, tận mắt chứng kiến sự ăn chơi xa xỉ cuả người phụ nữ nổi tiếng trong lịch sử Trung Quốc.
                            </p>
                            <p>- Tham quan sân vận Động Tổ Chim – là công trình tiêu biểu của Olympic Bắc Kinh năm 2008 (tham bên ngoài). </p>
                            <p>- Mua sắm tại cửa hàng trúc than. </p>
                            <p>Sau bữa tối tại nhà hàng, Quý khách về khách sạn nghỉ ngơi.
                            </p>
                            <p style="text-align: center;"><img src="../img/tour/dihoavien.jpg" style="width: 650px; height: 390px;">
                                <p style="text-align: center;font-style: italic; color: #333;">Di Hoa Viên.</p>
                            </p>
                            <b class="h5">NGÀY 04: BẮC KINH – HÀ NỘI (Ăn: Sáng /Trưa/Tối) </b>
                            <p>Sau bữa sáng tại khách sạn. Xe và HDV đón Quý khách đi thăm quan : </p>
                            <p>- Công viên Thiên Đàn – Nơi tế lễ của các vua chúa 02 triều đại Minh Thanh. </p>
                            <p>Mua sắm tại trung tâm Bảo Thạch Bắc Kinh </p>
                            <p>Quý khách dùng bữa trưa tại nhà hàng. </p>
                            <p>Xe đưa quý khách đi mua sắm hàng hóa và quà lưu niệm tại Siêu Thị Tây Đơn một trong những trung tâm thương mại lớn ở Bắc Kinh, nơi đây có đầy đủ các mặt hàng từ cao cấp đến bình dân, Quý khách có thể mua về
                                làm quà cho người thân hoặc Quý khách có thể thăm quan Vương Phủ Tỉnh: Là một khu phố mua sắm, ẩm thực kết hợp vui chơi, giải trí đây là khu phố nổi tiếng đất Kinh Bắc và cũng là khu phố đi bộ hiện đại nổi
                                tiếng nhất thành phố Bắc Kinh. </p>
                            <p>Dùng bữa tối tại nhà hàng. </p>
                            <p>22:00 Xe đưa Quý khách ra sân bay làm thủ tuc đáp chuyến bay CA741 (01:25 – 04:15) về Hà Nội. <br />
                                Quý khách nghỉ đêm trên máy bay.
                            </p>
                            <p style="text-align: center;"><img src="../img/tour/lung-cu.jpg" style="width: 650px; height: 390px;">
                                <p style="text-align: center;font-style: italic; color: #333;">Hàng Châu.</p>
                                <b class="h5">NGÀY 05: BẮC KINH – HÀ NỘI (Ăn: Sáng /Trưa/Tối) </b>
                                <p>04:15 máy bay hạ cánh, xe đón đoàn về điểm hẹn ban đầu. Kết thúc chương trình. </p>
                                <p style="text-align: center;"><img src="../img/tour/lung-cu.jpg" style="width: 650px; height: 390px;">
                                    <p style="text-align: center;font-style: italic; color: #333;">Hàng Châu.</p>
                                    <p>Tạm biệt và hẹn gặp lại Quý khách!
                                    </p>
                                    <p>Hẹn gặp lại quý khách trong những hành trình sau.</p>
                    </div>
                </div>
                <div id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="lich-trinh">
                        <p>Giá</p>
                    </div>
                    <div class="info-time">
                        <p>
                            <b>Bao gồm:</b>
                            <br />
                        </p>
                        <p>
                            <p>Vé máy bay 2 chặng: Hà Nội – Bắc Kinh – Hà Nội </p>
                            <p>Thuế sân bay quốc tế các nước và an ninh hàng không, phụ phí xăng dầu </p>
                            <p>Khách sạn 3 sao tiêu chuẩn (2 khách/phòng. Nếu lẻ sẽ ở 3 khách/phòng) </p>
                            <p>Ăn trọn gói theo chương trình. </p>
                            <p>Thủ tục visa nhập cảnh Trung Quốc nhanh chóng tiện lợi (visa đi theo đoàn) </p>
                            <p>Xe ôtô máy lạnh đời mới theo hành trình thăm quan. </p>
                            <p>HDV tiếng Việt địa phương nhiệt tình đưa đón và phục vụ đoàn tốt </p>
                            <p>Vé tham quan thắng cảnh vào cửa 1 lần </p>
                            <p>Bảo hiểm du lịch mức đền bù tối đa 100.000.000 vnđ/vụ, đối với khách hàng trên 70 tuổi thì mức bảo hiểm là 50.000.000 vnđ/vụ (chỉ bảo hiểm các tai nạn rủi ro, không bảo hiểm cho các loại bệnh tật).
                            </p>
                        </p>
                        <p>
                            <b>Không bao gồm: </b>
                            <br />
                        </p>
                        <p>
                            <p>Phí hộ chiếu, chi tiêu cá nhân, hành lý quá cước; <br />
                                <p>Đồ uống, chi phí điện thoại, giặt là trong khách sạn <br />
                                    <p>Phí phòng đơn, tiền bồi dưỡng cho HDV và lái xe... <br />
                                        <p>Phí tham quan quần thể Olympic, thuế VAT (nếu khách lấy VAT).
                                            <br />
                                        </p>
                                        <p>
                                            <b>Ghi chú: </b>
                                            <br />
                                        </p>
                                        <p>
                                            <p>Quý khách nộp Hộ chiếu còn hạn ít nhất 6 tháng. </p>
                                            <p>Đặt cọc 5.000.000đ/khách khi đăng ký tour, số tiền còn lại thanh toán trước 8 ngày khởi hành. </p>
                                            <p>Giá trẻ em được tính ngủ chung giường với bố mẹ. </p>
                                            <p>Đối với khách quốc tịch nước ngoài: Cần được tư vấn chi tiết thủ tục khi đặt dịch vụ. </p>
                                            <p>Chương trình có tham quan một số điểm mua sắm được chỉ định, nếu Quý khách không đi đúng lịch trình, phụ thu phí phát sinh 100 USD/khách. </p>
                                            <p>Thứ tự thăm quan các điểm trong chương trình có thể thay đổi cho phù hợp với tình hình thực tế nhưng đảm bảo đầy đủ các điểm có trong chương trình.
                                            </p>
                                        </p>
                    </div>
                </div>
                <div id="v-pills-contact">
                    <div class="lich-trinh">
                        <p>Chính sách phụ thu</p>
                    </div>
                    <div class="info-time">
                        <p>
                            <p>- Phụ thu phòng đơn: 600.000 vnđ/khách/2 đêm. </p>
                            <p>- Phụ thu phòng ba: 60.000vnđ/khách. </p>
                            <p>- Phụ thu phòng 2 khách: 300.000vnđ/khách. </p>
                            <p>- Trẻ em từ 10 tuổi trở lên tính 100% giá tour. </p>
                            <p>- Trẻ em từ 05 – 09 tuổi tính 75 % giá tour. </p>
                            <p>- Trẻ em dưới 05 tuổi miễn phí giá tour ( Ăn cùng bố mẹ, ngồi lòng bố hoặc mẹ), gia đình tự lo các chi phí phát sinh cho bé. Phụ thu 500.000đ/bé vé tàu cao tốc khứ hồi Vân Đồn – Cô Tô – Vân Đồn. </p>
                            <p>- Miễn phí vé tàu cho bé dưới 1 tuổi. </p>
                            <p>- Khách nước ngoài phụ thu 10USD/người/ngày, khi đi mang theo 2 bản photo hộ chiếu và bản gốc để đối chiếu. </p>
                        </p>
                    </div>
                    <div class="lich-trinh">
                        <p>Điều khoản</p>
                    </div>
                    <div class="warpper">
                        <input class="radio" id="one" name="group" type="radio" checked>
                        <input class="radio" id="two" name="group" type="radio">
                        <input class="radio" id="three" name="group" type="radio">
                        <input class="radio" id="four" name="group" type="radio">
                        <div class="tabs">
                            <label class="tab" id="one-tab" for="one">Giá bao gồm</label>
                            <label class="tab" id="two-tab" for="two">Giá không bao gồm</label>
                            <label class="tab" id="three-tab" for="three">Hủy đổi</label>
                            <label class="tab" id="four-tab" for="four">Lưu ý</label>
                        </div>
                        <div class="panels">
                            <div class="panel" id="one-panel">
                                <div class="info-time">
                                    <p>
                                        <p><b>Vận chuyển: </b></p>
                                        <p>- Xe ô tô máy lạnh điều hòa đưa đón theo chương trình tour. </p>
                                        <p>- Vé tàu cao tốc khứ hồi Vân Đồn - Cô Tô - Vân Đồn. </p>
                                        <p>- Xe điện đưa đón tại cảng về khách sạn và đi theo lịch trình trong chương trình. </p>
                                        <p><b>Lưu trú: </b></p>
                                        <p>- Khách sạn 2 sao đầy đủ tiện nghi. (4 khách/ phòng). </p>
                                        <p><b>Khác: </b></p>
                                        <p>- Ăn 5 bữa chính 150.000 vnd/ khách/ bữa, Ăn sáng 40.000 vnd/ bữa. </p>
                                        (Nếu quý khách có nhu cầu dùng bữa tối BBQ hải sản phụ thu thêm 150.000đ/khách).
                                    </p>
                                    <p>- Khăn lạnh, nước uống lavie 01 chai 500ml/khách/ngày. </p>
                                    <p>- Hướng dẫn viên suốt tour du lịch ( nhiệt tình, kinh nghiệm). </p>
                                    <p><b>Qùa tặng: </b></p>
                                    <p>- Mũ du lịch. </p>
                                    <p>- Khẩu trang an toàn. </p>
                                    <p>- Nước rửa tay sát khuẩn. </p>
                                    <p>- Bảo hiểm du lịch 30.000.000 vnđ/vụ. </p>
                                    </p>
                                </div>
                            </div>
                            <div class="panel" id="two-panel">
                                <div class="info-time">
                                    <p>
                                        - Đồ uống trong các bữa ăn và các chi phí ngoài chương trình. <br /><br />
                                        - Xe ôm đi lên Ngọn Hải Đăng. <br /><br />
                                        - Tàu thuyền thăm quan cô tô con. <br /><br />
                                        - Thuế VAT, Tip HDV và lái xe. <br /><br />
                                        - Đồng phục đi biển. <br /><br />
                                        - Photo tour chuyên nghiệp. <br /><br />
                                        - Quay film, dựng film chuyên nghiệp.
                                    </p>
                                </div>
                            </div>
                            <div class="panel" id="three-panel">
                                <div class="info-time">
                                    <p>
                                        <p><b>Chính sách hủy: </b><br>
                                            <u>Điều kiện hủy tour (ngày thường)</u>
                                        </p>
                                        - Sau khi đăng ký huỷ tour mất 10% giá tour. <br />
                                        - Hủy tour 10 ngày trước ngày khởi hành chịu phí 30% giá tour (Không tính ngày lễ và chủ nhật). Phí hủy vé máy bay theo qui định của hãng. <br />
                                        - Hủy tour 8 ngày trước ngày khởi hành chịu phí 50% giá tour (Không tính ngày lễ và chủ nhật). Phí hủy vé máy bay theo qui định của hãng. <br />
                                        - Hủy tour 5 ngày trước ngày khởi hành chịu phí 100% giá tour (Không tính ngày lễ và chủ nhật). Phí hủy vé máy bay theo qui định của hãng. <br />
                                        - Quý khách hủy chuyến du lịch trong vòng từ 0 đến 2 ngày trước ngày khởi hành, Quý khách sẽ chịu phí 100% trên giá vé du lịch. <br />
                                        <p><u>Điều kiện hủy tour (ngày thường)</u><br></p>
                                        - Các ngày lễ tết việc dời ngày và hủy tour mất 100% giá tour.<br>
                                        - Sau khi hủy tour, du khách vui lòng đến công ty nhận tiền trong vòng 2 tuần kể từ ngày đăng ký hủy tour.<br>
                                        - Chúng tôi chỉ thanh toán trong thời gian 14 ngày nói trên.<br>
                                        - Trường hợp hủy tour do sự cố khách quan như thiên tai, dịch bệnh hoặc do tàu thủy, xe lửa, máy bay hoãn/hủy chuyến, iVIVU sẽ không chịu trách nhiệm bồi thường thêm bất kỳ chi phí nào khác ngoài việc hoàn trả chi phí những dịch vụ chưa được sử dụng của tour đó.<br>
                                        <p><b>Chính sách đổi: </b><br>
                                            Điều kiện dời ngày khởi hành (chỉ được dời 1 lần):
                                        </p>
                                        - Dời trước 10 ngày so với ngày khởi hành: phí dời 0% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng. <br />
                                        - Trước 6 so với ngày khởi hành: phí dời 20% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng. <br />
                                        - Trước 4 so với ngày khởi hành: phí dời 40% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng. <br />
                                        - Sau thời gian trên: phí dời 100% tiền tour (Không tính ngày lễ và chủ nhật). Phí dời vé máy bay theo qui định của hãng. <br />
                                        <br />
                                    </p>
                                </div>
                            </div>
                            <div class="panel" id="four-panel">
                                <div class="info-time">
                                    <p>
                                        - Trong trường hợp khách hàng dẫn theo trẻ em dưới 15 tuổi (không phải con ruột) đi cùng trong chương trình, phải mang theo Giấy Ủy Quyền của cha mẹ, có xác nhận của chính quyền địa phương. <br /><br />
                                        - Trẻ em phải đi cùng cha mẹ khi đi phải mang theo giấy khai sinh hoặc hộ chiếu. <br /><br />
                                        - Du khách có mặt tại điểm đón trước 30 phút. Du khách đến trễ khi xe đã khởi hành hoặc hủy tour không báo trước vui lòng chịu phí như ‘hủy vé ngay ngày khởi hành’. <br /><br />
                                        - Du khách mang theo giấy CMND hoặc Hộ chiếu (Bản chính), nên mang theo hành lý gọn nhẹ, không mang vali lớn. <br /><br />
                                        - Du khách tự quản lý tiền bạc tư trang trong qua trình tham quan du lịch. <br /><br />
                                        - Khi đăng ký, quý khách vui lòng cung cấp đầy đủ Họ tên và năm sinh.<br><br />
                                        - Đối với du khách là Việt kiều, Quốc tế nhập cảnh Việt Nam bằng visa rời, vui lòng mang theo tờ khai hải quan và visa khi đi tour.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tu-van">
                        <div class="lich-trinh">
                            <p>Tư vấn ngay</p>
                        </div>
                        <p>Để được tư vấn kỹ hơn, Quý Khách vui lòng để lại thông tin liên lạc. DaNangTravel sẽ gọi lại ngay!</p>
                        <div class="info-time-tuvan">
                            <div class="tu-van-l">
                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Họ tên</label>
                                        <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Điện thoại</label>
                                        <input type="phone" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Nội dung cần tư vấn</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="width: 100%; height: 45px; font-size: 20px; font-weight: bold; background: #fb7700; border: #fb7700;">Yêu cầu tư vấn</button>
                                </form>
                            </div>
                            <div class="tu-van-r">
                                <img src="../img/tour/avatar.png" style="width: 124px; height: 124px;"><br>
                                <p>Tư vấn ngay? Gọi tổng đài<br>
                                    <i class="fas fa-phone-alt">(028) 3933 8002</i><br>
                                    8h30 - 18h00 hàng ngày
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="lich-trinh binh-luan">
                        <p>Bình luận</p>
                    </div>
                    <div id="fb-root"></div>
                    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=553253088944677&autoLogAppEvents=1" nonce="GOvRmz4P"></script>
                    <div class="fb-comments" data-href="https://www.zoyit.info/" data-numposts="5" data-width="787"></div>
                </div>
            </div>
        </div>
        <div id="right" style="height: 815vh;">
            <div class="card sticky-top" style="width: 360px; margin-bottom: 10px;">
                <div class="card-body card-menu-1" style="padding: 10px;">
                    <div style="margin-bottom:15px;position:relative;">
                        <div class="b-iamsafe">Điểm đến <span class="hidden-xs">du lịch </span>an toàn</div>
                        <div style="position:absolute;top: 3px;left: 3px;">
                            <div style="width:50px;height:40px;background:#fff;border-top-left-radius:5px;border-bottom-left-radius:5px;padding:7px 10px;">
                                <img src="../img/tour/safe.png" style="height:27px;">
                            </div>
                        </div>
                    </div>
                    <div class="card-text" style="font-size: 14px;">
                        <p>Nhà cung cấp dịch vụ: <b> Liên Minh</b></p>
                        <p>Thời gian: 5 ngày - 4 đêm</p>
                        <p>Liên hệ: 0915.843.635 Ms Phương Anh</p>
                        <p class="coin" style="">
                            <span style="font-size: 14px;"><b>Giá: </b></span>
                            <span class="p1" style="font-weight: bold; color: orange; margin-left: 160px; font-size: 20px;">790,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></span>
                        </p>
                        <div>
                            <a class="order" href="../check-out/check-out-bac-kinh-van-ly-truong-thanh.php" style="color: white;background: #FF8008;background: -webkit-linear-gradient(to right, #FFC837, #FF8008);background: linear-gradient(to right, #FFC837, #FF8008);"><i class="fas fa-cart-plus"></i> Đặt tour</a>
                        </div>
                    </div>
                </div>
                <div style="height: 10px; border: none;"></div>
                <div class="sticky-top card-menu-2">
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" aria-controls="v-pills-home" aria-selected="true">CHƯƠNG TRÌNH TOUR</a>
                        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" aria-controls="v-pills-profile" aria-selected="false">CHÍNH SÁCH GIÁ</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-contact" aria-controls="v-pills-messages" aria-selected="false">ĐIỀU KHOẢN & QUY ĐỊNH</a>
                        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#fb-root" aria-controls="v-pills-messages" aria-selected="false">BÌNH LUẬN</a>
                    </div>
                    <script>
                        $(document).ready(function(){
                    // Add smooth scrolling to all links
                    $("a").on('click', function(event) {

                      // Make sure this.hash has a value before overriding default behavior
                      if (this.hash !== "") {
                        // Prevent default anchor click behavior
                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                          scrollTop: $(hash).offset().top
                        }, 900, function(){
                     
                          // Add hash (#) to URL when done scrolling (default click behavior)
                          window.location.hash = hash;
                        });
                      } // End if
                    });
                  });
                  </script>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div id="tour-bonus">
            <div class="tin">
                <div class="tieu-de">Tour liên quan</div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel1.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="">KHÁM PHA ĐÔNG BẮC HÀ NỘI - HỒ BA BỂ - THÁC BẢN GIỐC - ĐỘNG NGƯỜM NGAO</a> </div>
                </div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel2.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="./index_1.php">KHÁM PHÁ CON ĐƯỜNG HẠNH PHÚC HÀ GIANG HÀ NỘI - HÀ GIANG - ĐỒNG VĂN - MÈO VẠC</a> </div>
                </div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel3.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="">CHƯƠNG TRÌNH DU LỊCH KHÁM PHÁ CAO NGUYÊN MỘC CHÂU</a> </div>
                </div>
            </div>
            <div class="tin">
                <div class="tieu-de">Tour khuyến mãi dành riêng cho bạn</div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel1.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="">KHÁM PHA ĐÔNG BẮC HÀ NỘI - HỒ BA BỂ - THÁC BẢN GIỐC - ĐỘNG NGƯỜM NGAO</a> </div>
                </div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel2.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="./index_1.php">KHÁM PHÁ CON ĐƯỜNG HẠNH PHÚC HÀ GIANG HÀ NỘI - HÀ GIANG - ĐỒNG VĂN - MÈO VẠC</a> </div>
                </div>
                <div class="khoi-tin-phu">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Khuyến mãi - 40%</p>
                    </span>
                    <div class="img-tour">
                        <a href=""><img class="hinh" src="../img/tour/travel3.jpg" /></a>
                    </div>
                    <div class="content-tour"> <a class="link-new" href="">CHƯƠNG TRÌNH DU LỊCH KHÁM PHÁ CAO NGUYÊN MỘC CHÂU</a> </div>
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
        return (
            $("body, html").animate({
                    scrollTop: 0,
                },
                800
            ),
            !1
        );
    });
    $(function() {
        $('[data-toggle="tooltip"]').tooltip();
    });
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
</body>

</html>