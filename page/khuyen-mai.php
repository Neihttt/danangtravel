<?php   
 session_start();  
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Khuyến Mãi - ĐÀ NẴNG TRAVEL</title>
    <link rel="shortcut icon" type="image/png" href="../img/trangchu/logo.png" />
    <link rel="stylesheet" type="text/css" href="../css/style6.css" />
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light container">
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
                            <div class="effect"></div>
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
                            <a class="nav-link" href="./blog/index.php">TIN TỨC</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                KHUYẾN MÃI
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="khuyen-mai.php">TRẢ CHẬM 0%</a>
                                <a class="dropdown-item" href="khuyen-mai-vnpay.php">ƯU ĐÃI VNPAY</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lien-he.php">LIÊN HỆ</a>
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
    <div id="main" class="container-fluid clearfix">
        <div class="breadcrumb1">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Khuyến mãi</li>
                </ol>
            </nav>
        </div>
        <div class="title">
            <h4>TRẢ CHẬM 0% LÃI SUẤT CÙNG SACOMBANK</h4>
        </div>
        <div id="left">
            <div class="under-img">
                <p class="order" href="../check-out/checkout-bac-kinh-tu-cam-thanh-thien-an-mon-thien-dan.php" style="color: white; margin-right: 20px;">Khuyến mãi</p>
                <p style="font-size: 14px; color: red;">Đang áp dụng toàn quốc</p>
            </div>
            <div id="fb-root"></div>
            <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=553253088944677&autoLogAppEvents=1" nonce="We78lelb"></script>
            <div class="fb-like mt-4" data-href="https://chunkaiin.site/cuoiky" data-width="" data-layout="standard" data-action="like" data-size="large" data-share="true"></div>
            <div class="tintin">
                <div id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="lich-trinh">
                        <p>Điều kiện để sử dụng Dịch Vụ Trả Góp Lãi Suất 0% </p>
                    </div>
                    <div class="info-time" id="info-time">
                        <p>
                            1.1. Dịch Vụ Trả Góp Lãi Suất 0% chỉ áp dụng đối với khách hàng cá nhân và đồng thời là Chủ thẻ của thẻ tín dụng quốc tế Sacombank ('Chủ thẻ' hoặc ‘Khách hàng’). <br />
                            1.2. Dịch Vụ Trả Góp Lãi Suất 0% chỉ áp dụng đối với các giao dịch mua hàng hóa, sử dụng dịch vụ bằng thẻ tín dụng quốc tế & không áp dụng cho giao dịch rút tiền mặt, giao dịch tương đương rút tiền mặt, thanh toán phí dịch vụ ngân hàng (phí phát hành và phí phát sinh từ việc sử dụng thẻ ngoại trừ phí chuyển đổi ngoại tệ). Đồng thời, các giao dịch trên phải được kết toán (settle) trên hệ thống trước thời điểm đăng ký trả góp.
                            <br />
                    </div>
                </div>
                <div id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <div class="lich-trinh">
                        <p>Mua tour sử dụng dịch vụ trả góp 0%</p>
                    </div>
                    <div class="info-time">
                        <p>
                            2.1. Khi sử dụng Dịch Vụ Trả Góp Lãi Suất 0%, Chủ thẻ sẽ không phải thanh toán bất cứ khoản tiền lãi nào nếu thanh toán dư nợ theo đúng quy định của Sacombank. <br />
                            2.2. Tại thời điểm giao dịch trả góp được thực hiện, Chủ thẻ sẽ phải điền đầy đủ thông tin vào mẫu đơn đăng ký dịch vụ và ký xác nhận tại địa điểm kinh doanh của Vietravel. Mẫu đơn này được dùng để xác nhận giao dịch trả góp đã được Chủ thẻ chấp thuận & làm thủ tục hợp lệ tại Vietravel theo đúng quy định của Sacombank. <br />
                            2.3. Sacombank sẽ ghi nợ số tiền giao dịch được đăng ký sử dụng Dịch Vụ Trả Góp Lãi Suất 0% vào Tài Khoản Thẻ Tín Dụng của Chủ thẻ thành các khoản trả góp hàng tháng liên tục tùy thuộc vào kỳ hạn trả góp do Chủ thẻ chọn và phù hợp với quy định của Vietravel. Số tiền được thanh toán thành nhiều lần và khoản phải trả của tháng đầu tiên sẽ được ghi nợ vào Tài Khoản Thẻ Tín Dụng ngay lập tức hoặc vào ngày do Sacombank toàn quyền quyết định. <br />
                            2.4. Tổng số tiền đăng ký trả góp được chia đều cho số tháng theo kỳ hạn trả góp Chủ thẻ đã đăng ký thành các khoản phải trả cố định hàng tháng. Khoản phải trả cố định hàng tháng sẽ được lập bảng như giao dịch thông thường và là một phần của tổng số tiền phải thanh toán trên mỗi bảng thông báo giao dịch. <br />
                            2.5. Hạn mức tín dụng của Chủ thẻ trên Tài Khoản Thẻ Tín Dụng sẽ bị giảm một khoản tương ứng với giá trị giao dịch áp dụng Dịch Vụ Trả Góp Lãi Suất 0% Chủ thẻ phải thanh toán cho Sacombank. Hàng tháng, hạn mức của Tài Khoản Thẻ Tín Dụng sẽ tự động tăng tương ứng với số tiền mà Chủ thẻ đã thanh toán cho Sacombank theo từng kỳ trả góp. <br />
                            2.6. Bất kể các quy định trên, trong trường hợp Chủ thẻ không thanh toán toàn bộ số tiền phải thanh toán trên bảng thông báo giao dịch Tài Khoản Thẻ Tín Dụng vào hoặc trước ngày đến hạn thanh toán, Chủ thẻ sẽ phải thanh toán một khoản lãi suất trên tổng dư nợ cuối kỳ của Tài Khoản Thẻ Tín Dụng theo quy định của bản Các Điều Khoản và Điều Kiện Phát Hành và Sử Dụng Thẻ Tín Dụng của Sacombank. <br />
                            2.8. Sau khi Chủ thẻ đăng ký chương trình trả góp lãi suất 0%, Số tiền này sẽ được chuyển đổi chậm nhất sau 10 ngày làm việc. Trường hợp chủ thẻ nhận được thông báo giao dịch nhưng số tiền chưa chuyển đổi/chủ thẻ thanh toán dư nợ trước hạn, chủ thẻ vui lòng liên hệ Dịch vụ Khách hàng để được tư vấn.
                            <br />
                        </p>
                    </div>
                    <div style="width: 690px; height: 420px;">
                        <img src="../img/tour/vietcom.jpg">
                    </div>
                    <br>
                </div>
                <div id="v-pills-contact">
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
                </div>
            </div>
        </div>
        <div id="right">
            <div class="frame-news-r">
                <div class="news-mini">
                    <div class="title"><a href="#">Tin mới</a></div>
                    <div id="divNewsLastest">
                        <ul class="list-tinkhac">
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="6 thiên đường biển tuyệt đẹp cho chuyến du lịch mùa hè">6 thiên đường biển tuyệt đẹp ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Hưởng ứng 'Ngày Không Tiền Mặt' Thẻ trong tay - Quà trao ngay cùng Vietravel">Hưởng ứng 'Ngày Không Tiền M ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Check-in 'sang chảnh' tại các khu nghỉ dưỡng nổi tiếng ở Phú Quốc">Check-in 'sang chảnh' tại cá ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="/tin-tuc-du-lich/trai-nghiem-chuyen-di-theo-cach-rieng-v13280.aspx" title="Trải nghiệm chuyến đi theo cách riêng">Trải nghiệm chuyến đi theo c ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Trải nghiệm xe du lịch riêng với Hướng Dẫn Viên chuyên nghiệp kiêm Tài Xế">Trải nghiệm xe du lịch riêng ...</a></li>
                        </ul>
                    </div>
                </div>
                <div class="news-mini">
                    <div class="title"><a href="#">Tin ngẫu nhiên</a></div>
                    <div id="divNewsRandom">
                        <ul class="list-tinkhac">
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Ấn tượng vẻ đẹp Cao Bằng">Ấn tượng vẻ đẹp Cao Bằng</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Xanh mát miền Tây">Xanh mát miền Tây</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Khám phá hang động mới ở Quảng Bình">Khám phá hang động mới ở Quả ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="Lễ công bố quyết định của Thủ tướng Chính phủ về việc phê duyệt chủ trương đầu tư Vietravel Airlines">Lễ công bố quyết định của Th ...</a></li>
                            <li class="dot-dot cut-name" style="overflow-wrap: break-word;"><a href="" title="'Nghe' chiều về trên đầm Vân Long">'Nghe' chiều về trên đầm Vân ...</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
</body>

</html>