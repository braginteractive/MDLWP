<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package MDLWP
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php do_action( 'mdlwp_after_opening_body' ); ?>

<div id="page" class="hfeed site mdl-layout mdl-js-layout mdl-layout--fixed-header">

<header id="masthead" class="site-header mdl-layout__header" role="banner">

	<?php do_action( 'mdlwp_after_opening_header' ); ?>

	<?php get_template_part( 'template-parts/nav', 'main' ); ?>

    <?php do_action( 'mdlwp_before_closing_header' ); ?>

</header>

 <?php get_template_part( 'template-parts/nav', 'drawer' ); ?>
			
	
<main class="mdl-layout__content">
	<div id="content" class="site-content">

		<?php do_action( 'mdlwp_after_opening_content' ); ?>