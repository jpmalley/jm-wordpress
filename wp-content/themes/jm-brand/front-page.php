<?php
/* Template Name: Welcome Page */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <section class="main welcome">
        <div class="main-area">
            <div class="main-overlay"></div>
        </div>
    </section>
    <section class="intro welcome">
        <div class="welcome text-center">
            <h1 class="text-shadow">John Malley</h1>
            <div class="tagline text-shadow">Designer &amp; Developer</div>
        </div>
        <div class="text-center">
            <nav class="navbar box-shadow" data-bs-theme="dark">
                <div class="container-fluid">
                    <?php
                        // Output the primary menu
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'nav justify-content-center',
                            'link_class' => 'nav-link',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'walker' => new WP_Bootstrap_Navwalker(),
                        ));
                    ?>
                </div>
            </nav>
            <div class="socials d-flex justify-content-center text-shadow">
                <a class="github" href="https://github.com/jpmalley"><i class="fa-brands fa-github"></i></a>
                <a class="linkedin" href="https://www.linkedin.com/in/jpmalley/"><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
        </div>
    </section>
    <div class="copyright welcome"><small>&copy; 2024 John Malley</small></div>

</body>

</html>