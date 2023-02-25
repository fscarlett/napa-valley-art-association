<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package aanv
 */


		
		$aanv_cats = array();
		foreach (get_the_category($post_id) as $c) {
			$cat = get_category($c);
			array_push($aanv_cats, $cat->name);
		}



	    if( in_array( 'Art Gallery', (array) $aanv_cats) ) {

			get_header('artgallery');

		} else if (  in_array( 'Clay And Glass', (array) $aanv_cats) ) {

			get_header('clayglass');

		} else {

			get_header();

		}

		// var_dump($aanv_cats);

?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

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
