<?php require __DIR__ . '/.header.php'; ?>
<div class="main_content_wrapper">
    <div class="main_content_item_left">
        <div class="user_info">
            <div class="user_avatar">
                <img src="/img/avatar.png" alt="avatar">
            </div>
            <div class="user_name">
                <span>Алексей Костылев Николаевич</span>
            </div>
        </div>
        <div class="session_info">
            <p class="title">
                Информация о текущей сесии
            </p>
            <div class="session_info_time_wrapper">
                <div class="session_info_time">
                    <span>Осталось минут:</span>
                    <span>-</span>
                </div>
                <div class="session_info_time">
                    <span>Сессия истекает:</span>
                    <span>-</span>
                </div>
            </div>
        </div>
        <div class="release_carousel">
            <div>
                <img src="/img/release.png" alt="release">
            </div>
            <div>
                <img src="/img/release.png" alt="release">
            </div>
            <div>
                <img src="/img/release.png" alt="release">
            </div>
        </div>
    </div>
    <div class="main_content_item_middle">
        <div class="status_info">
            <div class="status_info_item">
                <span>Текущий статус:</span>
                <span class="status_type">Standart</span>
            </div>
            <div class="status_info_item">
                <span>До смены статуса осталось:</span>
                <span class="status_timer">10 часов</span>
            </div>
        </div>
        <div class="balance_info">
            <div class="balance_info_item_top">
                <p class="title">
                    Основной счет
                </p>
                <a href="#" class="balance_update">
                    <img src="/img/update.svg" alt="update">
                </a>
            </div>
            <div class="balance_info_item_bottom">
                <div class="balance">
                    <span>15000</span>
                    <i class="fa fa-rub" aria-hidden="true"></i>
                </div>
                <div class="bonus_balance">
                    <span>1200</span>
                    <i class="fa fa-rub" aria-hidden="true"></i>
                    <p>Бонусный счет</p>
                </div>
            </div>
            <button type="submit" class="btn">Пополнить</button>
        </div>
        <div class="tournament_carousel">
            <div>
                <img src="/img/tournament.png" alt="tournament">
            </div>
            <div>
                <img src="/img/tournament.png" alt="tournament">
            </div>
            <div>
                <img src="/img/tournament.png" alt="tournament">
            </div>
        </div>
    </div>
    <div class="main_content_item_right">
        <div class="tariffs_info">
            <div class="tariffs_info_title">
                Тарифы, доступные на данном ПК
            </div>
            <div class="tariffs_info_list">
                <div class="tariffs_info_item">
                    <div class="position">
                        Часовой тариф
                    </div>
                    <div class="price">
                        100
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="tariffs_info_item">
                    <div class="position">
                        Пакет на 3 часа
                    </div>
                    <div class="price">
                        270
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="tariffs_info_item">
                    <div class="position">
                        Пакет на 5 часов
                    </div>
                    <div class="price">
                        400
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="tariffs_info_item">
                    <div class="position">
                        Пакет “День” (9:00 - 16:00)
                    </div>
                    <div class="price">
                        450
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="tariffs_info_item">
                    <div class="position">
                        Пакет ”Вечер” (16:00 - 22:00)
                    </div>
                    <div class="price">
                        450
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="tariffs_info_item">
                    <div class="position">
                        Пакет “Сутки” 24 часа
                    </div>
                    <div class="price">
                        1450
                        <i class="fa fa-rub" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main_bottom_menu_wrapper">
    <ul class="main_bottom_menu">
        <li>
            <a href="#" class="back">
                <img src="/img/device.svg" alt="device">
                <span>вернутся на рабочий стол</span>
            </a>
        </li>
        <li>
            <a href="/select_game.php" class="select_game">
                <img src="/img/selectgame.svg" alt="selectgame">
                <span>выбрать игру</span>
            </a>
        </li>
        <li>
            <a href="#" class="problem_report" data-remodal-target="problem_report_modal">
                <img src="/img/info.svg" alt="info">
                <span>сообщить о проблеме</span>
            </a>
        </li>
        <li>
            <a href="#" class="session" data-remodal-target="prolongation_session_modal">
                <img src="/img/session.svg" alt="session">
                <span>продлить сессию</span>
            </a>
        </li>
        <li>
            <a href="#" class="logout" data-remodal-target="finish_session_modal">
                <img src="/img/logout.svg" alt="logout">
                <span>завершить сессию</span>
            </a>
        </li>
    </ul>
</div>
<div class="main_signature">
    <span>Powered by</span>
    <img src="/img/signature.svg" alt="signature">
    <span class="upper">SOFTWARE</span>
</div>
<?php require __DIR__ . '/.footer.php'; ?>
