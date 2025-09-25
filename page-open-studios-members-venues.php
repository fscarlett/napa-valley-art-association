<?php
/**
 * Template Name: Open Studios by Venues
 *
 * @package aanv
 */

get_header('openstudios');
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">

		<?php
        while ( have_posts() ) : the_post();
    ?>

        <div class="container">
          <h1><?php the_title(); ?></h1>
        </div>
      <div class="content-wrapper">
        <div class="content container">

          <?php

           // the_content();

          ?>

        </div>
      </div>

      <div class="search-wrapper">
        <div class="search-container">
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <?php echo do_shortcode('[wd_asp elements="search" ratio="100%" id=4]'); ?> 
            </div>
          </div>
        </div>
      </div>

      <div class="members-wrapper">
        <div class="members container">

          <?php 

      $aanv_profile_args = array(
        'post_type'       => 'aanv_profile',
        'posts_per_page'  => '-1',
        'meta_key'      => 'venue_number',
        'orderby'     => 'meta_value',
        'order'       => 'ASC',
        'meta_query' => array(
            array(
                'key'     => 'open_studios_participant', 
                'value'   => '1',     
                'compare' => '=',                  
            ),     
        ),
        );

      $aanv_profiles = new WP_Query( $aanv_profile_args );

      if ( $aanv_profiles->have_posts() ) {

        while ( $aanv_profiles->have_posts() ) {

          $aanv_profiles->the_post();

            $avatar = get_field('listed_image');

            if ( !$avatar ) {
              $avatar = site_url() . '/wp-content/uploads/2019/08/aanv-member-thumb2.png';
            }

            if (get_field('open_studios_participant')) {

          ?>

          <div class="artist-card">
          	<div class="photo-wrapper">
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $avatar; ?>" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> #(<?php the_field('venue_number'); ?>)</a></p>
          </div>
          
        <?php
          } // endif for art gallery
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
get_footer();
