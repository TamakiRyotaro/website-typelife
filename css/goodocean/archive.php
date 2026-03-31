<?php get_header(); ?>

<main class="main">
  <h1 data-title="News" class="page-title">お知らせ</h1>

  <div class="inner is-small">
    <!-- パンくずリスト処理
    <ol class="c-breadcrumbs">
      <li><a href="./">ホーム</a></li>
      <li><a href="./news.html">お知らせ</a></li>
      <li><span>2022年</span></li>
    </ol> -->
    <ol class="c-breadcrumbs">
      <?php if (function_exists("bcn_display")) bcn_display_list(); ?>
    </ol>

    <div class="news-wrapper">
      <div class="main-content">
        <div class="box-white">
          <h2 class="news-title"> 

            <?php
            // 飛んできたのが年別なら「年」、カテゴリ別ならカテゴリを表示
            if (is_date()) {
              echo get_query_var("year");
            } elseif (is_category()) {
              echo get_queried_object()->name;
            }
            ?>
          </h2>

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

<?php get_footer() ?>