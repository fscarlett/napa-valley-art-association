<?php
/**
 * Template Name: Open Studios Members by Medium
 *
 * @package aanv
 */

get_header('openstudios');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
        while ( have_posts() ) : the_post();

          $term = get_query_var( 'medium' );

    ?>

        <div class="container">
          <h1 style="text-transform:uppercase;"><?php echo $term; ?> </h1>
        </div>
      <div class="content-wrapper">
        <div class="content container">

          <?php

           // the_content();

          ?>

        </div>
      </div>
      <div class="members-wrapper">
        <div class="members container">

          <?php 

          // $term = 'mixed-media';

      $aanv_profile_args = array(
        'post_type'       => 'aanv_profile',
        'order'           => 'DESC',
        'posts_per_page'  => '-1',
        'tax_query'       => array(
            array(
              'taxonomy'  => 'artmediums',
              'field'     => 'slug',
              'terms'     => $term,
            ),
          ),
        );

      $aanv_profiles = new WP_Query( $aanv_profile_args );

      if ( $aanv_profiles->have_posts() ) {

        while ( $aanv_profiles->have_posts() ) {

          $aanv_profiles->the_post();

            if (get_field('open_studios_participant')) {

          ?>

            <div class="artist-card">
            	<div class="photo-wrapper">
                <a href="<?php the_permalink(); ?>"><img src="<?php the_field('listed_image'); ?>" alt=""></a>                  
              </div>
              <p class="artist-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            </div>
          
        <?php
          } // endif for open studios

        } // endwhile for artists

      } else {
        echo '<p>No artists have been found.</p>';
      }; 

      wp_reset_postdata();

    ?> 

        </div>
      </div>


      <?php 
          endwhile; // End of the loop.
       ?>

		<?php get_template_part('template-parts/content-footer') ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
