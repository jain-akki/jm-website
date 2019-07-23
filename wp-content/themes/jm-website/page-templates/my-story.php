<?php
	/*
	 * Template Name: My Story Page
	 */
?>

<?php get_header(); ?>
<main class="my-story">
	<section class="my-story-heading">
		<h1>My Story</h1>
	</section>
	<section class="my-story-lead-from-self">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-7">
					<h2>
						Lead from Self <br>
						With Coach Jaya Mehrotra
					</h2>
					<p>
						Leadership is not always inborn and that was the biggest learning for me growing up as a serviceman’s
						daughter. Because leadership starts with leading yourself, the discipline of getting yourself to do things
						you ought to be doing. All through my career in banking spanning almost 2 decades I have seen CEO’s and
						first generation entrepreneurs either make it or bring it all to the ground and the key factor that set them
						apart was self leadership.
						<br>
						I saw subordinates, contemporaries and superiors alike struggling with the ‘treadmill syndrome’, running
						frantically but getting nowhere, and that led me to my ardour - Coaching. Although banking for me was
						accomplishment and excellence, influencing people in an inclusive environment was my passion. In 2014, at
						the peak of my career, I decided to graduate as a certified coach fast followed by programs in facilitation
						and self leadership. Now I catalyse individuals in achieving an attuned and steady professional and personal
						life.
					</p>
				</div>
				<div class="col-12 col-md-5 text-center order-first order-md-last">
					<img src="<?php echo get_template_directory_uri() . '/images/about/jaya-new.jpeg'; ?>" alt="">
				</div>
			</div>
		</div>
	</section>
	<section id="life-changing-experience" class="my-story-life-changing-experience">
		<div class="container">

			<div class="row pb-3">
				<div class="col-12">
					<h2>A life changing experience</h2>
					<p class="text-center px-md-5 py-md-3">
						Professional and personal imbalances can have far reaching impact on our efficiency and well-being not only
						taking us further away from what we seek but also restricting us from seeing what we should look for.
						Coaching aligns us to what we are and what we should be
					</p>
				</div>
			</div>

			<div class="row pb-5">
				<div class="col-12 col-md-3">
					<div class="wrapper">
						<img src="<?php echo get_template_directory_uri() . '/images/home/express.png'; ?>" alt="">
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="meta-info">
						<h4>Express</h4>
						<span>Set yourself free.</span>
						<p>There is no greater agony than bearing an untold story. So very often a voice in the head is more
							worrying than the spoken word. Sometimes just listening to self may change the narrative. The first step
							to unleash self energy is to express </p>
					</div>
				</div>
			</div>

			<div class="row pb-5">
				<div class="col-12 col-md-3">
					<div class="wrapper ml-auto">
						<img src="<?php echo get_template_directory_uri() . '/images/home/examine.png'; ?>" alt="">
					</div>
				</div>
				<div class="col-12 col-md-9 order-md-first">
					<div class="meta-info">
						<h4 class="text-md-right">Examine</h4>
						<span class="text-md-right">Get closer to yourself</span>
						<p class="text-md-justify">In most instances, human mind is ‘split’ by constituents of self which prevent us
							from moving forward.
							When we acknowledge the presence of these parts and give them a voice, we create value, clear blockages
							and gain insights into self. Self-discovery makes the ‘whole’ bigger than the ‘sum of the parts’</p>
					</div>
				</div>
			</div>

			<div class="row pb-5">
				<div class="col-12 col-md-3">
					<div class="wrapper">
						<img src="<?php echo get_template_directory_uri() . '/images/home/evolve.png'; ?>" alt="">
					</div>
				</div>
				<div class="col-12 col-md-9">
					<div class="meta-info">
						<h4>Evolve</h4>
						<span>Let your best side rise.</span>
						<p>Identifying and setting goals is not a catalyst for change, internal alignment to the goals is. Once
							aligned to self, a small shift brings about a big leap in achieving objectives. </p>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12 col-md-7 m-auto">
					<p class="text-center">
						Remember, a life coach only makes sure the pitch is clear.
						Ultimately, you are the source of your own revolution.
					</p>
				</div>
			</div>

		</div>
	</section>
</main>
<?php get_footer(); ?>

<script>
	// Code to Scroll down to Life Changing Experience Section
	const link = window.location.href;

	if (link.indexOf('#life-changing-experience') !== -1) {
		$('html, body').animate({
			scrollTop: $('#life-changing-experience .container').offset().top
		}, 1000);
	}
</script>