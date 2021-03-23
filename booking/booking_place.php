<?php require $_SERVER['DOCUMENT_ROOT'] . '/.header.php'; ?>
<div class="other_page_top_wrapper">
    <div class="other_page_title_wrapper">
        <a href="#" class="back">
            <img src="/img/back.svg" alt="arrow-back">
        </a>
        <div class="title">
            Выбор центра
        </div>
    </div>
</div>
<div class="booking_place_main_content_wrapper">
    <div class="booking_navigation_wrapper">
        <ul class="booking_nav">
            <li class="active">
                <a href="#">
                    Центр
                </a>
            </li>
            <li>
                <a href="#">
                    Дата
                </a>
            </li>
            <li>
                <a href="#">
                    Время
                </a>
            </li>
            <li>
                <a href="#">
                    Место
                </a>
            </li>
            <li>
                <a href="#">
                    Оплата заказа
                </a>
            </li>
        </ul>
    </div>
    <div class="booking_place_form_wrapper">
        <form id="booking_place_form" action="" method="post">
            <div class="forma">
                <div class="checkbox_wrapper">
                    <label>
                        <input type="radio" name="booking_place" value="1" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Сокол</span>
                                <span class="standard">Стандарт</span>
                                <span class="premium">Premium-зона</span>
                                <span class="tv">TV</span>
                            </div>
                            <div class="booking_place_address">
                                м. Сокол, Ленинградский проспект 71кБ
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="booking_place" value="2" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Семеновская</span>
                            </div>
                            <div class="booking_place_address">
                                м. Семеновская, ул. Вельяминовская д. 6
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="booking_place" value="3" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Щелковская</span>
                                <span class="tv">TV</span>
                            </div>
                            <div class="booking_place_address">
                                Щёлковское шоссе, 91А, стр. 1
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="booking_place" value="4" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Выхино</span>
                                <span class="tv">TV</span>
                            </div>
                            <div class="booking_place_address">
                                м. Выхино, ул. Вешняковская, 22А
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="booking_place" value="5" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Люблино</span>
                                <span class="premium">Premium-зона</span>
                                <span class="vip">VIP</span>
                            </div>
                            <div class="booking_place_address">
                                м. Люблино, ул. Новороссийская д.16 к.2
                            </div>
                        </div>
                    </label>
                    <label>
                        <input type="radio" name="booking_place" value="1" required>
                        <div class="booking_place_content">
                            <div class="booking_place_info">
                                <span class="booking_place_name">Южная</span>
                                <span class="economy">Эконом</span>
                                <span class="premium">Premium-зона</span>
                                <span class="vip">VIP</span>
                            </div>
                            <div class="booking_place_address">
                                м. Южная, ул. Кировоградская д. 9 к.1
                            </div>
                        </div>
                    </label>
                </div>
                <button type="submit" class="btn">Далее</button>
            </div>
        </form>
    </div>
    <div class="your_booking_wrapper">
        <div class="your_booking">
            <div class="your_booking_title">
                Ваше бронирование
            </div>
            <div class="your_booking_place_wrapper">
                <div class="booking_place_content">
                    <div class="booking_place_info">
                        <span class="booking_place_name">Сокол</span>
                        <span class="standard">Стандарт</span>
                        <span class="premium">Premium-зона</span>
                        <span class="tv">TV</span>
                    </div>
                    <div class="booking_place_address">
                        м. Сокол, Ленинградский проспект 71кБ
                    </div>
                </div>
            </div>
            <div class="your_booking_date_time_wrapper">
                <div class="your_booking_date"></div>
                <div class="your_booking_time_wrapper"></div>
            </div>
        </div>
    </div>
</div>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/.footer.php'; ?>
