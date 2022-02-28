<?php
$theme = wp_get_theme();
define('THEMEBASE_CSS', get_template_directory_uri() . '/css');
define('THEMEBASE_JS', get_template_directory_uri() . '/assets/js');
define('THEMEBASE_THEME_NAME', $theme['Name']);
define('THEMEBASE_THEME_VERSION', $theme->get('Version'));
define('THEMEBASE_THEME_DIR', get_template_directory());
define('THEMEBASE_THEME_URI', get_template_directory_uri());
define('THEMEBASE_THEME_IMAGE_URI', get_template_directory_uri() . '/assets/images');
define('THEMEBASE_CHILD_THEME_URI', get_stylesheet_directory_uri());
define('THEMEBASE_CHILD_THEME_DIR', get_stylesheet_directory());
define('THEMEBASE_FRAMEWORK_DIR', get_template_directory() . '/inc');
define('THEMEBASE_ADMIN', get_template_directory() . '/inc/admin');
define('THEMEBASE_FRAMEWORK_FUNCTION', get_template_directory() . '/inc/functions');
define('THEMEBASE_FRAMEWORK_PLUGIN', get_template_directory() . '/inc/plugins');
define('THEMEBASE_CUSTOMIZER_DIR', THEMEBASE_THEME_DIR . '/customizer');

require_once THEMEBASE_FRAMEWORK_PLUGIN . '/functions.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/function.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/woocommerce.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/ajax_search/ajax-search.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/menus/menu.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/menus/class-edit-menu-walker.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/menus/class-walker-nav-menu.php';
require_once THEMEBASE_FRAMEWORK_FUNCTION . '/ajax-account/custom-ajax.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-customize.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-functions.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-helper.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-kirki.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-static.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-templates.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-aqua-resizer.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-global.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-widgets.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-wpml.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-post-type-blog.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-post-type-portfolio.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-actions-filters.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-enqueue.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-custom-style.php';
require_once THEMEBASE_FRAMEWORK_DIR . '/class-minify.php';
if (!isset($content_width)) {
    $content_width = 1170;
}

function themebase_theme_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
    add_theme_support(
        'custom-logo',
        array(
            'flex-width' => false,
            'flex-height' => false,
        )
    );
}

add_action('after_setup_theme', 'themebase_theme_setup');

/** custom style.css **/
function medy_style() {
    //css 
    wp_register_style('main-style', get_template_directory_uri() . "/assets/css/medy-plus/style.css", 'all');
    wp_enqueue_style( 'main-style');

    //js
    wp_register_script( 'custom-style', get_template_directory_uri() ."/assets/js/medyplus/style.js", array('jquery'), true );
    wp_enqueue_script('custom-style');
}
add_action('wp_enqueue_scripts','medy_style');
/** custom style.css **/



/** custom widget **/
function wp_widgets_custom(){
    // header address
    register_sidebar( array(
        'name'          => __( 'Header Address', 'text_domain' ),
        'id'            => 'sb_header-address',
        'description'   => __( 'Header Address', 'text_domain' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );
    // header address

    // header email
    register_sidebar( array(
        'name'          => __( 'Header Email', 'text_domain' ),
        'id'            => 'sb_header-email',
        'description'   => __( 'Header Email', 'text_domain' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );
    // header email

    // header Tel
    register_sidebar( array(
        'name'          => __( 'Header Tel', 'text_domain' ),
        'id'            => 'sb_header-tel',
        'description'   => __( 'Header Tel', 'text_domain' ),
        'before_widget' => '',
        'after_widget'  => '',
    ) );
    // header Tel
    
    // navbar 
    register_sidebar( array(
        'name'          => __( 'Navbar', 'text_domain' ),
        'id'            => 'sb_navbar',
        'description'   => __( 'Navbar', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_navbar %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="navbar-title">',
        'after_title'   => '</h2>',
    ) );
    // navbar 

    // slider
    register_sidebar( array(
        'name'          => __( 'Slider', 'text_domain' ),
        'id'            => 'sb_slider',
        'description'   => __( 'Slider', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_slider %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="slider-title">',
        'after_title'   => '</h2>',
    ) );
    // slider

    // article
    register_sidebar( array(
        'name'          => __( 'Aticle', 'text_domain' ),
        'id'            => 'sb_article',
        'description'   => __( 'Article', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_article %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="article-title">',
        'after_title'   => '</h2>',
    ) );
    // article

    // sidebar
    register_sidebar( array(
        'name'          => __( 'Sidebar Left', 'text_domain' ),
        'id'            => 'sb_sidebar-left',
        'description'   => __( 'Sidebar Left', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_sidebar-left %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar-title">',
        'after_title'   => '</h2>',
    ) ); 

    register_sidebar( array(
        'name'          => __( 'Sidebar Right', 'text_domain' ),
        'id'            => 'sb_sidebar-right',
        'description'   => __( 'Sidebar Right', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_sidebar-right %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="sidebar-title">',
        'after_title'   => '</h2>',
    ) ); 
    // sidebar

    // Product
    register_sidebar( array(
        'name'          => __( 'Product', 'text_domain' ),
        'id'            => 'sb_product',
        'description'   => __( 'Product', 'text_domain' ),
        'before_widget' => '<div class="product__item">',
        'after_widget'  => '</div>',
    ) );
    // Product

    // news
    register_sidebar( array(
        'name'          => __( 'News', 'text_domain' ),
        'id'            => 'sb_news',
        'description'   => __( 'News', 'text_domain' ),
        'before_widget' => '<div class="medy-col medy-col-4 news__info">',
        'after_widget'  => '</div>',
    ) ); 
    // news

    // Newsletter
    register_sidebar( array(
        'name'          => __( 'Newsletter', 'text_domain' ),
        'id'            => 'sb_newsletter',
        'description'   => __( 'Newsletter', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_newsletter %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="newsletter-title">',
        'after_title'   => '</h2>',
    ) );
    // Newsletter

    // Brands
    register_sidebar( array(
        'name'          => __( 'Brands', 'text_domain' ),
        'id'            => 'sb_brands',
        'description'   => __( 'Brands', 'text_domain' ),
        'before_widget' => '<div id="%1$s" class="widget sb_brands %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="brands-title">',
        'after_title'   => '</h2>',
    ) );
    // Brands
    
}
add_action( 'widgets_init', 'wp_widgets_custom' );

/** custom widget **/

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 50, true );




//hook
function qnd_theme_hook() {
    echo "Hello Word";
}

add_action( 'test_hook', 'qnd_theme_hook' );