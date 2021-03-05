<?php if (false): ?>
<html lang="ru">
<body>
<div>
    <?php endif; ?>

    <div class="start_footer">
        <ul class="start_footer_menu">
            <li>
                <a href="#">
                    Информация
                </a>
            </li>
            <li>
                <a href="#">
                    Вакансии
                </a>
            </li>
            <li>
                <a href="#">
                    Помощь
                </a>
            </li>
            <li>
                <a href="#">
                    Конфиденциальность
                </a>
            </li>
            <li>
                <a href="#">
                    Правила
                </a>
            </li>
            <li>
                <a href="#">
                    FAQ
                </a>
            </li>
            <li>
                <a href="#">
                    Прайс-лист
                </a>
            </li>
        </ul>
        <div class="main_signature">
            <span>Powered by</span>
            <img src="/img/signature.svg" alt="signature">
            <span class="upper">SOFTWARE</span>
        </div>
        <div class="time_ln">
            <span class="ln" data-remodal-target="computer_locked_modal">EN</span>
            <span id="clock"></span>
        </div>
    </div>
</div>

<div class="remodal sign_in_forgot_password_modal" data-remodal-id="forgot_password_modal">
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

<div class="remodal sign_in_code_recovery_modal" data-remodal-id="code_recovery_modal">
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
                    <a id="reSendCode" class="send_code_again disabled">Отправить код еще раз <span id="countdown">3:00</span></a>
                    <button type="submit" class="btn disabled">подтвердить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal sign_in_set_new_password_modal" data-remodal-id="set_new_password_modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Восстановление пароля</p>
        <div class="set_new_password_form">
            <form id="modal-set-new-password" action="" method="post">
                <div class="forma">
                    <div class="form-group" data-placeholder="Введите новый пароль" data-label="Пароль">
                        <label for="password-input">
                            <img src="/img/password.svg" alt="password">
                        </label>
                        <input id="password-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                    </div>
                    <button type="submit" class="btn disabled">Восстановить</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="remodal sign_in_computer_locked_modal" data-remodal-id="computer_locked_modal">
    <button data-remodal-action="close" class="remodal-close"></button>
    <div class="remodal-content">
        <p class="title">Компьютер заблокирован</p>
        <div class="img_wrapper">
            <img src="/img/attention.svg" alt="attention">
        </div>
        <p class="instruction">
            Для авторизации на данном ПК
            обратитесь к администратору
        </p>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/promise-polyfill/8.2.0/polyfill.min.js"
        integrity="sha512-YK+bAjUuYdjPksbGQIIIsUn5hgYFsc+nXgx21Wwby9Mv+rJd8WZH2FRe1RdlTjFu1vxlGia9/RqmUMcZtX+BrA=="
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.js"
        integrity="sha512-a/KwXZUMuN0N2aqT/nuvYp6mg1zKg8OfvovbIlh4ByLw+BJ4sDrJwQM/iSOd567gx+yS0pQixA4EnxBlHgrL6A=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
        integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"
        integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg=="
        crossorigin="anonymous"></script>
<script src="/js/script.js?t=<?= time(); ?>"></script>
<script src="/js/signin_start.js?t=<?= time(); ?>"></script>
</body>
</html>
