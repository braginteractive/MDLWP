<?php
/**
 *
 * Template Name: Portfolio
 *
 *
 * @package MDLWP
 */

get_header(); ?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
	<?php
		if(get_theme_mod('display_filter', '1')) {
		    $terms = get_terms("portfolio_category");
		    $count = count($terms);
		    echo '<div class="mdl-tabs__tab-bar">';
		    echo '<a class="mdl-tabs__tab is-active filter categories-item" data-filter="all" href="#all">'. __( "All", "mdlwp" ) .'</a>';
		        if ( $count > 0 )
		        {   
		            foreach ( $terms as $term ) {
		                $termname = strtolower($term->name);
		                $termname = str_replace(' ', '-', $termname);
		                echo '<a class="mdl-tabs__tab filter categories-item" data-filter=".'.$termname.'" href="#'.$termname.'">'.$term->name.'</a>';
		            }
		        }
		    echo "</div>";
		}
	?>

	<div id="primary" class="portfolio">
		<main id="main" class="site-main mdl-grid mdlwp-1200" role="main">

			<?php do_action( 'mdlwp_before_content' ); ?>

			<?php $columns = get_theme_mod( 'portfolio_layout', 'three-column');
		     if($columns == 'three-column') {
		     	$col = '4';
		     } elseif ($columns == 'four-column') {
		     	$col = '3';
		     } else {
		     	$col = '6';
		     }

		     ?>

			<?php while ( have_posts() ) : the_post(); ?>

			<?php
			    $terms = get_the_terms( $post->ID, 'portfolio_category' );
			                         
			    if ( $terms && ! is_wp_error( $terms ) ) : 
			        $links = array();

			        foreach ( $terms as $term ) 
			        {
			            $links[] = $term->name;
			        }
			        $links = str_replace(' ', '-', $links); 
			        $tax = join( " ", $links );     
			    else :  
			        $tax = '';  
			    endif;
		    ?>

				<div class="mdl-cell mdl-cell--<?php echo $col; ?>-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--2dp mix all <?php echo strtolower($tax); ?>"> 
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						
						<div class="mdl-card__media">
							<?php if ( has_post_thumbnail() ) : ?>
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
								<?php the_post_thumbnail(); ?>
								</a>
							<?php endif; ?>
						</div>

						<div class="entry-content mdl-color-text--grey-600 mdl-card__supporting-text">
							<h2>
								
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>	
							</h2><!-- .entry-header -->
						</div><!-- .entry-content -->
					</article><!-- #post-## -->
				</div> <!-- .mdl-cell -->

			<?php endwhile; // End of the loop. ?>

			<?php do_action( 'mdlwp_after_content' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</div><!--.mdl-tabs -->


<?php get_footer(); ?>