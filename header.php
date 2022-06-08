<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package veramountain
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">
    <link rel="shortcut icon" type="image/jpg" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'veramountain' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php the_custom_logo();?>
		</div><!-- .site-branding -->

		<?php if (has_nav_menu('primary')) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'ths'); ?>">
				<?php
				wp_nav_menu(array(
					'theme_location' => 'primary',
					'depth'          => 3,
					'container'      => false,
					'has_dropdown'   => true,
					));
				?>
			</nav>
		<?php endif; ?><!-- #menu-container -->

		<?php if (has_nav_menu('secondary-menu')) : ?>
			<div>
				<button class="menu-button" onclick="openNav()"><?php _e('Menú','veramountain'); ?></button>
				
			
			<nav id="mySidenav" class="" role="navigation" aria-label="<?php esc_attr_e('Primary Menu', 'veramountain'); ?>">
				<button href="javascript:void(0)" class="closebtn btn mb-2" onclick="closeNav()"> <?php esc_attr_e('Cerrar', 'veramountain'); ?> &times; </button>
				<?php
				wp_nav_menu(array(
					'theme_location' => 'secondary-menu',
					'depth'          => 3,
					'container'      => false,
					'has_dropdown'   => true,
					));
				?>
			</nav>
			
				
		<?php endif; ?><!-- #menu-container -->
	</header><!-- #masthead -->

<script>
	function openNav() {
	document.getElementById("mySidenav").style.width = "300px";

	}

	function closeNav() {
	document.getElementById("mySidenav").style.width = "0";
	}
</script>
