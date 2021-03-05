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
        <span class="ln">EN</span>
        <span id="clock"></span>
    </div>
</div>
</div>
<div class="remodal sign_in_forgot_password_modal" data-remodal-id="forgot_password_modal">
    <button data-remodal-action="close" class="remodal-close""></button>
    <p class="title">Забыли пароль</p>
    <div class="forgot_password_form">
        <form id="modal-form" action="" method="post">
            <div class="forma">
                <div class="form-group" data-placeholder="Введите номер телефона" data-label="Номер телефона">
                    <label for="telephone-input">
                        <img src="/img/tel.svg" alt="phone">
                    </label>
                    <input id="modal-telephone-input" name="phone" type="tel" placeholder="" required>
                </div>

                <p class="instruction">
                    Что бы восстановить пароль введите свой номер мобильного телефона, мы вышлем Вам новый пароль.
                </p>
                <button type="submit" class="btn">Напомнить</button>
            </div>
        </form>
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
