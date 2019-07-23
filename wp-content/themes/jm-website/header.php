<?php
	/**
	 * The header for our theme
	 *
	 * This is the template that displays all of the <head> section and everything up until <div id="content">
	 *
	 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
	 *
	 * @package WordPress
	 * @subpackage Twenty_Nineteen
	 * @since 1.0.0
	 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/images/favicon.jpg'; ?>">

	<!--  Font Awesome Icon-->
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/fonts/fontawesome/css/all.css">

	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/glide.core.css">
	<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/hover.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="jm-website">

	<header class="header">
		<div class="header-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-logo">
				<img class="image" src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="">
			</a>
		</div>
		<div class="hamburger">
			<div class="line"></div>
			<div class="line"></div>
			<div class="line"></div>
		</div>
		<div class="header-navigation">
			<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
				<nav id="site-navigation" class="main-navigation"
				     aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
					<?php
						wp_nav_menu(
							array(
								'menu_class' => 'main-menu',
								'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							)
						);
					?>
				</nav>
			<?php endif; ?>
		</div>

		<div class="header-social-links">
			<?php $q = new WP_Query( 'pagename=home' ); ?>
			<?php while ( $q->have_posts() ): $q->the_post(); ?>
				<a class="link" href="<?php echo get_field( 'twitter_link' ); ?>" target="_blank">
					<i class="fab fa-twitter"></i>
				</a>
				<a class="link" href="<?php echo get_field( 'facebook_link' ); ?>" target="_blank">
					<i class="fab fa-facebook-f"></i>
				</a>
				<a class="link" href="<?php echo get_field( 'linkedin_link' ); ?>" target="_blank">
					<i class="fab fa-linkedin-in"></i>
				</a>
			<?php endwhile; ?>
		</div>
	</header>

