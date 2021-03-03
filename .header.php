<?php if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && \mb_strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    return;
} ?>
<!doctype html>
<html lang="en">
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
    <link rel="stylesheet" href="/css/layout.css?t=<?= time(); ?>">
    <link rel="stylesheet" href="/fonts/Lato/latofonts.css">
</head>
<body>
<!--<div class="perfect">-->
<!--    <img src="/img/trns2560.png" alt="">-->
<!--</div>-->
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
