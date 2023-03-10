$(function(){
    $("#form-total").steps({
        headerTag: "h2",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        autoFocus: true,
        transitionEffectSpeed: 500,
        titleTemplate : '<div class="title">#title#</div>',
        labels: {
            previous : 'Back',
            next : '<i class="zmdi zmdi-chevron-right"></i>',
            finish : '<i class="zmdi zmdi-chevron-right"></i>',
            current : ''
        },
        onStepChanging: function (event, currentIndex, newIndex) { 
            var fullname = $('#first_name').val() + ' ' + $('#last_name').val();
            var email = $('#email').val();
            var phone = $('#phone').val();
            var address = $('#address').val();
            var name_tour = $('#name_tour').val();
            var so_luong_1 = $('#so_luong_1').val();
            var so_luong_2 = $('#so_luong_2').val();
            var so_luong_3 = $('#so_luong_3').val();
            var so_luong_4 = $('#so_luong_4').val();
            var account_name = $('#account_name').val();
            var account_number = $('#account_number').val();
            var datetime = $('#datetime').val();
            var so_luong = parseInt(so_luong_1, 10) + parseInt(so_luong_2, 10) +parseInt(so_luong_4, 10) + parseInt(so_luong_3, 10);
            var tong_thanh_toan= (parseInt(so_luong_1, 10) * account_number) + ((parseInt(so_luong_2, 10) * account_number)*0.5) + ((parseInt(so_luong_3, 10) * account_number)*0.7);

            $('#fullname-val').text(fullname);
            $('#email-val').text(email);
            $('#phone-val').text(phone);
            $('#address-val').text(address);
            $('#name_tour-val').text(name_tour);
            $('#so_luong-val').text(so_luong);
            $('#account-name-val').text(account_name);
            $('#hehe-val').text(datetime);
            $('#account-number-val').text(tong_thanh_toan+ " VND");
            $('#account-number-val-1').text(tong_thanh_toan+ " VND");
            $('#account-number-val-2').text(tong_thanh_toan+ " VND");
            $('#account-number-val-3').text(tong_thanh_toan+ " VND");
            return true;
        }
    });
});

$(document).ready(function() {
    $(".type-payment-2").hide();
    $(".type-payment-3").hide();
});

jQuery(document).ready(function() {
    jQuery('.type-2').click(function(){
         jQuery('.type-2').addClass('selected');
         jQuery('.type-1').removeClass('selected');
         jQuery('.type-3').removeClass('selected');
         $(".type-payment-1").hide();
         $(".type-payment-2").show();
         $(".type-payment-3").hide();
    });
});

jQuery(document).ready(function() {
    jQuery('.type-1').click(function(){
         jQuery('.type-1').addClass('selected');
         jQuery('.type-2').removeClass('selected');
         jQuery('.type-3').removeClass('selected');
         $(".type-payment-1").show();
         $(".type-payment-2").hide();
         $(".type-payment-3").hide();
    });
});

jQuery(document).ready(function() {
    jQuery('.type-3').click(function(){
         jQuery('.type-3').addClass('selected');
         jQuery('.type-1').removeClass('selected');
         jQuery('.type-2').removeClass('selected');
         $(".type-payment-1").hide();
         $(".type-payment-2").hide();
         $(".type-payment-3").show();
    });
});

