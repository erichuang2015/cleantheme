<?php
/**
 * The template for displaying the header.
 *
 * The area of the page that contains links to fonts & scripts, the logo, and header menu.
 *
 * @package WordPress
 * @subpackage CleanTheme
 * @since CleanTheme 0.1
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<script src="https://use.fontawesome.com/b5ba9501bd.js"></script>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<header class="site-header">
		
			<div class="header-title">	
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div><!-- /header-title -->
		
			<nav id="header-nav" class="site-nav clearfix">
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args ); ?>
			</nav><!-- /header-nav -->
			
		</header><!-- /site-header -->