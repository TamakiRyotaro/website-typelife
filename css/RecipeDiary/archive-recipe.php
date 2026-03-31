<?php get_header(); ?>

<main>
  <?php if (have_posts()): ?>
<div class="breadcrumbs-wrapper wrapper">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists("bcn_display")) bcn_display(); ?>
    </div>
  </div>

  <div class="wrapper">
    <h1 class="title" data-en="Recipe">レシピ</h1>
    <ul class="recipe-list">
      <?php while (have_posts()): the_post(); ?>
        <?php get_template_part("part", "li_recipe"); ?>
      <?php endwhile; ?>
    </ul>
  </div>
  
  <!-- Pagination -->
  <?php wp_pagenavi(); ?>
  <?php get_template_part("component", "top_btn"); ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>