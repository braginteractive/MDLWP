<?php
/**
 *
 * Template Name: Login
 *
 *
 * @package MDLWP
 */

get_header(); ?>

<div class="bg" style="background-color:#000;" >	
	<div class="login">

			<?php do_action( 'mdlwp_before_content' ); ?>

			<?php while ( have_posts() ) : the_post(); ?>
						
						<div class="mdl-card mdl-shadow--2dp ribbon-content"> 
							

								<div class="content">
									<?php the_content(); ?>
									
								</div><!-- .content -->
						
						</div> <!-- .mdl-cell -->
					

			<?php endwhile; // End of the loop. ?>

	</div><!-- .login -->
</div>
	

<?php get_footer(); ?>