$(document).ready(function() {


    // start position top for blocks when running PageScroll2id
    var height2scroll;
    if ($(window).width() <= 480) {
        height2scroll = 50;
    } 
    else if ($(window).width() <= 992) {
        height2scroll = 70;
    }
    else {
        height2scroll = $("header").outerHeight();
    }

    $(".scroll_to").mPageScroll2id({
        offset: height2scroll + 20
    });

    // маска на все поля ввода номера телефона
    $("input[type=tel]").mask("+7 (999) 999-99-99");

    // вызов библиотеки на input с ползунком
    $(".range").ionRangeSlider();


    // начало скриптов для адаптива
    if ($(window).width() <= 992) {

        // все flickity кроме Номера заказа
        $('.res_blocks, .order_number_blocks, .recommendation > .flex').flickity({
            fade: true,
            pageDots: false,
            prevNextButtons: false,
            cellAlign: 'left',
        });

        // flickity Номера заказа с возможностью удаления
        var $carousel = $('.order_number_blocks').flickity({});
        $carousel.on('staticClick.flickity', function (event, pointer, cellElement, cellIndex) {
            if (cellElement  && ($(event.target).hasClass('close_on_el') || $(event.target).parents('.close_on_el').length)) {
                setTimeout( function() {
                    $carousel.flickity('remove', cellElement)
                }, 100);
            }
        });

        // Изменяем текст в поиске
        $('header .search .placeholder').text('Название блюда или заведения');

        // открытие фильтра на странице Результаты поиска
        $(".mobile_filter_btn").click(function () {
            $(".side_bar").fadeIn();
            overflow_open();
        });

        // открытие popup оформления заказа с раскрытием карточек номеров заказов
        $(".mobile_fixed_btn .cart_btn").click(function () {
            $('.checkout_side').fadeIn();
            $('.order_number_all').hide();
            overflow_open();
        });
        // закрытие popup оформления заказа и фильтров с раскрытием карточек номеров заказов
        $(".popup_close").click(function () {
            $('.side_bar, .checkout_side').fadeOut();
            $('.order_number_all').show();
            overflow_close();
        });

    } else {

        // закрытие номера заказа
        $(".close_on_el").click(function () {
            $(this).parents(".order_number_el").fadeOut();
        });

        // высота шапки в popup корзины
        $(".name_shop_basket").css("height", $("header").outerHeight()-1);

    };

    // стили для input и textarea со сдвигом вверх при фокусе и ошибкой при вводе неправильных данных
    $('input, textarea').each(function(){
        if($(this).val()) {
            $(this).parent(".input_label").addClass("done");
        };
    });
    var pattern = new RegExp(/^[+a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i);
    $('input, textarea').focus(function(){
        $(this).parent(".input_label").addClass("done");
    }).blur(function(){
        if ($(this).val() == '' && $(this).prop('required') || $(this).val() == '+7 (___) ___-__-__' || (!pattern.test($(this).val()) && $(this).attr("type") == "email")) {
            $(this).parent(".input_label").addClass("error");
        } else {
            $(this).parent(".input_label").removeClass("error");
            $(this).parent(".input_label").addClass("done");
        };
        if($(this).val() == ''){
            $(this).parent(".input_label").removeClass("done");
        };
    });


    // переключение по выбору свойств товара
    $(".two_in_filter, .three_in_filter").click( function () {
        $(this).siblings().removeClass("act");
        $(this).addClass("act");
        $(this).parents(".info_el_til").find(".change_price").text($(this).data("price"));
    });

    // замена кнопки добавления в корзину на кнопки с + / - с соответствующими размерами
    $(".add_cart").click( function () {
        var cart_w = $(this).outerWidth();
        var cart_h = $(this).outerHeight();
        $(this).css("display", "none");
        $(this).next(".cart_count").css({
            display: "flex",
            width: cart_w,
            height: cart_h
        });
    });

    // плюс минус на страницах shop, search, checkout (recommendation)
    $(".btn_del").click( function () {
        add_del_btns($(this), "-");
    });
    $(".btn_add").click( function () {
        add_del_btns($(this), "+");
    });

    // плюс минус в форме оформления заказа
    $(".btn_del_form").click(function () {
        var my_count = $(this).parents(".cart_count").find(".count_form");
        if (my_count.val() > 1)
            my_count.val(+my_count.val()-1);
    });
    $(".btn_add_form").click(function () {
        var my_count = $(this).parents(".cart_count").find(".count_form");
        my_count.val(+my_count.val()+1);
    });

    sum_basket();

    // плюс минус на элементах checkout (basket), popup basket
    $(".btn_del_basket").click( function () {
        add_del_basket($(this), "-");
        sum_basket();
    });
    $(".btn_add_basket").click( function () {
        add_del_basket($(this), "+");
        sum_basket();
    });

    // удаление товара в корзине страницы оформления заказа
    $(".del").click( function () {
        $(this).parents(".basket_tr").detach();
        sum_basket();
    });

    // активация кнопки, если введен промокод
    $('.promo_code').keyup(function() {
        if($(this).val() != '') {
            $(this).parent('.input_label').next("button").prop('disabled', false).css("zIndex", "1");
        } else {
            $(this).parent('.input_label').next("button").prop('disabled', true).removeAttr("style");
        }
    });

    // появление карточек с номерами заказов
    $(".order_number_el").each(function () {
        $(this).fadeIn();
    });

    // при клике на моб. меню
    $('.menu_mobile').click(function (e) {
        if ($(this).hasClass('menu_mobile_active')) {
            overflow_close();
        }
        else {
            overflow_open();
        }
        $(this).toggleClass('menu_mobile_active');
        $('.mobile_nav').toggleClass('mobile_active_nav');
        $('.order_number_all').toggle();
    });

    // сохранение, изменение и отмена данных в личном кабинете
    $(".change_btn").click(function () {
        var parent = $(this).parents(".personal_tr");
        parent.find(".change_input").append("<input type='text' value='"+parent.find('.change_input span').text()+"'>");
        parent.find(".save_btn, .cancel_btn").css("display", "block");
        $(this).css("display", "none");
        parent.find('.change_input span').css("display", "none");
    });
    $(".cancel_btn").click(function () {
        var parent = $(this).parents(".personal_tr");
        parent.find(".change_input input").detach();
        parent.find(".change_input span").removeAttr("style");
        parent.find(".save_btn, .cancel_btn").removeAttr("style");
        parent.find(".change_btn").removeAttr("style");
    });
    $(".save_btn").click(function () {
        var parent = $(this).parents(".personal_tr"),
            new_val = parent.find(".change_input input").val();
        parent.find(".change_input input").detach();
        parent.find(".change_input span").removeAttr("style").text(new_val);
        parent.find(".save_btn, .cancel_btn").removeAttr("style");
        parent.find(".change_btn").removeAttr("style");
    });

    // открытие и закрытие попап корзины с выездом справа и отключением скролла на мобилке
    $(".open_basket").click(function () {
        if ($(window).width() <= 480)  {
            $(".tooltip_basket").fadeIn();
            overflow_open();
            $('.order_number_all').hide();
        }
        else if ($(window).width() > 480) {
            $(".tooltip_basket").animate({right: "0"});
        }
    });
    $(".close_basket").click(function () {
        if ($(window).width() <= 480)  {
            $(".tooltip_basket").fadeOut();
            overflow_open();
            $('.order_number_all').show();
            overflow_close();
        }
        else if ($(window).width() > 480) {
            $(".tooltip_basket").animate({right: "-280px"});
            overflow_close();
        }
    });

    // удаление элемента из popup корзины
    $(".del_in_basket").click(function () {
        $(this).parents(".el_basket").detach();
    });

    // закрытие или пропуск popup
    $(".close, .skip").click(function () {
        $(this).parents(".popup").fadeOut();
        overflow_close();
    });

    // открытие popup для авторизации с временной заменой блока авторизованного / не авторизованного пользователя
    $(".open_auth_popup").click( function () {
        $(".not_auth").css("display", "none");
        $(".auth").css("display", "block");
        $(".auth_popup").fadeIn();
        overflow_open();
    });

});

function add_del_btns(my_this, symbol) {
    var new_count;
    var parent = my_this.parents(".block_with_bask_btn");
    var price = parent.find(".change_price");
    var count = parent.find(".btn_count");
    if(symbol == "+")
        new_count = +count.text()+1;
    if(symbol == "-")
        new_count = +count.text()-1;
    if(new_count>0){
        price.text(price.data("price") * new_count);
        count.text(new_count);
    } else if (new_count==0) {
        parent.find(".add_cart, .cart_count").removeAttr("style");
    }
};

function add_del_basket(my_this, symbol) {
    var new_count;
    var parent = my_this.parents(".basket_tr");
    var price = parent.find(".change_price");
    var count = parent.find(".btn_count_basket");
    if(symbol == "+")
        new_count = +count.val()+1;
    if(symbol == "-")
        new_count = +count.val()-1;
    if(new_count>0){
        price.text(price.data("price") * new_count);
        count.val(new_count);
    }
};

function sum_basket () {
    var new_bprice = 0,
        each_price;
    $(".basket_price .change_price").each(function () {
        each_price = $(this).text();
        new_bprice += +each_price;
    });
    $(".all_price").text(new_bprice);
};

function copyToClipboard(element) {
    var $temp = $("<input>");
    $("body").append($temp);
    $temp.val($(element).text()).select();
    document.execCommand("copy");
    $temp.remove();
    $(element).next().find("span").text("Текст скопирован в буфер обмена").fadeIn("fast");
};

function overflow_open () {
    $("body").css("overflow", "hidden");
    var scrollX = window.scrollX;
    var scrollY = window.scrollY;
    window.onscroll = function () {
        window.scrollTo(scrollX, scrollY)
    };
};
function overflow_close () {
    $("body").removeAttr("style");
    window.onscroll = function () { return; };
};
