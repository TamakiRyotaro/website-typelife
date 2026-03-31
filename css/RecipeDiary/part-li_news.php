<?php $cats = get_the_category(); ?>
<li>
    <div class="news-meta">
        <time datetime="<?php the_time("Y-m-d") ?>"><?php the_time(get_option("date_format")); ?></time>
        <?php if ($cats): ?>
            <ul class="news-category">
                <?php foreach ($cats as $cat): ?>
                    <li><a href='<?php echo esc_url(home_url("/")); ?>category/<?php echo $cat->slug ?>/'><?php echo $cat->name ?></a></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>記事はありません</p>
        <?php endif; ?>
    </div>
    <p class="news-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
</li>