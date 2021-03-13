<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && \mb_strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return;
} ?>
</section>
</section>

<div class="remodal main_problem_report_modal" data-remodal-id="problem_report_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Сообщить о проблеме</p>
        <div class="problem_report_form">
            <form id="modal-problem_report" action="" method="post">
                <div class="forma">
                    <textarea id="problem_report-text" name="user_problem" type="text" placeholder="" required></textarea>
                    <div class="symbol_counter_wrapper">
                        <span class="symbol_counter">0</span>
                        <span>/1000</span>
                    </div>
                    <button type="submit" class="btn disabled">Отправить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal main_waiting_modal" data-remodal-id="waiting_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <img src="/img/Solid.svg" alt="waiting">
        <p class="title">
            Пожалуйста ожидайте, <br>
            время начисляется!
        </p>
    </div>
</div>

<div class="remodal main_finish_session_modal" data-remodal-id="finish_session_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Вы хотите завершить сессию?
        </p>
        <p class="instruction">
            После завершения сессии компьютер перезагрузится,
            все пользовательские данные будут стёрты
        </p>
        <div class="action_wrapper">
            <a href="#" class="confirm">Да, завершить</a>
            <a href="#" class="reject">Нет, ошибся</a>
        </div>
    </div>
</div>

<div class="remodal main_begin_session_modal" data-remodal-id="begin_session_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Начало сесии
        </p>
        <p class="service_package">
            Пакет на <span><b>3 часа</b></span> стоимостью <span><b>15 руб.</b></span>
        </p>
        <div class="begin_session_form">
            <form id="modal-begin_session" action="" method="post">
                <div class="forma">
                    <div class="checkbox_wrapper">
                        <input type="checkbox" id="use_balance_begin_session" checked>
                        <label for="use_balance_begin_session">
                            <span><img src="/img/Shape.svg" alt="check"></span>
                        </label>
                        <span class="agree_info">Использовать баллы</span>
                    </div>
                    <div class="bonus_info_wrapper">
                        <div class="bonus_info_title">Количество балов</div>
                        <div class="bonus_info">12</div>
                    </div>
                    <div class="limit">Минимум <span>1</span>, максимум <span>12</span></div>
                    <div class="available_sum_wrapper">
                        <div class="available">Доступно: <span>100</span> руб. и <span>50</span> бонусов</div>
                        <div class="sum">Спишется: <span>50</span> руб. и <span>25</span> бонусов</div>
                    </div>
                    <button type="submit" class="btn disabled">Подтверждаю</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal main_balance_up_modal" data-remodal-id="balance_up_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Пополнение баланса
        </p>
        <div class="balance_up_form">
            <form id="modal-balance_up" action="" method="post">
                <div class="forma">
                    <button type="submit" class="btn disabled">OK</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal main_prolongation_session_modal" data-remodal-id="prolongation_session_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Продление сесии
        </p>
        <div class="prolongation_session_form">
            <form id="modal-prolongation_session" action="" method="post">
                <div class="forma">
                    <div class="form-group" data-placeholder="Введите новый пароль" data-label="Пароль">
                        <label for="password-input">
                            <img src="/img/password.svg" alt="password">
                        </label>
                        <input id="password-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                    </div>
                    <p class="service_package">
                        Пакет на <span><b>3 часа</b></span> стоимостью <span><b>15 руб.</b></span>
                    </p>
                    <div class="checkbox_wrapper">
                        <input type="checkbox" id="use_balance_prolongation_session" checked>
                        <label for="use_balance_prolongation_session">
                            <span><img src="/img/Shape.svg" alt="check"></span>
                        </label>
                        <span class="agree_info">Использовать баллы</span>
                    </div>
                    <div class="bonus_info_wrapper">
                        <div class="bonus_info_title">Количество балов</div>
                        <div class="bonus_info">12</div>
                    </div>
                    <div class="limit">Минимум <span>1</span>, максимум <span>12</span></div>
                    <div class="available_sum_wrapper">
                        <div class="available">Доступно: <span>100</span> руб. и <span>50</span> бонусов</div>
                        <div class="sum">Спишется: <span>50</span> руб. и <span>25</span> бонусов</div>
                    </div>
                    <button type="submit" class="btn disabled">Подтверждаю</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal main_start_session_modal" data-remodal-id="start_session_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Старт сесии
        </p>
        <p class="instruction">Укажите пакет</p>
        <div class="start_session_form">
            <form id="modal-start_session" action="" method="post">
                <div class="forma">
                    <div class="checkbox_wrapper">
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Произвольное время</span>
                                <span class="price">1,67 руб/мин.</span>
                            </div>
                            <div class="select_time">
                                <p>Введите время в минутах. 1 час = 60 минут</p>
                                <div class="qty">
                                    <span class="left"></span>
                                    <input type="number" name="time-qty" value="10" step="10" min="10">
                                    <span class="right"></span>
                                </div>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет на 3 часа</span>
                                <span class="price">270 ₽</span>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет на 5 часов</span>
                                <span class="price">400 ₽</span>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет День (09:00 - 16:00)</span>
                                <span class="price">450 ₽</span>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет Вечер (16:00-22:00)</span>
                                <span class="price">450 ₽</span>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет Ночь (22:00 - 08:00)</span>
                                <span class="price">550 ₽</span>
                            </div>
                        </label>
                        <label>
                            <input type="radio" name="package">
                            <div class="start_content">
                                <span class="position">Пакет Сутки 24ч</span>
                                <span class="price">1400 ₽</span>
                            </div>
                        </label>
                    </div>
                    <button type="submit" class="btn disabled">Начать</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal main_end_of_session_modal" data-remodal-id="end_of_session_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            СЕССИЯ ОКОНЧЕНА.
        </p>
        <p class="instruction">
            Выберите новый пакет или завершите сессию.<br>
            Если сессия не будет продлена, компьютер перезагрузится в течение 15 минут, и все пользовательские данные будут стёрты.
        </p>
    </div>
</div>

<div class="remodal main_cash_in_modal" data-remodal-id="cash_in_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">
            Пополнение баланса
        </p>
        <div class="cash_in_form">
            <form id="modal-cash_in" action="" method="post">
                <div class="forma">
                    <div class="form-group" data-placeholder="Введите сумму (₽)" data-label="Сумма пополнения (₽)">
                        <label for="cash_in-input">
                            <img src="/img/balans.svg" alt="password">
                        </label>
                        <input id="cash_in-input" name="cash_in" type="text" placeholder="" required>
                        <p>Минимальная сумма 10 руб.</p>
                    </div>
                    <div class="select_cash_in_wrapper">
                        <button type="button" data-cash-in="500">500</button>
                        <button type="button" data-cash-in="1 000">1 000</button>
                        <button type="button" data-cash-in="2 000">2 000</button>
                        <button type="button" data-cash-in="3 000">3 000</button>
                    </div>
                    <p class="instruction">
                        Денежные средства на балансе<br>
                        возврату не подлежат!
                    </p>
                    <button type="submit" class="btn disabled">ок</button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/promise-polyfill/8.2.0/polyfill.min.js"
        integrity="sha512-YK+bAjUuYdjPksbGQIIIsUn5hgYFsc+nXgx21Wwby9Mv+rJd8WZH2FRe1RdlTjFu1vxlGia9/RqmUMcZtX+BrA=="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.js"
        integrity="sha512-5AcaBUUUU/lxSEeEcruOIghqABnXF8TWqdIDXBZ2SNEtrTGvD408W/ShtKZf0JNjQUfOiRBJP+yHk6Ab2eFw3Q=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"
        integrity="sha512-a/KwXZUMuN0N2aqT/nuvYp6mg1zKg8OfvovbIlh4ByLw+BJ4sDrJwQM/iSOd567gx+yS0pQixA4EnxBlHgrL6A=="
        crossorigin="anonymous"></script>
<script src="/js/script.js?t=<?= time(); ?>"></script>
<script src="/js/signin_start.js?t=<?= time(); ?>"></script>
</body>
</html>
