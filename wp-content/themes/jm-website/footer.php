<footer class="footer">
	<section class="footer-top">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
			<img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="">
		</a>
		<?php if ( has_nav_menu( 'menu-1' ) ) : ?>
			<nav id="site-navigation" class="main-navigation navigation py-3"
			     aria-label="<?php esc_attr_e( 'Top Menu', 'twentynineteen' ); ?>">
				<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_class'     => 'main-menu',
							'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						)
					);
				?>
			</nav>
		<?php endif; ?>
	</section>
	<section class="footer-bottom">
		<?php
			$q = new WP_Query( 'pagename=home' );
			while ( $q->have_posts() ): $q->the_post();
				?>
				<div class="copyright">
					<p><?php echo get_field( 'copyright' ); ?></p>
				</div>
				<div class="social-links">
					<a href="<?php echo get_field( 'twitter_link' ); ?>"><i class="fab fa-twitter"></i></a>
					<a href="<?php echo get_field( 'facebook_link' ); ?>"><i class="fab fa-facebook-f"></i></a>
					<a href="<?php echo get_field( 'linkedin_link' ); ?>"><i class="fab fa-linkedin-in"></i></a>
				</div>
			<?php endwhile; ?>
	</section>
</footer>

</div>

<script
	src="https://code.jquery.com/jquery-3.4.1.min.js"
	integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/glide.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>


