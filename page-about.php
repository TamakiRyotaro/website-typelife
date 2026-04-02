<?php get_header(); ?>

<main class="subpage-main">
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>

            <div class="wrapper">

                <h1 data-title="<?php echo ucwords($post->post_name); ?>" class="page-title"><?php the_title(); ?></h1>

                <div class="breadcrumbs-wrapper">
                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php if (function_exists("bcn_display")) bcn_display(); ?>
                    </div>
                </div>

                <div class="about-content box-white">

                    <div class="about-image">
                        <?php echo wp_get_attachment_image(SCF::get("about-image"), "large"); ?>
                    </div>
                    <div class="about-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="about-flex">
                        <div class="about-list">
                            <?php $company_info_group = SCF::get("about-list", get_page_by_path("about")->ID); ?>
                            <?php foreach ($company_info_group as $fields): ?>
                                <dl>
                                    <dt><?php echo $fields["about-list--title"] ?></dt>
                                    <dd><?php echo $fields["about-list--desc"] ?></dd>
                                </dl>
                            <?php endforeach; ?>
                        </div>
                        <div class="about-map">
                            <?php echo SCF::get("about-map"); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif ?>
</main>

<?php get_footer(); ?>