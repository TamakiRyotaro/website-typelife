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
        <article class="recipe-wrapper">

          <!-- kan-to-do:アイキャッチの挿入 -->
          <?php if (has_post_thumbnail()): ?>
            <div class="post-thumbnail">
              <?php the_post_thumbnail('large'); ?>
            </div>
          <?php endif; ?>

          <div class="recipe-text">
            <header class="recipe-header">
              <!-- !!!??? -->
              <?php $cats = get_the_terms(get_the_ID(), "recipe_category"); ?>
              <h1 class="recipe-name"><?php the_title(); ?></h1>
              <?php if ($cats): ?>
                <ul class="recipe-category">
                  <?php foreach ($cats as $cat): ?>
                    <li><a href='<?php echo esc_url(home_url("/")); ?>recipe_category/<?php echo $cat->slug ?>/'><?php echo $cat->name ?></a></li>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
              <p><?php echo SCF::get("recipe_sub_desc") ?></p>
            </header>
            <?php the_content(); ?>
          </div>
        </article>
      </div>
      <!-- kan-to-do:一覧に戻るように -->
      <div class="button-wrapper"><a class="button" href="<?php echo esc_url(home_url("/")) . 'recipe/'; ?>">レシピ一覧に戻る</a></div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>