<?php
/**
 * Dr.Polonsky Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dr.Polonsky_Theme
 */

function dd($object)
{
    echo '<pre>';
    var_dump($object);
    exit;
}

if (!defined('_S_VERSION')) {
    // Replace the version number of the theme on each release.
    define('_S_VERSION', '1.0.0');
}

// Custom header menu walker
require get_template_directory() . '/inc/Dpt_Header_Menu.php';
// Register custom post types.
require get_template_directory() . '/inc/custom_post_types.php';
// Register custom image sizes.
require get_template_directory() . '/inc/custom_image_sizes.php';

// Disable admin bar
add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', function () {
    // Let WordPress manage the document title.
    add_theme_support('title-tag');
    // Add support for core custom logo
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 100,
            'width'       => 300,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
    // Add support for editor styles.
    add_theme_support('editor-styles');
    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails', ['post', 'page', 'promotions', 'personnel']);

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'primary' => esc_html__('Primary menu', 'dpt'),
            'footer'  => __('Secondary menu', 'dpt'),
        )
    );

});

// Enqueue scripts and styles.
add_action('wp_enqueue_scripts', function () {

    wp_enqueue_style('dpt-google-fonts',
        'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style('dpt-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('dpt-style', 'rtl', 'replace');

    $styles = array(
        'bootstrap'            => '/vendor/bootstrap/css/bootstrap.min.css',
        'icofont'              => '/vendor/icofont/icofont.min.css',
        'boxicons'             => '/vendor/boxicons/css/boxicons.min.css',
        'venobox'              => '/vendor/venobox/venobox.css',
        'animate'              => '/vendor/animate.css/animate.min.css',
        'remixicon'            => '/vendor/remixicon/remixicon.css',
        'owl-carousel'         => '/vendor/owl.carousel/assets/owl.carousel.min.css',
        'bootstrap-datepicker' => '/vendor/bootstrap-datepicker/css/bootstrap-datepicker.min.css',
        'main-style'           => '/css/style.css',
    );
    foreach ($styles as $name => $location) {
        wp_enqueue_style(
            'dpt-' . $name . '-css',
            get_template_directory_uri() . '/assets' . $location,
            array(),
            _S_VERSION
        );
    }

    wp_deregister_script('jquery');
    wp_register_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js');
    wp_enqueue_script('jquery');

    $scripts = array(
        'bootstrap-bundle'     => '/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'jquery-easing'        => '/vendor/jquery.easing/jquery.easing.min.js',
        'validate'             => '/vendor/php-email-form/validate.js',
        'venobox'              => '/vendor/venobox/venobox.min.js',
        'jquery-waypoints'     => '/vendor/waypoints/jquery.waypoints.min.js',
        'counterup'            => '/vendor/counterup/counterup.min.js',
        'owl-carousel'         => '/vendor/owl.carousel/owl.carousel.min.js',
        'bootstrap-datepicker' => '/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js',
        'main'                 => '/js/main.js',
    );
    foreach ($scripts as $name => $location) {
        wp_enqueue_script(
            'dpt-' . $name . '-js',
            get_template_directory_uri() . '/assets' . $location,
            array(),
            _S_VERSION,
            true);

    }
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
});

add_action('widgets_init', function () {
    register_sidebar([
        'name'          => 'Боковая колонка для постов',
        'id'            => 'sidebar-blog',
        'description'   => 'Выводится на страницах блога.',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="h3">',
        'after_title'   => '</div>',
    ]);
});

add_filter('the_content', function ($content) {
    return preg_replace('~<p>(<img.*/>)</p>~', '\1', $content);
});

add_filter('post_thumbnail_html', 'remove_width_attribute', 10);
add_filter('image_send_to_editor', 'remove_width_attribute', 10);

function remove_width_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', "", $html);
    return $html;
}
