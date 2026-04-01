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
            <!-- <div class="header-topicon__img"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/icon.png" alt="TypeLifeのアイコン"></div>
            <?php if (is_front_page()): ?>
                <h1 class="header-topicon__title">TypeLife</h1>
            <?php else: ?>
                <p class="header-topicon__title">TypeLife</p>
            <?php endif; ?> -->
            <p class="header-topicon__title">AAA株式会社</p>
        </a>
        <nav>
            <ul class="header__navlist">
                <li><a href="<?php echo esc_url(home_url("/")); ?>about/" <?php if (is_page("about")) echo 'class="current"'; ?>>About</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>business/" <?php if (is_page("business")) echo 'class="current"'; ?>>Business</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>news/" <?php if (is_single() || is_archive() || is_home()) echo 'class="current"'; ?>>News</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>recruit/" <?php if (is_page("recruit")) echo 'class="current"'; ?>>Recruit</a></li>
                <li><a href="<?php echo esc_url(home_url("/")); ?>contact/" <?php if (is_page("contact")) echo 'class="current"'; ?>>Contact</a></li>
            </ul>
        </nav>
        <button class="ham-btn" id="js-ham-btn">
            <span class="ham-line"><span class="visually-hidden">メニューを開く</span></span>
        </button>
    </header>