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
	<meta charset="<?php bloginfo('charset'); ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>

	<!--  Font Awesome Icon-->
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/fonts/fontawesome/css/all.css">

	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/glide.core.css">
	<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/hover.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="jm-website">

	<header class="header py-2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12 col-md-2 d-flex align-items-center">
					<a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
						<img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="">
					</a>
				</div>
				<div class="col-12 col-md-8 d-flex justify-content-center align-items-center">
					<?php if (has_nav_menu('menu-1')) : ?>
						<nav id="site-navigation" class="main-navigation header-navigation"
						     aria-label="<?php esc_attr_e('Top Menu', 'twentynineteen'); ?>">
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
				<div class="col-12 col-md-2 d-flex align-items-center">
					<?php
						$q = new WP_Query('pagename=home');
						while ($q->have_posts()): $q->the_post();
							?>
							<div class="header-social-links">
								<a href="<?php echo get_field('twitter_link'); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
								<a href="<?php echo get_field('facebook_link'); ?>" target="_blank"><i
										class="fab fa-facebook-f"></i></a>
								<a href="<?php echo get_field('linkedin_link'); ?>" target="_blank"><i
										class="fab fa-linkedin-in"></i></a>
							</div>
						<?php endwhile; ?>
				</div>
			</div>
		</div>
	</header>

