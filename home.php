<?php get_header(); ?>

<main>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <div class="wrapper">

                <h1 data-title="NEWS" class="page-title">お知らせ</h1>

                <div class="breadcrumbs-wrapper wrapper">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists("bcn_display")) bcn_display(); ?>
                    </div>
                </div>


            </div>
        <?php endwhile; ?>
    <?php endif ?>
</main>

<?php get_footer(); ?>