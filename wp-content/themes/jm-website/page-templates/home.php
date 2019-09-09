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
										<p>Fathom what’s beyond your beliefs.</p>
									</li>
									<li class="glide__slide">
										<p>Lead a journey of your becoming.</p>
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
							Change is not easy, but nothing is more difficult than being stuck where you don’t belong. As we
							make amends we often feel immobilized and even relapse after moving ahead. The journey of
							transformation needs deep insights of self and an internal alignment to objectives.
							<br><br>
							The journey of coaching is about re-orchestrating your thoughts, beliefs, and perceptions using self-energy to turn things in favour of your contentment. The answer, almost always, is in the question. Together let's analyze those questions and find the best answers.
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
							<a class="item hvr-float-shadow" href="<?php echo get_page_link(9)?>#express">
								<img src="<?php echo get_template_directory_uri() . '/images/home/express.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Express</h4>
									<p>Open yourself</p>
								</div>
							</a>
							<a class="item hvr-float-shadow" href="<?php echo get_page_link(9)?>#examine">
								<img src="<?php echo get_template_directory_uri() . '/images/home/examine.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Examine</h4>
									<p>Know yourself</p>
								</div>
							</a>
							<a class="item hvr-float-shadow" href="<?php echo get_page_link(9)?>#evolve">
								<img src="<?php echo get_template_directory_uri() . '/images/home/evolve.png'; ?>" alt="">
								<div class="meta-info">
									<h4>Evolve</h4>
									<p>Be your best example</p>
								</div>
							</a>
						</div>
						<a href="<?php echo get_page_link(9)?>#life-changing-experience" class="primary-cta">Know More</a>
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
											“Jaya has been a crucial beacon which helped me navigate a very tough yet rewarding patch of my career over the past two years.”
										</p>
										<span>
											Regional Head of a Private Bank
										</span>
									</li>
									<li class="glide__slide">
										<p>
											“Her commitment to me as a client is nothing short of exemplary. It is very commendable in
											today’s time, where relationships are purely transactional, momentary and flippant”
										</p>
										<span>
											Founder, HR Solutions Company
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

