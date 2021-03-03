<?php require __DIR__ . '/.header.php'; ?>
<div class="transactions_top_wrapper">
    <div class="transactions_title_wrapper">
        <a href="#" class="back">
            <img src="/img/back.svg" alt="arrow-back">
        </a>
        <div class="title">
            История транзакций
        </div>
    </div>
    <div class="transactions_sort_filter_wrapper">
        <a href="#" class="sort">
            <img src="/img/sort.svg" alt="sort">
            <span>Сортировка</span>
        </a>
        <a href="#" class="filter">
            <img src="/img/filter.svg" alt="filter">
            <span>Фильтр</span>
        </a>
    </div>
</div>
<div class="transactions_main_content_wrapper">
    <div class="transactions_info_wrapper">
        <table class="transactions_info">
            <thead>
                <tr>
                    <th>№</th>
                    <th>Дата</th>
                    <th>Время начала сесии</th>
                    <th>Время окончания сесии</th>
                    <th>Списано с баланса</th>
                    <th>Тариф</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>10.08.20</td>
                    <td>10:30</td>
                    <td>14:00</td>
                    <td>1 000 ₽</td>
                    <td>
                        <div class="tariff">
                            <img src="/img/time.svg" alt="time">
                            <span>Часовой тариф</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>11.08.20</td>
                    <td>10:30</td>
                    <td>14:00</td>
                    <td>800 ₽</td>
                    <td>
                        <div class="tariff">
                            <img src="/img/night.svg" alt="night">
                            <span>Ночь</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>12.08.20</td>
                    <td>11:20</td>
                    <td>15:00</td>
                    <td>1 500 ₽</td>
                    <td>
                        <div class="tariff">
                            <img src="/img/time.svg" alt="time">
                            <span>Часовой тариф</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>13.08.20</td>
                    <td>14:15</td>
                    <td>18:00</td>
                    <td>500 ₽</td>
                    <td>
                        <div class="tariff">
                            <img src="/img/time.svg" alt="time">
                            <span>Часовой тариф</span>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>14.08.20</td>
                    <td>15:15</td>
                    <td>18:00</td>
                    <td>1 500 ₽</td>
                    <td>
                        <div class="tariff">
                            <img src="/img/time.svg" alt="time">
                            <span>Часовой тариф</span>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php require __DIR__ . '/.footer.php'; ?>
