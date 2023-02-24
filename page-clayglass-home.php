<?php
/**
 * Template Name: Clay & Glass Home
 *
 * @package aanv
 */

get_header('clayglass');

?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

				the_content();

		?>

		<section class="home-callout">

			<div class="row">

				<?php 
					$callout_1 = get_field('home_callout_1');
					if ($callout_1) { 
				 ?>
					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo $callout_1['link']; ?>"><img src="<?php echo $callout_1['callout_image']; ?>" alt=""></a>
						<a href="<?php echo $callout_1['link']; ?>"><h2><?php echo $callout_1['callout_title']; ?></h2></a>
						<p><?php echo $callout_1['callout_text']; ?></p>
						<a href="<?php echo $callout_1['link']; ?>">Read More</a>
					</div>

				<?php } else { ?>

				<div class="col-lg-3 col-md-6 home-callout-card">
					<a href="<?php echo site_url(); ?>/art-center-calendar"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/06/home1-ANN_NUNZIATA_DEMONSTRATING.png" alt=""></a>
					<a href="<?php echo site_url(); ?>/art-center-calendar"><h2>Events</h2></a>
					<p>The Art Center hosts classes and seminars, the Gallery mounts shows and special gatherings, while important Association meetings concern artists throughout the Valley.</p>
					<a href="<?php echo site_url(); ?>/art-center-calendar">Read More</a>
				</div>

				<?php } ?>


				<?php 
					$callout_2 = get_field('home_callout_2');
					if ($callout_2) { 
				 ?>
					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo $callout_2['link']; ?>"><img src="<?php echo $callout_2['callout_image']; ?>" alt=""></a>
						<a href="<?php echo $callout_2['link']; ?>"><h2><?php echo $callout_2['callout_title']; ?></h2></a>
						<p><?php echo $callout_2['callout_text']; ?></p>
						<a href="<?php echo $callout_2['link']; ?>">Read More</a>
					</div>

				<?php } else { ?>

					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo site_url(); ?>/artist-opportunities"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/06/home2-Jeanne-Dillonin-Studio-5118.jpg" alt=""></a>
						<a href="<?php echo site_url(); ?>/artist-opportunities"><h2>ARTIST OPPORTUNITIES</h2></a>
						<p>We are proud to support artists through scholarships, networks, events, and promotions within the Napa Valley and beyond.</p>
						<a href="<?php echo site_url(); ?>/artist-opportunities">Read More</a>
					</div>

				<?php } ?>


				<?php 
					$callout_3 = get_field('home_callout_3');
					if ($callout_3) { 
				 ?>
					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo $callout_3['link']; ?>"><img src="<?php echo $callout_3['callout_image']; ?>" alt=""></a>
						<a href="<?php echo $callout_3['link']; ?>"><h2><?php echo $callout_3['callout_title']; ?></h2></a>
						<p><?php echo $callout_3['callout_text']; ?></p>
						<a href="<?php echo $callout_3['link']; ?>">Read More</a>
					</div>

				<?php } else { ?>

					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo site_url(); ?>/workshops"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/06/home3-Shibano.jpg" alt=""></a>
						<a href="<?php echo site_url(); ?>/workshops"><h2>WORKSHOPS AND CLASSES</h2></a>
						<p>Some of Napa's most talented artists lend their expertise to ongoing classes and special workshops through the month.</p>
						<a href="<?php echo site_url(); ?>/workshops">Read More</a>
					</div>
				<?php } ?>



				<?php 
					$callout_4 = get_field('home_callout_4');
					if ($callout_4) { 
				 ?>
					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo $callout_4['link']; ?>"><img src="<?php echo $callout_4['callout_image']; ?>" alt=""></a>
						<a href="<?php echo $callout_4['link']; ?>"><h2><?php echo $callout_4['callout_title']; ?></h2></a>
						<p><?php echo $callout_4['callout_text']; ?></p>
						<a href="<?php echo $callout_4['link']; ?>">Read More</a>
					</div>

				<?php } else { ?>
					
					<div class="col-lg-3 col-md-6 home-callout-card">
						<a href="<?php echo site_url(); ?>/registration"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/06/home4-Sheryl-Marshall-in-Studio-5117.jpg" alt=""></a>
						<a href="<?php echo site_url(); ?>/registration"><h2>BECOME A MEMBER</h2></a>
						<p>AANV members enjoy many benefits through our website, our gallery and events, our workshops and classes, and special opportunities like Open Studios.</p>
						<a href="<?php echo site_url(); ?>/registration">Read More</a>
					</div>
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
// get_sidebar();
get_footer();
