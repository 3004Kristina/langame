<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && \mb_strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return;
} ?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Langame</title>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
          integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.scrollbar/0.2.11/jquery.scrollbar.min.css"
          integrity="sha512-xlddSVZtsRE3eIgHezgaKXDhUrdkIZGMeAFrvlpkK0k5Udv19fTPmZFdQapBJnKZyAQtlr3WXEM3Lf4tsrHvSA=="
          crossorigin="anonymous" />
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal.min.css"
          integrity="sha512-UO+dUiFTr6cCaPZKCzXEGhYsuK8DkGAS5iThyMUrtHsg+INCFyRM3GiqJ4rjuvfEyn81XGjpfmjSwwR1dAjAsw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/remodal/1.1.1/remodal-default-theme.min.css"
          integrity="sha512-jRxwiuoe3nt8lMSnOzNEuQ7ckDrLl31dwVYFWS6jklXQ6Nzl7b05rrWF9gjSxgOow5nFerdoN6CBB4gY5m5nDw=="
          crossorigin="anonymous"/>
    <link rel="stylesheet" href="/css/layout.css?t=<?= time(); ?>">
    <style>
        input::-ms-reveal,
        input::-ms-clear {
            display: none;
        }
    </style>
</head>
<body>
<!--<div class="perfect">-->
<!--    <img src="/img/book.png" alt="">-->
<!--</div>-->

<div class="system-svg-icons">
    <svg viewBox="0 0 0 0" fill="none" xmlns="http://www.w3.org/2000/svg">
        <filter id="grayscale">
            <feColorMatrix type="matrix" values="0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0.2126 0.7152 0.0722 0 0 0 0 0 1 0"/>
        </filter>
    </svg>
</div>

<section class="wrapper">
    <header>
        <div class="header_wrapper">
            <div class="logo">
                <a data-ajax-url href="/">
                    <img src="/img/logo.svg" alt="logo">
                </a>
            </div>
            <nav>
                <ul class="header_menu">
                    <li>
                        <a data-ajax-url href="/transactions.php">
                            <img src="/img/transaction.svg" alt="icon">
                            <span>История транзакций</span>
                        </a>
                    </li>
                    <li>
                        <a data-ajax-url href="">
                            <img src="/img/booking.svg" alt="icon">
                            <span>Забронировать</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="/img/settings.svg" alt="icon">
                            <span>Настройки</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="decor">
                            <img src="/img/support.svg" alt="icon">
                            <span>Поддержка</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="main">
