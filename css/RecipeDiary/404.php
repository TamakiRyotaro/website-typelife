<?php get_header(); ?>
<main>
  <div class="breadcrumbs-wrapper wrapper">
    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
      <?php if (function_exists("bcn_display")) bcn_display(); ?>
    </div>
  </div>
  <div class="wrapper" style="text-align: center; padding-block: 4rem;">
    <h1 class="title" data-en="404 Not Found">お探しのページは見つかりませんでした</h1>
    <p style="margin-bottom: 3rem;">申し訳ありませんが、アクセスされたページは削除されたか、URLが変更された可能性があります。</p>
    <?php get_template_part("component", "top_btn") ?>
  </div>
</main>

<?php get_footer(); ?>