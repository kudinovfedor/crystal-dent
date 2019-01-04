<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="<?php bloginfo('name'); ?> - <?php bloginfo('description'); ?>">
    <link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <link rel="icon" href="<?php echo esc_url(get_template_directory_uri() . '/assets/img/favicon.ico'); ?>"
          type="image/x-icon">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="top">

<?php wp_body(); ?>

<div class="wrapper">
    <header class="header js-header">
        <div class="container">
            <div class="row d-flex flex-wrap align-items-center">
                <div class="col-sm-12 col-lg-2 logo header-item header-logo"><?php get_default_logo_link(); ?></div>
                <div class="header-item col-sm-6 col-lg-5">
                    <?php
                    $address = get_theme_mod('bw_additional_address');
                    $workTime = get_theme_mod('bw_additional_work_schedule');
                    if (!empty($address) || !empty($workTime)) { ?>
                        <div class="header-details">
                            <?php if (!empty($address)) {
                                echo '<i class="far fa-map-marker-alt" aria-hidden="true"></i> ';
                                echo esc_html($address);
                            }
                            echo '<br>';
                            if (!empty($workTime)) {
                                echo '<i class="far fa-clock" aria-hidden="true"></i> ';
                                echo esc_html($workTime);
                            } ?>
                        </div>
                    <?php } ?>

                    <?php if (has_nav_menu('main-nav')) { ?>
                        <nav class="nav header-nav js-menu">
                            <button type="button" tabindex="0"
                                    class="menu-item-close menu-close js-menu-close"></button>
                            <?php wp_nav_menu(array(
                                'theme_location' => 'main-nav',
                                'container' => false,
                                'menu_class' => 'menu-container',
                                'menu_id' => '',
                                'fallback_cb' => 'wp_page_menu',
                                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'depth' => 3
                            )); ?>
                        </nav>
                    <?php } ?>
                </div>

                <div class="header-item col-sm-6 col-lg-5 text-right">
                    <div class="row d-flex flex-wrap align-items-center">
                        <?php if (has_phones()) { ?>
                            <div class="header-phone col-sm-12 col-md-6 col-lg-6">
                                <ul class="phone">
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
                                </ul>
                            </div>
                        <?php } ?>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <?php if (function_exists('pll_the_languages')) { ?>
                                <ul class="header-lang lang">
                                    <?php pll_the_languages(array(
                                        'show_flags' => 0,
                                        'show_names' => 1,
                                        'hide_if_empty' => 0,
                                        'display_names_as' => 'name' // name
                                    )); ?>
                                </ul>
                            <?php } ?>
                            <button type="button" class="header-btn button-medium <?php the_lang_class('js-appointment'); ?>">
                                <i class="far fa-comment-dots" aria-hidden="true"></i>
                                <?php _e('Sign up appointment', 'brainworks'); ?>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header-space js-header-space"></div>

    <div class="container js-container">

        <div class="nav-mobile-header">
            <button class="hamburger js-hamburger" type="button" tabindex="0">
            <span class="hamburger-box">
                <span class="hamburger-inner"></span>
            </span>
            </button>
            <div class="logo"><?php get_default_logo_link(); ?></div>
        </div>
