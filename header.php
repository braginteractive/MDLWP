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
<div id="page" class="hfeed site mdl-layout mdl-js-layout mdl-layout--fixed-header">

<header id="masthead" class="site-header mdl-layout__header" role="banner">
	<div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>

		<div class="mdlwp-search-box mdl-textfield mdl-js-textfield mdl-textfield--expandable mdl-textfield--floating-label mdl-textfield--align-right mdl-textfield--full-width">   
          <?php get_search_form(); ?>
        </div>

      <!-- Navigation. We hide it in small screens. -->
      <div class="mdlwp-navigation-container">  
	    <?php
			$args = array(
		        'theme_location' => 'primary',
		        'container'       => 'nav',
		        'items_wrap' => '%3$s',
		        'container_class' => 'mdl-navigation mdl-layout--large-screen-only',
				'walker' => new MDLWP_Nav_Walker()
			);

			if (has_nav_menu('primary')) {
			       wp_nav_menu($args);
			    }
		?>
	  </div>

        
    </div>
</header>

    <div class="mdl-layout__drawer">
      <span class="mdl-layout-title"><?php bloginfo( 'name' ); ?></span>
      <?php
			$args = array(
		        'theme_location' => 'drawer',
		        'container'       => 'nav',
		        'items_wrap' => '%3$s',
		        'container_class' => 'mdl-navigation',
				'walker' => new MDLWP_Nav_Walker()
			);

			if (has_nav_menu('drawer')) {
			       wp_nav_menu($args);
			    }
		?>
    </div>
			
	
<main class="mdl-layout__content">
	<div id="content" class="site-content mdl-grid">