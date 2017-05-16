<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package MDLWP
 */

get_header(); ?>

		
	<div id="primary" class="mdl-grid content-area">
		<main id="main" class="site-main mdl-grid mdlwp-900" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
                    <h1 class="page-title"><?php esc_html_e('ΟΟππςς η σελίδα που ψάχνεται δεν βρέθηκε.', 'mdlwp'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
                    <p><?php esc_html_e('Φαίνεται πως δεν υπάρχει τίποτα εδώ.', 'mdlwp'); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
