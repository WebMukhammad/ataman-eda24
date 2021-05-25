<? include 'header.php'; ?>

<main class="main container flex checkout_page">
    <div class="mobile_fixed_btn">
        <button class="cart_btn">Оформить заказ</button>
    </div>
    <div class="basket_side">
        <h2 class="fs32">Корзина</h2>
        <div class="basket_table">
            <div class="flex basket_tr">
                <div class="basket_name">
                    <span class="fs20">Чизбургер Прайм</span>
                </div>
                <div class="basket_count flex">
                    <button class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                    <input class="btn_count_basket fs20" type="text" value="2" disabled>
                    <button class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                </div>
                <div class="basket_price fs20">
                    <span class="change_price" data-price="150">300</span> ₽
                </div>
                <div class="basket_del">
                    <button class="del fs12"><img src="/img/svg/icon_close_gray.svg" alt="" class="svg dark_gray_svg_color"></button>
                </div>
            </div>
            <div class="flex basket_tr">
                <div class="basket_name">
                    <span class="fs20">Блэк чикен биф бургер</span>
                </div>
                <div class="basket_count flex">
                    <button class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                    <input class="btn_count_basket fs20" type="text" value="1" disabled>
                    <button class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                </div>
                <div class="basket_price fs20">
                    <span class="change_price" data-price="150">150</span> ₽
                </div>
                <div class="basket_del">
                    <button class="del fs12"><img src="/img/svg/icon_close_gray.svg" alt="" class="svg dark_gray_svg_color"></button>
                </div>
            </div>
            <div class="flex basket_tr">
                <div class="basket_name">
                    <span class="fs20">Большой брянский бургер</span>
                </div>
                <div class="basket_count flex">
                    <button class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                    <input class="btn_count_basket fs20" type="text" value="1" disabled>
                    <button class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                </div>
                <div class="basket_price fs20">
                    <span class="change_price" data-price="150">150</span> ₽
                </div>
                <div class="basket_del">
                    <button class="del fs12"><img src="/img/svg/icon_close_gray.svg" alt="" class="svg dark_gray_svg_color"></button>
                </div>
            </div>
            <div class="flex basket_tr">
                <div class="basket_name">
                    <span class="fs20">Примавера</span><span class="fs12 main_color">35 см, тонкое</span>
                </div>
                <div class="basket_count flex">
                    <button class="btn_del_basket"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                    <input class="btn_count_basket fs20" type="text" value="3" disabled>
                    <button class="btn_add_basket"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                </div>
                <div class="basket_price fs20">
                    <span class="change_price" data-price="415">1245</span> ₽
                </div>
                <div class="basket_del">
                    <button class="del fs12"><img src="/img/svg/icon_close_gray.svg" alt="" class="svg dark_gray_svg_color"></button>
                </div>
            </div>
        </div>
        <div class="basket_total flex">
            <form class="promo_code flex">
                <div class="input_label">
                    <input class="fs14 promo_code" type="text" id="promo_code" name="promo_code">
                    <label class="fs14 placeholder" for="promo_code">Ваш промокод</label>
                </div>
                <button class="transparent_btn fs14" disabled>Применить</button>
            </form>
            <div class="flex all_sum">
                <span class="fs20">Сумма</span>
                <span class="fs28"><span class="all_price">1845</span>₽</span>
            </div>
        </div>
        <div class="basket_bonus flex">
            <div class="bonus_count">
                <span class="fs24">У вас <span class="main_color">360</span> баллов</span>
                <span class="fs16 desc">Ими можно оплатить до 50% от суммы заказа</span>
            </div>
            <div class="slider_bonus">
                <input class="range" name="range" type="text" data-min="0" data-max="320" data-from="170">
            </div>
        </div>
        <div class="recommendation">
            <h2 class="fs24">Рекомендации</h2>
            <div class="flex">
                <div class="block_with_bask_btn el_recommend">
                    <img src="/img/heinz.png" alt="">
                    <div class="flex">
                        <span class="fs18">Сырный соус</span>
                        <span class="fs14">25 мл</span>
                    </div>
                    <div>
                        <span class="fs18"><span class="change_price" data-price="25">25</span> ₽</span>
                    </div>
                    <div class="for_btn">
                        <button class="cart_btn add_cart">В корзину</button>
                        <div class="flex fs14 cart_count">
                            <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                            <span class="btn_count">1</span>
                            <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                        </div>
                    </div>
                </div>
                <div class="block_with_bask_btn el_recommend">
                    <img src="/img/cola.png" alt="">
                    <div class="flex">
                        <span class="fs18">Coca Cola</span>
                        <span class="fs14">0,5 л</span>
                    </div>
                    <div>
                        <span class="fs18"><span class="change_price" data-price="50">50</span> ₽</span>
                    </div>
                    <div class="for_btn">
                        <button class="cart_btn add_cart">В корзину</button>
                        <div class="flex fs14 cart_count">
                            <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                            <span class="btn_count">1</span>
                            <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                        </div>
                    </div>
                </div>
                <div class="block_with_bask_btn el_recommend">
                    <img src="/img/fanta.png" alt="">
                    <div class="flex">
                        <span class="fs18">Fanta</span>
                        <span class="fs14">0,5 л</span>
                    </div>
                    <div>
                        <span class="fs18"><span class="change_price" data-price="50">50</span> ₽</span>
                    </div>
                    <div class="for_btn">
                        <button class="cart_btn add_cart">В корзину</button>
                        <div class="flex fs14 cart_count">
                            <button class="btn_del"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></button>
                            <span class="btn_count">1</span>
                            <button class="btn_add"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></button>
                        </div>
                    </div>
                </div>
                <div class="block_with_bask_btn el_recommend">
                    <img src="/img/sprite.png" alt="">
                    <div class="flex">
                        <span class="fs18">Sprite</span>
                        <span class="fs14">0,5 л</span>
                    </div>
                    <div>
                        <span class="fs18"><span class="change_price" data-price="50">50</span> ₽</span>
                    </div>
                    <div class="for_btn">
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
    <div class="checkout_side fs14">
        <div class="flex checkout_header_popup">
            <h2 class="fs24">Оформление заказа</h2>
            <span class="popup_close flex"></span>
        </div>
        <form action="">
            <div class="one_el_input">
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_name" name="checkout_name" required>
                    <label class="fs14 placeholder" for="checkout_name">Имя (обязательно)</label>
                </div>
            </div>
            <div class="one_el_input">
                <div class="input_label">
                    <input class="fs14" type="tel" id="checkout_phone" name="checkout_phone" required>
                    <label class="fs14 placeholder" for="checkout_phone">Номер телефона (обязательно)</label>
                </div>
            </div>
            <div class="flex two_el_input">
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_street" name="checkout_street" required>
                    <label class="fs14 placeholder" for="checkout_street">Улица (обязательно)</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_home" name="checkout_home">
                    <label class="fs14 placeholder" for="checkout_home">Дом</label>
                </div>
            </div>
            <div class="flex three_el_input">
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_entrance" name="checkout_entrance">
                    <label class="fs14 placeholder" for="checkout_entrance">Подъезд</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_floor" name="checkout_floor">
                    <label class="fs14 placeholder" for="checkout_floor">Этаж</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_apartment" name="checkout_apartment">
                    <label class="fs14 placeholder" for="checkout_apartment">Квартира</label>
                </div>
            </div>
            <div class="one_el_input">
                <div class="input_label">
                    <textarea class="fs14" name="checkout_comment" id="checkout_comment"></textarea>
                    <label class="fs14 placeholder" for="checkout_comment">Комментарий к заказу</label>
                </div>
            </div>
            <div class="one_el_input">
                <div class="input_label">
                    <input class="fs14" type="text" id="checkout_change" name="checkout_change">
                    <label class="fs14 placeholder" for="checkout_change">С какой суммы подготовить сдачу</label>
                </div>
            </div>
            <div class="count_text flex">
                <span>Количество приборов</span>
                <div class="cart_count">
                    <div class="btn_del_form"><img src="/img/svg/icon_minus.svg" alt="" class="svg main_svg_color"></div>
                    <input class="btn_count_basket fs14 count_form" type="text" value="2" disabled>
                    <div class="btn_add_form"><img src="/img/svg/icon_plus.svg" alt="" class="svg main_svg_color"></div>
                </div>
            </div>
            <div class="hr"></div>
            <div class="flex fs16 list_with_dots">
                <span class="list_prop">Сумма заказа</span>
                <span class="list_val">930 ₽</span>
            </div>
            <div class="flex fs16 list_with_dots">
                <span class="list_prop">Доставка</span>
                <span class="list_val">Бесплатно</span>
            </div>
            <div class="flex fs16 list_with_dots">
                <span class="list_prop">Скидка по промокоду</span>
                <span class="list_val">- 100 ₽</span>
            </div>
            <div class="flex fs16 list_with_dots">
                <span class="list_prop">Оплата бонусами</span>
                <span class="list_val">- 294 ₽</span>
            </div>
            <div class="checkout_footer_popup">
                <div class="flex fs20 res_sum">
                    <span>Итого</span>
                    <span>1245 ₽</span>
                </div>
                <input type="submit" class="cart_btn fs14 order_btn" value="Заказать">
            </div>
        </form>
    </div>
</main>

    <div class="cart_auth_popup popup">
        <div class="inner_popup">
            <div class="close">
                <img src="/img/svg/icon_close.svg" alt="" class="svg gray_svg_color">
            </div>
            <h3 class="fs18">Войдите или зарегистрируйтесь</h3>
            <span class="fs14 min_desc">чтобы получать баллы от заказов</span>
            <form action="">
                <div class="flex for_code_number">
                    <div class="input_label">
                        <input class="fs14" type="tel" id="head_auth_phone" name="head_auth_phone" required>
                        <label class="fs14 placeholder" for="head_auth_phone">Номер телефона</label>
                    </div>
                    <button class="transparent_btn fs14">Выслать код</button>
                </div>
                <div class="input_label">
                    <input class="fs14" type="text" id="head_auth_code" name="head_auth_code">
                    <label class="fs14 placeholder" for="head_auth_code">Код из СМС</label>
                </div>
                <input type="submit" class="cart_btn fs14" value="Войти на сайт">
            </form>
            <p class="fs12 user_agreement">Нажимая на кнопку «Войти», вы принимаете условия <a href="#" class="main_color">пользовательского соглашения</a></p>
            <button class="skip fs14">Пропустить</button>
        </div>
    </div>

    <script>
        $(function () {
            $("body").css("overflow", "hidden");
            var scrollX = window.scrollX;
            var scrollY = window.scrollY;
            window.onscroll = function () { window.scrollTo(scrollX, scrollY)};
        });
    </script>

<? include 'footer.php'; ?>