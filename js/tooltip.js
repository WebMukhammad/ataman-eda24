$(document).ready(function () {


    var parent,
        winWidth,
        winHeight;


    function winSize() {
        winWidth = $(window).width();
        winHeight = $(window).height();
    };
    winSize();
    $(window).resize(winSize());

    if (winWidth > 992) {
        // hover
        $(".tooltip_shop_el").each(function () {
            parent = $(this).parent();
            $(this).parent().hover(function () {
                var tool = $(this).find(".tooltip_shop_el");
                tool.fadeIn("fast").css({
                    "left": parent.outerWidth()+8,
                    "right": "auto"
                });
                if ($(window).width() - tool.offset().left - tool.outerWidth() < 0) {
                    tool.css({
                        "right": parent.outerWidth()+8,
                        "left": "auto"
                    });
                }
            }, function () {
                $(this).find(".tooltip_shop_el").fadeOut("fast");
            });
        });

        $(".about_shop_btn, .search_shop_btn").hover(function () {
            $(this).next().fadeIn("fast");
        }, function () {
            $(this).next().fadeOut("fast");
        });

    } else {
        $(".about_shop_btn, .search_shop_btn").click(function () {
            $(this).next().fadeToggle("fast");
        });

        $(".about_shop_btn, .search_shop_btn").hover(function () {
            $(this).next().fadeOut("fast");
        });
    }
    $(".tooltip_code").each(function () {
        var my_this = $(this);
        $(this).prev().hover(function () {
            my_this.fadeIn("fast");
        }, function () {
            my_this.fadeOut("fast");
            setTimeout(function () {
                my_this.find("span").text("Нажмите, чтобы скопировать");
            }, 500);
        });
    });



});