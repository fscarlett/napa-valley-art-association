<?php
/**
 * Template Name: Open Studios Mediums Page
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
      <div class="members-wrapper">
        <div class="members container">


          <div class="artist-card">
          	<div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=acrylic' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/acrylic.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=acrylic' ) ); ?>">Acrylic</a></p>
          </div>


          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=oil' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/oil.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=oil' ) ); ?>">Oil</a></p>
          </div>


          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=watercolor' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/watercolor.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=watercolor' ) ); ?>">Watercolor</a></p>
          </div>


          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=pastel' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/pastel.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=pastel' ) ); ?>">Pastel</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=pen-ink' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/pen-ink.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=pen-ink' ) ); ?>">Pen & ink</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=jewelry' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/jewelry.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=jewelry' ) ); ?>">Jewelry</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-metal' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/metal-sculpture.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-metal' ) ); ?>">Sculpture: Metal</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-clay' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/clay-sculpture.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-clay' ) ); ?>">Sculpture: Clay</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-wood' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/wood.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=sculpture-wood' ) ); ?>">Sculpture: Wood</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=ceramics' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/ceramics.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=ceramics' ) ); ?>">Ceramics</a></p>
          </div>


          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=monotype' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/monotype.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=monotype' ) ); ?>">Monotype</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=photography' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/photography.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=photography' ) ); ?>">Photography</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=printmaking' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/printmaking.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=printmaking' ) ); ?>">Printmaking</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=collage' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/collage.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=collage' ) ); ?>">Collage</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=mixed-media' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/mixed-media.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=mixed-media' ) ); ?>">Mixed Media</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=textiles' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/textiles.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=textiles' ) ); ?>">Textiles</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=glass' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/glass.jpg" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=glass' ) ); ?>">Glass</a></p>
          </div>

          <div class="artist-card">
            <div class="photo-wrapper">
              <a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=encaustics' ) ); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2019/08/encaustic.png" alt=""></a>                  
            </div>
            <p class="artist-name"><a href="<?php echo esc_url( home_url( 'openstudios-by-medium/?medium=encaustics' ) ); ?>">Encaustics</a></p>
          </div>


          

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
