<?php get_header(); ?>

<main>

    <h1 data-title="Not Found" class="page-title">ページが見つかりません</h1>

    <div class="breadcrumbs-wrapper wrapper">
        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <?php if (function_exists("bcn_display")) bcn_display(); ?>
        </div>
    </div>

    <div class="box-white wrapper">
        <div class="page404-text-box">
            <p>お探しのページは、削除されたか、名前が変更された可能性があります。<br>
                直接アドレスを入力された場合は、アドレスが正しく入力されているかもう一度ご確認下さい。</p>
            <p>ブラウザの再読込みを行ってもこのページが表示される場合は、<a href="<?php echo esc_url(home_url("/")); ?>">トップページ</a>から目的のページをお探しください。</p>
        </div>
    </div>
</main>

<?php get_footer(); ?>