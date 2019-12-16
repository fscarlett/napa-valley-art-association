<?php
/**
 *
 * @package aanv
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main">
			<!-- <div class="container "> -->

				<?php
				while ( have_posts() ) : the_post();
				?>

				<h1><?php the_title(); ?></h1> 

				<?php 

				$images = get_field('gallery');

				if( $images ): ?>
					<div class="gallery-wrapper">
				    <ul class="row">
				        <?php foreach( $images as $image ): ?>


				        <?php	$content = '<li class="profile_gallery_card">';
	                $content .= '<a class="gallery_image" href="'. $image['url'] .'">';
                   $content .= '<img src="'. $image['sizes']['large'] .'" alt="'. $image['alt'] .'" />';
	                $content .= '</a>';
			            $content .= '</li>';
			            if ( function_exists('slb_activate') ){
								    $content = slb_activate($content);
							    }
			    
									echo $content;
								?>
				            <!-- <li class="col-sm-4">
				                <a href="<?php echo $image['url']; ?>">
				                     <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />
				                </a>
				                <p><?php echo $image['caption']; ?></p>
				            </li> -->
				        <?php endforeach; ?>
				    </ul>
				  </div>
				<?php endif; ?>



				<hr>

				<h2>Artist Details</h2>
				<div class="row">
					<div class="col-sm-4">
						<div class="avatar-wrapper">
							<img src="<?php the_field('profile_pic'); ?>" alt="">
						</div>

					</div>
					<div class="col-sm-8">

						<?php if (get_field('email')): ?>

							<h3>Email</h3>

							<p class="aanv-profile-website"> <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>

					<?php endif; ?>

						<?php if (get_field('website')): ?>

							<h3>Website</h3>

							<p class="aanv-profile-website"> <a href="<?php the_field('website'); ?>" target="_blank" rel="nofollow"><?php the_field('website'); ?></a></p>

					<?php endif; ?>
					</div>
				</div>
					<hr>

				<div class="row">

					<div class="col-sm-12">

						<h3>Biography</h3>

						<div class="social-media-wrapper"><?php the_field('bio'); ?></div>
						
					</div>
				</div>

					
				<?php
				endwhile; // End of the loop. 
				?>
			<!-- </div> -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
