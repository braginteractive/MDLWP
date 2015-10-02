<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package MDLWP
 */

?>

	<?php do_action( 'mdlwp_before_closing_content' ); ?>

	</div><!-- #content -->
   
		<footer class="mdl-mega-footer">

		<?php do_action( 'mdlwp_after_opening_footer' ); ?>

		  <div class="mdl-mega-footer__middle-section">
		  	<?php dynamic_sidebar( 'footer-1' ); ?>
		  	<?php dynamic_sidebar( 'footer-2' ); ?>
		  	<?php dynamic_sidebar( 'footer-3' ); ?>
		  	<?php dynamic_sidebar( 'footer-4' ); ?>
		  </div>

		 <?php get_template_part( 'template-parts/nav', 'footer' ); ?>

		<?php do_action( 'mdlwp_before_closing_footer' ); ?>

		</footer>

    </main> <!-- .mdl-layout__content -->
</div><!-- #page -->

<?php wp_footer(); ?>

<?php do_action( 'mdlwp_before_closing_body' ); ?>

</body>
</html>
