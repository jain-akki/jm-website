<?php
	/*
	 * Template Name: Client Stories Page
	 */
?>

<?php get_header(); ?>
<main class="client-stories">
	<section class="client-stories-heading">
		<h1>Client Stories</h1>
	</section>
	<section class="client-stories-articles">
		<div class="container profile">
			<div class="row">
				<div class="col-12 col-md-9 profile-left">
					<?php $args = array('post_type' => 'post'); ?>
					<?php $q = new WP_Query($args); ?>
					<?php while ($q->have_posts()): $q->the_post(); ?>
						<article>
							<h3><?php the_title(); ?></h3>
							<p><?php the_content(); ?></p>
							<span class="name"><?php echo get_field('client_name'); ?></span>
							<span class="designation"><?php echo get_field('client_designation'); ?></span>
						</article>
					<?php endwhile; ?>
				</div>
				<div class="col-12 col-md-3 profile-right">
					<article class="profile-right-first">
						<img src="<?php echo get_template_directory_uri() . '/images/client-stories/jaya.jpg'; ?>"
						     alt="Jaya's Picture">
						<p class="mt-3">Lets make today happier and tomorrow brighter!</p>
					</article>
					<article class="profile-right-second">
						<h5>Follow Me</h5>
						<?php
							$q = new WP_Query('pagename=home');
							while ($q->have_posts()): $q->the_post();
								?>
								<div class="flex-container">
									<div class="item">
										<a href="<?php echo get_field('linkedin_link'); ?>" target="_blank"><i
												class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							<?php endwhile; ?>
					</article>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

