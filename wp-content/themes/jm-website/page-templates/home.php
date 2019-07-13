<?php
	/*
	 * Template Name: Home Page
	 */
?>

<?php get_header(); ?>
<main class="home">
	<section class="home-banner">
		<div class="container quotes-wrapper">
				<div class="row">
					<div class="col-12 col-md-6">
						<div class="quotes">
							<div class="glide__track" data-glide-el="track">
								<ul class="glide__slides">
									<li class="glide__slide">
										<p>Attain your potential by traversing a path to self.</p>
									</li>
									<li class="glide__slide">
										<p>Attain your potential by traversing a path to self.</p>
									</li>
									<li class="glide__slide">
										<p>Attain your potential by traversing a path to self.</p>
									</li>
								</ul>
							</div>
							<div class="glide__bullets" data-glide-el="controls[nav]">
								<button class="glide__bullet" data-glide-dir="=0"></button>
								<button class="glide__bullet" data-glide-dir="=1"></button>
								<button class="glide__bullet" data-glide-dir="=2"></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		<div class="image-wrapper">
			<img class="image" src="<?php echo get_template_directory_uri() . '/images/home/jaya.png'; ?>" alt="">
		</div>
		<div class="arrow-down" onclick="window.scrollBy(0, window.innerHeight);">
			<i class="fal fa-long-arrow-down"></i>
		</div>
	</section>
	<section class="home-lead-from-self">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<article>
						<h2 class="mb-3">
							Lead from Self with
							<span>Jaya Mehrotra</span>
						</h2>
						<p class="mb-5">
							Change is not easy but nothing is more difficult than being stuck where you don’t belong. As we make
							amends we
							feel immobilized so often, even relapse after moving ahead. The journey of transformation needs deep
							insights of
							self and an internal alignment to objectives.
							<br><br>
							Disappointment is more often not as circumstantial as we convince ourselves of, and accomplishment not as
							distant as we believe. The journey of coaching is about re-orchestrating your thoughts, beliefs and
							perceptions
							using self energy. The answer, almost always, is in the question
							<br><br>
							Put a client quote on the right “Jaya was like an eternal freshwater spring for the parched soul in me..”
							Link
							to Client Speak
						</p>
						<a href="<?php echo get_page_link(9)?>" class="primary-cta">Know More</a>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="home-life-changing-experience">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<article>
						<h2>A life changing experience</h2>
						<p>You are the answer to your questions. Let’s make sure you ace them.</p>
						<div class="wrapper py-5">
							<div class="item hvr-float-shadow">
								<img src="<?php echo get_template_directory_uri() . '/images/home/express.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Express</h4>
									<p>Open yourself</p>
								</div>
							</div>
							<div class="item hvr-float-shadow">
								<img src="<?php echo get_template_directory_uri() . '/images/home/examine.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Examine</h4>
									<p>Know yourself</p>
								</div>
							</div>
							<div class="item hvr-float-shadow">
								<img src="<?php echo get_template_directory_uri() . '/images/home/evolve.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Evolve</h4>
									<p>Be your best example</p>
								</div>
							</div>
						</div>
						<a href="<?php echo get_page_link(9)?>" class="primary-cta">Know More</a>
					</article>
				</div>
			</div>
		</div>
	</section>
	<section class="home-client-speak py-5">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 m-auto">
					<article>
						<h2>Client Speak</h2>
						<div class="client-speak">
							<div class="glide__track" data-glide-el="track">
								<ul class="glide__slides">
									<li class="glide__slide">
										<p>
											“She’s helped me trust myself, my instincts and
											find answers within myself”
										</p>
										<span>
											Vidya Nair, Chief Cleanliness Champion, Svabhiman Healthful Living
										</span>
									</li>
									<li class="glide__slide">
										<p>
											“She’s helped me trust myself, my instincts and
											find answers within myself”
										</p>
										<span>
											Vidya Nair, Chief Cleanliness Champion, Svabhiman Healthful Living
										</span>
									</li>
									<li class="glide__slide">
										<p>
											“She’s helped me trust myself, my instincts and
											find answers within myself”
										</p>
										<span>
											Vidya Nair, Chief Cleanliness Champion, Svabhiman Healthful Living
										</span>
									</li>
								</ul>
							</div>
							<div class="glide__bullets" data-glide-el="controls[nav]">
								<button class="glide__bullet" data-glide-dir="=0"></button>
								<button class="glide__bullet" data-glide-dir="=1"></button>
								<button class="glide__bullet" data-glide-dir="=2"></button>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>

