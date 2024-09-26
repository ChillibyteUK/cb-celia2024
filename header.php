<?php
/**
 * The header for the theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package lc-tideywebb
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta
        charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-300.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-500.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/poppins-v20-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/source-sans-3-v15-latin-600.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <link rel="preload"
        href="<?=get_stylesheet_directory_uri()?>/fonts/source-sans-3-v15-latin-regular.woff2"
        as="font" type="font/woff2" crossorigin="anonymous">
    <?php
    if (is_front_page()) {
        ?>
    <script type="application/ld+json">

    </script>
    <?php
    }
if (get_field('ga_property', 'options')) {
    ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async
        src="https://www.googletagmanager.com/gtag/js?id=<?=get_field('ga_property', 'options')?>">
    </script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config',
            '<?=get_field('ga_property', 'options')?>'
        );
    </script>
    <?php
}
if (get_field('gtm_property', 'options')) {
    ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer',
            '<?=get_field('gtm_property', 'options')?>'
        );
    </script>
    <!-- End Google Tag Manager -->
    <?php
}
if (get_field('google_site_verification', 'options')) {
    echo '<meta name="google-site-verification" content="' . get_field('google_site_verification', 'options') . '" />';
}
if (get_field('bing_site_verification', 'options')) {
    echo '<meta name="msvalidate.01" content="' . get_field('bing_site_verification', 'options') . '" />';
}
?>
<!-- Google Tag Manager -- LEGACY -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MK7LHPQ');</script>
<!-- End Google Tag Manager -->
    <?php wp_head(); ?>
    <meta name="google-site-verification" content="4W-KMZmlmLkobQbWLvM7uoxlOnabbV5vxhKhhdoSv0g" />
</head>

<body <?php body_class(); ?>
    <?php understrap_body_attributes(); ?>>
    <?php
do_action('wp_body_open');
?>
    <header class="navholder" id="navholder">
        <div id="wrapper-navbar" class="fixed-top">
            <div class="prenav">
                <div class="container-xl d-flex justify-content-between align-items-center">
                    <a href="/"><img
                            src="<?=get_stylesheet_directory_uri()?>/img/CELIA_Full_DarkBackground.svg"
                            width="280" height="68"
                            alt="Celia Alliance"
                            title="Home"></a>
                    <a href="#contact-us" class="btn btn-prenav">Contact us <span></span></a>
                </div>
            </div>
            <nav id="navbar" class="navbar navbar-expand-lg" aria-labelledby="main-nav-label">
                <div class="container-xl">
                    <button class="navbar-toggler input-button" id="navToggle" data-bs-toggle="collapse"
                        data-bs-target=".navbars" type="button" aria-label="Navigation"><i
                            class="fa fa-navicon"></i></button>
                    <?php
wp_nav_menu(
    array(
                                'theme_location'  => 'primary_nav',
                                'container_class' => 'collapse navbar-collapse navbars',
                                'container_id'    => 'primaryNav',
                                'menu_class'      => 'navbar-nav w-100 gap-4',
                                'fallback_cb'     => '',
                                'menu_id'         => 'main-menu',
                                'depth'           => 2,
                                'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                            )
);
?>
                    <?php
                        echo do_shortcode('[social_icons]');
?>
                </div>
            </nav>
        </div>
    </header>