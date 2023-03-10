<?php   
session_start();  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>ĐÀ NẴNG TRAVEL</title>
    <link rel="shortcut icon" type="image/png" href="../img/trangchu/logo.png" />
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Font-->
    <link rel="stylesheet" type="text/css" href="css/nunito-font.css">
    <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
    <!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/style1.css" />
    <script src="../../js/slider.js"></script>
    <link rel="stylesheet" type="text/css" href="../lib/alertifyjs/css/alertify.rtl.min.css">
    <link rel="stylesheet" type="text/css" href="../lib/font-awesome/css/all.css" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../lib/mobiscroll.jquery.trial/css/mobiscroll.jquery.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../lib/mobiscroll.jquery.trial/js/mobiscroll.jquery.min.js"></script>
    <script type="text/javascript" src="../js/func.js"></script>
    <script type="text/javascript" src="../js/slider.js"></script>
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
    $("#myModal1").on('show.bs.modal', function(e) {
        $("#myModal2").modal("hide");
    });
</script>
<div class="breadcrumb1">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="../index.php">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="../page/tour-trong-nuoc.php">Tour trong nước</a>
            </li>
            <li class="breadcrumb-item">
                <a href="../bai-viet/cu-lao-cham-hoi-an-ba-na-hill.php">Tour Đà Nẵng 3N2D: Cù Lao Chàm - Hội An - Bà Nà Hills</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Đặt Tour</li>
        </ol>
    </nav>
</div>
<div class="page-content">
    <h1 style="position: absolute; top: 20%; color: white;">THANH TOÁN</h1>
    <div class="wizard-v5-content">
        <div class="wizard-form">
            <div class="form-register" id="form-register">
                <div id="form-total">
                    <!-- SECTION 1 -->
                    <h2>
                        <span class="step-icon">
                            <i class="zmdi zmdi-check"></i>
                        </span>
                        <span class="step-text">Khách hàng</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder">
                                    <label for="first_name">Họ và Tên Đệm</label>
                                    <input type="text" placeholder="ex: Nguyen Van A" class="form-control" id="first_name" name="first_name">
                                </div>
                                <div class="form-holder">
                                    <label for="last_name">Tên</label>
                                    <input type="text" placeholder="" class="form-control" id="last_name" name="last_name">
                                </div>
                            </div>
                            <div class="form-row">
                                <div id="radio">
                                    <label for="gender">Giới tính:</label>
                                    <input type="radio" name="gender" value="male" checked> Nam
                                    <input type="radio" name="gender" value="female"> Nữ
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="address">Địa chỉ</label>
                                    <input type="text" placeholder="VD: Đ. Khái Tây 1, Hòa Quý, Ngũ Hành Sơn, Đà Nẵng 550000" class="form-control" id="address" name="address">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder">
                                    <label for="phone">Số điện thoại</label>
                                    <input type="text" placeholder="+84 934234634" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="form-holder">
                                    <label for="email">Email:</label>
                                    <input type="email" name="email" class="email input-step-2-1" id="email" placeholder="ex: example@email.com" pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 2 -->
                    <h2>
                        <span class="step-icon">
                            <i class="zmdi zmdi-check"></i>
                        </span>
                        <span class="step-text">Thông tin</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="bank">Loại tour:</label>
                                    <input type="text" placeholder="" class="form-control input-step-2" value="Tour trong nước">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder so-luong">
                                    <label for="branch">Người lớn:</label>
                                    <input type="number" placeholder="" class="form-control input-step-2" id="so_luong_1" value="1" data-toggle="tooltip" title="Từ 12 tuổi trở lên">
                                </div>
                                <div class="form-holder so-luong">
                                    <label for="branch">Trẻ em:</label>
                                    <input type="number" placeholder="" class="form-control input-step-2" id="so_luong_2" value="0" data-toggle="tooltip" title="Từ 5 tuổi đến 12 tuổi">
                                </div>
                                <div class="form-holder so-luong">
                                    <label for="branch">Trẻ nhỏ:</label>
                                    <input type="number" placeholder="" class="form-control input-step-2" id="so_luong_3" value="0" data-toggle="tooltip" title="Từ 2 đến 5 tuổi trở lên">
                                </div>
                                <div class="form-holder so-luong">
                                    <label for="branch">Em bé:</label>
                                    <input type="number" placeholder="" class="form-control input-step-2" id="so_luong_4" value="0" data-toggle="tooltip" title="Dưới 2 tuổi">
                                </div>
                            </div>
                            <div class="alert alert-success" role="alert">
                                Trẻ em sẽ được giảm 50%
                            </div>
                            <div class="alert alert-success" role="alert">
                                Trẻ nhỏ sẽ được giảm 70%
                            </div>
                            <div class="alert alert-success" role="alert">
                                Em bé sẽ được miễn phí hoàn toàn tại <a href="../index.php" class="alert-link">DANANG TRAVEL</a>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="bank">Tên tour:</label>
                                    <input type="text" placeholder="" class="form-control input-step-2" id="name_tour" value="Tour Đà Nẵng 3N2D: Cù Lao Chàm - Hội An - Bà Nà Hills">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="account_name">Yêu cầu khác:</label>
                                    <textarea style="height: 90px;" placeholder="" class="form-control" id="account_name" name="account_name"></textarea>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-holder form-holder-2">
                                    <label for="account_number">Mức Giá:</label>
                                    <input type="text" placeholder="" class="form-control input-step-2-2" id="account_number" name="account_number" value="2800000">
                                </div>
                            </div>
                            <div class="form-row form-row-date form-row-step-2">
                                <div class="form-holder form-holder-2">
                                    <label for="account_number">Ngày khởi hành:</label>
                                    <div class="input-group">
                                        <input id="datetime" placeholder="Chọn ngày khởi hành ...." required>
                                        <script type="text/javascript">
                                            mobiscroll.settings = {
                                                lang: 'vi',
                                                theme: 'ios',
                                                themeVariant: 'light'
                                            };
                                            $(function() {

                                                $('#datetime').mobiscroll().calendar({
                                                    dateFormat: 'DD, dd M yy',
                                                    display: 'bubble'
                                                });

                                            });
                                        </script>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <span class="step-icon">
                            <i class="zmdi zmdi-check"></i>
                        </span>
                        <span class="step-text">Xác nhận</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Xác nhận thông tin</h3>
                            <div class="form-row table-responsive" style="width: 90%;">
                                <table class="table">
                                    <tbody>
                                        <tr class="space-row">
                                            <th>Họ tên:</th>
                                            <td id="fullname-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Số điện thoại:</th>
                                            <td id="phone-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Địa chỉ email:</th>
                                            <td id="email-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Tên tour:</th>
                                            <td id="name_tour-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Số lượng khách:</th>
                                            <td id="so_luong-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Ngày khởi hành:</th>
                                            <td id="hehe-val"></td>
                                        </tr>
                                        <tr class="space-row">
                                            <th>Thành tiền:</th>
                                            <td id="account-number-val"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </section>
                    <!-- SECTION 3 -->
                    <h2>
                        <span class="step-icon">
                            <i class="zmdi zmdi-check"></i>
                        </span>
                        <span class="step-text">Thanh toán</span>
                    </h2>
                    <section>
                        <div class="inner">
                            <h3>Xác nhận thông tin thanh toán</h3>
                            <div class="container">
                                <div id="Checkout" class="inline">
                                    <h1>Hóa đơn thanh toán</h1>
                                    <div class="card-row">
                                        <span class="visa"></span>
                                        <span class="mastercard"></span>
                                        <span class="amex"></span>
                                        <span class="discover"></span>
                                    </div>
                                    <article class="card">
                                        <div class="container">
                                            <div class="card-body">
                                                <div class="payment-type">
                                                    <div class="types flex justify-space-between">
                                                        <div class="type type-1 selected">
                                                            <div class="logo">
                                                                <i class="far fa-credit-card"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Pay with Credit Card</p>
                                                            </div>
                                                        </div>
                                                        <div class="type type-2">
                                                            <div class="logo">
                                                                <i class="fas fa-university"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Internet banking</p>
                                                            </div>
                                                        </div>
                                                        <div class="type type-3">
                                                            <div class="logo">
                                                                <i class="fas fa-store-alt"></i>
                                                            </div>
                                                            <div class="text">
                                                                <p>Thanh toán tại quầy</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                    <div class="type-payment-1">
                                        <div class="form-group ">
                                            <label for="PaymentAmount">Số tiền thanh toán</label>
                                            <div class="amount-placeholder">
                                                <span id="account-number-val-1"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label or="NameOnCard">Tên trên thẻ</label>
                                            <input id="NameOnCard" class="form-control" type="text" maxlength="255"></input>
                                        </div>
                                        <div class="form-group">
                                            <label for="CreditCardNumber">Số thẻ</label>
                                            <input id="CreditCardNumber" class="null card-image form-control" type="text"></input>
                                        </div>
                                        <div class="expiry-date-group form-group">
                                            <label for="ExpiryDate">Ngày hết hạn</label>
                                            <input id="ExpiryDate" class="form-control" type="text" placeholder="MM / YY" maxlength="7"></input>
                                        </div>
                                        <div class="security-code-group form-group">
                                            <label for="SecurityCode">Mã bảo mật</label>
                                            <div class="input-container">
                                                <input id="SecurityCode" class="form-control" type="text"></input>
                                            </div>
                                        </div>
                                        <div class="zip-code-group form-group">
                                            <label for="ZIPCode">Mã ZIP</label>
                                            <div class="input-container">
                                                <input id="ZIPCode" class="form-control" type="text" maxlength="10"></input>
                                            </div>
                                        </div>
                                        <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" onclick="payment()"> 
                                            <span class="submit-button-lock"></span>
                                            <span class="align-middle">Thanh toán</span>
                                        </button>
                                    </div>
                                    <div class="type-payment-2">
                                        <div class="form-group ">
                                            <label for="PaymentAmount">Số tiền thanh toán</label>
                                            <div class="amount-placeholder">
                                                <span id="account-number-val-2"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p>HÌNH THỨC THANH TOÁN BẰNG THẺ ATM/ INTERNET BANKING</p>
                                            <p><b>DANANG TRAVEL</b> chấp nhận thanh toán bằng thẻ ATM qua cổng thanh toán 123 pay.</p>
                                            <p>Hãy đảm bảo bạn đang sử dụng thẻ ATM do ngân hàng trong nước phát hành và đã được kích hoạt chức năng thanh toán trực tuyến.</p>
                                            <p>Hướng dẫn thanh toán thẻ qua cồng 123 pay : https://123pay.vn/info/huong-dan/huong-dan</p>
                                        </div>
                                        <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" onclick="payment()">
                                            <span class="submit-button-lock"></span>
                                            <span class="align-middle">Thanh toán</span>
                                        </button>
                                    </div>
                                    <div class="type-payment-3">
                                        <div class="form-group ">
                                            <label for="PaymentAmount">Số tiền thanh toán</label>
                                            <div class="amount-placeholder">
                                                <span id="account-number-val-3"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <p>Quý khách vui lòng thanh toán tại bất kỳ văn phòng <b>DaNang Travel</b> trên toàn quốc và các chi nhánh ngoài nước. Chi tiết
                                            </p>
                                            <p>Xin lưu ý, Quý khách nên liên lạc trước khi đến để biết rõ hơn về giờ làm việc và các hồ sơ cần chuẩn bị khi thanh toán.</p>
                                            <p>Chi nhánh 1: Phòng 1707. Toà nhà D1 Northen Diamond. 99 Đàm Quang Trung. Long Biên. Hà Nội. Việt Nam</p>
                                            <p>Chi nhánh 2: 41 Lê Duẩn, Hải Châu 1, Hải Châu, Đà Nẵng</p>
                                            <p>Chi nhánh 3: 303 Hoàng Sa, Tân Định, Quận 1, Hồ Chí Minh</p>
                                        </div>
                                        <button id="PayButton" class="btn btn-block btn-success submit-button" type="submit" onclick="payment()">
                                            <span class="submit-button-lock"></span>
                                            <span class="align-middle">Thanh toán</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
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
    <?php error_reporting(0); echo "<input type='hidden' id='session_username' value='".$_SESSION['username']."'/>";?>
</div>
</div>
<div id="back-to-top" class="back-to-top" data-toggle="tooltip" data-placement="left" title="Trở lên đầu trang">
    <i class="fas fa-chevron-left"></i>
    <span class="glyphicon glyphicon-circle-arrow-up text-primary"></span>
</div>
<script>
    $("#back-to-top").click(function() {
        return $("body, html").animate({
            scrollTop: 0
        }, 800), !1
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
<script src="js/jquery.steps.js"></script>
<script src="js/main.js"></script>
<script>
    function payment() {
        var userName = $('#session_username').val();
        if (userName != '') {
            var radom_payment = Math.floor((Math.random() *50000) + 1);
            Swal.fire(
              'THANH TOÁN THÀNH CÔNG',
              'Mã thanh toán #'+radom_payment,
              'success'
              )
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Thanh toán không thành công!',
                text: 'Vui đăng nhập trước khi thanh toán!',
                footer: '<a href>Nếu bạn chưa có tài khoản! Vui lòng tạo tài khoản mới :)</a>'
            })
        }
    }
</script>
</body>

</html>