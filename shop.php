<? require 'header.php'; ?>

<main class="main">
    <div class="shop_banner container">
        <div class="overlay_banner_shop">
            <div class="test" style="background-image: url('/img/shop_banner.png')">
                <div class="overlay_banner_block"></div>
            </div>
        </div>
        <div class="flex">
            <div>
                <div class="flex">
                    <img src="/img/rush_burger.png" alt="" class="shop_logo">
                    <p class="banner_shop_name fs48">Rush Burger</p>
                </div>
                <div class="flex fs16 price_shop_banner">
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
            </div>
            <div class="mobile_show_icon for_tool_position">
                <button class="about_shop_btn fs14 flex">
                <img src="/img/svg/icon_info.svg" alt="" class="white_svg_color svg">
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
    <div class="flex container main_block_shop">
        <div class="inner_shop_cats">
            <h3 class="fs23">Категории</h3>
            <ul class="fs18">
                <li><a href="#share" class="scroll_to sub_cat">Акции</a></li>
                <li><a href="#burgers" class="scroll_to sub_cat">Бургеры</a></li>
                <li><a href="#pizza" class="scroll_to sub_cat">Пицца</a></li>
                <li><a href="#" class="scroll_to sub_cat">Японская кухня</a></li>
                <li><a href="#" class="scroll_to sub_cat">Шашлыки</a></li>
                <li><a href="#" class="scroll_to sub_cat">Чуду</a></li>
                <li><a href="#" class="scroll_to sub_cat">Шаурма</a></li>
            </ul>
        </div>
        <div class="right_block_shop">
            <div class="for_share_list" id="share">
                <h3 class="fs24">Акции</h3>
                <div class="flex for_share_els">
                    <div class="share_list_el">
                        <img src="/img/slide.png" alt="">
                        <a href="#" class="fs18">Бургеры по 150 ₽</a>
                        <p class="fs12 desc_share">
                            С 5 декабря по 5 января все бургеры будут стоить 150 ₽. Для активации используйте промокод
                        </p>
                        <div class="for_tool_position">
                            <span class="fs12">Промокод</span>
                            <span class="fs12 main_color for_code" onclick="copyToClipboard(this)">2019200</span>
                            <div class="tooltip_code">
                                <span class="fs12">Нажмите, чтобы скопировать</span>
                            </div>
                        </div>

                    </div>
                    <div class="share_list_el">
                        <img src="/img/slide.png" alt="">
                        <a href="#" class="fs18">Бургеры по 150 ₽</a>
                        <p class="fs12 desc_share">
                            С 5 декабря по 5 января все бургеры будут стоить 150 ₽
                        </p>
                        <div class="for_tool_position">
                            <span class="fs12">Промокод</span>
                            <span class="fs12 main_color for_code" onclick="copyToClipboard(this)">20192115</span>
                            <div class="tooltip_code">
                                <span class="fs12">Нажмите, чтобы скопировать</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="inner_shop_cat" id="burgers">
                <h3 class="fs24" onclick="copyToClipboard(this)">Бургеры</h3>
                <div class="flex">
                    <div class="shadow_small el_til block_with_bask_btn">
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger1.png" alt="">
                                <p class="fs14">Блэк ангус с сыром чеддер, маринованным огурчиком и спелым томатом на листьях салата айсберг, приправлен фирменным горчичным соусом</p>
                            </div>
                        </div>
                        <img src="/img/burger1.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Родео бургер</p>
                            <p class="fs12 desc_share">
                                Блэк ангус с сыром чеддер, маринованным огурчиком и спелым томатом на листьях салата айсберг, приправлен фирменным горчичным соусом
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
                    <div class="shadow_small el_til block_with_bask_btn">
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger2.png" alt="">
                                <p class="fs14">Бургер с небольшим стейком стриплойн из премиального тонкого края, помидорами, салатом айсберг и кольцами свежего лука. Приправлен фирменным соусом вителло тоннато</p>
                            </div>
                        </div>
                        <img src="/img/burger2.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Стейк бургер</p>
                            <p class="fs12 desc_share">
                                Бургер с небольшим стейком стриплойн из премиального тонкого края, помидорами, салатом айсберг и кольцами свежего лука. Приправлен фирменным соусом вителло тоннато
                            </p>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="380">380</span> ₽</span>
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
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger3.png" alt="">
                                <p class="fs14">Блэк ангус с жареным куриным яйцом, свежим огурцом, подается с золотистым луком фри. Приправлен фирменным розовым соусом от шефа</p>
                            </div>
                        </div>
                        <img src="/img/burger3.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Большой брянский бургер</p>
                            <p class="fs12 desc_share">
                                Блэк ангус с жареным куриным яйцом, свежим огурцом, подается с золотистым луком фри. Приправлен фирменным розовым соусом от шефа
                            </p>
                            <div class="flex price_cart_btn">
                                <span class="fs18"><span class="change_price" data-price="260">260</span> ₽</span>
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
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger4.png" alt="">
                                <p class="fs14">Сочная курочка и мраморная говядина под маринованной морковью, сливочно-грибным рагу, кольцами лука, спелым томатом и хрустящими листьями салата айсберг</p>
                            </div>
                        </div>
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
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger5.png" alt="">
                                <p class="fs14">Классический чизбургер с сочной котлетой из розовой телятины на булочке бриошь с сырным соусом, маринованными огурцами и плавленым сыром</p>
                            </div>
                        </div>
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
                        <div class="tooltip_shop_el">
                            <div class="inner_tooltip_se">
                                <img src="/img/burger6.png" alt="">
                                <p class="fs14">Идеальный баланс сочной котлеты из мраморной говядины, фирменного соуса и ломтика плавленого сыра</p>
                            </div>
                        </div>
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
            </div>
            <div class="inner_shop_cat seconds" id="pizza">
                <h3 class="fs24" onclick="copyToClipboard(this)">Пицца</h3>
                <div class="flex">
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
                    <div class="shadow_small el_til block_with_bask_btn">
                        <img src="/img/pizza4.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Четыре сыра</p>
                            <p class="fs12 desc_share">
                                Сливочный соус, сыр блю чиз, моцарелла и смесь сыров чеддер и пармезан
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
                        <img src="/img/pizza5.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Мексиканская</p>
                            <p class="fs12 desc_share">
                                Цыпленок, томатный соус, сладкий перец, лук красный, моцарелла, острый перец халапеньо, томаты и соус сальса
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
                        <img src="/img/pizza6.png" alt="">
                        <div class="flex info_el_til fs12">
                            <p class="fs18">Маргарита Гурмэ</p>
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
            </div>
        </div>
    </div>
</main>

<? require 'footer.php'; ?>

