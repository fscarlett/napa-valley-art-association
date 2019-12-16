<?php
/**
 * Template Name: News 
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

			<h1><?php the_title(); ?></h1>

			<?php

			// get_template_part( 'template-parts/content', 'page' );

				the_content();

			?>

					<?php 

		endwhile; // End of the loop.
		?>

			<section class="aanv-blog-section">
				          <div class="row">
				
				<?php 

							$aanv_blog_args = array(
								'post_type'   		=> 'post',
								'category_name' 	=> 'art-association-napa-valley-news',
				        'order'           => 'DESC',
				        'posts_per_page'  => '12'
				        );

							$args = array(
								'post_type'   => 'post'
							);

				      $aanv_blog = new WP_Query( $aanv_blog_args );


				      if ( $aanv_blog->have_posts() ) {    ?>



							<?php


				        while ( $aanv_blog->have_posts() ) {

				          $aanv_blog->the_post()



				          ?>

				          	
				          	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
												<a href="<?php the_permalink(); ?>">
													<div class="aanv-blog-img-wrapper" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
															<?php // the_post_thumbnail('medium'); ?>
													</div>
												</a>
											<div class="aanv-blog-copy-card">
												 
												<a href="<?php the_permalink(); ?>" ><h3><?php the_title(); ?></h3></a>
												<p class="aanv-blog-meta">Posted by <?php the_author(); ?> on <?php  $post_date = get_the_date( 'F j, Y' ); echo $post_date; ?></p>
												

												<?php the_excerpt(); ?>
											</div>
										</div>


				           <?php
				        } // endwhile 

				      } else {
				         echo '<p>No posts have been found.</p>';
				      }; 

				      wp_reset_postdata();

				    ?> 
				          </div>

			</section>




	

		<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
