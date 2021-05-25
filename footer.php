    <div class="order_number_all">
        <button class="cart_btn open_basket  fs14">
            <img src="/img/svg/icon_cart.svg" alt="" class="svg white_svg_color">
               <span>Корзина</span>
               <sup>2</sup>
        </button>
        <div class="order_number_blocks">
<!--            <div class="order_number_el shadow_big">-->
<!--                <div class="on_el flex bb">-->
<!--                    <a href="thanks.php" class="number_on_el fs16">-->
<!--                        Заказ №312-->
<!--                    </a>-->
<!--                    <div class="close_on_el fs14">-->
<!--                        <span>Закрыть</span>-->
<!--                        <img src="/img/svg/icon_close.svg" alt="" class="fs8 svg gray_svg_color">-->
<!--                    </div>-->
<!--                </div>-->
<!--                <div class="on_el flex">-->
<!--                    <div class="on_time flex">-->
<!--                        <img src="/img/svg/clock.svg" alt="" class="svg main_svg_color">-->
<!--                        <span class="fs24">42:16</span>-->
<!--                    </div>-->
<!--                    <div class="green_btn fs14">Еда готовится</div>-->
<!--                </div>-->
<!--            </div>-->
            <div class="order_number_el shadow_big">
                <div class="on_el flex bb">
                    <a href="thanks.php" class="number_on_el fs16">
                        Заказ №315
                    </a>
                    <div class="close_on_el fs14">
                        <span>Закрыть</span>
                        <img src="/img/svg/icon_close.svg" alt="" class="fs8 svg gray_svg_color">
                    </div>
                </div>
                <div class="on_el flex">
                    <div class="on_time flex">
                        <img src="/img/svg/clock.svg" alt="" class="svg main_svg_color">
                        <span class="fs24">35:05</span>
                    </div>
                    <div class="green_btn fs14">Еда готовится</div>
                </div>
            </div>
        </div>
    </div>


    <div class="auth_popup popup" style="display:none;">
        <div class="inner_popup">
            <div class="close">
                <img src="/img/svg/icon_close.svg" alt="" class="svg gray_svg_color">
            </div>
            <h3 class="fs24">Вход на сайт</h3>
            <span class="fs14 min_desc">через мобильный телефон</span>
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
        </div>
    </div>

<footer>
    <div class="container flex">
        <div>
            <a href="/" class="site_name fs24">Доставка еды 24</a>
            <div class="fs14 bottom_links">
                <a href="tel:91-92-22"><img src="/img/svg/icon_phone.svg" alt="" class="main_svg_color svg">91-92-22</a>
                <a href="#"><img src="/img/svg/icon_instagram.svg" alt="" class="main_svg_color svg">Наш инстаграм</a>
                <a href="/about.php">О сервисе</a>
                <a href="/bonus.php">Бонусная система</a>
            </div>
        </div>
        <div class="info">
            <p class="fs14">Служба доставки еды – это система заказов еды из кафе и ресторанов. Сервис работает бесплатно и не обязывает проходить регистрацию при заказе.</p>
            <p class="lgray_color fs12">Доставка еды 24 © 2018</p>
        </div>
    </div>
</footer>

<script src="/libs/jquery.malihu.PageScroll2id.min.js"></script>
<script src="/libs/jquery.maskedinput.min.js"></script>
<script src="/libs/jquery_ui/jquery-ui.min.js"></script>
<script src="/js/autocomplete_search.js"></script>
<script src="/js/select.js"></script>
<script src="/js/svg_color.js"></script>
<script src="/js/tooltip.js"></script>
<script src="/libs/flickity/flickity-docs.min.js"></script>
<script src="/libs/flickity/flickity.pkgd.min.js"></script>
<script src="/libs/ion.rangeSlider/ion.rangeSlider.min.js"></script>
<script src="/js/main.js"></script>
<? if($_SERVER['REQUEST_URI'] == "/"):?>
    <script src="/js/index.js"></script>
<?endif;?>
<? if($_SERVER['REQUEST_URI'] == "/shop.php"):?>
    <script src="/js/shop.js"></script>
<?endif;?>
</body>
</html>