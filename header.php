<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/destyle.css@4.0.1/destyle.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
    <title>Type Life</title>
</head>

<body>
    <header>
        <a href="<?php echo esc_url(home_url("/")); ?>" class="header__topicon">
            <div class="header-topicon__img"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon.png" alt="TypeLifeのアイコン"></div>
            <h1 class="header-topicon__title">TypeLife</h1>
        </a>
        <nav>
            <ul class="header__navlist">
                <li><a href="<?php echo esc_url(home_url("/")); ?>about/">About</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>business/">Business</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>news/">News</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>recruit/">Recruit</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>contact/">Contact</a></li>
            </ul>
        </nav>
        <button class="ham-btn" id="js-ham-btn">
            <span class="ham-line"><span class="visually-hidden">メニューを開く</span></span>
        </button>
    </header>