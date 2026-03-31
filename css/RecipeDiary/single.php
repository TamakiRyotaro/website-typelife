<?php get_header(); ?>
<main>

  <?php if (have_posts()): ?>
    <?php while (have_posts()): the_post(); ?>

      <div class="breadcrumbs-wrapper wrapper">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
          <?php if (function_exists("bcn_display")) bcn_display(); ?>
        </div>
      </div>

      <div class="wrapper">
        <article class="news-detail">

          <header class="news-detail-header">
            <?php $cats = get_the_category(); ?>
            <h1 class="news-detail-title"><?php the_title(); ?></h1>
            <div class="news-meta">
              <time datetime="<?php the_time("Y-m-d"); ?>"><?php the_time(get_option("date_format")); ?></time>
              <?php if ($cats): ?>
                <ul class="news-category">
                  <?php foreach ($cats as $cat): ?>
                    <li><a href='<?php echo esc_url(home_url("/")); ?>category/<?php echo $cat->slug ?>/'><?php echo $cat->name ?></a></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          </header>
          <div class="news-detail-content">
            <?php the_content(); ?>
            <!-- アイキャッチが設定されていれば！ -->
            <?php if (has_post_thumbnail()): ?>
              <div class="post-thumbnail">
                <?php the_post_thumbnail('large'); ?>
              </div>
            <?php endif; ?>
          </div>
        </article>
      </div>
      <div class="button-wrapper">
        <a class="button" href="<?php echo esc_url(home_url("/")); ?>news_list/">お知らせ一覧に戻る</a>
      </div>

    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>