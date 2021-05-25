$(document).ready(function() {
    $('.main_banner').flickity({
        fade: true, 
        cellAlign: 'left'
    });

    // прикрепление подменю на главной со стилями
    $sub_top = $(".main_submenu").offset().top;
    $header_height = $("header").outerHeight();
    $(".main_submenu").css('top', $header_height + "px");
    $(window).scroll(function () {
        if ($sub_top < $(".main_submenu").position().top) {
            $(".main_submenu").addClass('is_sticky');
            $("header").addClass('shadow_none');
        } else {
            $(".main_submenu").removeClass('is_sticky'); 
            $("header").removeClass('shadow_none');
        }
    });

});

