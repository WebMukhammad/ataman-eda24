$(document).ready(function () {
    if ($(window).width() <= 992) {
        $('.for_share_els').flickity({
            pageDots: false,
            prevNextButtons: false,
            cellAlign: 'left'
        });
    }


    // прикрепление подменю на главной со стилями
    var fixed_menu = $('.inner_shop_cats');
    $sub_top = fixed_menu.offset().top; // оступ фикс. меню
    $header_height = $("header").outerHeight();
    $header_adaptive = $header_height + 0;
    $sas =  0;

    if ($(window).width() <= 480) {
        $header_adaptive = 0;
        $sas =  $("header").outerHeight() - 1;
    }

    if ($(window).width() <= 992) {
        fixed_func(fixed_menu);

        fixed_menu.css('top', $header_adaptive + "px");

        $(window).scroll(function () {
            fixed_func(fixed_menu);
        });
    }
    else {
        $header_height += 54;
        fixed_menu.css('top', $header_height + "px");
        $(window).scroll(function () {
            if ($sub_top < fixed_menu.position().top) {
                fixed_menu.addClass('is_sticky');
                $("header").addClass('shadow_none');
            } else {
                fixed_menu.removeClass('is_sticky');
                $("header").removeClass('shadow_none');
            }
        });
    }
});

function fixed_func(fixed_menu) {
    var shop_height = $sas + $(".shop_banner").outerHeight(true); // высота шапки
    if ($(window).scrollTop() > shop_height) {
        fixed_menu.css('position', 'fixed').addClass('is_sticky');
        $(".right_block_shop ").css("padding-top", fixed_menu.outerHeight() + "px");
        $('header').addClass('shadow_none');
    }
    else {
        $('header').removeClass('shadow_none');
        fixed_menu.css('position', 'static').removeClass('is_sticky');
        $(".right_block_shop ").css("padding-top", "0");
    }
}



//     // прикрепление подменю на главной со стилями
//     $sub_top = $(".inner_shop_cats").offset().top;
//     $header_height = $("header").outerHeight();

//     if ($(window).width() <= 480)
//         $header_height = 0;


//     if ($(window).width() > 992)
//         $header_height = $("header").outerHeight()+54;

//     $(".inner_shop_cats").css('top', $header_height + "px");
//     $(window).scroll(function () {
//         if ($sub_top < $(".inner_shop_cats").position().top) {
//             $(".inner_shop_cats").addClass('is_sticky');
//             $("header").addClass('shadow_none');
//         } else {
//             $(".inner_shop_cats").removeClass('is_sticky');
//             $("header").removeClass('shadow_none');
//         }
//     });
// });