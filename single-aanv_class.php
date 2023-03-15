<?php
/**
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

			$parental = get_field('parental_consent_required');
		?>

		<h1><?php the_title(); ?></h1>

		<div class="event-info-wrapper">
			<p class="single-event-date">Level of expertise: <?php the_field('level_of_expertise'); ?> </p>
			<p class="single-event-time">Age Range: <?php the_field('age_range'); ?> </p>

			<?php if($parental) {
			 ?>

			<p>Parental consent required</p>

			<?php } ?>
			
		</div>

		<div class="aanv-content-wrapper">
			<div class="aanv-class-featured-image-wrapper" style="max-width: 500px;">

			<?php 
			if (has_post_thumbnail()) {  the_post_thumbnail(); }

			 ?>
			</div>


			 <div class="entry-content">
			 	<?php the_content(); ?>
			 </div>
			

		</div>
		<div class="aanv_class-extras-wrapper">
			<p class="single-event-location">What to bring: <?php the_field('what_to_bring'); ?> </p>
			
		</div>



		<?php 
			// get_template_part( 'template-parts/content', get_post_type() );

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
