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


<div class="remodal sign_in_forgot_password_modal" data-remodal-id="forgot_password_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Забыли пароль</p>
        <div class="forgot_password_form">
            <form id="modal-form-forgot-password" action="" method="post">
                <div class="forma">
                    <div class="form-group" data-placeholder="Введите номер телефона" data-label="Номер телефона">
                        <label for="telephone-input">
                            <img src="/img/tel.svg" alt="phone">
                        </label>
                        <input id="modal-telephone-input" name="phone" type="tel" placeholder="" required>
                    </div>

                    <p class="instruction">
                        Что бы восстановить пароль введите свой номер мобильного телефона.
                    </p>
                    <button type="submit" class="btn disabled">Напомнить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal sign_in_code_recovery_modal" data-remodal-id="code_recovery_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Код восстановления</p>
        <p class="instruction">
            Введите 4-значный код который был выслан
            на Ваш номер телефона для завершения
            процедуры восстановления пароля
        </p>
        <div class="code_recovery_form">
            <form id="modal-form-code-recovery" action="" method="post">
                <div class="forma">
                    <div class="code_wrapper">
                        <input type="text" name="code" required="required" maxlength="1" autofocus="">

                        <input type="text" name="code" required="required" maxlength="1">

                        <input type="text" name="code" required="required" maxlength="1">

                        <input type="text" name="code" required="required" maxlength="1">
                    </div>
                    <a href="#" id="reSendCode" class="send_code_again disabled">Отправить код еще раз <span id="countdown"></span></a>
                    <button type="submit" class="btn disabled">подтвердить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal sign_in_set_new_password_modal" data-remodal-id="set_new_password_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Восстановление пароля</p>
        <div class="set_new_password_form">
            <form id="modal-set-new-password" action="" method="post">
                <div class="forma">
                    <div class="form-group" data-placeholder="Введите новый пароль" data-label="Пароль">
                        <label for="set-new-password-input">
                            <img src="/img/password.svg" alt="password">
                        </label>
                        <input id="set-new-password-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                    </div>
                    <button type="submit" class="btn disabled">Восстановить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal sign_in_computer_locked_modal" data-remodal-id="computer_locked_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="locked_title">Компьютер заблокирован</p>
        <div class="img_wrapper">
            <img src="/img/attention.svg" alt="attention">
        </div>
        <p class="instruction">
            Для авторизации на данном ПК
            обратитесь к администратору
        </p>
    </div>
</div>

<div class="remodal sign_in_success_modal" data-remodal-id="success_modal" data-remodal-options="hashTracking: false">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Успешно!</p>
        <p class="instruction">
            Ваш пароль был изменен, воспользуйтесь новым паролем для входа в систему.
        </p>
    </div>
</div>
