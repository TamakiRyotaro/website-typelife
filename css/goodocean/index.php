<!-- intelephense stubsで文法エラーをなくす -->
<?php get_header(); ?>

<main class="main">
  <!-- メインループ始まりの記述 -->
  <?php if (have_posts()): //もしこのページに表示するコンテンツがあったら 
  ?>
    <?php while (have_posts()): the_post();  //このページに表示するコンテンツがなくなるまで繰り返す 
    ?>
      <?php if (is_page("contact")): ?>
        <h1 data-title="Contact" class="page-title"><?php the_title(); ?></h1>
        <!-- $postはメインループで生成されるオブジェクトで設定したページの情報が色々取れる -->
        <!-- <h1 data-title="<?php echo $post->$post_name; ?>" class="page-title"><?php the_title(); ?></h1> -->
      <?php elseif (is_page("privacy")): ?>
        <h1 data-title="Privacy Policy" class="page-title"><?php the_title(); ?></h1>
      <?php endif; ?>

      <div class="inner is-small">
        <ol class="c-breadcrumbs">
          <!-- <li><a href="./">ホーム</a></li>
          <li><span>プライバシーポリシー</span></li> -->
          <?php if (function_exists("bcn_display")) bcn_display_list(); ?>
        </ol>

        <div class="box-white">
          <?php if (is_page("contact")): ?>
            <?php the_content() ?>
          <?php elseif (is_page("privacy")): ?>
            <div class="privacy-wrapper">
              <?php the_content() ?>
            </div>
          <?php endif; ?>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>