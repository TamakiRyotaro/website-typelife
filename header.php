<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Type Life</title>
</head>

<body>
    <header>
        <a href="./index.php" class="header__topicon">
            <div class="header-topicon__img"><img src="<?php get_stylesheet_directory_uri() ?>/img/icon.png" alt="TypeLifeのアイコン"></div>
            <h1 class="header-topicon__title">TypeLife</h1>
        </a>
        <nav>
            <ul class="header__navlist">
                <li><a href="<?php esc_url(home_url("/")); ?>about/">About</a></li>
                <li><a href="./business.html">business</a></li>
                <li><a href="./recruit.html">recruit</a></li>
                <li><a href="./contact.html">contact</a></li>
            </ul>
        </nav>
    </header>