<?php
/**
 * Template Name: Events Page
 *
 * @package aanv
 */

get_header();
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

            the_content();

          ?>

        </div>
      </div>

      <!-- <div class="search-wrapper">
        <div class="search-container">
          <div class="row">
            <div class="col-md-4 offset-md-4">
              <?php // echo do_shortcode('[wd_asp elements="search" ratio="100%" id=1]'); ?> 
            </div>
          </div>
        </div>
      </div> -->



      <div class="members-wrapper">
        <div class="members container">

          <?php 

            $aanv_event_args = array(
              'post_type'       => 'aanv_event',
              'order'           => 'ASC',
              'posts_per_page'  => '15',
              'meta_key'        => 'date',
              'orderby'         => 'meta_value'
              );

            $aanv_events = new WP_Query( $aanv_event_args );

            if ( $aanv_events->have_posts() ) {

              while ( $aanv_events->have_posts() ) {

                $aanv_events->the_post();

                $today = new DateTime('now');
                $date = get_field('date', false, false);
                $date = new DateTime($date);

                if ($date >= $today) {

                ?>

                  <div class="event-card row">
                  	<div class="event-img-wrapper col-sm-3">
                      <a href="<?php the_permalink(); ?>"><?php echo get_the_post_thumbnail(); ?></a>                  
                    </div>
                    <div class="info-wrapper col-sm-9">
                      
                      <h2 class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                      
                      <p><span class="event-date"><?php the_field('date'); ?></span> | <span class="event-time"><?php the_field('time'); ?></span> | <span class="event-location"><?php the_field('location'); ?></span></p>
                      
                      <p><?php the_excerpt(); ?></p>
                      

                    </div>
                  </div>
          
                <?php
                  } // endif for events - date
                } // endwhile for events

              } else {
                echo '<p>No events have been found.</p>';
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
