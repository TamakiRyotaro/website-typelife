<?php get_header(); ?>

<main class="subpage-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <div class="wrapper">

                <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>

                <div class="breadcrumbs-wrapper wrapper">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists("bcn_display")) bcn_display(); ?>
                    </div>
                </div>

                <div class="business-content box-white">
                    <div class="business-image">
                        <?php echo wp_get_attachment_image(SCF::get("business-image"), "large"); ?>
                    </div>
                    <div class="business-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="business-list">
                        <?php $business_partner_group = SCF::get("business-partner", get_page_by_path("business")->ID); ?>
                        <dl>
                            <dt>主要取引先</dt>
                            <?php foreach ($business_partner_group as $fields): ?>
                                <dd><?php echo $fields["business-partner-name"] ?></dd>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                <?php endwhile; ?>
            <?php endif ?>
</main>

<?php get_footer(); ?>