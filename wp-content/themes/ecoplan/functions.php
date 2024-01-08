<?php

// Basic settings
require_once(dirname(__FILE__) . '/includes/settings.php');

// Shortcode declaration
require_once(dirname(__FILE__) . '/includes/shortcode.php');

// Post-type declaration
require_once(dirname(__FILE__) . '/includes/create_posttype.php');



/* ========================================================================= */
/* =========================== EMBEDED RESOURCES =========================== */
function theme_sources()
{

    // REGISTER CSS
    wp_register_style('slick', get_theme_file_uri('/css/slick.css'));
    wp_register_style('slick-theme', get_theme_file_uri('/css/slick-theme.css'));
    wp_register_style('aos-css', get_theme_file_uri('/css/aos.css'));
    wp_register_style('styles', get_theme_file_uri('/css/styles.css'));
    wp_register_style('responsive', get_theme_file_uri('/css/responsive.css'));
    wp_register_style('under', get_theme_file_uri('/css/under.css'));
    wp_register_style('under-res', get_theme_file_uri('/css/under_responsive.css'));

    // ENQUEUE CSS
    wp_enqueue_style('styles');
    wp_enqueue_style('responsive');

    if (is_front_page() || is_home()) :
        // wp_enqueue_style('slick');
        // wp_enqueue_style('slick-theme');
        // wp_enqueue_style('aos-css');
    endif;

    if (!is_front_page() && !is_home()) :
        wp_enqueue_style('under');
        wp_enqueue_style('under-res');
    endif;
    // ENQUEUE CSS -- END

    // ==================================================
    // ==================================================
    // ==================================================

    // JS REGISTER
    wp_register_script('sweetlink', get_theme_file_uri('/js/sweetlink.js'), array(), '', 1);
    wp_register_script('matchheight', get_theme_file_uri('/js/matchheight.js'), array(), '', 1);
    wp_register_script('aos-js', get_theme_file_uri('/js/aos.js'), array(), '', 1);
    wp_register_script('slick-js', get_theme_file_uri('/js/slick.min.js'), array(), '', 1);
    wp_register_script('ajaxzip3', get_theme_file_uri('/js/ajaxzip3.js'), array(), '', 1);
    wp_register_script('common-js', get_theme_file_uri('/js/common.js'), array(), '', 1);
    wp_register_script('top-js', get_theme_file_uri('/js/top.js'), array(), '', 1);

    // JS ENQUEUE
    wp_enqueue_script('jquery');
    wp_enqueue_script('sweetlink');
    wp_enqueue_script('matchheight');
    wp_enqueue_script('slick-js');
    wp_enqueue_script('aos-js');
    wp_enqueue_script('common-js');

    if (is_front_page() || is_home()) :
        wp_enqueue_script('top-js');
    endif;

    if (is_page('partner') || is_page('contact')) :
        wp_enqueue_script('ajaxzip3');
    endif;
    // ENQUEUE JS -- END
}
add_action('wp_enqueue_scripts', 'theme_sources');
/* ============== /////////////////////////////////////////// ============== */
/* ========================================================================= */



/* ========================================================================= */
/* ================ ADD FAVICON FOR WORDPRESS'S ADMIN PAGES ================ */
function add_favicon()
{
    $favicon_url = get_stylesheet_directory_uri() . '/images/favicon.ico';
    echo '<link rel="shortcut icon" href="' . $favicon_url . '" />';
}
add_action('login_head', 'add_favicon');
add_action('admin_head', 'add_favicon');
/* ============== /////////////////////////////////////////// ============== */
/* ========================================================================= */



/* ========================================================================= */
/* =========================== SET POSTS-PER-PAGE ========================== */
function set_query_parameters($query)
{
    if (!is_admin() && (is_post_type_archive('case') || is_tax('case-category'))) {
        $query->set('posts_per_page', 6);
    }
    if (!is_admin() && (is_post_type_archive('column') || is_tax('column-category'))) {
        $query->set('posts_per_page', 4);
    }
    return $query;
}
add_action( 'pre_get_posts', 'set_query_parameters' );
/* ============== /////////////////////////////////////////// ============== */
/* ========================================================================= */
