<?php require __DIR__ . '/.sign_in_registr_header.php'; ?>
<div class="sign_in_start_content">
    <div class="logo_wrapper">
        <img src="/img/logo.svg" alt="logo">
    </div>
    <div class="sign_in_form_wrapper">
        <form action="" method="post" id="authorization-form">
            <div class="reservation">
                <p>Ближайшие брони на этот ПК</p>
                <div class="reservation_wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>С</th>
                                <th>До</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="text_decor">16:00</span> 10.05.2021</td>
                                <td><span class="text_decor">17:00</span> 10.05.2021</td>
                            </tr>
                            <tr>
                                <td><span class="text_decor">16:00</span> 10.05.2021</td>
                                <td><span class="text_decor">17:00</span> 10.05.2021</td>
                            </tr>
                            <tr>
                                <td><span class="text_decor">16:00</span> 10.05.2021</td>
                                <td><span class="text_decor">17:00</span> 10.05.2021</td>
                            </tr>
                            <tr>
                                <td><span class="text_decor">16:00</span> 10.05.2021</td>
                                <td><span class="text_decor">17:00</span> 10.05.2021</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="forma">
                <div class="form-group" data-placeholder="Введите номер телефона" data-label="Номер телефона">
                    <label for="telephone-input">
                        <img src="/img/tel.svg" alt="phone">
                    </label>
                    <input id="telephone-input" name="phone" type="tel" placeholder="" required>
                </div>
                <div class="form-group" data-placeholder="Введите пароль" data-label="Пароль">
                    <label for="password-input">
                        <img src="/img/password.svg" alt="password">
                    </label>
                    <input id="password-input" name="password" type="password" placeholder="" required>
                    <span data-action="show_password" class="inspect_pass">показать</span>
                </div>

                <a href="#" class="forgot_password" data-remodal-target="forgot_password_modal">Забыли пароль?</a>

                <button type="submit" class="btn sign_in_submit disabled">Войти</button>
            </div>
        </form>
        <div class="qr_code_wrapper">
            <p>Авторизация по QR коду.</p>
            <img src="/img/qr.png" alt="qr">
        </div>
    </div>
    <div class="registration_wrapper">
        <p>Если у вас еще нет аккаунта?</p>
        <a href="/sign_in/registration.php" class="check_in">Зарегистрируйтесь</a>
    </div>
    <div class="app_install_wrapper">
        <p>Установите приложение.</p>
        <div class="app_install_list">
            <a href="#">
                <img src="/img/googleplay.svg" alt="googleplay">
            </a>
            <a href="#">
                <img src="/img/appstore.svg" alt="appstore">
            </a>
        </div>
    </div>
</div>
<?php require __DIR__ . '/.sign_in_registr_footer.php'; ?>
