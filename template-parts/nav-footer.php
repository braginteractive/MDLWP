<?php
/**
 * The template part for displaying the drawer navigation
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package MDLWP
 */

	$args = array(
        'theme_location' => 'footer',
        'menu_class' => 'mdl-mega-footer__link-list',
        'container_class' => 'mdl-mega-footer__bottom-section',
		
	);

	if (has_nav_menu('footer')) {
	    wp_nav_menu($args);
	}
?>
