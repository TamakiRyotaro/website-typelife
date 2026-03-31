<?php $cats = get_the_terms(get_the_ID(), 'recipe_category'); ?>
<li class="recipe-list-item">
    <?php if ($cats): ?>
        <!-- kan-to-do:画像の入れ込み -->
        <?php if (has_post_thumbnail()): ?>
            <?php the_post_thumbnail('medium'); ?>
        <?php endif; ?>

        <div class="recipe-list-info">
            <ul class="recipe-category">
                <?php foreach ($cats as $cat): ?>
                    <li><a href='<?php echo esc_url(home_url("/")); ?>recipe_category/<?php echo $cat->slug ?>/'><?php echo $cat->name ?></a></li>
                <?php endforeach; ?>
            </ul>
            <h2 class="recipe-list-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        </div>
    <?php else: ?>
        <p>記事はありません</p>
    <?php endif; ?>
</li>