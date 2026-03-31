<footer>
    <ul class="footer-nav">
        <li><a href="<?php echo esc_url(home_url("/")); ?>contact/">お問い合わせ</a></li>
        <li><a href="<?php echo esc_url(home_url("/")); ?>privacy_policy/">プライバシーポリシー</a></li>
    </ul>
    <ul class="sns">
        <li><a href="#">Instagram</a></li>
        <li><a href="#">Twitter</a></li>
        <li><a href="#">Facebook</a></li>
    </ul>
    <small class="copyright">&copy; 2021 Recipe Diary</small>
</footer>
<?php wp_footer(); ?>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/script.js"></script>
<?php if (is_front_page()): ?>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri() ?>/js/slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<?php endif; ?>
</body>

</html>