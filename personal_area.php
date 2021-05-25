<? include 'header.php'; ?>

    <main class="main container personal">
        <div class="flex title_block">
            <h2 class="fs32">Личный кабинет</h2>
            <div class="exit_btn flex">
                <img src="/img/svg/icon_exit.svg" alt="" class="svg red_svg_color">
                <span>Выйти</span>
            </div>
        </div>
        <div class="flex">
            <div class="left_side fs16">
                <h3 class="fs24">Ваши данные</h3>
                <div class="flex personal_tr">
                    <div class="name">
                        <span>Имя</span>
                    </div>
                    <div class="desc flex">
                        <div class="change_input">
                            <span>Буттаев Эльдар</span>
                        </div>
                        <div class="fs14 change_btn">
                            <span>Изменить</span>
                            <img src="img/svg/icon_edit.svg" class="main_svg_color  svg" alt=""></div>
                        <span class="fs14 save_btn transparent_btn">Сохранить</span>
                        <span class="fs14 cancel_btn">Отменить</span>
                    </div>
                </div>
                <div class="flex personal_tr">
                    <div class="name">
                        <span>Номер телефона</span>
                    </div>
                    <div class="desc">
                        <span>+7 900 000-00-00</span>
                    </div>
                </div>
                <div class="flex personal_tr">
                    <div class="name">
                        <span>Дата рождения</span>
                    </div>
                    <div class="desc">
                        <span>1 декабря</span>
                    </div>
                </div>
                <div class="flex personal_tr">
                    <div class="name">
                        <span>Email</span>
                    </div>
                    <div class="desc flex">
                        <div class="change_input">
                            <span>user@mail.ru</span>
                        </div>
                        <div class="fs14 change_btn">
                            <span>Изменить</span>
                            <img src="img/svg/icon_edit.svg" class="main_svg_color  svg" alt=""></div>
                        <span class="fs14 save_btn transparent_btn">Сохранить</span>
                        <span class="fs14 cancel_btn">Отменить</span>
                    </div>
                </div>
            </div>
            <div class="right_side">
                <div class="ride_side_row">
                    <h3 class="fs24">Текущий заказ</h3>
                    <div class="flex fs20 order_bonus_block">
                        <div class="order_bonus_name flex">
                            <img src="/img/safar.png" alt="">
                            <span>Safar</span>
                        </div>
                        <div class="flex">
                            <div class="order_number">
                                <span class="fs16">Заказ</span><span>312</span>
                            </div>
                            <div class="flex order_res_personal">
                                <span class="fs16">Итого</span><span>1 270 ₽</span>
                            </div>
                            <div class="cart_btn fs12">+ 48 баллов</div>
                        </div>
                    </div>
                </div>
                <div class="order_number_personal flex">
                    <div class="flex">
                        <div class="on_time flex">
                            <img src="/img/svg/clock.svg" alt="" class="svg main_svg_color">
                            <span class="fs24">42:16</span>
                        </div>
                        <div class="desc_order fs12">Если курьер не успеет, вы получите дополнительные бонусы от
                            заказа
                        </div>
                    </div>
                    <div class="green_btn fs14">Еда готовится</div>
                </div>
                <div class="ride_side_row">
                    <h3 class="fs24">История заказов</h3>
                    <div class="flex fs20 order_bonus_block">
                        <div class="order_bonus_name flex">
                            <img src="/img/rush_burger.png" alt="">
                            <span>Rush Burger</span>
                        </div>
                        <div class="flex">
                            <div class="order_number">
                                <span class="fs16">Заказ</span><span>300</span>
                            </div>
                            <div class="flex order_res_personal">
                                <span class="fs16">Итого</span><span>1 120 ₽</span>
                            </div>
                            <div class="cart_btn fs12">+ 48 баллов</div>
                        </div>
                    </div>
                    <div class="flex fs20 order_bonus_block">
                        <div class="order_bonus_name flex">
                            <img src="/img/mangal.png" alt="">
                            <span>Мангал</span>
                        </div>
                        <div class="flex">
                            <div class="order_number">
                                <span class="fs16">Заказ</span><span>152</span>
                            </div>
                            <div class="flex order_res_personal">
                                <span class="fs16">Итого</span><span>860 ₽</span>
                            </div>
                            <div class="cart_btn fs12">+ 48 баллов</div>
                        </div>
                    </div>
                    <div class="flex fs20 order_bonus_block">
                        <div class="order_bonus_name flex">
                            <img src="/img/mangal.png" alt="">
                            <span>Мангал</span>
                        </div>
                        <div class="flex">
                            <div class="order_number">
                                <span class="fs16">Заказ</span><span>110</span>
                            </div>
                            <div class="flex order_res_personal">
                                <span class="fs16">Итого</span><span>1450 ₽</span>
                            </div>
                            <div class="cart_btn fs12">+ 48 баллов</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

<? include 'footer.php'; ?>