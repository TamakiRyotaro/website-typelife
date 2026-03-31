<?php get_header() ?>

<main class="home-main">
  <div class="mv">
    <div class="inner">
      <p class="mv-text"><span class="inner-text">環境問題に取り組み</span><span class="inner-text">持続可能な</span><span class="inner-text">社会実現を目指す</span></p>
      <p class="mv-en">To realize a sustainable society</p>
      <div class="img-box js-slider">
        <div class="img-box-item">
          <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv1-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv1.jpg" alt="">
          </picture>
        </div>
        <div class="img-box-item">
          <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv2-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv2.jpg" alt="">
          </picture>
        </div>
        <div class="img-box-item">
          <picture>
            <source srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv3-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/top-mv3.jpg" alt="">
          </picture>
        </div>
      </div>
    </div>
  </div>
  <?php
  //カスタムのやつで使うP.233~
  wp_nav_menu(
    array(
      "theme_location" => "main-menu",
      "container" => "nav",
    )
  );
  ?>

  <section id="about" class="about">
    <div class="inner">
      <div class="content-wrapper">
        <div class="text-wrapper">
          <h2 data-title="About Us" class="content-title">私たちの取り組み</h2>
          <div class="content-text">

            <!-- コンテンツ表示
            <p>海洋生物よりも、海洋ごみが増える未来が<br>
              近い将来やってくるかもしれない。<br>
              それを防ぐのが、私たちの役割です。</p>
            <p>海洋プラスチックごみの回収や処理、<br>
              工場から出る汚水をテクノロジーを使って浄水し、<br>
              海に放出する技術の開発などを行っています。</p> -->
            <?php if (have_posts()): ?>
              <?php while (have_posts()): the_post(); ?>
                <?php the_content(); ?>
              <?php endwhile; ?>
            <?php endif; ?>

          </div>
        </div>
        <div class="images-wrapper">
          <picture class="item1 js-fadeinup-trigger">
            <source srcset="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img1-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img1.jpg" alt="取り組みイメージ">
          </picture>
          <picture class="item2 js-fadeinup-trigger">
            <source srcset="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img2-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img2.jpg" alt="取り組みイメージ">
          </picture>
          <picture class="item3 js-fadeinup-trigger">
            <source srcset="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img3-sp.jpg" media="(max-width: 768px)">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/img/top-about-img3.jpg" alt="取り組みイメージ">
          </picture>
        </div>
      </div>
    </div>
  </section>

  <section id="service" class="service">
    <div class="inner">
      <div class="content-wrapper">
        <div class="box-left">
          <h2 data-title="Service" class="content-title">事業内容</h2>
          <div class="content-text">
            <p><?php echo nl2br(SCF::get("service")); ?></p>
          </div>
        </div>
        <div class="box-right">

          <!-- サブ内容の描画
          <div class="item js-fadeinup-trigger">
            <div class="item-title-wrapper">
              <div class="item-title-img"><img src="./img/top-service-img1.jpg" alt="安全な水とトイレを世界中に"></div>
              <h3 class="item-title">安全な水とトイレを<br>世界中に</h3>
            </div>
            <div class="content-text">
              <p>誰もが安全な水を利用できるように、有害な化学物質が流れ込むことを防ぎ、処理しないまま流す排水を減らす活動に取り組んでいます。<br>
                また、水の安全な再利用を世界的に大きく増やす、国際的な協力も行っています。</p>
            </div>
          </div>
          <div class="item js-fadeinup-trigger">
            <div class="item-title-wrapper">
              <div class="item-title-img"><img src="./img/top-service-img2.jpg" alt="海の豊かさを守ろう"></div>
              <h3 class="item-title">海の豊かさを<br>守ろう</h3>
            </div>
            <div class="content-text">
              <p>様々な産業の製造工程では大量の汚水・廃液が発生します。私たちの開発する独自の汚水処理システムを使い、水をきれいにして、海の豊かさを守ります。<br>
                また、他社と連携し、海洋プラスチックごみの回収や処理も行っています。</p>
            </div>
          </div> -->
          <?php $service_item = SCF::get("service-item"); ?>
          <?php foreach ($service_item as $fields): ?>
            <div class="item js-fadeinup-trigger">
              <div class="item-title-wrapper">
                <div class="item-title-img">
                  <?php echo wp_get_attachment_image($fields["service-item-img"], "large"); ?>
                </div>
                <h3 class="item-title"><?php echo nl2br($fields["service-item-title"]) ?></h3>
              </div>
              <div class="content-text">
                <p><?php echo nl2br($fields["service-item-text"]); ?></p>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
  </section>

  <div class="company-news-wrapper">
    <div class="inner">
      <section class="home-company">
        <h2 data-title="Company" class="content-title">会社概要</h2>
        <?php get_template_part("parts", "companyinfo") ?>
      </section>
    </div>

    <section class="home-news">
      <h2 class="home-news-title">News</h2>

      <!-- ニュース一覧の表示
      <ul class="news-list">
        <li>
          <a href="./single.html">
            <div class="thumbnail"><img src="./img/news-thumbnail1.jpg" alt=""></div>
            <div class="text">
              <ul class="cat-list">
                <li>重要</li>
                <li>Topics</li>
              </ul>
              <time datetime="2055-03-05" class="date">2055.03.05</time>
              <p class="title">阿諏訪株式会社との業務提携</p>
            </div>
          </a>
        </li>
        <li>
          <a href="./single.html">
            <div class="thumbnail"><img src="./img/news-thumbnail2.jpg" alt=""></div>
            <div class="text">
              <ul class="cat-list">
                <li>Topics</li>
              </ul>
              <time datetime="2055-02-11" class="date">2055.02.11</time>
              <p class="title">近年の海洋汚染の状況と対策</p>
            </div>
          </a>
        </li>
        <li>
          <a href="./single.html">
            <div class="thumbnail"><img src="./img/news-thumbnail3.jpg" alt=""></div>
            <div class="text">
              <ul class="cat-list">
                <li>Topics</li>
              </ul>
              <time datetime="2054-12-31" class="date">2054.12.31</time>
              <p class="title">年始年末の営業について</p>
            </div>
          </a>
        </li>
      </ul> -->
      <?php
      $args = array(
        "post_type" => "post",
        "posts_per_page" => 3,
        "post_status" => "publish",
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()): ?>
        <ul class="news-list">
          <?php
          while ($the_query->have_posts()):
            $the_query->the_post();
            get_template_part('parts', 'archiveposts');
          endwhile;
          ?>
        </ul>
      <?php else: ?>
        <p>記事はありません</p>
      <?php endif; ?>
      <?php wp_reset_postdata(); ?>

    </section>
  </div>
</main>

<?php get_footer(); ?>