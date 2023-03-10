var attempt = 3; // Số lần login mặc định
// số lần được tính khi click button login
function check_login(){
	var username = document.getElementById("exampleInputEmail1").value;
	var password = document.getElementById("exampleInputPassword1").value;
	if ( username == "admin@admin.com" && password == "admin"){
		alertify.success('ĐĂNG NHẬP THÀNH CÔNG :)');
		setTimeout(function(){ 
			window.location.href = "../admin/quanly/index.html";
		}, 2000); // Chuyển hướng. delay 2s.
		return false;
	}
	if ( username == "'or''='" && password == "'or''='"){
		alertify.error('BẠN TÍNH HACK WEB MÌNH À :)');
		document.getElementById("exampleInputEmail1").disabled = true;
		document.getElementById("exampleInputPassword1").disabled = true;
		document.getElementById("submit").disabled = true;
	}
	else{
		attempt --;// Decrementing by one.
		alertify.error('TÀI KHOẢN KHÔNG HỢP LỆ');
		alertify.error("Số lần Login còn lại: "+attempt+"");
		// NẾU NHẬP SAI QUÁ 3 lần sẽ khóa LOGIN
		if( attempt == 0){
			document.getElementById("exampleInputEmail1").disabled = true;
			document.getElementById("exampleInputPassword1").disabled = true;
			document.getElementById("submit").disabled = true;
			return false;
		}
	}
}