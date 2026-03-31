<?php get_header(); ?>
<main>

  <?php if (have_posts()): ?> 
    <div class="breadcrumbs-wrapper wrapper">
      <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if (function_exists("bcn_display")) bcn_display(); ?>
      </div>
    </div>


    <div class="wrapper">
      <!-- こういうのもあるらしい -->
      <?php //single_cat_title(); 
      ?>
      <?php $cat = get_queried_object(); ?>

      <h1 class="title" data-en="<?php echo ucfirst($cat->slug); ?>"><?php echo $cat->name ?></h1>

      <ul class="news-list page-news-list">
        <?php while (have_posts()): the_post(); ?>
          <?php get_template_part("part", "li_news"); ?>
        <?php endwhile; ?>
      </ul>

      <?php wp_pagenavi(); ?>

    </div>
    <?php get_template_part("component", "top_btn") ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>