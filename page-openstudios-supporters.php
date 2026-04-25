<?php
/**
 * Template Name: OpenStudios Supporters
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

			<?php
			// Check rows exists.
			if( have_rows('sponsor') ):

			    // Loop through rows.
			    while( have_rows('sponsor') ) : the_row();

			        // Load sub field value.
			        $sponsor_name = get_sub_field('sponsor_name');
			        $sponsor_link = get_sub_field('sponsor_link');
			        $sponsor_logo = get_sub_field('sponsor_logo');
			        $sponsor_logo_aspect_ratio = get_sub_field('sponsor_logo_aspect_ratio');




			        
			        // Do something, but make sure you escape the value if outputting directly...

			    // End loop.
			    endwhile;

			// No value.
			else :
			    // Do something...
			endif;

			?>



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

						<p>There are no Open Studios sponsors yet.</p>

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


