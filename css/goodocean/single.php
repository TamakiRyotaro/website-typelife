<?php get_header(); ?>

<main class="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>
      <p data-title="News" class="page-title">お知らせ</p>

      <div class="inner is-small">

        <!-- パンくずリスト処理
        <ol class="c-breadcrumbs">
          <li><a href="./">ホーム</a></li>
          <li><a href="./news.html">お知らせ</a></li>
          <li><a href="./category.html">Topics</a></li>
          <li><span>阿諏訪株式会社との業務提携</span></li>
        </ol> -->
        <ol class="c-breadcrumbs">
          <?php if (function_exists("bcn_display")) bcn_display_list(); ?>
        </ol>

        <div class="news-wrapper">
          <div class="main-content post">
            <div class="box-white">
              <?php $cats = get_the_category(); ?>
              <?php if ($cats): ?>
                <ul class="cat-list">
                  <?php foreach ($cats as $cat): ?>
                    <li><?php echo $cat->name; ?></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <div class="post-header">
                <time datetime="<?php the_time("Y-m-d"); ?>"><?php the_time(get_option("date_format")); ?></time>
              </div>
              <h1 class="post-title"><?php the_title(); ?></h1>
              <div class="post-wrapper">

                <!-- アイキャッチの画像処理
                <figure class="eyecatch"><img src="./img/news-thumbnail1.jpg" alt=""></figure> -->
                <?php if (has_post_thumbnail()): ?>
                  <figure class="eyecatch">
                    <?php the_post_thumbnail("full"); ?>
                  </figure>
                <?php endif; ?>

                <!-- 内容
                <h2>GOOD OCEAN 株式会社は、2055年3月5日より、阿諏訪株式会社と業務提携を行います</h2>
                <p>阿諏訪株式会社(本社・宮城)では、2019年5月に政府が策定した『プラスチック資源循環戦略』にもとづき、3R+Renewable(持続可能な資源)を実現するため、廃プラスチックのリサイクルも力を入れています。回収した廃プラスチックを回収し、洗浄、粉末にしてからあたらしい製品に生まれ変わらせる取り組みです。</p>
                <h3>阿諏訪株式会社の海洋汚染への取り組み</h3>
                <p>阿諏訪株式会社(本社・宮城)では、2019年5月に政府が策定した『プラスチック資源循環戦略』にもとづき、3R+Renewable(持続可能な資源)を実現するため、廃プラスチックのリサイクルも力を入れています。回収した廃プラスチックを回収し、洗浄、粉末にしてからあたらしい製品に生まれ変わらせる取り組みです。</p>
                <p>このたび、阿諏訪株式会社との業務提携により、GOOD OCEAN株式会社が法人オフィス向けに提供しているリサイクルプラスチック製品・オフィス家具製品、トイレ用品の分野において、パートナー事業者へのサービスの幅が広がります。より身近にオフィスや個人単位でも仕事をしながらSDGsを実現していくという理想に近づくと考えます。</p>
                <p>当社はイノベーションカンパニーとして、暮らしに"持続可能"を取り入れるという、無理のない取り組みを推進して参ります。</p>
                <div class="images-wrapper col2">
                  <a href="./img/post-img1-full.png"><img src="./img/post-img1.png" alt=""></a>
                  <a href="./img/post-img2-full.png"><img src="./img/post-img2.png" alt=""></a>
                </div> -->
                <?php the_content(); ?>
                <div class="images-wrapper col2">
                  <a href="<?php echo get_stylesheet_directory_uri() ?>/img/post-img1-full.png"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/post-img1.png" alt=""></a>
                  <a href="<?php echo get_stylesheet_directory_uri() ?>/img/post-img2-full.png"><img src="<?php echo get_stylesheet_directory_uri() ?>/img/post-img2.png" alt=""></a>
                </div>
              </div>

              <!-- ページ送り処理 WordPress的な書き方 -->
              <ul class="page-nav">
                <li><?php previous_post_link("%link", "前の記事へ") ?></li>
                <li><a href="<?php echo esc_url(home_url('/')); ?>news/" class="to-archive">お知らせトップ</a></li>
                <li><?php next_post_link("%link", "次の記事へ") ?></li>
              </ul>
            </div>
          </div>


          <!-- sidebar.phpで分けて書く
          <aside class="sidebar">
            <div class="box-white">
              <div class="item">
                <h2 class="news-title">Archives</h2>
                <ul class="sidebar-list">
                  <li><a href="./date.html">2025</a></li>
                  <li><a href="./date.html">2024</a></li>
                  <li><a href="./date.html">2023</a></li>
                  <li><a href="./date.html">2022</a></li>
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
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>