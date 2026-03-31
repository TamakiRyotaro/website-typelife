<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- wordpress側で表示するので削除 -->
  <!-- <title>プライバシーポリシー｜GOOD OCEAN 株式会社</title>
  <meta name="description" content="海洋生物よりも、海洋ごみが増える未来が近い将来やってくるかもしれない。それを防ぐのが、私たちの役割です。海洋プラスチックごみの回収や処理、工場から出る汚水をテクノロジーを使って浄水し、海に放出する技術の開発などを行っています。">
  
  <meta property="og:locale" content="ja_JP">
  <meta property="og:image" content="https://example.com/img/og-image.jpg">
  <meta property="og:title" content="プライバシーポリシー">
  <meta property="og:description" content="海洋生物よりも、海洋ごみが増える未来が近い将来やってくるかもしれない。それを防ぐのが、私たちの役割です。海洋プラスチックごみの回収や処理、工場から出る汚水をテクノロジーを使って浄水し、海に放出する技術の開発などを行っています。">
  <meta property="og:url" content="https://example.com">
  <meta property="og:site_name" content="GOOD OCEAN 株式会社">
  <meta property="og:type" content="website">
  <meta name="twitter:card" content="summary_large_image">

  <link rel="icon" href="./favicon.ico"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=La+Belle+Aurore&family=Marcellus&family=Noto+Sans+JP:wght@400;500;700&family=Noto+Serif+JP:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- C:\Users\6c08\Local Sites\good-ocean\app\publicが表示されている時のパスなのでget_stylesheet_directory_uri()を使ってテーマがある場所までの絶対パスを使って書き換え -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/reset.css">
  <!-- single.phpでlightboxを使うためにis_single()の時だけ読み込むように！ -->
  <?php if (is_front_page()): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
  <?php endif; ?>
  <?php if (is_single()): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css">
  <?php endif; ?>
  <?php if (is_page("company") || is_front_page()): ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <?php endif; ?>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css">
  <!-- SEO関連の記述をしてくれるwp_head()関数 -->
  <?php wp_head(); ?>
</head>

<body>
  <header class="header">
    <div id="header-nav" class="header-nav is-fixed">
      <div class="site-id-wrapper">
        <!-- home_url("/")で"./"を書き換え -->
        <a href="<?php echo esc_url(home_url("/")); ?>" class="site-id">
          <!-- bliginfo()関数の使い方[echoはいらない！！] -->
          <img src="<?php echo get_stylesheet_directory_uri() ?>/img/site-id-img.svg" alt="<?php bloginfo("name"); ?>" class="site-id-img">

          <!-- トップページではヘッダーの題名を「h1」にしたいから -->
          <?php if (is_front_page()): ?>
            <h1 class="site-id-text"><?php bloginfo("name"); ?></h1>
          <?php else: ?>
            <p class="site-id-text"><?php bloginfo("name"); ?></p>
          <?php endif; ?>

        </a>
      </div>
    </div>
    <nav id="gnav" class="gnav">
      <ul class="gnav-list">
        <!-- 「company.html」を「company/」に書き換え -->
        <li><a href="<?php echo esc_url(home_url("/")); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>#about">私たちの取り組み</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>#service">事業内容</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>company/" <?php if (is_page("company")) echo 'class="current"'; ?>>会社概要</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>news/" <?php if (is_single() || is_archive() || is_home()) echo 'class="current"'; ?>>お知らせ</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>contact/" <?php if (is_page("contact")) echo 'class="current"'; ?>>お問い合わせ</a></li>
      </ul>
    </nav>
    <button id="btn-nav" class="btn-nav"></button>
  </header>