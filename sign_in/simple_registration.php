<?php require __DIR__ . '/.sign_in_registr_header.php'; ?>
<div class="registration_start_content">
    <div class="title">
        Регистрация
    </div>
    <div class="kind_of_registration_wrapper">
        <a href="/sign_in/registration.php">
            <span>Полная</span>
        </a>
        <a href="/sign_in/simple_registration.php" class="active">
            <span>Упрощенная</span>
            <img src="/img/info_auto.svg" alt="info">
        </a>
    </div>
    <div class="registration_form_wrapper">
        <form action="" method="post" id="simple-registration-form">
            <div class="forma">
                <div class="form-group-item" data-placeholder="Введите ФИО" data-label="ФИО">
                    <label for="simple-registr-name-input"></label>
                    <span class="registr_image"><img src="/img/user.svg" alt="user"></span>
                    <input id="simple-registr-name-input" name="name" type="text" placeholder="" required>
                </div>
                <div class="form-group-item" data-placeholder="Введите номер телефона" data-label="Номер телефона">
                    <label for="simple-registr-telephone-input"></label>
                    <span class="registr_image"><img src="/img/tel.svg" alt="phone"></span>
                    <input id="simple-registr-telephone-input" name="phone" type="tel" placeholder="" required>
                    <span class="error">Поле должно содержать 11 цифр</span>
                </div>
                <div class="form-group-list">
                    <div class="form-group" data-placeholder="Укажите пароль" data-label="Пароль">
                        <label for="simple-registr-password-input"></label>
                        <span class="registr_image"><img src="/img/password.svg" alt="password"></span>
                        <input id="simple-registr-password-input" name="password" type="password" placeholder="" required>
                        <span data-action="show_password" class="inspect_pass">показать</span>
                        <span class="error">Пароль должен быть не менее 6 символов</span>
                    </div>
                    <div class="form-group" data-placeholder="Повторите пароль" data-label="Пароль">
                        <label for="simple-registr-password-again-input"></label>
                        <span class="registr_image"><img src="/img/password.svg" alt="password"></span>
                        <input id="simple-registr-password-again-input" name="password" type="password" placeholder="" required>
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
    <div class="decor"></div>
</div>
<?php require __DIR__ . '/.sign_in_registr_footer.php'; ?>

