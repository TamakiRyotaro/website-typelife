<!-- <!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Recipe Diary - お問い合わせ</title>
  <link rel="shortcut icon" href="./img/favicon.ico" type="image/x-icon" />
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&family=Zen+Kaku+Gothic+Antique&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <div class="header-inner wrapper">
      <p class="logo">
        <a href="./index.html"><img src="./img/logo.svg" alt="Recipe Diary" /></a>
      </p>
      <nav>
        <ul>
          <li><a href="./index.html">Home</a></li>
          <li><a href="./about.html">About</a></li>
          <li><a href="./recipe-list.html">Recipe</a></li>
          <li><a href="./news.html">News</a></li>
        </ul>
      </nav>
      <button class="ham-btn" id="js-ham-btn">
        <span class="ham-line"><span class="visually-hidden">メニューを開く</span></span>
      </button>
    </div>
  </header> -->
<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <div class="breadcrumbs-wrapper wrapper">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists("bcn_display")) bcn_display(); ?>
        </div>
      </div>

      <div class="wrapper contact-wrapper">
        <div class="contact-header">
          <h1 class="title" data-en="Contact"><?php the_title(); ?></h1>
          <p>
            フォームからお問い合わせください。<br />
            通常、2～3営業日以内にご返信いたします。
          </p>
        </div>
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
<!-- <footer>
  <ul class="footer-nav">
    <li><a href="./contact.html">お問い合わせ</a></li>
    <li><a href="./privacy-policy.html">プライバシーポリシー</a></li>
  </ul>
  <ul class="sns">
    <li><a href="#">Instagram</a></li>
    <li><a href="#">Twitter</a></li>
    <li><a href="#">Facebook</a></li>
  </ul>
  <small class="copyright">&copy; 2021 Recipe Diary</small>
</footer>
<script src="./js/script.js"></script>
</body>

</html> -->