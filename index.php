<? include 'header.php'; ?>

    <main>
        <div class="main_banner fs14">
            <div class="slick_el" style="background-image: url(/img/slide.png)">
                <div class="container">
                    <a href="/shop.php" class="banner_btn flex"><img src="/img/rush_burger.png" alt=""><span>Заказать в <span class="main_color">Rush Burger</span></span></a>
                </div>
            </div>
            <div class="slick_el" style="background-image: url(/img/slide.png)">
                <div class="container">
                    <a href="/shop.php" class="banner_btn flex"><img src="/img/rush_burger.png" alt=""><span>Заказать в <span class="main_color">Rush Burger</span></span></a>
                </div>
            </div>
            <div class="slick_el" style="background-image: url(/img/slide.png)">
                <div class="container">
                    <a href="/shop.php" class="banner_btn flex"><img src="/img/rush_burger.png" alt=""><span>Заказать в <span class="main_color">Rush Burger</span></span></a>
                </div>
            </div>
        </div>
        <div class="main_submenu">
            <div class="container flex fs18">
                <ul class="inline_menu">

                    <li class="sub_cat act">Все</li>
                    <li class="sub_cat">Пицца</li>
                    <li class="sub_cat">Японская кухня</li>
                    <li class="sub_cat">Шашлыки</li>
                    <li class="sub_cat">Чуду</li>
                    <li class="sub_cat">Бургеры</li>
                    <li class="sub_cat">Шаурма</li>
                    <li class="sub_cat for_mobile">Грузинская кухня</li>
                    <li class="sub_cat for_mobile">Узбекская кухня</li>
                    <li class="sub_cat for_mobile">Выпечка</li>
                    <li class="sub_cat for_mobile">Стейки</li>

                </ul>
                <select name="submenu" class="submenu_hidden">
                    <option value="more">Ещё</option>
                    <option value="Грузинская кухня">Грузинская кухня</option>
                    <option value="Узбекская кухня">Узбекская кухня</option>
                    <option value="Выпечка">Выпечка</option>
                    <option value="Стейки">Стейки</option>
                </select>
            </div>
        </div>
        <div class="main container">
            <h2 class="fs32">Заведения</h2>
            <div class="flex shop_cards three_in_line">
                <a href="shop.php" class="shadow_small el_til">
                    <img src="/img/shop1.png" alt="">
                    <div class="flex info_el_til fs12">
                        <div class="flex">
                            <img src="/img/rush_burger.png" alt="" class="shop_logo">
                            <div>
                                <p class="shop_name fs18">Rush Burger</p>
                                <p class="order_from">Заказ от 400р.</p>
                                <p class="main_color">бургеры, пицца</p>
                            </div>
                        </div>
                        <div>
                            <div class="green_btn">Новинки</div>
                        </div>
                    </div>
                </a>
                <a href="shop.php" class="shadow_small el_til">
                    <img src="/img/shop2.png" alt="">
                    <div class="flex info_el_til fs12">
                        <div class="flex">
                            <img src="/img/safar.png" alt="" class="shop_logo">
                            <div>
                                <p class="shop_name fs18">Safar</p>
                                <p class="order_from">Заказ от 600р.</p>
                                <p class="main_color">шашлыки, пицца</p>
                            </div>
                        </div>
                        <div>
                            <div class="red_btn">Акции</div>
                        </div>
                    </div>
                </a>
                <a href="shop.php" class="shadow_small el_til">
                    <img src="/img/shop3.png" alt="">
                    <div class="flex info_el_til fs12">
                        <div class="flex">
                            <img src="/img/mangal.png" alt="" class="shop_logo">
                            <div>
                                <p class="shop_name fs18">Мангал</p>
                                <p class="order_from">Заказ от 300р.</p>
                                <p class="main_color">шашлыки, пицца</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="shop.php" class="shadow_small el_til">
                    <img src="/img/shop4.png" alt="">
                    <div class="flex info_el_til fs12">
                        <div class="flex">
                            <img src="/img/iskender.png" alt="" class="shop_logo">
                            <div>
                                <p class="shop_name fs18">Iskender</p>
                                <p class="order_from">Заказ от 300р.</p>
                                <p class="main_color">пицца, шашлыки</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="shop.php" class="shadow_small el_til">
                    <img src="/img/shop5.png" alt="">
                    <div class="flex info_el_til fs12">
                        <div class="flex">
                            <img src="/img/chinar.png" alt="" class="shop_logo">
                            <div>
                                <p class="shop_name fs18">Чинар</p>
                                <p class="order_from">Заказ от 500р.</p>
                                <p class="main_color">шаурма, шашлыки</p>
                            </div>
                        </div>
                        <div>
                            <div class="green_btn">Новинки</div>
                        </div>
                    </div>
                </a>
            </div>
            <button class="transparent_btn fs14">Показать еще заведения</button>
        </div>
    </main>

<? include 'footer.php'; ?>