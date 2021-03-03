<?php require __DIR__ . '/.sign_in_registr_header.php'; ?>
<div class="registration_start_content">
    <div class="title">
        Регистрация
    </div>
    <div class="kind_of_registration_wrapper">
        <a href="/sign_in/registration.php" class="active">Полная</a>
        <a href="/sign_in/simple_registration.php">Упрощенная</a>
    </div>
    <div class="registration_form_wrapper">
        <form action="" method="post">
            <div class="forma">
                <div class="form-group-item">
                    <label for="registr-name-input">
                        <img src="/img/user.svg" alt="user">
                    </label>
                    <input id="registr-name-input" name="name" type="text" placeholder=" " required>
                    <span class="placeholder" data-empty-text="ФИО" data-filled-text="Привет!">Введите ФИО</span>
                </div>
                <div class="form-group-list">
                    <div class="form-group">
                        <label for="registr-telephone-input">
                            <img src="/img/tel.svg" alt="phone">
                        </label>
                        <input id="registr-telephone-input" name="phone" type="tel" placeholder=" " required>
                        <span class="placeholder">Введите номер телефона</span>
                    </div>
                    <div class="form-group">
                        <label for="registr-birthday-input">
                            <img src="/img/Calendar.svg" alt="calendar">
                        </label>
                        <input id="registr-birthday-input" name="birthday" type="text" placeholder=" " required>
                        <span class="placeholder">Введите дату рождения</span>
                    </div>
                </div>
                <div class="form-group-list">
                    <div class="form-group">
                        <div class="select_wrapper">
                            <span class="icon">
                            <img src="/img/document.svg" alt="document">
                        </span>
                            <select name="identity_document" id="registr_document">
                                <option value="1">Паспорт РФ</option>
                                <option value="2">Водительское удостоверение</option>
                                <option value="3">Военный билет</option>
                                <option value="4">СНИЛС</option>
                                <option value="5">Свидетельство о рождении</option>
                                <option value="6">Иной документ</option>
                                <option value="7">Паспорт Киргизии</option>
                                <option value="8">Паспорт Узбекистана</option>
                                <option value="9">Паспорт Таджикистана</option>
                                <option value="10">Паспорт Украины</option>
                                <option value="11">Паспорт Республики Беларусь</option>
                                <option value="12">Вид на жительство</option>
                            </select>
                            <span class="select_placeholder">Документ</span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="registr-passport-input">
                            <img src="/img/transcript.svg" alt="passport">
                        </label>
                        <input id="registr-passport-input" name="passport" type="text" placeholder=" " required>
                        <span class="placeholder">Укажите 10 цифр серия и номер</span>
                    </div>
                </div>
                <div class="form-group-list">
                    <div class="form-group">
                        <label for="registr-password-input">
                            <img src="/img/password.svg" alt="password">
                        </label>
                        <input id="registr-password-input" name="password" type="password" placeholder=" " required>
                        <span class="placeholder">Введите пароль</span>
                    </div>
                    <div class="form-group">
                        <label for="registr-password-again-input">
                            <img src="/img/password.svg" alt="password">
                        </label>
                        <input id="registr-password-again-input" name="password" type="password" placeholder=" " required>
                        <span class="placeholder">Повторите пароль</span>
                    </div>
                </div>
                <div class="checkbox_wrapper">
                    <input type="checkbox" id="mailing-agree" checked>
                    <label for="mailing-agree">
                        <span><img src="/img/Shape.svg" alt="check"></span>

                    </label>
                    <span class="agree_info">Я даю свое право на информационную рассылку</span>
                </div>
                <button type="submit" class="btn registr_submit">зарегистрироваться</button>
        </form>
    </div>
    <a href="#" class="back_to_main_page">
        <img src="/img/Union.svg" alt="arrow">
        <span>вернутся на главную</span>
    </a>
</div>
<?php require __DIR__ . '/.sign_in_registr_footer.php'; ?>
