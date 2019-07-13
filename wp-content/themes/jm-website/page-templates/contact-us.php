<?php
/*
 * Template Name: Contact Us Page
 */
?>

<?php get_header(); ?>
<main class="contact">
	<section class="contact-heading">
		<h1>Contact</h1>
	</section>
	<section class="contact-form">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 m-auto">
					<h2>
						Quick-start your journey to self-rejuvenation,
						Reach out to Jaya Mehrotra by filling out the form
					</h2>
					<div class="col-md-9 m-auto">
						<?php while(have_posts()): the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
					</div>

					<a href="mailto:jaya.mehrotra@gmail.com" class="email-id">jaya.mehrotra@gmail.com</a>
					
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>
