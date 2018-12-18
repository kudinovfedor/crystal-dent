</div><!-- .page-wrapper end-->

<footer class="footer js-footer">
    <?php if (is_active_sidebar('footer-widget-area')) : ?>
        <div class="pre-footer">
            <div class="container">
                <div class="row">
                    <?php dynamic_sidebar('footer-widget-area'); ?>
                </div>
            </div>
        </div><!-- .pre-footer end-->
    <?php endif; ?>

    <div class="footer-main">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="footer-item col-xs-12 col-lg-2 footer-logo logo"><?php get_default_logo_link(); ?></div>
                <?php if (has_nav_menu('second-menu')) { ?>
                    <nav class="footer-nav footer-item col-sm-12 col-md-5 col-lg-3">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'second-menu',
                            'container' => false,
                            'menu_class' => 'footer-menu',
                            'menu_id' => '',
                            'fallback_cb' => false,
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2
                        )); ?>
                    </nav>
                <?php }
                $email = get_theme_mod('bw_additional_email');
                if (has_phones() || !empty($email)) { ?>
                        <ul class="footer-item footer-phone col-sm-12 col-md-7 col-lg-4 phone">
                            <?php foreach (get_phones() as $phone) {
                                $tel = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
                                ?>
                                <li class="phone-item">
                                    <a href="tel:<?php echo esc_attr(get_phone_number($tel)); ?>"
                                       class="phone-number">
                                        <?php echo $phone; ?>
                                    </a>
                                </li>
                            <?php } ?>
                            <?php if (!empty($email)) { ?>
                                <li class="phone-item">
                                    <a href="mailto:<?php echo esc_attr($email) ?>" class="phone-number">
                                        <?php echo esc_html($email) ?>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                <?php }
                if (has_social()) { ?>
                    <div class="footer-item footer-social col-sm-12 col-lg-3 text-right">
                        <ul class="social">
                            <?php foreach (get_social() as $social) { ?>
                                <li class="social-item">
                                    <a href="<?php echo esc_attr(esc_url($social['url'])); ?>" class="social-link"
                                       target="_blank">
                                        <i class="<?php echo esc_attr($social['icon']); ?>" aria-hidden="true"
                                           aria-label="<?php echo esc_attr($social['text']); ?>"></i>
                                    </a>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="copyright text-center">
        <div class="container">
            <?php _e('Developed by', 'brainworks') ?>
            <a href="https://brainworks.com.ua/" target="_blank">BRAIN WORKS</a>
            &copy; <?php echo date('Y'); ?>

            <?php /*
            &copy; <?php echo date('Y') ?> <?php _e('All rights reserved', 'brainworks') ?> "<a href="<?php echo esc_url(site_url()) ?>"><?php bloginfo('name') ?></a>"
            */ ?>
        </div>
    </div>
</footer>

</div><!-- .wrapper end-->

<?php scroll_top(); ?>

<?php if (is_customize_preview()) { ?>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_scroll_top_display" }'>
        <?php esc_html_e('Edit Scroll Top', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_analytics_google_placed" }'>
        <?php esc_html_e('Edit Analytics Tracking Code', 'brainworks'); ?>
    </button>
    <button class="button-small customizer-edit" data-control='{ "name":"bw_login_logo" }'>
        <?php esc_html_e('Edit Login Logo', 'brainworks'); ?>
    </button>
<?php } ?>

<div class="is-hide"><?php svg_sprite(); ?></div>

<?php wp_footer(); ?>

</body>
</html>
