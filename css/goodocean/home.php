<?php get_header() ?>

<main class="main">
  <h1 data-title="News" class="page-title">お知らせ</h1>

  <div class="inner is-small">
    <ol class="c-breadcrumbs">
      <?php if (function_exists("bcn_display")) bcn_display_list(); ?>
    </ol>

    <div class="news-wrapper">
      <div class="main-content">
        <div class="box-white">
          <h2 class="news-title">Latest News</h2>

          <?php if (have_posts()): ?>
            <ul class="news-list">
              <?php
              while (have_posts()):
                the_post();
                get_template_part('parts', 'archiveposts');
              endwhile;
              ?>
            </ul>
          <?php else: ?>
            <p>記事はありません</p>
          <?php endif; ?>

          <!-- ページ送り表示
          <div class="wp-pagenavi" role="navigation">
            <span aria-current="page" class="current">1</span>
            <a class="page larger" title="ページ 2" href="#">2</a>
            <a class="page larger" title="ページ 3" href="#">3</a>
            <a class="page larger" title="ページ 4" href="#">4</a>
            <a class="nextpostslink" rel="next" aria-label="次のページ" href="#">Next</a>
          </div> -->
          <?php wp_pagenavi(); ?>

        </div>
      </div>

      <!-- サイドバー記述
      <aside class="sidebar">
        <div class="box-white">
          <div class="item">
            <h2 class="news-title">Archives</h2>
            <ul class="sidebar-list">
              <li><a href="#">2025</a></li>
              <li><a href="#">2024</a></li>
              <li><a href="#">2023</a></li>
              <li><a href="#">2022</a></li>
            </ul>
          </div>
          <div class="item">
            <h2 class="news-title">Categories</h2>
            <ul class="sidebar-list">
              <li><a href="./category.html">重要</a></li>
              <li><a href="./category.html">Topics</a></li>
              <li><a href="./category.html">Media</a></li>
            </ul>
          </div>
        </div>
      </aside> -->
      <?php get_sidebar(); ?>

    </div>
  </div>
</main>

<!-- フッター描画処理
<footer class="footer-a">
  <div class="inner">
    <div class="contact-box">
      <h2 data-title="Contact" class="content-title">お問い合わせ</h2>
      <div class="content-wrapper">
        <div class="item-left">
          <p>GOOD OCEAN株式会社 へのお問い合わせは、お問い合わせフォーム、もしくは<a href="tel:+03-1234-5678" class="tel">TEL 03-1234-5678</a> までお気軽にお問い合わせください。</p>
        </div>
        <div class="item-right">
          <p class="text"><span class="business-hours">営業時間</span>平日 10:30-18:00（土・日・祝 休）</p>
          <a href="./contact.html" class="btn">お問い合わせフォーム</a>
        </div>
      </div>
    </div>
    <ul class="footer-nav">
      <li><a href="./privacy.html">プライバシーポリシー</a></li>
    </ul>
    <small class="copyright">&copy; GOOD OCEAN.inc</small>
  </div>
</footer>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="./js/script.js"></script>
</body>

</html> -->
<?php get_footer() ?>