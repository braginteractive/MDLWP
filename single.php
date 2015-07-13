<?php
/**
 * The template for displaying all single posts.
 *
 * @package MDLWP
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main mdl-grid mdlwp-900" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

			<?php mdlwp_post_navigation(); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
