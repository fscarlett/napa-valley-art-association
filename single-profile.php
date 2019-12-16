<?php
/**
 *
 * @package aanv
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container band-container">

				<?php
				while ( have_posts() ) : the_post();
				?>

				<h1><?php the_title(); ?></h1> 

				<div class="row">
					<div class="bio col-sm-6">
						<?php the_content(); ?>
					</div>				

					
				</div>



					
				<?php
				endwhile; // End of the loop. 
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
