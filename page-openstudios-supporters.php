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

				<section class="row openstudios-sponsors-section">

					<?php
					if( have_rows('sponsor') ):

					    while( have_rows('sponsor') ) : the_row();

					        // Load sub field value.
					        $sponsor_name = get_sub_field('sponsor_name');
					        $sponsor_link = get_sub_field('sponsor_link');
					        $sponsor_logo = get_sub_field('sponsor_logo');
					        $sponsor_logo_aspect_ratio = get_sub_field('sponsor_logo_aspect_ratio');

					        ?>

					        <div class="col-md-6 openstudios-sponsors-card">
					        	<div class="os-sponsors-img-wrapper">
					        		<a href="<?php echo $sponsor_link; ?>" target="_blank" rel="nofollow">
						        		<img src="<?php echo $sponsor_logo; ?>" alt="">
					        		</a>

					        	</div>
					        	<div class="os-sponsor-name-wrapper">
					        		<a href="<?php echo $sponsor_link; ?>" target="_blank" rel="nofollow">
					        			<h3><?php echo $sponsor_name; ?></h3>
					        		</a>
					        	</div>
					        	
					        </div>

							<?php

					        // Do something, but make sure you escape the value if outputting directly...

					    // End loop.
					    endwhile;

					// No value.
					else : ?>

				     <p>There are no Open Studios sponsors yet.</p>

					<?php endif; ?>

					

				</section>

				
			<?php 

				

			endwhile; // End of the loop.
			?>

			<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
 
get_footer();


