<?php
/**
 *
 * @package aanv
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();  
		?>

		<div class="event-info-wrapper">
			<span class="single-event-date"><?php the_field('date'); ?> </span>
			<span class="single-event-time"><?php the_field('time'); ?> </span>
			<span class="single-event-location"><?php the_field('location'); ?> </span>
		</div>


		<?php 
			get_template_part( 'template-parts/content', get_post_type() );

			the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
