<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

function kiosken_register_stylesheet() {
    wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
    wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css");
    wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css");
    wp_enqueue_script("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js", array(), null, true);
    wp_enqueue_script( 'example-script', get_template_directory_uri() . '/js/app.js');
 }
add_action("wp_enqueue_scripts", "kiosken_register_stylesheet"); 

function bake_my_wp_remove_storefront_sidebar() {
	if ( is_woocommerce() || is_checkout() ) {
		remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10 );
	}
}
	
add_action( 'get_header', 'bake_my_wp_remove_storefront_sidebar' );

function kiosken_custom_logo_setup() {
	$defaults = array(
		'height'               => 206,
		'width'                => 376,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
 
}
add_action( 'after_setup_theme', 'kiosken_custom_logo_setup' );


add_theme_support('menus');
function register_my_menus() {
    $args = array( 
        'menu-1' => __( 'Main Menu' )
    );
    register_nav_menus( $args );
}
add_action( 'init', 'register_my_menus' );

function productcardline(){
    ?>
    <div class="divider">
        <div class="divider_line"></div>
    </div>
    <?php
}
add_action("woocommerce_before_shop_loop_item_title","productcardline");



/*remove storefront theme hooks*/

 
add_filter( 'storefront_credit_link', '__return_false' );

add_action( 'init', 'bbloomer_remove_storefront_breadcrumbs' );
 
function bbloomer_remove_storefront_breadcrumbs() {
   remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10 );
}

function bbloomer_remove_storefront_search() {
    remove_action( 'storefront_product_search', 'woocommerce_search', 40 );
 }




    
