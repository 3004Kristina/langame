<?php require __DIR__ . '/.sign_in_registr_header.php'; ?>
<div class="registration_start_content">
    <div class="title">
        Регистрация
    </div>
    <div class="kind_of_registration_wrapper">
        <a href="/sign_in/registration.php" class="active">
            <span>Полная</span>
            <img src="/img/info_auto.svg" alt="info">
        </a>
        <a href="/sign_in/simple_registration.php">
            <span> Упрощенная</span>
        </a>
    </div>
    <div class="registration_form_wrapper">
        <form action="" method="post" id="full-registration-form">
            <div class="forma">
                <div class="form-group-item" data-placeholder="Введите ФИО" data-label="ФИО">
                    <label for="registr-name-input"></label>
                    <span class="registr_image"><img src="/img/user.svg" alt="user"></span>
                    <input id="registr-name-input" name="name" type="text" placeholder="" required>
                </div>
                <div class="form-group-list">
                    <div class="form-group" data-placeholder="Введите номер телефона" data-label="Номер телефона">
                        <label for="registr-telephone-input"></label>
                        <span class="registr_image"><img src="/img/tel.svg" alt="phone"></span>
                        <input id="registr-telephone-input" name="phone" type="tel" placeholder="" required>
                        <span class="error">Поле должно содержать 11 цифр</span>
                    </div>
                    <div class="form-group" data-placeholder="Введите дату рождения" data-label="Дата рождения">
                        <label for="registr-birthday-input"></label>
                        <span class="registr_image"><img src="/img/Calendar.svg" alt="calendar"></span>
                        <input id="registr-birthday-input" name="birthday" type="text" placeholder="" required>
                    </div>
                </div>
                <div class="form-group-list">
                    <div class="form-group">
                        <div class="select_wrapper">
                            <span class="icon">
                            <img src="/img/document.svg" alt="document">
                        </span>
                            <select name="identity_document" id="registr_document">
                                <option value="1">Выбрать</option>
                                <option value="2">Паспорт РФ</option>
                                <option value="3">Водительское удостоверение</option>
                                <option value="4">Военный билет</option>
                                <option value="5">СНИЛС</option>
                                <option value="6">Свидетельство о рождении</option>
                                <option value="7">Иной документ</option>
                                <option value="8">Паспорт Киргизии</option>
                                <option value="9">Паспорт Узбекистана</option>
                                <option value="10">Паспорт Таджикистана</option>
                                <option value="11">Паспорт Украины</option>
                                <option value="12">Паспорт Республики Беларусь</option>
                                <option value="13">Вид на жительство</option>
                            </select>
                            <span class="select_placeholder">Документ</span>
                        </div>
                    </div>
                    <div class="form-group" data-placeholder="Укажите 10 цифр серия и номер" data-label="Укажите 10 цифр серия и номер">
                        <label for="registr-passport-input"></label>
                        <span class="registr_image"><img src="/img/transcript.svg" alt="passport"></span>
                        <input id="registr-passport-input" name="passport" type="text" placeholder="" required>
                        <span class="error">Поле должно содержать 10 Символов</span>
                    </div>
                </div>
                <div class="form-group-list">
                    <div class="form-group" data-placeholder="Укажите пароль" data-label="Пароль">
                        <label for="registr-password-input"></label>
                        <span class="registr_image"><img src="/img/password.svg" alt="password"></span>
                        <input id="registr-password-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                        <span class="error">Пароль должен быть не менее 6 символов</span>
                    </div>
                    <div class="form-group" data-placeholder="Повторите пароль" data-label="Пароль">
                        <label for="registr-password-again-input"></label>
                        <span class="registr_image"><img src="/img/password.svg" alt="password"></span>
                        <input id="registr-password-again-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                        <span class="error">Пароль должен быть не менее 6 символов</span>
                    </div>
                </div>
                <div class="checkbox_wrapper">
                    <input type="checkbox" id="mailing-agree" checked>
                    <label for="mailing-agree">
                        <span><img src="/img/Shape.svg" alt="check"></span>
                    </label>
                    <span class="agree_info">Я даю свое право на информационную рассылку</span>
                </div>
                <button type="submit" class="btn registr_submit disabled">зарегистрироваться</button>
        </form>
    </div>
    <a href="/sign_in/authorization.php" class="back_to_main_page">
        <img src="/img/Union.svg" alt="arrow">
        <span>вернутся на главную</span>
    </a>
</div>
<?php require __DIR__ . '/.sign_in_registr_footer.php'; ?>
