<? include 'header.php'; ?>

    <main class="main about_us">
        <div class="container">
            <h2 class="fs48">О нас</h2>
            <p class="about_head fs16">Служба доставки еды – это система заказов еды из кафе и ресторанов. Сервис работает бесплатно и не обязывает проходить регистрацию при заказе.</p>
            <div class="flex">
                <div class="el_about">
                    <p class="fs24 main_color">Бонусная система</p>
                    <p class="fs18">Оплачивайте бонусами до 50%
                        при оформлении заказа</p>
                </div>
                <div class="el_about">
                    <p class="fs24 main_color">Акции с промокодами</p>
                    <p class="fs18">Отслеживайте акции с промокодами
                        чтобы делать выгодные заказы</p>
                </div>
                <div class="el_about">
                    <p class="fs24 main_color">Отслеживание заказов</p>
                    <p class="fs18">Будьте в курсе, на каком этапе
                        сейчас находится ваш заказ</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="container flex">
            <div class="cooperation">
                <h2 class="fs32">Сотрудничество</h2>
                <p class="fs16">Мы автоматизируем процесс оформления заказов в вашем заведении.</p>
                <div class="flex fs16">
                    <div class="el_cooperation">
                        <p class="main_color">Собственная страница с меню и информацией об условиях доставки для
                            клиентов заведения.</p>
                        <p>Все это гибко настраивается при помощи панели управления, доступ к которой получают наши
                            партнеры.</p>
                    </div>
                    <div class="el_cooperation">
                        <p class="main_color">Система учета заказов, которая обновляется в реальном времени.</p>
                        <p>Это позволяет вовремя реагировать на заказы от клиентов. Если менеджера нет на месте во время
                            заказа, он получит уведомление о нем на свое устройство.</p>
                    </div>
                    <div class="el_cooperation">
                        <p class="main_color">Присоединяйтесь к бонусной системе, которая смотивирует клиентов оформлять
                            заказы в вашем заведении.</p>
                        <p>Накопленные бонусы они смогут использовать для скидок при последующих заказах.</p>
                    </div>
                    <div class="el_cooperation">
                        <p class="fs20">Оставляйте заявку и присоединяйтесь к Доставке еды 24.</p>
                        <img src="/img/svg/arrow.svg" alt="" class="svg main_svg_color">
                    </div>
                </div>
            </div>

            <form action="" class="partner_form">
                <h3 class="fs24">Стать партнером</h3>
                <div class="input_label">
                    <input class="fs14" type="text" id="about_name" name="about_name" required>
                    <label class="fs14 placeholder" for="about_name">Имя</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="tel" id="about_phone" name="about_phone" required>
                    <label class="fs14 placeholder" for="about_phone">Номер телефона</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="email" id="about_email" name="about_email" required>
                    <label class="fs14 placeholder" for="about_email">Email</label>
                </div>
                <div class="input_label">
                    <input class="fs14" type="text" id="about_company_name" name="about_company_name" required>
                    <label class="fs14 placeholder" for="about_company_name">Название заведения</label>
                </div>
                <input type="submit" value="Отправить" class="cart_btn fs14">
            </form>
        </div>
    </main>

<? include 'footer.php'; ?>