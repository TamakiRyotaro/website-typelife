<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Recipe Diary - About</title>
    <!-- <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" /> -->
    <!-- reset.css ress -->
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
    <!-- Google Fonts (Noto Sans JP,Philosopher,Kaku Gothic Antique) -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Zen+Kaku+Gothic+Antique&display=swap"
        rel="stylesheet" />
    <!-- original css -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" />

    <?php if (is_front_page()): ?>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <?php endif; ?>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header-inner wrapper">
            <p class="logo">
                <a href="<?php echo esc_url(home_url("/")); ?>"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.svg" alt="Recipe Diary" /></a>
            </p>
            <nav>
                <ul>
                    <li><a href="<?php echo esc_url(home_url("/")); ?>">Home</a></li>
                    <li><a href="<?php echo esc_url(home_url("/")); ?>about/">About</a></li>
                    <li><a href="<?php echo esc_url(home_url("/")); ?>recipe/">Recipe</a></li>
                    <li><a href="<?php echo esc_url(home_url("/")); ?>news/">News</a></li>
                </ul>
            </nav>
            <button class="ham-btn" id="js-ham-btn">
                <span class="ham-line"><span class="visually-hidden">メニューを開く</span></span>
            </button>
        </div>
        <!-- トップページだけMVの分岐を入れる！ -->
        <?php if (is_front_page()): ?>
            <?php $images = SCF::get("mv_images"); ?>
            <?php $image = $images[0]; ?>
            <div class="mainvisual">
                <div class="img-box js-slider">
                    <div class="img-box-item">
                        <?php echo wp_get_attachment_image($image["mv_image1"], "large"); ?>
                    </div>
                    <div class="img-box-item">
                        <?php echo wp_get_attachment_image($image["mv_image2"], "large"); ?>
                    </div>
                    <div class="img-box-item">
                        <?php echo wp_get_attachment_image($image["mv_image3"], "large"); ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </header>