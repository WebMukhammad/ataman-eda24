<? require 'header.php'; ?>

<main class="main search_page">
    <div class="container flex">
        <div class="side_bar">
            <div class="search_left_main fs16">
                <div class="left_main_header fs20">Фильтры
                    <span class="popup_close flex"></span>
                </div>
                <div class="search_filters">
                    <div class="search_filter">
                        <p class="fs18 search_filter_head">Кухни</p>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="first_meal" name="checkbox[]" value="Первые блюда" checked>
                            </div>
                            <label for="first_meal">Первые блюда</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="second_meal" name="checkbox[]" value="Вторые блюда">
                            </div>
                            <label for="second_meal">Вторые блюда</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="breakfast" name="checkbox[]" value="Завтраки">
                            </div>
                            <label for="breakfast">Завтраки</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="pizza" name="checkbox[]" checked value="Пицца">
                            </div>
                            <label for="pizza">Пицца</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="japanese_food" name="checkbox[]" value="Японская кухня">
                            </div>
                            <label for="japanese_food">Японская кухня</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="salads" name="checkbox[]" value="Салаты">
                            </div>
                            <label for="salads">Салаты</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="checkbox">
                                <input type="checkbox" id="drinks" name="checkbox[]" value="Напитки">
                            </div>
                            <label for="drinks">Напитки</label>
                        </div>
                    </div>
                    <div class="search_filter">
                        <p class="fs18 search_filter_head">Бесплатная доставка</p>
                        <div class="check_radio_block flex">
                            <div class="radio">
                                <input name="radio[]" type="radio" value="От 500" id="from500" checked>
                            </div>
                            <label for="from500">От 500 ₽</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="radio">
                                <input name="radio[]" type="radio" value="От 1000" id="from1000">
                            </div>
                            <label for="from1000">От 1 000 ₽</label>
                        </div>
                        <div class="check_radio_block flex">
                            <div class="radio">
                                <input name="radio[]" type="radio" value="От 1500" id="from1500">
                            </div>
                            <label for="from1500">От 1 500 ₽</label>
                        </div>
                    </div>
                </div>
            <button class="mobile_search_btn cart_btn fs14">Применить</button>
            </div>
        </div>
        <div class="search_right_main">
            <h2 class="fs32">Результаты поиска</h2>
            <form action="search.php" class="search flex">
                <div class="input_label">
                    <input class="fs14 input_search_page" type="search" id="page_search" name="q" value="Пицца">
                    <label class="fs14 placeholder" for="page_search">Введите название блюда или заведения</label>
                </div>
                <button class="transparent_btn fs14">Найти</button>
            </form>
            <p class="fs16 search_res_txt">Найдено 3 заведения по «Пицца»</p>
            <div class="mobile_filter_btn transparent_btn fs14">Фильтры</div>
            <div class="el_search_block">
                <div class="search_block_head">
                    <div class="flex info_el_til">
                        <img src="/img/rush_burger.png" alt="" class="shop_logo">
                        <div class="shop_name_block">
                            <a href="/shop.php" class="shop_name fs32">Rush Burger</a>
                        </div>
                        <div class="green_btn fs12">Новинки</div>
                    </div>
                    <div class="flex more_info_search_head">
                        <div class="flex fs16 prices_search_shop">
                            <div>
                                <p>Заказ от</p>
                                <p class="desc">500 ₽</p>
                            </div>
                            <div>
                                <p>Бесплатная доставка от</p>
                                <p class="desc">1 000 ₽</p>
                            </div>
                            <div>
                                <p>Время доставки</p>
                                <p class="desc">40-60 мин.</p>
                            </div>
                        </div>
                        <div class="for_tool_position">
                            <button class="search_shop_btn flex fs14">
                                <img src="/img/svg/icon_info.svg" alt="" class="svg">
                                <span>О заведении</span>
                            </button>
                            <div class="tooltip_about_shop fs12">
                                <h3 class="fs18">Rush Burger</h3>
                                <p class="main_color">бургеры, пицца</p>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Адреса</p>
                                    <p>ул. М.Гаджиева 35</p>
                                    <p>ул. Имама Шамиля 72/1</p>
                                </div>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Часы работы</p>
                                    <p>пн-вс: 10:00–00:00</p>
                                    <p>пт: 10:00–00:00, перерыв: 10:00–13:00</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="flex res_blocks">
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza1.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Примавера</p>
                            <p class="fs12 desc_share">
                                Три вида перцев, помидоры черри, шампиньоны, цуккини и шпинат
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="415">415</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza2.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Пепперони</p>
                            <p class="fs12 desc_share">
                                Томатный соус, моцарелла и пепперони из говядины
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="395">395</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza3.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Маргарита</p>
                            <p class="fs12 desc_share">
                                Томатный соус, моцарелла, томаты и орегано
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="415">415</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="transparent_btn fs14">Перейти в заведение</a>
            </div>
            <div class="el_search_block">
                <div class="search_block_head">
                    <div class="flex info_el_til">
                        <img src="/img/safar.png" alt="" class="shop_logo">
                        <div class="shop_name_block">
                            <a href="/shop.php" class="shop_name fs32">Safar</a>
                        </div>
                        <div class="red_btn fs12">Акции</div>
                    </div>
                    <div class="flex more_info_search_head">
                        <div class="flex fs16 prices_search_shop">
                            <div>
                                <p>Заказ от</p>
                                <p class="desc">600 ₽</p>
                            </div>
                            <div>
                                <p>Бесплатная доставка от</p>
                                <p class="desc">800 ₽</p>
                            </div>
                            <div>
                                <p>Время доставки</p>
                                <p class="desc">40-60 мин.</p>
                            </div>
                        </div>
                        <div class="for_tool_position">
                            <button class="search_shop_btn flex fs14">
                                <img src="/img/svg/icon_info.svg" alt="" class="svg">
                                <span>О заведении</span>
                            </button>
                            <div class="tooltip_about_shop fs12">
                                <h3 class="fs18">Safar</h3>
                                <p class="main_color">бургеры, пицца</p>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Адреса</p>
                                    <p>ул. М.Гаджиева 35</p>
                                    <p>ул. Имама Шамиля 72/1</p>
                                </div>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Часы работы</p>
                                    <p>пн-вс: 10:00–00:00</p>
                                    <p>пт: 10:00–00:00, перерыв: 10:00–13:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex res_blocks">
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza1.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Примавера</p>
                            <p class="fs12 desc_share">
                                Три вида перцев, помидоры черри, шампиньоны, цуккини и шпинат
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="415">415</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza2.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Пепперони</p>
                            <p class="fs12 desc_share">
                                Томатный соус, моцарелла и пепперони из говядины
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="395">395</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza3.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Маргарита</p>
                            <p class="fs12 desc_share">
                                Томатный соус, моцарелла, томаты и орегано
                            </p>
                            <div class="filter_product">
                                <div class="filter_prod_line flex fs12">
                                    <span class="two_in_filter act" data-price="300">Традиционное</span>
                                    <span class="two_in_filter" data-price="400">Тонкое</span>
                                </div>
                                <div class="filter_prod_line flex">
                                    <span class="three_in_filter act" data-price="300">35 см</span>
                                    <span class="three_in_filter" data-price="350">40</span>
                                    <span class="three_in_filter" data-price="450">55</span>
                                </div>
                            </div>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="415">415</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="transparent_btn fs14">Перейти в заведение</a>
            </div>
            <div class="el_search_block">
                <div class="search_block_head">
                    <div class="flex info_el_til">
                        <img src="/img/mangal.png" alt="" class="shop_logo">
                        <div class="shop_name_block">
                            <a href="/shop.php" class="shop_name fs32">Мангал</a>
                        </div>
                    </div>
                    <div class="flex more_info_search_head">
                        <div class="flex fs16 prices_search_shop">
                            <div>
                                <p>Заказ от</p>
                                <p class="desc">300 ₽</p>
                            </div>
                            <div>
                                <p>Бесплатная доставка от</p>
                                <p class="desc">600 ₽</p>
                            </div>
                            <div>
                                <p>Время доставки</p>
                                <p class="desc">40-60 мин.</p>
                            </div>
                        </div>
                        <div class="for_tool_position">
                            <button class="search_shop_btn flex fs14">
                                <img src="/img/svg/icon_info.svg" alt="" class="svg">
                                <span>О заведении</span>
                            </button>
                            <div class="tooltip_about_shop fs12">
                                <h3 class="fs18">Мангал</h3>
                                <p class="main_color">бургеры, пицца</p>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Адреса</p>
                                    <p>ул. М.Гаджиева 35</p>
                                    <p>ул. Имама Шамиля 72/1</p>
                                </div>
                                <div class="tooltip_info_shop">
                                    <p class="tool_gray_h">Часы работы</p>
                                    <p>пн-вс: 10:00–00:00</p>
                                    <p>пт: 10:00–00:00, перерыв: 10:00–13:00</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex res_blocks">
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/burger4.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Блэк чикен биф бургер</p>
                            <p class="fs12 desc_share">
                                Сочная курочка и мраморная говядина под маринованной морковью, сливочно-грибным рагу, кольцами лука, спелым томатом и хрустящими листьями салата айсберг
                            </p>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price"data-price="380">380</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/burger5.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Чизбургер с розовой телятиной</p>
                            <p class="fs12 desc_share">
                                Классический чизбургер с сочной котлетой из розовой телятины на булочке бриошь с сырным соусом, маринованными огурцами и плавленым сыром
                            </p>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="150">150</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/burger6.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Чизбургер Прайм</p>
                            <p class="fs12 desc_share">
                                Идеальный баланс сочной котлеты из мраморной говядины, фирменного соуса и ломтика плавленого сыра
                            </p>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="300">300</span> ₽</span>
                                <button class="cart_btn add_cart">В корзину</button>
                                <div class="flex fs14 cart_count">
                                    <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                                    <span class="btn_count">1</span>
                                    <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="transparent_btn fs14">Перейти в заведение</a>
            </div>
        </div>
    </div>
</main>

<? require 'footer.php'; ?>
