<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="x-rim-auto-match" content="none">
    <link rel="stylesheet" href="/libs/jquery_ui/jquery-ui.min.css">
    <link rel="stylesheet" href="/libs/flickity/flickity.min.css">
    <link rel="stylesheet" href="/libs/ion.rangeSlider/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/main.css">
    <title>Еда 24</title>
</head>
<body>

    <script src="/libs/jquery-3.3.1.min.js"></script>

<?

$server = stristr($_SERVER['REQUEST_URI'], '.', true);
switch ($server) {
    case "": ?>
        <link rel="stylesheet" href="/css/index.css">
        <? break;
    case "/shop": ?>
        <link rel="stylesheet" href="/css/shop.css">
        <? break;
    case "/search":?>
        <link rel="stylesheet" href="/css/search.css">
        <? break;
    case "/bonus": ?>
        <link rel="stylesheet" href="/css/bonus.css">
        <? break;
    case "/checkout": ?>
        <link rel="stylesheet" href="/css/checkout.css">
        <? break;
    case "/personal_area": ?>
        <link rel="stylesheet" href="/css/personal_area.css">
        <? break;
    case "/thanks": ?>
        <link rel="stylesheet" href="/css/thanks.css">
        <? break;
    case "/about": ?>
        <link rel="stylesheet" href="/css/about.css">
        <? break;
}
?>

<header class="shadow_small">
    <div class="container flex fs14 ">
        <div class="header_logo flex">
            <div class="logo flex">
                <a href="/">
                    <img src="/img/logo.svg" alt="">
                </a>
                <span class="menu_mobile flex"></span>
                <div class="mobile_nav">
                    <div class="flex authorization_mobile">
                        <button class="head_auth_btn open_auth_popup not_auth fs24"><img src="/img/svg/icon_profile.svg" alt="" class="main_svg_color svg">Войти</button>
                        <div class="is_authorization mobile_is_authorization auth">
                            <a href="personal_area.php" class="fs24"><img src="/img/svg/icon_profile.svg" alt="" class="main_svg_color svg">  Эльдар</a>
                            <p class="fs16 lgray_color head_points">320 баллов</p>
                        </div>
                    </div>
                    <div class="mobile_selected flex">
                        <img src="/img/svg/icon_location.svg" alt="" class="main_svg_color svg">
                        <select name="city" id="">
                            <option value="Махачкала">Махачкала</option>
                            <option value="Дербент">Дербент</option>
                            <option value="Каспийск">Каспийск</option>
                            <option value="Хасавюрт">Хасавюрт</option>
                            <option value="Хасавюрт">Южно-Сухокумск</option>
                        </select>
                    </div>
                    <ul class="mobile_header_links flex fs24">
                        <li><a class="mobile_header_link" href="/about.php">О нас</a></li>
                        <li><a class="mobile_header_link" href="/bonus.php">Бонусная программа</a></li>
                    </ul>
                    <a class="header_call" href="tel:55557777">Позвонить нам</a>
                </div>
            </div>
        </div>
        <form action="search.php" class="search flex">
            <div class="input_label">
                <input class="fs14 input_search_main" type="search" id="head_search" name="q">
                <label class="fs14 placeholder" for="head_search">Введите название блюда или заведения</label>
            </div>
            <button class="transparent_btn fs14">Найти</button>
        </form>
        <div class="authorization flex">
            <button class="fs14 head_auth_btn open_auth_popup not_auth">Войти</button>
            <div class="is_authorization auth">
                <a href="personal_area.php" class="fs14">Эльдар</a>
                <p class="fs12 lgray_color head_points">320 баллов</p>
            </div>
            <button class="cart_btn open_basket fs14">
                <img src="/img/svg/icon_cart.svg" alt="" class="svg white_svg_color">
                <span>Корзина</span>
                <sup>2</sup>
            </button>
        </div>
    </div>
</header>

<div class="tooltip_basket popup">
    <div class="tooltip_basket_wrap">
        <div class="tooltip_basket_header">
            <div class="close_basket">
                <img src="/img/svg/icon_close.svg" alt="" class="svg gray_svg_color">
            </div>
            <div class="name_shop_basket">
                <div class="ma_flex">
                    <p class="fs18">Мой заказ</p>
                    <a href="shop.php" class="fs12 main_color">Rush Burger</a>
                </div>
            </div>
            <div class="all_hr"></div>
            <div class="el_basket fs14">
                <div class="flex">
                    <span class="el_basket_name">Чизбургер с курицей</span>
                    <div class="del_in_basket"><img src="/img/svg/icon_close.svg" alt="" class="del_in_basket svg gray_svg_color"></div>
                </div>
                <div class="flex basket_tr">
                    <div class="basket_count flex">
                        <div class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></div>
                        <input class="btn_count_basket fs14 " type="text" value="2" disabled>
                        <div class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></div>
                    </div>
                    <p><span class="change_price" data-price="95">190</span> ₽</p>
                </div>
            </div>
            <div class="el_basket fs14">
                <div class="flex">
                    <span class="el_basket_name">Картофель по-деревенски с горячим сыром</span>
                    <div class="del_in_basket"><img src="/img/svg/icon_close.svg" alt="" class="del_in_basket svg gray_svg_color"></div>
                </div>
                <div class="flex basket_tr">
                    <div class="basket_count flex">
                        <div class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></div>
                        <input class="btn_count_basket fs14 " type="text" value="2" disabled>
                        <div class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></div>
                    </div>
                    <p><span class="change_price" data-price="50">100</span> ₽</p>
                </div>
            </div>
            <div class="el_basket fs14">
                <div class="flex">
                    <span class="el_basket_name">Биг Босс</span>
                    <div class="del_in_basket"><img src="/img/svg/icon_close.svg" alt="" class="del_in_basket svg gray_svg_color"></div>
                </div>
                <div class="flex basket_tr">
                    <div class="basket_count flex">
                        <div class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></div>
                        <input class="btn_count_basket fs14 " type="text" value="2" disabled>
                        <div class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></div>
                    </div>
                    <p><span class="change_price" data-price="218">436</span> ₽</p>
                </div>
            </div>
            <div class="el_basket el_delivery fs14">
                <div class="flex">
                    <span>Доставка</span>
                    <span>100 ₽</span>
                </div>
            </div>
        </div>
        <div class="tooltip_basket_footer fs14">
            <div class="all_hr"></div>
            <div class="tooltip_order_info">
                <div class="flex">
                    <span>Время доставки</span>
                    <span>40 – 60 мин.</span>
                </div>
                <div class="flex">
                    <span>Сумма заказа</span>
                    <span>1 600 ₽</span>
                </div>
                <a href="checkout.php" class="cart_btn">Оформить заказ</a>
            </div>
        </div>
    </div>
</div>