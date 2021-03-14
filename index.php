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
            <button type="button" class="btn" data-remodal-target="cash_in_modal">Пополнить</button>
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
            <div class="tariffs_info_title" data-remodal-target="start_session_modal">
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
            <a href="<?= isset($_GET['guest']) ? '/' : '/?guest=yes'; ?>" class="back <?= isset($_GET['guest']) ? 'disabled' : ''; ?>">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.6727 33.2778C28.6727 34.2289 27.9017 35 26.9505 35H11.0495C10.0983 35 9.32727 34.2289 9.32727 33.2778C9.32727 32.3266 10.0983 31.5556 11.0495 31.5556H13.8182V29.8333H3.45455C1.54665 29.8333 0 28.2912 0 26.3889V7.44444C0 5.54213 1.54665 4 3.45455 4H34.5455C36.4534 4 38 5.54213 38 7.44444V26.3889C38 28.2912 36.4534 29.8333 34.5455 29.8333H24.1818V31.5556H26.9505C27.9017 31.5556 28.6727 32.3266 28.6727 33.2778ZM4.10811 8.13333L4 26.1351H34L33.8919 8.13333H4.10811Z" fill="#349EEF"/>
                </svg>
                <span>вернутся на рабочий стол</span>
            </a>
        </li>
        <li>
            <a href="/select_game.php" class="select_game <?= isset($_GET['guest']) ? 'disabled' : ''; ?>">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M24.899 4H30.1002C32.2542 4 33.9996 5.7454 33.9996 7.89942V13.1006C33.9996 15.2546 32.2542 17 30.1002 17H24.899C22.745 17 20.9996 15.2546 20.9996 13.1006V7.89942C20.9996 5.7454 22.745 4 24.899 4Z" fill="#8A1FF9"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.89942 4H13.1006C15.2546 4 17 5.7454 17 7.89942V13.1006C17 15.2546 15.2546 17 13.1006 17H7.89942C5.7454 17 4 15.2546 4 13.1006V7.89942C4 5.7454 5.7454 4 7.89942 4ZM24.8994 21H30.1006C32.2546 21 34 22.7454 34 24.8994V30.1006C34 32.2531 32.2546 34 30.1006 34H24.8994C22.7454 34 21 32.2531 21 30.1006V24.8994C21 22.7454 22.7454 21 24.8994 21ZM13.1006 21H7.89942C5.7454 21 4 22.7454 4 24.8994V30.1006C4 32.2531 5.7454 34 7.89942 34H13.1006C15.2546 34 17 32.2531 17 30.1006V24.8994C17 22.7454 15.2546 21 13.1006 21Z" fill="#8A1FF9"/>
                </svg>
                <span>выбрать игру</span>
            </a>
        </li>
        <li>
            <a href="#" class="problem_report" data-remodal-target="problem_report_modal">
                <svg width="37" height="37" viewBox="0 0 37 37" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.529 0H10.4895C4.218 0 0 4.403 0 10.952V26.0665C0 32.597 4.218 37 10.4895 37H26.529C32.8005 37 37 32.597 37 26.0665V10.952C37 4.403 32.8005 0 26.529 0Z" fill="#FF6B00"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0133 10.5921C17.0133 11.4692 17.7248 12.1842 18.5964 12.1842C19.4934 12.1842 20.2067 11.4692 20.2067 10.5921C20.2067 9.71509 19.4934 9 18.6146 9C17.7321 9 17.0133 9.71509 17.0133 10.5921ZM20.1842 16.3655C20.1842 15.4885 19.4692 14.7734 18.5921 14.7734C17.7151 14.7734 17 15.4885 17 16.3655V24.408C17 25.285 17.7151 26.0001 18.5921 26.0001C19.4692 26.0001 20.1842 25.285 20.1842 24.408V16.3655Z" fill="#FAF5FF"/>
                </svg>
                <span>сообщить о проблеме</span>
            </a>
        </li>
        <li>
            <a href="#" class="session <?= isset($_GET['guest']) ? 'disabled' : ''; ?>" data-remodal-target="prolongation_session_modal">
                <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.4" d="M21.6973 8.26046V8.60506C20.7735 8.58693 19.8497 8.58693 18.926 8.58693V8.2786C18.926 7.02714 17.8729 5.06024 16.6165 5.06024H14.7875C12.6997 5.06024 11 3.39163 11 1.36028C11 0.61666 11.6282 0 12.3857 0C13.1616 0 13.7713 0.61666 13.7713 1.36028C13.7713 1.90439 14.2332 2.33968 14.7875 2.33968H16.6165C19.4063 2.35782 21.6788 5.5399 21.6973 8.26046Z" fill="#00AE31"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M25.0116 8.05013C25.6103 8.05826 26.2104 8.06641 26.8126 8.07251C33.2826 8.07251 38 12.6405 38 18.9486V27.0514C38 33.3595 33.2826 37.9275 26.8126 37.9275C24.2208 37.9819 21.629 38 19.0186 38C16.4082 38 13.7792 37.9819 11.1874 37.9275C4.71737 37.9275 0 33.3595 0 27.0514V18.9486C0 12.6405 4.71737 8.07251 11.2061 8.07251C13.6487 8.03625 16.1472 8 18.683 8C19.6153 8 20.5476 8 21.4799 8.01813C22.6553 8.01813 23.8307 8.03409 25.0116 8.05013ZM17.2498 24.8121H15.5038V26.6791C15.5038 27.4012 14.9385 28 14.2567 28C13.5584 28 13.0096 27.4012 13.0096 26.6791V24.8121H11.2471C10.5653 24.8121 10 24.2309 10 23.4912C10 22.7691 10.5653 22.1703 11.2471 22.1703H13.0096V20.3209C13.0096 19.5988 13.5584 19 14.2567 19C14.9385 19 15.5038 19.5988 15.5038 20.3209V22.1703H17.2498C17.9315 22.1703 18.4968 22.7691 18.4968 23.4912C18.4968 24.2309 17.9315 24.8121 17.2498 24.8121ZM24.3175 21.8388H24.4838C25.1656 21.8388 25.7309 21.2575 25.7309 20.5178C25.7309 19.7957 25.1656 19.1969 24.4838 19.1969H24.3175C23.6192 19.1969 23.0704 19.7957 23.0704 20.5178C23.0704 21.2575 23.6192 21.8388 24.3175 21.8388ZM27.1601 27.8962H27.3264C28.0082 27.8962 28.5735 27.315 28.5735 26.5752C28.5735 25.8531 28.0082 25.2543 27.3264 25.2543H27.1601C26.4618 25.2543 25.913 25.8531 25.913 26.5752C25.913 27.315 26.4618 27.8962 27.1601 27.8962Z" fill="#00AE31"/>
                </svg>
                <span>продлить сессию</span>
            </a>
        </li>
        <li>
            <?php if (isset($_GET['guest'])): ?>
                <a href="#" class="start" data-remodal-target="start_session_modal">
                    <svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="17.5" cy="17.5" r="17.5" fill="#00AE31"/>
                        <path d="M22.027 16.6978L15.6178 12.3101C15.3218 12.1073 15.0236 12 14.7757 12C14.2965 12 14 12.3846 14 13.0284V22.5115C14 23.1546 14.2961 23.5385 14.7742 23.5385C15.0225 23.5385 15.3159 23.4311 15.6126 23.2277L22.0247 18.8401C22.4371 18.5575 22.6654 18.1772 22.6654 17.7687C22.6655 17.3606 22.4398 16.9803 22.027 16.6978Z" fill="white"/>
                    </svg>
                    <span>Начать сессию</span>
                </a>
            <?php else: ?>
                <a href="#" class="logout" data-remodal-target="finish_session_modal">
                    <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path opacity="0.2" d="M2 9.5599C2 5.3932 5.48041 2 9.75634 2H18.2611C22.5283 2 26 5.383 26 9.5429V28.4401C26 32.6085 22.5196 36 18.2419 36H9.74064C5.47169 36 2 32.617 2 28.4571V26.8591V9.5599Z" fill="#DC0000"/>
                        <path d="M36.6316 18.5368L31.8891 13.3971C31.399 12.867 30.6102 12.867 30.1217 13.4006C29.6347 13.9342 29.6364 14.7947 30.1249 15.3247L32.7234 18.1393H30.232H16.2497C15.5599 18.1393 15 18.7489 15 19.4998C15 20.2525 15.5599 20.8602 16.2497 20.8602H32.7234L30.1249 23.6748C29.6364 24.2049 29.6347 25.0653 30.1217 25.5989C30.3667 25.8657 30.6865 26 31.0078 26C31.3259 26 31.6457 25.8657 31.8891 25.6025L36.6316 20.4645C36.8669 20.2083 37 19.862 37 19.4998C37 19.1393 36.8669 18.793 36.6316 18.5368Z" fill="#DC0000"/>
                    </svg>
                    <span>завершить сессию</span>
                </a>
            <?php endif; ?>
        </li>
    </ul>
</div>
<div class="main_signature">
    <span>Powered by</span>
    <img src="/img/signature.svg" alt="signature">
    <span class="upper">SOFTWARE</span>
</div>

<?php require __DIR__ . '/.footer.php'; ?>
