<?php
function theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'your-theme'),
    ));
}
add_action('after_setup_theme', 'theme_setup');

function enqueue_theme_styles() {
    wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_theme_styles');


add_action('init', 'create_portfolio_post_type');
function add_fontawesome() {
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'add_fontawesome');
?>
<?php
function create_portfolio_post_type() {
    register_post_type('portfolio',
        array(
            'labels' => array(
                'name' => __('Portfolio'),
                'singular_name' => __('Portfolio Item')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'portfolio'),
            'show_in_rest' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'custom-fields'),
            'show_in_rest' => true,
            'menu_icon' => 'dashicons-portfolio',
        )
    );
}
add_action('init', 'create_portfolio_post_type');
function register_portfolio_taxonomy() {
    register_taxonomy('portfolio_category', 'portfolio', array(
        'label' => 'Portfolio Categories',
        'hierarchical' => true,
        'public' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
        'show_in_rest' => true, 
    ));
}
add_action('init', 'register_portfolio_taxonomy');
function mytheme_setup() {
    add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'mytheme_setup');
