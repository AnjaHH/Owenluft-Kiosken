<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="<?php bloginfo('get_template_directory()'); ?>/js/app.js"></script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>



 
<?php wp_body_open(); ?>

<?php do_action( 'storefront_before_site' ); ?>

<div id="page" class="hfeed site">
	<?php do_action( 'storefront_before_header' ); ?>



	<header id="masthead" class="site-header" role="banner" >
        <?php storefront_header_cart() ?>
        <div class="top_bar">
            <div id="logo">
                <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                }
                ?>

            </div>
            <div>
            <?php
                if ( function_exists( 'pre_get_product_search_form' ) ) {
                    the_custom_logo();
                }
                ?>
           
            </div>
        </div>
        <div id="heading-frontpage">
            <?php
        echo ' <a href="https://anjahein.dk/Kiosken/product-category/alle_produkter/"><h1>Æ kiosk</h1></a>';
            ?>
      </div>
      <div id="main-menu">
        <?php
        $args = array(
        'menu' => 'Main Menu',
        'sort_column' => 'menu_order',
        'container' => 'div',
            );
            wp_nav_menu( $args ); ?></div>

<input type="checkbox" id="hamburger-input" class="burger-shower" />
<label id="hamburger-menu" for="hamburger-input">
  <nav id="sidebar-menu">
  <div id="menu">
        <?php
        $args = array(
        'menu' => 'Main Menu',
        'sort_column' => 'menu_order',
        'container' => 'div',
            );
            wp_nav_menu( $args ); ?></div>
  </nav>
</label>

<div class="overlay"></div>

    
	</header><!-- #masthead -->

    
   
	<?php
	/**
	 * Functions hooked in to storefront_before_content
	 *
	 * @hooked storefront_header_widget_region - 10
	 * @hooked woocommerce_breadcrumb - 10
	 */
	do_action( 'storefront_before_content' );
	?>

	<div id="content" class="site-content" tabindex="-1">
		<div class="col-full">

		<?php
		do_action( 'storefront_content_top' );
