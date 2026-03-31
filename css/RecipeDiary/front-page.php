<?php get_header(); ?>

<main>
    <!-- New Recipes Section -->
    <?php
    $recipe_args = [
        "post_type" => "recipe",
        "posts_per_page" => 4,
        "post_status" => "publish",
    ];
    $recipe_loop = new WP_Query($recipe_args);
    ?>
    <section class="new-recipes-section wrapper">
        <?php if ($recipe_loop->have_posts()): ?>
            <h2 class="title" data-en="New Recipes">新着レシピ</h2>
            <ul class="recipe-list">
                <?php while ($recipe_loop->have_posts()): $recipe_loop->the_post(); ?>
                    <?php get_template_part("part", "li_recipe"); ?>
                <?php endwhile; ?>
            </ul>
            <div class="button-wrapper">
                <a class="button" href="<?php echo esc_url(home_url("/")); ?>recipe/">レシピ一覧を見る</a>
            </div>
        <?php endif; ?>
    </section>

    <!-- News Section -->
    <?php
    $news_args = [
        "post_type" => "post",
        "posts_per_page" => 3,
        "post_status" => "publish",
    ];
    $news_loop = new WP_Query($news_args);
    ?>
    <section class="news-section wrapper">
        <?php if ($news_loop->have_posts()): ?>
            <h2 class="title" data-en="News">お知らせ</h2>
            <ul class="news-list">
                <?php while ($news_loop->have_posts()): $news_loop->the_post(); ?>
                    <?php get_template_part("part", "li_news"); ?>
                <?php endwhile; ?>
            </ul>
            <div class="news-button-wrapper">
                <a class="button" href="<?php echo esc_url(home_url("/")); ?>news_list/">お知らせ一覧を見る</a>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php get_footer(); ?>