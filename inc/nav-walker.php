<?php

// Creates a custom walker menu

class MDLWP_Nav_Walker extends Walker_Nav_Menu {


	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent\n";
	}

	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "$indent\n";
	}

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

		$class_names = $value = '';

		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

		if ( in_array( 'current-menu-item', $classes ) )
				$class_names .= ' is-active';

		$class_names = $class_names ? ' class="mdl-navigation__link ' . esc_attr( $class_names ) . '"' : '';

        if ($args->theme_location == 'drawer' && in_array('menu-item-has-children', $classes))
            return;

		$id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );
		$id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

		$output .= $indent . '';

        $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';

        if (!in_array('menu-item-has-children', $classes))
            $attributes .= ' href="' . esc_attr($item->url) . '"';

        $attributes .= ($item->menu_item_parent) ? (!empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '') : '';
        $attributes .= !empty($item->ID) ? ' id="' . esc_attr($item->ID) . '"' : '';
        if ($item->menu_item_parent && $args->theme_location == 'primary') {
            $attributes .= 'class="mdl-menu__item"';
        } else {
            $attributes .= $class_names;
        }


        global $previous;
        $item_output = $args->before;

        if ($args->theme_location == 'primary') {
            if (!$item->menu_item_parent && $previous->menu_item_parent) {
                $item_output .= '</ul>';
            }

            if ($item->menu_item_parent && !$previous->menu_item_parent) {
                $item_output .= '<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="' . $item->menu_item_parent . '">';
            }
        }
        $item_output .= (in_array('menu-item-has-children', $classes) ? '<li' : '<a') . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= in_array('menu-item-has-children', $classes) ? '</li>' : '</a>';
        $item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        $previous = $item;
	}


	function end_el( &$output, $item, $depth = 0, $args = array() ) {
		$output .= "\n";
	}
}