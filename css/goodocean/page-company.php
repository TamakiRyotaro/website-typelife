<?php get_header(); ?>

<main class="main">
  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <!-- メインループ内で使える$postをうまく使う -->
      <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>

      <div class="inner is-small">

        <!-- パンくずリスト描画 -->
        <ol class="c-breadcrumbs">
          <?php if (function_exists("bcn_display")) bcn_display_list(); ?>
        </ol>

        <div class="box-white">
          <div class="company-about">
            <div class="text-wrapper">
              <!-- WordPressで設定した内容描画
              <h2>私たちが目指すのは<br>100年後もきれいな海です。</h2>
              <p>私は沖縄で生まれ育ちました。<br>
                「昔の海はもっときれいだった」と、幼少期に祖父母が話してくれたのを覚えています。<br>
                しかしながら、今の海の環境は、ますます悪化の一途をたどっています。
              </p>
              <p>私たちはイノベーションカンパニーとして、<br>
                自分たちの子どもや孫の世代にも<br>
                美しい海を残していきたいと考えています。
              </p>
              <p>国や自治体、企業と連携をしながら、環境が少しでも良くなる取り組みを今後とも行ってまいります。</p>
              <p class="text-right">代表取締役　久保田　涼子</p> -->
              <?php the_content(); ?>
            </div>

            <div class="images-wrapper">
              <figure class="js-fadein-trigger">
                <!-- WordPressで登録した画像の呼び出し
                <img src="./img/company-img.jpg" alt="久保田涼子"> -->
                <?php echo wp_get_attachment_image(SCF::get("company-img"), "large"); ?>
              </figure>
            </div>

          </div>

          <div class="company-info-wrapper">

            <!-- parts-companyinfo.phpの呼び出し
            <div class="company-info">
              <dl>
                <dt>社名</dt>
                <dd>GOOD OCEAN株式会社</dd>
              </dl>
              <dl>
                <dt>設立</dt>
                <dd>2055年3月3日</dd>
              </dl>
              <dl>
                <dt>本社</dt>
                <dd>東京都中央区銀座５丁目１−１</dd>
              </dl>
              <dl>
                <dt>資本金</dt>
                <dd>1000万円</dd>
              </dl>
              <dl>
                <dt>代表取締役</dt>
                <dd>久保田　涼子</dd>
              </dl>
              <dl>
                <dt>取締役</dt>
                <dd>西原　礼音</dd>
              </dl>
            </div> -->
            <?php get_template_part("parts", "companyinfo"); ?>

            <!-- WordPressのSCFで登録した画像の描画
            <div class="map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1668.5658763779945!2d139.7609869180394!3d35.67249811340209!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bef7abe6d7f%3A0x7c12dce58bb5263f!2z44CSMTA0LTAwNjEg5p2x5Lqs6YO95Lit5aSu5Yy66YqA5bqn77yV5LiB55uu77yR4oiS77yR!5e0!3m2!1sja!2sjp!4v1654481209818!5m2!1sja!2sjp" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> -->
            <?php echo SCF::get("company-map"); ?>

          </div>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>