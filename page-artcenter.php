<?php
/**
 * Template Name: ArtCenter
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

			?>

			<h1><?php the_title(); ?></h1>

			<?php

			// get_template_part( 'template-parts/content', 'page' );

			the_content();

			

		endwhile; // End of the loop.
		?>

		<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
