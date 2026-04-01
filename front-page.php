<!-- https://typlf.com/ -->
<?php get_header(); ?>
<?php $mv_id = SCF::get("mv-image"); ?>
<?php $mv_url = wp_get_attachment_url($mv_id); ?>
<div class="mv" style="background-image: url('<?php echo esc_url($mv_url); ?>');">
    <p class="mv__title">System Engieering Service<br> in Fukuoka</p>
</div>

<main>

</main>

<?php get_footer(); ?>