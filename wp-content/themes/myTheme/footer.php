    <footer class="footer">
        <div class="container">
            <div class="row row--padding">
                <span class="footer__copyright">&copy; 2013 Kyte. All rights reserved. Theme by elemis.</span>
                <div class="footer__social">
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-dribbble" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="footer__social-link">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_enqueue_script('slick', get_template_directory_uri() . '/js/slick.min.js'); ?>
    <?php wp_enqueue_script('scroll', get_template_directory_uri() . '/js/mPageScroll2id.min.js'); ?>
    <?php wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js'); ?>
    <?php wp_footer(); ?>
</body>
</html>