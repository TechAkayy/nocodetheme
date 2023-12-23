<?php
if ( ! function_exists( 'my_first_wp_theme_setup' ) ) :

function my_first_wp_theme_setup() {

    /*
     * Make theme available for translation.
     * Translations can be filed in the /languages/ directory.
     */
    /* Pinegrow generated Load Text Domain Begin */
    load_theme_textdomain( 'my_first_wp_theme', get_template_directory() . '/languages' );
    /* Pinegrow generated Load Text Domain End */

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     */
    add_theme_support( 'title-tag' );
    
    /*
     * Enable support for Post Thumbnails on posts and pages.
     */
    add_theme_support( 'post-thumbnails' );
    //Support custom logo
    add_theme_support( 'custom-logo' );

    // Add menus.
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'my_first_wp_theme' ),
        'social'  => __( 'Social Links Menu', 'my_first_wp_theme' ),
    ) );

/*
     * Register custom menu locations
     */
    /* Pinegrow generated Register Menus Begin */

    /* Pinegrow generated Register Menus End */
    
/*
    * Set image sizes
     */
    /* Pinegrow generated Image sizes Begin */

    /* Pinegrow generated Image sizes End */
    
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Enable support for Post Formats.
     */
    add_theme_support( 'post-formats', array(
        'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
    ) );

    /*
     * Enable support for Page excerpts.
     */
     add_post_type_support( 'page', 'excerpt' );
}
endif; // my_first_wp_theme_setup

add_action( 'after_setup_theme', 'my_first_wp_theme_setup' );


if ( ! function_exists( 'my_first_wp_theme_init' ) ) :

function my_first_wp_theme_init() {

    
    // Use categories and tags with attachments
    register_taxonomy_for_object_type( 'category', 'attachment' );
    register_taxonomy_for_object_type( 'post_tag', 'attachment' );

    /*
     * Register custom post types. You can also move this code to a plugin.
     */
    /* Pinegrow generated Custom Post Types Begin */

    /* Pinegrow generated Custom Post Types End */
    
    /*
     * Register custom taxonomies. You can also move this code to a plugin.
     */
    /* Pinegrow generated Taxonomies Begin */

    /* Pinegrow generated Taxonomies End */

}
endif; // my_first_wp_theme_setup

add_action( 'init', 'my_first_wp_theme_init' );


if ( ! function_exists( 'my_first_wp_theme_custom_image_sizes_names' ) ) :

function my_first_wp_theme_custom_image_sizes_names( $sizes ) {

    /*
     * Add names of custom image sizes.
     */
    /* Pinegrow generated Image Sizes Names Begin*/
    /* This code will be replaced by returning names of custom image sizes. */
    /* Pinegrow generated Image Sizes Names End */
    return $sizes;
}
add_action( 'image_size_names_choose', 'my_first_wp_theme_custom_image_sizes_names' );
endif;// my_first_wp_theme_custom_image_sizes_names



if ( ! function_exists( 'my_first_wp_theme_widgets_init' ) ) :

function my_first_wp_theme_widgets_init() {

    /*
     * Register widget areas.
     */
    /* Pinegrow generated Register Sidebars Begin */

    /* Pinegrow generated Register Sidebars End */
}
add_action( 'widgets_init', 'my_first_wp_theme_widgets_init' );
endif;// my_first_wp_theme_widgets_init



if ( ! function_exists( 'my_first_wp_theme_customize_register' ) ) :

function my_first_wp_theme_customize_register( $wp_customize ) {
    // Do stuff with $wp_customize, the WP_Customize_Manager object.

    /* Pinegrow generated Customizer Controls Begin */

    /* Pinegrow generated Customizer Controls End */

}
add_action( 'customize_register', 'my_first_wp_theme_customize_register' );
endif;// my_first_wp_theme_customize_register


if ( ! function_exists( 'my_first_wp_theme_enqueue_scripts' ) ) :
    function my_first_wp_theme_enqueue_scripts() {

        /* Pinegrow generated Enqueue Scripts Begin */

    wp_register_script( 'inline-script-1', '', [], '0.0.3', false );
    wp_enqueue_script( 'inline-script-1' );
    wp_add_inline_script( 'inline-script-1', '/* Pinegrow Interactions, do not remove */ ;(function () {
        try {
          if (!document.documentElement.hasAttribute(\'data-pg-ia-disabled\')) {
            window.pgia_small_mq =
              typeof pgia_small_mq == \'string\'
                ? pgia_small_mq
                : \'(max-width:767px)\'
            window.pgia_large_mq =
              typeof pgia_large_mq == \'string\'
                ? pgia_large_mq
                : \'(min-width:768px)\'
            var style = document.createElement(\'style\')
            var pgcss =
              \'html:not(.pg-ia-no-preview) [data-pg-ia-hide=""] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show=""] {opacity:1;visibility:visible;display:block;}\'
            if (
              document.documentElement.hasAttribute(\'data-pg-id\') &&
              document.documentElement.hasAttribute(\'data-pg-mobile\')
            ) {
              pgia_small_mq = \'(min-width:0)\'
              pgia_large_mq = \'(min-width:99999px)\'
            }
            pgcss +=
              \'@media \' +
              pgia_small_mq +
              \'{ html:not(.pg-ia-no-preview) [data-pg-ia-hide="mobile"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="mobile"] {opacity:1;visibility:visible;display:block;}}\'
            pgcss +=
              \'@media \' +
              pgia_large_mq +
              \'{html:not(.pg-ia-no-preview) [data-pg-ia-hide="desktop"] {opacity:0;visibility:hidden;}html:not(.pg-ia-no-preview) [data-pg-ia-show="desktop"] {opacity:1;visibility:visible;display:block;}}\'
            style.innerHTML = pgcss
            document.querySelector(\'head\').appendChild(style)
          }
        } catch (e) {
          console && console.log(e)
        }
      })()');

    wp_deregister_script( 'my_first_wp_theme-pgia' );
    wp_enqueue_script( 'my_first_wp_theme-pgia', get_template_directory_uri() . '/tailwind_theme/pgia/lib/pgia.js', [], '0.0.3', true);

    wp_deregister_script( 'my_first_wp_theme-main' );
    wp_enqueue_script( 'my_first_wp_theme-main', get_template_directory_uri() . '/tailwind_theme/js/main.js', [], '0.0.3', true);

    /* Pinegrow generated Enqueue Scripts End */

        /* Pinegrow generated Enqueue Styles Begin */

    wp_deregister_style( 'my_first_wp_theme-tailwind' );
    wp_enqueue_style( 'my_first_wp_theme-tailwind', get_template_directory_uri() . '/tailwind_theme/tailwind.css', [], '0.0.3', 'all');

    wp_deregister_style( 'my_first_wp_theme-style' );
    wp_enqueue_style( 'my_first_wp_theme-style', get_bloginfo('stylesheet_url'), [], '0.0.3', 'all');

    /* Pinegrow generated Enqueue Styles End */

    }
    add_action( 'wp_enqueue_scripts', 'my_first_wp_theme_enqueue_scripts' );
endif;

function pgwp_sanitize_placeholder($input) { return $input; }
/*
 * Resource files included by Pinegrow.
 */
/* Pinegrow generated Include Resources Begin */
require_once "inc/custom.php";
if( !class_exists( 'PG_Helper_v2' ) ) { require_once "inc/wp_pg_helpers.php"; }
if( !class_exists( 'PG_Pagination' ) ) { require_once "inc/wp_pg_pagination.php"; }

    /* Pinegrow generated Include Resources End */
?>