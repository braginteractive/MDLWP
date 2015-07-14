<?php
/**
 * Template part for displaying single posts.
 *
 * @package MDLWP
 */

?>

<?php
    // Gets the stored background color value 
    $color_value = get_post_meta( get_the_ID(), 'mdlwp-bg-color', true ); 
    // Checks and returns the color value
  	$color = (!empty( $color_value ) ? 'background-color:' . $color_value . ';' : '');

  	// Gets the stored title color value 
    $title_color_value = get_post_meta( get_the_ID(), 'mdlwp-title-color', true ); 
    // Checks and returns the color value
  	$title_color = (!empty( $title_color_value ) ? 'color:' . $title_color_value . ';' : '');

  	// Gets the stored height value 
    $height_value = get_post_meta( get_the_ID(), 'mdlwp-height', true ); 
    // Checks and returns the height value
  	$height = (!empty( $height_value ) ? 'height:' . $height_value . ';' : '');

  	 // Gets the uploaded featured image
  	$featured_img = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
  	// Checks and returns the featured image
  	$bg = (!empty( $featured_img ) ? "background-image: url('". $featured_img[0] ."');" : '');
?>

<div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--2dp"> 
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		

		
		<div class="mdl-card__media" style="<?php echo $color . $bg . $height; ?> ">
			<header>
				<?php the_title( sprintf( '<h3 style="%s"> ', $title_color, '</h3>' )); ?>
			</header><!-- .entry-header -->
		</div>

		<div class="mdl-color-text--grey-700 mdl-card__supporting-text meta">
			<div class="avatar-img">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>
			</div>

			<?php if ( 'post' == get_post_type() ) : ?>
				<div class="entry-meta">
					<?php mdlwp_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
	    </div>

		<div class="entry-content mdl-color-text--grey-600 mdl-card__supporting-text">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'mdlwp' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<?php if ( has_tag() ) { ?>
			<footer class="entry-footer meta mdl-card__actions mdl-card--border">
				<?php mdlwp_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		<?php } ?>
	</article><!-- #post-## -->
</div><!-- .mdl-cell -->

