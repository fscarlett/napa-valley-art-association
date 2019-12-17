<?php
/**
 * Template Name: ArtCenter Home
 *
 * @package aanv
 */

get_header('artcenter');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();


			// the_content();
			?>


			<section class="row artcenter-top">
				<div class="col-md-6 artcenter-slider-wrapper">

					<?php echo do_shortcode('[metaslider id="155"]'); ?>
					
				</div>
				<div class="col-md-6 artcenter-top-column">
					<h2><?php the_field('art_center_top_column_title'); ?></h2>
					<div class="artcenter-text-wrapper">
						<?php the_field('art_center_top_column_text'); ?>
					</div>
				</div>
			</section>

			<section class="artcenter-middle row">
				<div class="col-md-12">
					<p></p>
					<?php the_field('art_center_middle_section_text') ?>
				</div>
			</section>

			<section class="container artcenter-callout">
				<div class="row">
					<div class="col-md-6 artcenter-callout-card">

						<?php 
							$callout_1 = get_field('art_center_callout_1');
							if ($callout_1) { 
						 ?>
							<div class="ac-callout-img-wrapper">
								<img src="<?php echo $callout_1['image']; ?>" alt="">
							</div>
							<a href="<?php echo $callout_1['title_link']; ?>"><h2><?php echo $callout_1['title']; ?></h2></a>
							<div><?php echo $callout_1['callout_text']; ?> </div>

						<?php } else { ?>

							<div class="ac-callout-img-wrapper">
								<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/center01-1024x272.jpg" alt="">
							</div>
							<a href="<?php echo site_url(); ?>/art-center-calendar"><h2>Event Calendar</h2></a>
							<p>The Art Center hosts classes and seminars for artists and craftspeople of all media and levels of experience.</p>
							<a href="<?php echo site_url(); ?>/art-center-calendar">See the full schedule...</a>

						<?php } ?>

					</div>


					<div class="col-md-6 artcenter-callout-card">

						<?php 
							$callout_2 = get_field('art_center_callout_2');
							if ($callout_2) { 
						 ?>
							<div class="ac-callout-img-wrapper">
								<img src="<?php echo $callout_2['image']; ?>" alt="">
							</div>
							<a href="<?php echo $callout_2['title_link']; ?>"><h2><?php echo $callout_2['title']; ?></h2></a>
							<div><?php echo $callout_2['callout_text']; ?> </div>

						<?php } else { ?>
							<div class="ac-callout-img-wrapper">
								<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/center02-SheilaEvent.jpg" alt="">
							</div>
							<a href="<?php echo site_url(); ?>/art-center-schedule-an-event"><h2>Schedule An Event</h2></a>
							<p>If you're interested in hosting a class or need to plan a gathering in a creative space, fill out a contact form here.</p>
							<a href="<?php echo site_url(); ?>/art-center-schedule-an-event">Schedule an event...</a>

						<?php } ?>

					</div>
				</div>
			</section>

			
		<?php 

		endwhile; // End of the loop.
		?>

		<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
