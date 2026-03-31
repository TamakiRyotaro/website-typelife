<?php if (is_archive() || is_page("company") || is_front_page() || is_home()): ?>
  <footer class="footer-a">
    <div class="inner">
      <div class="contact-box">
        <h2 data-title="Contact" class="content-title">お問い合わせ</h2>
        <div class="content-wrapper">
          <div class="item-left">
            <p><?php echo nl2br(SCF::get("footer-left-area", get_option("page_on_front"))); ?></p>
          </div>
          <div class="item-right">
            <p class="text"><?php echo nl2br(SCF::get("footer-right-area", get_option("page_on_front"))); ?></p>
            <a href="<?php esc_url(home_url("/")); ?>/contact/" class="btn">お問い合わせフォーム</a>
          </div>
        </div>
      </div>
    <?php elseif (is_page("privacy") || is_page("contact") || is_404() || is_single()): ?>
      <footer class="footer-b">
        <div class="inner">
        <?php endif; ?>
        <?php
        //カスタムのやつ
        // wp_nav_menu(
        //   array(
        //     "theme_location" => "footer-menu",
        //   )
        // );
        ?>
        <ul class="footer-nav">
          <li><a href="<?php esc_url(home_url("/")); ?>/privacy/">プライバシーポリシー</a></li>
        </ul>
        <small class="copyright">&copy; GOOD OCEAN.inc</small>
        </div>
      </footer>
      <?php wp_footer(); ?>

      <!-- jsの読み込み -->
      <!-- この読み込み方が公式推奨 -->
      <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

      <?php if (is_front_page()): ?>
        <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/slider.js"></script>
      <?php endif; ?>

      <?php if (is_single()): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>
        <script src="<?php echo get_stylesheet_directory_uri() ?>/js/custom-lightbox.js"></script>
      <?php endif; ?>

      <?php if (is_archive()): ?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
      <?php endif; ?>

      <?php if (is_page("company") || is_front_page()): ?>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
      <?php endif; ?>

      <script src="<?php echo get_stylesheet_directory_uri() ?>/js/script.js"></script>
      </body>

      </html>