<?php
/**
 * Template Name: OpenStudios Home
 *
 * @package aanv
 */

get_header('openstudios');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			// get_template_part( 'template-parts/content', 'page' );

			the_content();
			?>

			<section class="row openstudios-callout">
				<div class="col-md-4 openstudios-callout-card">

					<?php 
						$callout_1 = get_field('open_studios_callout_1');
						if ($callout_1) { 
					 ?>
						<div class="os-callout-img-wrapper">
							<img src="<?php echo $callout_1['image']; ?>" alt="">
						</div>
						<a href="<?php echo $callout_1['title_link']; ?>"><h2><?php echo $callout_1['title']; ?></h2></a>
						<div><?php echo $callout_1['callout_text']; ?> </div>

					<?php } else { ?>

						<div class="os-callout-img-wrapper">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/open01-Tinthoff_Temp.jpg" alt="">
						</div>
						<a href="<?php echo site_url(); ?>/open-studios-calendar"><h2>Calendar</h2></a>
						<p>Important dates and deadlines for Open Studios Napa Valley Artists and Visitors.</p>
						<a href="<?php echo site_url(); ?>/open-studios-calendar">See the full schedule...</a>

					<?php } ?>

				</div>

				<div class="col-md-4 openstudios-callout-card">

					<?php 
						$callout_2 = get_field('open_studios_callout_2');
						if ($callout_2) { 
					 ?>
						<div class="os-callout-img-wrapper">
							<img src="<?php echo $callout_2['image']; ?>" alt="">
						</div>
						<a href="<?php echo $callout_2['title_link']; ?>"><h2><?php echo $callout_2['title']; ?></h2></a>
						<div><?php echo $callout_2['callout_text']; ?> </div>

					<?php } else { ?>
						
						<div class="os-callout-img-wrapper">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/open02-002501-mapx800w.jpg" alt="">
						</div>
						<a href="<?php echo site_url(); ?>/open-studios-visit"><h2>Visit Open Studios Artists</h2></a>
						<p>See the maps showing where the Open Studios Artist's venues throughout Napa Valley.</p>
						<a href="<?php echo site_url(); ?>/open-studios-visit">Click here to visit studios</a>

					<?php } ?>

				</div>

				<div class="col-md-4 openstudios-callout-card">

					<?php 
						$callout_3 = get_field('open_studios_callout_3');
						if ($callout_3) { 
					 ?>
						<div class="os-callout-img-wrapper">
							<img src="<?php echo $callout_3['image']; ?>" alt="">
						</div>
						<a href="<?php echo $callout_3['title_link']; ?>"><h2><?php echo $callout_3['title']; ?></h2></a>
						<div><?php echo $callout_3['callout_text']; ?> </div>

					<?php } else { ?>

						<div class="os-callout-img-wrapper">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/open03-Bestof.jpg" alt="">
						</div>
						<a href="<?php echo site_url(); ?>/open-studios-registration-intro"><h2>Participate in Open Studios</h2></a>
						<p>All visual artists who live or work in Napa County are invited to be part of Open Studios Napa Valley. Select here to see more information about participating.</p>
						<a href="<?php echo site_url(); ?>/open-studios-registration-intro">Click here to register</a>

					<?php } ?>

				</div>
				
			</section>

			
		<?php 

			

		endwhile; // End of the loop.
		?>

		<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
