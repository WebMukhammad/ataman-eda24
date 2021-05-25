<? include 'header.php'; ?>

<main class="main container thanks flex">
    <div class="left_side">
        <img src="/img/thanks.svg" alt="" class="svg">
        <h2 class="fs32">Спасибо за заказ!</h2>
        <p class="fs18">Еда уже готовится и будет доставлена
            в течение 60 минут</p>
        <a href="/" class="transparent_btn fs14">На главную</a>
    </div>
    <div class="right_side">
        <div class="flex about_order">
            <div class="time_block flex">
                <img src="/img/svg/clock.svg" alt="" class="svg big_clock">
                <span class="time_clock fs48">42:16</span>
                <div class="green_btn fs14">Еда готовится</div>
            </div>
            <div class="info">
                <img src="/img/svg/icon_info.svg" alt="" class="svg main_svg_color">
                <p class="fs12">Если курьер не успеет, вы получите дополнительные бонусы от заказа</p>
            </div>
        </div>
        <div class="flex about_status fs16">
            <div class="el_about_status done">
                <img src="/img/svg/icon_ok.svg" alt="" class="svg green_svg_color">
                <span>Заказ принят</span>
                <div class="bb"></div>
            </div>
            <div class="el_about_status done">
                <span>Еда готовится</span>
                <div class="bb"></div>
            </div>
            <div class="el_about_status">
                <span>Курьер в пути</span>
                <div class="bb"></div>
            </div>
        </div>
        <div class="about_order">
            <div class="head_about_order flex">
                <div class="flex fs20">
                    <img src="/img/safar.png" alt="">
                    <span>Safar</span>
                </div>
                <div class="order_number_thanks">
                    <span class="fs16">Заказ</span><span class="fs20">312</span>
                </div>
            </div>
            <div class="table fs16">
                <div class="table_tr flex">
                    <div class="name_td">Чизбургер Прайм</div>
                    <div class="flex">
                        <div class="count_td">x3</div>
                        <div class="price_td">150 ₽</div>
                    </div>
                </div>
                <div class="table_tr flex">
                    <div class="name_td">Блэк чикен биф бургер</div>
                    <div class="flex">
                        <div class="count_td">x3</div>
                        <div class="price_td">150 ₽</div>
                    </div>
                </div>
                <div class="table_tr flex">
                    <div class="name_td">Большой брянский бургер</div>
                    <div class="flex">
                        <div class="count_td">x3</div>
                        <div class="price_td">150 ₽</div>
                    </div>
                </div>
                <div class="hr"></div>
                <div class="table_tr flex result fs18">
                    <div class="name_td">Итого</div>
                    <div class="flex">
                        <div class="count_td">1 270 ₽</div>
                        <div class="price_td fs12">
                            <span class="cart_btn">+ 48 баллов</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<? include 'footer.php'; ?>