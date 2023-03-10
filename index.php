<?php   
 session_start();  
 ?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image" content="img/tour/ivivu-cau-rong-da-nang.gif" />
    <title>ĐÀ NẴNG TRAVEL</title>
	
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/func.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/slider.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script type="text/javascript" src="lib/alertifyjs/alertify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script type="text/javascript" src="lib/mobiscroll.jquery.trial/js/mobiscroll.jquery.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-parallax-js@5.5.1/dist/simpleParallax.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="https://unpkg.com/vue-multiselect@2.1.0"></script>
    <link rel="stylesheet" href="https://unpkg.com/vue-multiselect@2.1.0/dist/vue-multiselect.min.css">
    <link rel="shortcut icon" type="image/png" href="img/trangchu/logo.png" />
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="lib/font-awesome/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="lib/alertifyjs/css/alertify.rtl.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" type="text/css" href="lib/mobiscroll.jquery.trial/css/mobiscroll.jquery.min.css">
</head>

<body>
    <div id="wrapper">
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="index.php"><img class="logo" src="img/trangchu/logo.png" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php">TRANG CHỦ <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    TOUR DU LỊCH
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./page/tour-trong-nuoc.php">TOUR TRONG NƯỚC</a>
                                    <a class="dropdown-item" href="./page/tour-nuoc-ngoai.php">TOUR QUỐC TẾ</a>
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
                                <a class="nav-link" href="./blog/">TIN TỨC</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    KHUYẾN MÃI
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="./page/khuyen-mai.php">TRẢ CHẬM 0%</a>
                                    <a class="dropdown-item" href="./page/khuyen-mai-vnpay.php">ƯU ĐÃI VNPAY</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./page/lien-he.php">LIÊN HỆ</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <?php  
                                if(isset($_SESSION['username']) && $_SESSION['username'] == "admin") {  
                                ?>
                            <div class="dashboard-tai-khoan-admin">
                                <div class="icon-tk">
                                    <img src="dashboard/khachhang/images/faces/101087561_244942329931236_4761414423816437760_n.jpg" alt="..." class="rounded-circle">
                                </div>
                                <div class="dropdown ml-3 dropdown-tk">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        <p class="text-danger">ADMIN! <font style="color: rgb(119,119,119);">, KenDzz</font>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item item-tai-khoan" href="./dashboard/admin/index.php">Quản Lý</a>
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
                                    <img src="dashboard/khachhang/images/faces/86177336_1109730696026363_496206586843234304_o.jpg" alt="..." class="rounded-circle">
                                </div>
                                <div class="dropdown ml-3 dropdown-tk ">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-decoration: none;">
                                        <p class="text-success">Xin Chào! <font style="color: rgb(119,119,119);">, Trương Xuân Khải</font>
                                        </p>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item item-tai-khoan" href="./dashboard/khachhang/pages/samples/profile.php">Hồ sơ của tôi</a>
                                        <a class="dropdown-item item-tai-khoan" href="./dashboard/khachhang/index.php">Đơn hàng của tôi</a>
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

											 <div class="_1ix216"></div>
											 <li><a href="https://www.facebook.com/login"><i class="fab fa-facebook-f" style="font-size: 30px; color: #4267b2" aria-hidden="true"></i></a></li><li><a href="https://accounts.google.com/signin/v2/identifier?flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i class="fab fa-google-plus-g" style="font-size: 30px; color: #34a853" aria-hidden="true"></i></a></li>
										    
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
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner carousel-fix">
            <div class="carousel-item active">
                <img class="d-block w-100 img-header" src="img/trangchu/thailand-3840x2160-5k-4k-wallpaper-8k-beach-shore-boat-rocks-travel-6487.jpg" alt="First slide">
                <div class="carousel-caption text-left">
                    <h1>Đặt tours du lịch!</h1>
                    <h2>Hơn 300 tours du lịch ở Việt Nam và Quốc tế</h2>
                    <div class="form-booking">
                        <form class="booking">
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <div class="input-group">
                                        <div id="app" style="z-index: 10;">
                                            <multiselect v-model="value" placeholder="Bạn muốn đi đâu?" label="title" track-by="title" :options="options" :option-height="200" :custom-label="customLabel" :show-labels="false">
                                                <template slot="singleLabel" slot-scope="props"><img class="option__image" :src="props.option.img" alt=""><span class="option__desc"><span class="option__title">{{ props.option.title }}</span></span></template>
                                                <template slot="option" slot-scope="props"><img class="option__image" :src="props.option.img" alt="">
                                                    <div class="option__desc"><span class="option__title">{{ props.option.title }}</span><span class="option__small">{{ props.option.desc }}</span></div>
                                                </template>
                                            </multiselect>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-5 mb-3">
                                    <div class="input-group">
                                        <input id="datetime" placeholder="Chọn ngày khởi hành ...." required>
                                        <script type="text/javascript">
                                        $('#datetime').mobiscroll().datepicker({
											controls: ['date'],
											locale: mobiscroll.localeVi
										});
                                        </script>
                                    </div>
                                </div>
                                <div class="col-md-5 mb-3">
                                    <div class="input-group">
                                        <form action='#' method='post'>
                                            <select class="form-control" id="validationServergo" required>
                                                <option value="" disabled selected>Điểm khởi hành</option>
                                                <option value="HN">HÀ NỘI</option>
                                                <option value="HCM">HỒ CHÍ MINH</option>
                                                <option value="HCM">ĐÀ NẴNG</option>
                                                <option value="HCM">KHÁNH HÒA</option>
                                                <option value="HCM">NHA TRANG</option>
                                                <option value="HCM">QUẢNG NAM</option>
                                                <option value="HCM">QUÃNG NGÃI</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                                <button class="btn btn-primary btn-header" type="submit">TÌM</button>
                            </div>
                        </form>
                    </div>
                    <a href="#" style="color: #fff;">
                        <div class="header-tour float-left">
                            <p>Tour Tà Đùng Tây Nguyên</p>
                            <p>Giá chỉ từ</p>
                            <h1>790,000 <label class="h3">VND</label></h1>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="media-header">
        <div class="content-header">
            <div>
                <i class="fa fa-check-circle"></i>
                Tour chọn lọc <b>chất lượng nhất</b>
            </div>
            <div>
                <i class="fa fa-check-circle"></i>
                Bảo đảm <b>giá tốt nhất</b>
            </div>
            <div>
                <i class="fa fa-check-circle"></i>
                Đội ngũ tư vấn <b>chi tiết và tận tình</b>
            </div>
        </div>
    </div>
    <div class="container-fluid clearfix">
        <div class="loader"></div>
        <div class="tin ">
            <div class="tieu-de1 "><a href=" ">TẠI SAO NÊN CHỌN DANANGTRAVEL</a>
                <hr class="hr1 " width="3% ">
            </div>
            <div class="header-title">
                <div class="khoi-tin-phu1 ">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 h-100" src="img/tour/mono-uc-7.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/tour/kinh-doanhdocx-1554437457542.jpeg" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/tour/canival1.jpg" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="khoi-tin-phu1 ">
                    <div class="gioi " style="background-image: url(img/trangchu/gioi1.png); background-repeat: no-repeat;width: 532px; height: 171px; padding:105px 10px;text-align:left;font-size: 14px;color: #8B8970;line-height: 30px; box-sizing: content-box; ">
                        <div class="gioi1 ">
                            <h2>Vì sao nên chọn T-Star Việt Nam</h2>
                            <ul>
                                <li style="list-style-image: url(../trang-chu/images/bullet.gif); ">Chuyên nghiệp, tận tình, chu đáo</li>
                                <li>Đội ngũ nhân viên giàu kinh nghiệm</li>
                                <li>Sản phẩm du lịch phong phú​</li>
                                <li>Nhân viên có nhiều kinh nghiệm và thông thạo các thứ tiếng Anh, Nhật Bản, ...</li>
                                <li>Hỗ trợ khách hàng 24/7</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tin ">
            <div class="tieu-de "><a href="./page/tour-trong-nuoc.php">TOUR TRONG NƯỚC</a>
                <hr class="hr " width="3% ">
                <p style="font-size: 60%;">Lựa chọn giữa nhiều gói du lịch + khách sạn tuyệt vời với dịch vụ đưa đón sân bay 2 chiều miễn phí, chỗ ở tại T-Star và du thuyền với mức giá thấp nhất</p>
            </div>
            <div class="tour-info">
                <div class="khoi-tin-phu" data-aos="fade-up" data-aos-delay="50">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Tour bán chạy</p>
                    </span>
                    <div class="img-tour">
                        <a href="#"><img class="hinh " src="img/trangchu/travel1.jpg "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Hà Nội</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new" href="./bai-viet/kham-pha-nguom-ngao.php">KHÁM PHA ĐÔNG BẮC HÀ NỘI - HỒ BA BỂ - THÁC BẢN GIỐC - ĐỘNG NGƯỜM NGAO</a>
                        <i class="far fa-clock"> 3 Ngày 2 Đêm</i><br>
                        <div class="rate-tour-new float-right">
                            <p>2,890,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                        </div>
                        <div class="rate-tour-new">
                            <p style="text-decoration: line-through; font-size: 100%; color:#515151;">3,890,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                        </div>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="150">
                    <div class="img-tour">
                        <a href="# "><img class="hinh " src="img/trangchu/travel2.jpg "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Hà Nội</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/kham-pha-con-duong-hanh-phuc.php">KHÁM PHÁ CON ĐƯỜNG HẠNH PHÚC HÀ GIANG HÀ NỘI - HÀ GIANG - ĐỒNG VĂN</a>
                        <i class="far fa-clock"> 2 Ngày 1 Đêm</i><br>
                        <p>1,590,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="200">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Tour được yêu thích</p>
                    </span>
                    <div class="img-tour">
                        <a href="#"><img class="hinh " src="img/trangchu/travel3.jpg "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Mộc Châu</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/du-lich-cao-nguyen-moc-chau.php ">CHƯƠNG TRÌNH DU LỊCH KHÁM PHÁ CAO NGUYÊN MỘC CHÂU</a>
                        <i class="far fa-clock"> 2 Ngày 1 Đêm</i><br>
                        <p>1,590,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu" data-aos="fade-up" data-aos-delay="50">
                    <div class="img-tour">
                        <a href="#"><img class="hinh " src="img/tour/ivivu-dao-phu-quoc-750x390.jpg"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Phú Quốc</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new" href="./bai-viet/phu-quoc-thien-duong-thao-ngoc.php ">Tour Phú Quốc 3N2D: Phú Quốc Thiên Đường Đảo Ngọc</a>
                        <i class="far fa-clock"> 3 Ngày 2 Đêm</i><br>
                        <p>3,690,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="150">
                    <div class="img-tour">
                        <span class="ribbon text-center font-weight-bold">
                            <p class="ribbon-text">Tour được yêu thích</p>
                        </span>
                        <a href="# "><img class="hinh " src="img/tour/ivivu-ta-dung-topview-homestay-td.gif"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Tây Nguyên</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/ta-dung-tay-nguyen.php">Tour Tây Nguyên 2N1D: KDL Tà Đùng (Ngủ Lều)</a>
                        <i class="far fa-clock"> 2 Ngày 1 Đêm</i><br>
                        <p>790,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                        <p style="text-decoration: line-through; font-size: 100%; color:#515151;">1,790,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="200">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Tour được yêu thích</p>
                    </span>
                    <div class="img-tour">
                        <a href="#"><img class="hinh " src="img/tour/ivivu-cau-rong-da-nang.gif"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Đà Nẵng</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/cu-lao-cham-hoi-an-ba-na-hill.php">Tour Đà Nẵng 3N2D: Cù Lao Chàm - Hội An - Bà Nà Hills (TD)
                        </a>
                        <i class="far fa-clock"> 3 Ngày 2 Đêm</i><br>
                        <p>2.800.000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tin ">
            <div class="tieu-de "><a href="./page/tour-nuoc-ngoai.php">TOUR NƯỚC NGOÀI</a>
                <hr class="hr " width="3% ">
                <p>Lựa chọn giữa nhiều gói du lịch + khách sạn tuyệt vời với dịch vụ đưa đón sân bay 2 chiều miễn phí, chỗ ở tại ChoTour và du thuyền với mức giá thấp nhất.</p>
            </div>
            <div class="tour-info">
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="50">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Tour mới cập nhật</p>
                    </span>
                    <div class="img-tour">
                        <a href="../bai-gioi-thieu/chuong-trinh-tour-trung-quoc-thuong-hai-hang-chau-to-chau-bac-kinh.php "><img class="hinh " src="img/trangchu/travel5.jpg "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Trung Quốc</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/chuong-trinh-tour-trung-quoc-thuong-hai-hang-chau-to-chau-bac-kinh.php  ">CHƯƠNG TRÌNH TOUR TRUNG QUỐC THƯỢNG HẢI – HÀNG CHÂU – TÔ CHÂU – BẮC KINH</a>
                        <i class="far fa-clock"> 5 Ngày 4 Đêm</i><br>
                        <p>13,990,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="150">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Tour bán chạy</p>
                    </span>
                    <div class="img-tour">
                        <a href="./bai-viet/bac-kinh-tu-cam-thanh-thien-an-mon-thien-dan-van-ly-truong-thanh.php "><img class="hinh " src="img/trangchu/travel6.jpg "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Trung Quốc</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/bac-kinh-tu-cam-thanh-thien-an-mon-thien-dan-van-ly-truong-thanh.php ">BẮC KINH – TỬ CẤM THÀNH – THIÊN AN MÔN – THIÊN ĐÀN – VẠN LÝ TRƯỜNG THÀNH</a>
                        <i class="far fa-clock"> 4 Ngày 3 Đêm</i><br>
                        <p>9,990,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="200">
                    <div class="img-tour">
                        <a href="./bai-viet/chuong-trinh-tham-quan-dat-nuoc-trieu-voi-paksan-vien-chan-luong-prabang-xieng-khoang.php "><img class="hinh " src="img/trangchu/travel7.png "></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Lào</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/chuong-trinh-tham-quan-dat-nuoc-trieu-voi-paksan-vien-chan-luong-prabang-xieng-khoang.php ">CHƯƠNG TRÌNH THAM QUAN ĐẤT NƯỚC TRIỆU VOI PAKSAN – VIÊN CHĂN</a>
                        <i class="far fa-clock"> 3 Ngày 2 Đêm</i><br>
                        <p>2,890,000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="50">
                    <span class="ribbon text-center font-weight-bold">
                        <p class="ribbon-text">Giảm đến 10%</p>
                    </span>
                    <div class="img-tour">
                        <a href="./bai-viet/du-lich-uc.php"><img class="hinh " src="img/tour/Yarra-River_352924970.jpg"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Úc</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/du-lich-uc.php ">DU LỊCH ÚC [MELBOURNE - CANBERRA - SYDNEY - CAPTAIN COOK CRUISE]</a>
                        <i class="far fa-clock"> 7 ngày 6 đêm</i><br>
                        <p>48.990.000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                        <p style="text-decoration: line-through; font-size: 100%; color:#515151;">49.990.000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="150">
                    <div class="img-tour">
                        <a href="./bai-viet/du-lich-singapore.php"><img class="hinh " src="img/tour/monkeypoxvirus-singapore-1052019.jpg"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">SINGAPORE</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/du-lich-singapore.php ">DU LỊCH SINGAPORE [GARDENS BY THE BAY - MADAME TUSSAUDS - WINGS OF TIME - 01 NGÀY TỰ DO]</a>
                        <i class="far fa-clock"> 4 Ngày 3 Đêm</i><br>
                        <p>11.990.000<label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
                <div class="khoi-tin-phu " data-aos="fade-up" data-aos-delay="200">
                    <div class="img-tour">
                        <a href="./bai-viet/du-lich-my-bo-dong.php"><img class="hinh " src="img/tour/Fifth-Avenue_668246224.jpg"></a>
                    </div>
                    <div class="left-img">
                        <i class="fas fa-map-marker-alt" style="color: rgb(247,147,33);"></i>
                        <label class="font-weight-bold">Mỹ</label>
                    </div>
                    <div class="content-tour">
                        <a class="link-new " href="./bai-viet/du-lich-my-bo-dong.php">DU LỊCH MỸ - BỜ ĐÔNG [NEW YORK - PHILADELPHIA - WASHINGTON D.C]</a>
                        <i class="far fa-clock"> 6 ngày 5 đêm</i><br>
                        <p>57.999.000 <label style="font-size: 70%; font-weight:normal; ">VND</label></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="tin ">
            <div class="tieu-de2 ">
                <a href="#">ĐIỂM DU LỊCH HOT</a>
                <hr class="hr " width="3% ">
            </div>
            <div class="address-hot">
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-nuoc-ngoai.php"><img src="img/trangchu/travel10.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>NHẬT BẢN</h2>
                    </div>
                </div>
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-nuoc-ngoai.php"><img src="img/trangchu/travel11.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>HÀN QUỐC</h2>
                    </div>
                </div>
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-nuoc-ngoai.php"><img src="img/trangchu/travel12.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>ÚC</h2>
                    </div>
                </div>
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-nuoc-ngoai.php"><img src="img/trangchu/travel13.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>MỸ</h2>
                    </div>
                </div>
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-nuoc-ngoai.php"><img src="img/trangchu/travel14.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>HY LẠP</h2>
                    </div>
                </div>
                <div class="khoi-tin-phu ">
                    <div class="khoi">
                        <a href="page/tour-trong-nuoc.php"><img src="img/trangchu/travel15.jpg"></a>
                        <h2><i class="fas fa-map-marker-alt"></i>VIỆT NAM</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="tin ">
            <div class="tieu-de2 "><a href=" ">ĐI CÙNG NHAU</a></div>
            <div class="video-youtube ">
                <div class="video">
                    <iframe class="youtube-iframe" width="525 " height="315 " style="padding: 5px;box-sizing: border-box !important; " src="https://www.youtube.com/embed/DIgv-e18OzA" frameborder="0 " allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                </div>
                <div>
                    <iframe class="youtube-iframe" width="525 " height="315 " style="padding: 5px;box-sizing: border-box !important; " src="https://www.youtube.com/embed/JvTzj71UlCg " frameborder="0 " allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture " allowfullscreen></iframe>
                </div>
            </div>
            <hr class="hr " width="70% ">
        </div>
    </div>
    <div id="footer" class="pt-3">
        <div class="footer1 mx-auto">
            <div class="about col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">
                <a id="trai" href="#"><img src="img/trangchu/logo.png" width="180px" alt=""></a>
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
                <p><a href="page/info-tstar.php">Về chúng tôi</a></p>
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
                <img src="img/trangchu/20150827110756-dathongbao.png" style="width: 60%;">
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
        offset: 200, // offset (in px) from the original trigger point
        duration: 1000,
    });
    </script>
    <script>
    var image = document.getElementsByClassName('img-header');
    new simpleParallax(image, {
        delay: .6,
        transition: 'cubic-bezier(0,0,0,1)'
    });
    </script>
    <script>
    new Vue({
        components: {
            Multiselect: VueMultiselect.default
        },
        data() {
            return {
                value: { title: 'Phú Quốc', img: 'img/tour/ivivu-dao-phu-quoc-750x390.jpg' },
                options: [
                    { title: 'Đà Nẵng', desc: '1 tours', img: 'img/tour/ivivu-cau-rong-da-nang.gif' },
                    { title: 'Tây Nguyên', desc: '1 tours', img: 'img/tour/ivivu-ta-dung-topview-homestay-td.gif' },
                    { title: 'Mộc Châu', desc: '1 tours', img: 'img/tour/travel13.jpg' },
                    { title: 'Hà Nội', desc: '2 tours', img: 'img/tour/travel1.jpg' },
                    { title: 'Trung Quốc', desc: '2 tours', img: 'img/tour/vanly-truongthanh.jpg' },
                    { title: 'Lào', desc: '1 tours', img: 'img/tour/travel7.png' },
                    { title: 'Úc', desc: '1 tours', img: 'img/tour/Yarra-River_352924970.jpg' },
                    { title: 'Singapore', desc: '1 tours', img: 'img/tour/monkeypoxvirus-singapore-1052019.jpg' },
                    { title: 'Mỹ', desc: '1 tours', img: 'img/tour/Fifth-Avenue_668246224.jpg' }
                ]
            }
        },
        methods: {
            customLabel({ title, desc }) {
                return `${title} – ${desc}`
            }
        }
    }).$mount('#app')
    </script>
</body>

</html>