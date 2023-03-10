function dieu_huong() {
    var element = document.getElementsByClassName('form-control');
    document.write(element);
    location.assign("checkout-ring.html");
}

function search() {
    alert("CHỨC NĂNG CHƯA HỖ TRỢ");
}

function lien_he() {
    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger'
        },
        buttonsStyling: false
    })

    swalWithBootstrapButtons.fire({
        title: 'Bạn có chắc không?',
        text: "Thông tin liên hệ các bạn sẽ được gửi đến chúng tôi!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Đồng ý, Gửi!',
        cancelButtonText: 'Không, Thoát!',
        reverseButtons: true
    }).then((result) => {
        if (result.value) {
            swalWithBootstrapButtons.fire(
                'Gửi thành công!',
                'Thông tin liên hệ của bạn đã được tiếp nhận! Chúng tôi sẽ phản hồi trong 24h!',
                'success'
            )
        } else if (
            result.dismiss === Swal.DismissReason.cancel
        ) {
            swalWithBootstrapButtons.fire(
                'Thoát thành công!',
                'Ý định không tồi đó bạn :))',
                'error'
            )
        }
    })
}

/*$(document).ready(function() {
    $(".tai-khoan").show();
    $(".dashboard-tai-khoan-admin").hide();
    $(".dashboard-tai-khoan-khach-hang").hide();
});

function dang_xuat() {
    Swal.fire({
        icon: 'success',
        title: 'Đăng Xuất Thành Công!',
        showConfirmButton: false,
        timer: 1500
    })
    setTimeout(function() {
        $(".tai-khoan").show();
        $(".dashboard-tai-khoan-admin").hide();
        $(".dashboard-tai-khoan-khach-hang").hide();
    }, 1800);
}
function validate() {
    var user = $("#user").val();
    var pswrd = $("#pswrd").val();
    if (user == "admin" && pswrd == "admin") {
        Swal.fire({
            icon: 'success',
            title: 'Đăng Nhập Thành Công!',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function() {
            $("#myModal1").modal("hide");
            $(".tai-khoan").hide();
            $(".dashboard-tai-khoan-admin").show();
        }, 1800);
    } else if (user == "khachhang" && pswrd == "admin") {
        Swal.fire({
            icon: 'success',
            title: 'Đăng Nhập Thành Công!',
            showConfirmButton: false,
            timer: 1500
        })
        setTimeout(function() {
            $("#myModal1").modal("hide");
            $(".tai-khoan").hide();
            $(".dashboard-tai-khoan-khach-hang").show();
        }, 1800);
    } else {
        Swal.fire({
            icon: 'error',
            title: 'Tài khoản không chính xác!',
            text: 'Vui lòng kiểm tra lại!',
            footer: '<a href>Nếu bạn chưa có tài khoản! Vui lòng tạo tài khoản mới :)</a>'
        })
    }
}*/

function eyef() {
    var x = document.getElementById("pswrd");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

function back_login_1() {
    $("#myModal2").modal('hide');
}

function back_login_2() {
    $("#myModal3").modal('hide');
}

$(document).ready(function() {
    console.info("Developer By KenDzz & Chunkaiin");
    let i = 0;
    console.time("While loop");
    while (i < 1000000) {
        i++;
    }
    console.timeEnd("While loop");
    console.time("For loop");
    for (i = 0; i < 1000000; i++) {
        // For Loop
    }
    console.timeEnd("For loop");
});

$(document).ready(function() {
    $('#submit-login').click(function() {
        var username = $('#user').val();
        var password = $('#pswrd').val();
        if (username != '' && password != '') {
            $.ajax({
                url: "../php/check-login.php",
                method: "POST",
                data: { username: username, password: password },
                success: function(data) {
                    if (data == 'No') {
                        Swal.fire({
                            icon: 'error',
                            title: 'Tài khoản không chính xác!',
                            text: 'Vui lòng kiểm tra lại!',
                            footer: '<a href>Nếu bạn chưa có tài khoản! Vui lòng tạo tài khoản mới :)</a>'
                        })
                    } else if (data == 'Yes') {} {
                        Swal.fire({
                            icon: 'success',
                            title: 'Đăng Nhập Thành Công!',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        setTimeout(function() {
                            $("#myModal1").modal("hide");
                            location.reload();
                        }, 1800);
                    }
                }
            });
        } else {
            Swal.fire({
                icon: 'error',
                title: 'Tài khoản không chính xác!',
                text: 'Vui lòng kiểm tra lại!',
                footer: '<a href>Nếu bạn chưa có tài khoản! Vui lòng tạo tài khoản mới :)</a>'
            })
        }
    });
    $('#logout').click(function() {
        var action = "logout";
        $.ajax({
            url: "../php/check-login.php",
            method: "POST",
            data: { action: action },
            success: function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Đăng Xuất Thành Công!',
                    showConfirmButton: false,
                    timer: 1500
                })
                setTimeout(function() {
                    location.replace("../php/logout.php");
                }, 1800);
            }
        });
    });
});
