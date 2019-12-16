<?php
/**
 * Template Name: ArtGallery Home
 *
 * @package aanv
 */

get_header('artgallery');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			the_content();
			?>

			<section class="row artgallery-callout">
				<div class="col-md-6 artgallery-callout-card">

					<?php 
						$callout_1 = get_field('artgallery_callout_1');
						if ($callout_1) { 
					 ?>
						<div class="ag-callout-img-wrapper">
							<img src="<?php echo $callout_1['image']; ?>" alt="">
						</div>
						<a href="<?php echo $callout_1['title_link']; ?>"><h2><?php echo $callout_1['title']; ?></h2></a>
						<div><?php echo $callout_1['callout_text']; ?> </div>

					<?php } else { ?>

						<div class="ag-callout-img-wrapper">
							<img src="<?php echo site_url() ?>/wp-content/uploads/2019/10/Sonoma_Square_lis_macdonald.jpg" alt="">
						</div>
						<a href="<?php echo site_url(); ?>/art-gallery-calendar"><h2>Event Calendar</h2></a>
						<p><span>Sonoma Square</span> by watercolor artist Lis MacDonald</p>

					<?php } ?>
				</div>

				<div class="col-md-6 artgallery-callout-card">

					<?php 
						$callout_2 = get_field('artgallery_callout_2');
						if ($callout_2) { 
					 ?>
						<div class="ag-callout-img-wrapper">
							<img src="<?php echo $callout_2['image']; ?>" alt="">
						</div>
						<a href="<?php echo $callout_2['title_link']; ?>"><h2><?php echo $callout_2['title']; ?></h2></a>
						<div><?php echo $callout_2['callout_text']; ?> </div>

					<?php } else { ?>

					<div class="ag-callout-img-wrapper">
						<img src="<?php echo site_url() ?>/wp-content/uploads/2019/06/gallery02-jeanne-dillon.jpg" alt="">
					</div>
					<a href="<?php echo site_url(); ?>/art-gallery-participating-artists"><h2>Gallery Manager Jeanne Dillon</h2></a>
					<a href="<?php echo site_url(); ?>/art-gallery-participating-artists">Click Here for list of Art Gallery Members</a>

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
