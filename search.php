<?php
/**
 * The template for displaying search results pages.
 *
 * @package MDLWP
 */

get_header(); ?>


	<section id="primary" class="mdl-grid content-area">
		<main id="main" class="site-main mdl-grid mdlwp-900" role="main">

		<?php do_action( 'mdlwp_before_content' ); ?>

		<?php if ( have_posts() ) : ?>

			<header class="page-header mdl-cell mdl-cell--12-col">
				<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'mdlwp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );
				?>

			<?php endwhile; ?>

			<?php do_action( 'mdlwp_before_pagination' ); ?>

			<?php the_posts_navigation(); ?>

			<?php do_action( 'mdlwp_after_pagination' ); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<?php do_action( 'mdlwp_after_content' ); ?>

		</main><!-- #main -->
	</section><!-- #primary -->


<?php get_footer(); ?>
