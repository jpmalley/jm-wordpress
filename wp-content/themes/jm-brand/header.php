<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <section class="nav">
        <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
            <div class="d-flex align-items-center justify-content-between w-100">
                <div class="navbar-group d-flex align-items-center">
                    <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">JM</a>
                    <h1 class="navbar-title d-lg-none"><?php wp_title(''); ?></h1>
                </div>
                <div class="nav-gradient" data-bs-toggle="collapse" data-bs-target="#mainNav"></div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                    aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'depth' => 2,
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse justify-content-md-start text-end',
                    'container_id' => 'mainNav',
                    'menu_class' => 'navbar-nav nav-pills mb-2 mb-lg-0 float-end',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new JM_Bootstrap_Navwalker(),
                ));
            ?>
        </nav>
    </section>
