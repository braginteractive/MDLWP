<?php
/**
 * MDLWP Theme Customizer
 *
 * @package MDLWP
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function mdlwp_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	$wp_customize->remove_control('blogdescription');
	$wp_customize->remove_control("header_textcolor");
	$wp_customize->remove_control("header_image");

	/**
	 *
	 * - Setting: Primary Color
	 * - Control: radio-image
	 * - Sanitization: select
	 * 
	 * Uses a custom radio-image control to configure the Blog Layout setting.
	 * 
	 * @uses $wp_customize->add_setting() https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
	 * @link $wp_customize->add_setting() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting
	 */
	$wp_customize->add_setting(
		// $id
		'primary_color',
		// $args
		array(
			'indigo'			=> '#3F51B5',
			'default'			=> 'indigo',
		)
	);

	/**
	 *
	 * - Setting: Secondary COlor
	 * - Control: radio-image
	 * - Sanitization: select
	 * 
	 * Uses a custom radio-image control to configure the Blog Layout setting.
	 * 
	 * @uses $wp_customize->add_setting() https://developer.wordpress.org/reference/classes/wp_customize_manager/add_setting/
	 * @link $wp_customize->add_setting() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting
	 */
	$wp_customize->add_setting(
		// $id
		'secondary_color',
		// $args
		array(
			'pink'			=> '#E91E63',
			'default'		=> 'pink',
		)
	);


	class MDLWP_Custom_Radio_Image_Control extends WP_Customize_Control {
		/**
		 * Declare the control type.
		 *
		 * @access public
		 * @var string
		 */
		public $type = 'radio-image';
		
		/**
		 * Enqueue scripts and styles for the custom control.
		 * 
		 * Scripts are hooked at {@see 'customize_controls_enqueue_scripts'}.
		 * 
		 * Note, you can also enqueue stylesheets here as well. Stylesheets are hooked
		 * at 'customize_controls_print_styles'.
		 *
		 * @access public
		 */
		public function enqueue() {
			wp_enqueue_script( 'jquery-ui-button' );
		}
		
		/**
		 * Render the control to be displayed in the Customizer.
		 */
		public function render_content() {
			if ( empty( $this->choices ) ) {
				return;
			}			
			
			$name = '_customize-radio-' . $this->id;
			?>
			<span class="customize-control-title">
				<?php echo esc_attr( $this->label ); ?>
				<?php if ( ! empty( $this->description ) ) : ?>
					<span class="description customize-control-description"><?php echo wp_kses_post( $this->description ); ?></span>
				<?php endif; ?>
			</span>
			<div id="input_<?php echo $this->id; ?>" class="image">
				<?php foreach ( $this->choices as $value => $label ) : ?>
					<input class="image-select" type="radio" value="<?php echo esc_attr( $value ); ?>" id="<?php echo $this->id . $value; ?>" name="<?php echo esc_attr( $name ); ?>" <?php $this->link(); checked( $this->value(), $value ); ?>>
						<label for="<?php echo $this->id . $value; ?>">
							<div title="<?php echo $value; ?>" style='background-color:<?php echo esc_html( $label ); ?>' alt></div>
						</label>
					</input>
				<?php endforeach; ?>
			</div>
			<script>jQuery(document).ready(function($) { $( '[id="input_<?php echo $this->id; ?>"]' ).buttonset(); });</script>
			<?php
		}
	}
	
	
	/**
	 * Radio Image control.
	 *
	 * - Control: Radio Image
	 * - Setting: Primary Color
	 * - Sanitization: select
	 * 
	 * Register "MDLWP_Custom_Radio_Image_Control" to be  used to configure
	 * the Blog Posts Index Layout setting.
	 * 
	 * @uses $wp_customize->add_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
	 * @link $wp_customize->add_control() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
	 */
	$wp_customize->add_control(
		new MDLWP_Custom_Radio_Image_Control( 
			// $wp_customize object
			$wp_customize,
			// $id
			'primary_color',
			// $args
			array(
				'settings'		=> 'primary_color',
				'section'		=> 'colors',
				'priority'		=> 1,
				'label'			=> __( 'Primary Color', 'theme-slug' ),
				'description'	=> __( 'Select the primary color to be used for your site. <a target="_blank" href="http://www.getmdl.io/customize/index.html"> MDL Color Wheel </a>', 'theme-slug' ),
				'choices'		=> array(
					'red' 			=> '#F44336',
					'pink' 			=> '#E91E63',
					'purple' 		=> '#9C27B0',
					'deep_purple' 	=> '#673AB7',
					'indigo' 		=> '#3F51B5',
					'blue' 			=> '#2196F3',
					'light_blue' 	=> '#03A9F4',
					'cyan' 			=> '#00BCD4',
					'teal' 			=> '#009688',
					'green' 		=> '#4CAF50',
					'light_green' 	=> '#8BC34A',
					'lime' 			=> '#CDDC39',
					'yellow' 		=> '#FFEB3B',
					'amber' 		=> '#FFC107',
					'orange' 		=> '#FF9800',
					'deep_orange' 	=> '#FF5722',
					'brown' 		=> '#795548',
					'grey' 			=> '#9E9E9E', 
					'blue_grey' 	=> '#607D8B',
				)
			)
		)
	);

	/**
	 * Radio Image control.
	 *
	 * - Control: Radio Image
	 * - Setting: Secondary Color
	 * - Sanitization: select
	 * 
	 * Register "MDLWP_Custom_Radio_Image_Control" to be  used to configure
	 * the Blog Posts Index Layout setting.
	 * 
	 * @uses $wp_customize->add_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/add_control/
	 * @link $wp_customize->add_control() https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
	 */
	$wp_customize->add_control(
		new MDLWP_Custom_Radio_Image_Control( 
			// $wp_customize object
			$wp_customize,
			// $id
			'secondary_color',
			// $args
			array(
				'settings'		=> 'secondary_color',
				'section'		=> 'colors',
				'priority'		=> 2,
				'label'			=> __( 'Accent Color', 'theme-slug' ),
				'description'	=> __( 'Select the accent color to be used for your site. <a target="_blank" href="http://www.getmdl.io/customize/index.html"> MDL Color Wheel </a>', 'theme-slug' ),
				'choices'		=> array(
					'red' 			=> '#F44336',
					'pink' 			=> '#E91E63',
					'purple' 		=> '#9C27B0',
					'deep_purple' 	=> '#673AB7',
					'indigo' 		=> '#3F51B5',
					'blue' 			=> '#2196F3',
					'light_blue' 	=> '#03A9F4',
					'cyan' 			=> '#00BCD4',
					'teal' 			=> '#009688',
					'green' 		=> '#4CAF50',
					'light_green' 	=> '#8BC34A',
					'lime' 			=> '#CDDC39',
					'yellow' 		=> '#FFEB3B',
					'amber' 		=> '#FFC107',
					'orange' 		=> '#FF9800',
					'deep_orange' 	=> '#FF5722',
					//'brown' 		=> '#795548',
					//'grey' 			=> '#9E9E9E', 
					//'blue_grey' 	=> '#607D8B',
				)
			)
		)
	);
}

add_action( 'customize_register', 'mdlwp_customize_register' );

/**
 * Add CSS for custom controls
 *
 * This function incorporates CSS from the Kirki Customizer Framework
 *
 * The Kirki Customizer Framework, Copyright Aristeides Stathopoulos (@aristath),
 * is licensed under the terms of the GNU GPL, Version 2 (or later)
 *
 * @link https://github.com/reduxframework/kirki/
 */
function MDLWP_customizer_custom_control_css() { 
	?>
	<style>
	.customize-control-radio-image .image.ui-buttonset input[type=radio] {
		height: auto; 
	}
	.customize-control-radio-image .image.ui-buttonset label {
		display: inline-block;
		margin-right: 5px;
		margin-bottom: 5px; 
	}
	.customize-control-radio-image .image.ui-buttonset label.ui-state-active {
		background: none;
	}
	.customize-control-radio-image .customize-control-radio-buttonset label {
		padding: 5px 10px;
		background: #f7f7f7;
		border-left: 1px solid #dedede;
		line-height: 35px; 
	}
	.customize-control-radio-image label div {
		border: 1px solid #bbb;
		height: 50px;
		width: 50px;
	}
	#customize-controls .customize-control-radio-image label img {
		max-width: 50px;
		height: auto;
	}
	.customize-control-radio-image label.ui-state-active div {
		background: #dedede; 
		border-color: #000; 
		opacity: 1;
	}
	.customize-control-radio-image label.ui-state-hover div {
		opacity: 0.9;
		border-color: #999; 
	}
	.customize-control-radio-buttonset label.ui-corner-left {
		border-radius: 3px 0 0 3px;
		border-left: 0; 
	}
	.customize-control-radio-buttonset label.ui-corner-right {
		border-radius: 0 3px 3px 0; 
	}
	</style>
	<?php
}
add_action( 'customize_controls_print_styles', 'MDLWP_customizer_custom_control_css' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function mdlwp_customize_preview_js() {
	wp_enqueue_script( 'mdlwp_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'mdlwp_customize_preview_js' );

/**
 * Customizer: Sanitization Callbacks
 *
 * This file demonstrates how to define sanitization callback functions for various data types.
 * 
 * @package   code-examples
 * @copyright Copyright (c) 2015, WordPress Theme Review Team
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License, v2 (or newer)
 */

/**
 * Checkbox sanitization callback example.
 * 
 * Sanitization callback for 'checkbox' type controls. This callback sanitizes `$checked`
 * as a boolean value, either TRUE or FALSE.
 *
 * @param bool $checked Whether the checkbox is checked.
 * @return bool Whether the checkbox is checked.
 */
function mdlwp_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

/**
 * CSS sanitization callback example.
 *
 * - Sanitization: css
 * - Control: text, textarea
 * 
 * Sanitization callback for 'css' type textarea inputs. This callback sanitizes
 * `$css` for valid CSS.
 * 
 * NOTE: wp_strip_all_tags() can be passed directly as `$wp_customize->add_setting()`
 * 'sanitize_callback'. It is wrapped in a callback here merely for example purposes.
 * 
 * @see wp_strip_all_tags() https://developer.wordpress.org/reference/functions/wp_strip_all_tags/
 *
 * @param string $css CSS to sanitize.
 * @return string Sanitized CSS.
 */
function mdlwp_sanitize_css( $css ) {
	return wp_strip_all_tags( $css );
}

/**
 * Drop-down Pages sanitization callback example.
 *
 * - Sanitization: dropdown-pages
 * - Control: dropdown-pages
 * 
 * Sanitization callback for 'dropdown-pages' type controls. This callback sanitizes `$page_id`
 * as an absolute integer, and then validates that $input is the ID of a published page.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 * @see get_post_status() https://developer.wordpress.org/reference/functions/get_post_status/
 *
 * @param int                  $page    Page ID.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int|string Page ID if the page is published; otherwise, the setting default.
 */
function mdlwp_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/**
 * Email sanitization callback example.
 *
 * - Sanitization: email
 * - Control: text
 * 
 * Sanitization callback for 'email' type text controls. This callback sanitizes `$email`
 * as a valid email address.
 * 
 * @see sanitize_email() https://developer.wordpress.org/reference/functions/sanitize_key/
 * @link sanitize_email() https://codex.wordpress.org/Function_Reference/sanitize_email
 *
 * @param string               $email   Email address to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The sanitized email if not null; otherwise, the setting default.
 */
function mdlwp_sanitize_email( $email, $setting ) {
	// Sanitize $input as a hex value without the hash prefix.
	$email = sanitize_email( $email );
	
	// If $email is a valid email, return it; otherwise, return the default.
	return ( ! null( $email ) ? $email : $setting->default );
}

/**
 * HEX Color sanitization callback example.
 *
 * - Sanitization: hex_color
 * - Control: text, WP_Customize_Color_Control
 * 
 * Note: sanitize_hex_color_no_hash() can also be used here, depending on whether
 * or not the hash prefix should be stored/retrieved with the hex color value.
 * 
 * @see sanitize_hex_color() https://developer.wordpress.org/reference/functions/sanitize_hex_color/
 * @link sanitize_hex_color_no_hash() https://developer.wordpress.org/reference/functions/sanitize_hex_color_no_hash/
 *
 * @param string               $hex_color HEX color to sanitize.
 * @param WP_Customize_Setting $setting   Setting instance.
 * @return string The sanitized hex color if not null; otherwise, the setting default.
 */
function mdlwp_sanitize_hex_color( $hex_color, $setting ) {
	// Sanitize $input as a hex value without the hash prefix.
	$hex_color = sanitize_hex_color( $hex_color );
	
	// If $input is a valid hex value, return it; otherwise, return the default.
	return ( ! null( $hex_color ) ? $hex_color : $setting->default );
}

/**
 * HTML sanitization callback example.
 *
 * - Sanitization: html
 * - Control: text, textarea
 * 
 * Sanitization callback for 'html' type text inputs. This callback sanitizes `$html`
 * for HTML allowable in posts.
 * 
 * NOTE: wp_filter_post_kses() can be passed directly as `$wp_customize->add_setting()`
 * 'sanitize_callback'. It is wrapped in a callback here merely for example purposes.
 * 
 * @see wp_filter_post_kses() https://developer.wordpress.org/reference/functions/wp_filter_post_kses/
 *
 * @param string $html HTML to sanitize.
 * @return string Sanitized HTML.
 */
function mdlwp_sanitize_html( $html ) {
	return wp_filter_post_kses( $html );
}

/**
 * Image sanitization callback example.
 *
 * Checks the image's file extension and mime type against a whitelist. If they're allowed,
 * send back the filename, otherwise, return the setting default.
 *
 * - Sanitization: image file extension
 * - Control: text, WP_Customize_Image_Control
 * 
 * @see wp_check_filetype() https://developer.wordpress.org/reference/functions/wp_check_filetype/
 *
 * @param string               $image   Image filename.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string The image filename if the extension is allowed; otherwise, the setting default.
 */
function mdlwp_sanitize_image( $image, $setting ) {

	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );

	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );

	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}

/**
 * No-HTML sanitization callback example.
 *
 * - Sanitization: nohtml
 * - Control: text, textarea, password
 * 
 * Sanitization callback for 'nohtml' type text inputs. This callback sanitizes `$nohtml`
 * to remove all HTML.
 * 
 * NOTE: wp_filter_nohtml_kses() can be passed directly as `$wp_customize->add_setting()`
 * 'sanitize_callback'. It is wrapped in a callback here merely for example purposes.
 * 
 * @see wp_filter_nohtml_kses() https://developer.wordpress.org/reference/functions/wp_filter_nohtml_kses/
 *
 * @param string $nohtml The no-HTML content to sanitize.
 * @return string Sanitized no-HTML content.
 */
function mdlwp_sanitize_nohtml( $nohtml ) {
	return wp_filter_nohtml_kses( $nohtml );
}

/**
 * Number sanitization callback example.
 *
 * - Sanitization: number_absint
 * - Control: number
 * 
 * Sanitization callback for 'number' type text inputs. This callback sanitizes `$number`
 * as an absolute integer (whole number, zero or greater).
 * 
 * NOTE: absint() can be passed directly as `$wp_customize->add_setting()` 'sanitize_callback'.
 * It is wrapped in a callback here merely for example purposes.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 *
 * @param int                  $number  Number to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int Sanitized number; otherwise, the setting default.
 */
function mdlwp_sanitize_number_absint( $number, $setting ) {
	// Ensure $number is an absolute integer (whole number, zero or greater).
	$number = absint( $number );
	
	// If the input is an absolute integer, return it; otherwise, return the default
	return ( $number ? $number : $setting->default );
}

/**
 * Number Range sanitization callback example.
 *
 * - Sanitization: number_range
 * - Control: number, tel
 * 
 * Sanitization callback for 'number' or 'tel' type text inputs. This callback sanitizes
 * `$number` as an absolute integer within a defined min-max range.
 * 
 * @see absint() https://developer.wordpress.org/reference/functions/absint/
 *
 * @param int                  $number  Number to check within the numeric range defined by the setting.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return int|string The number, if it is zero or greater and falls within the defined range; otherwise,
 *                    the setting default.
 */
function mdlwp_sanitize_number_range( $number, $setting ) {
	
	// Ensure input is an absolute integer.
	$number = absint( $number );
	
	// Get the input attributes associated with the setting.
	$atts = $setting->manager->get_control( $setting->id )->input_attrs;
	
	// Get minimum number in the range.
	$min = ( isset( $atts['min'] ) ? $atts['min'] : $number );
	
	// Get maximum number in the range.
	$max = ( isset( $atts['max'] ) ? $atts['max'] : $number );
	
	// Get step.
	$step = ( isset( $atts['step'] ) ? $atts['step'] : 1 );
	
	// If the number is within the valid range, return it; otherwise, return the default
	return ( $min <= $number && $number <= $max && is_int( $number / $step ) ? $number : $setting->default );
}

/**
 * Select sanitization callback example.
 *
 * - Sanitization: select
 * - Control: select, radio
 * 
 * Sanitization callback for 'select' and 'radio' type controls. This callback sanitizes `$input`
 * as a slug, and then validates `$input` against the choices defined for the control.
 * 
 * @see sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param string               $input   Slug to sanitize.
 * @param WP_Customize_Setting $setting Setting instance.
 * @return string Sanitized slug if it is a valid choice; otherwise, the setting default.
 */
function mdlwp_sanitize_select( $input, $setting ) {
	
	// Ensure input is a slug.
	$input = sanitize_key( $input );
	
	// Get list of choices from the control associated with the setting.
	$choices = $setting->manager->get_control( $setting->id )->choices;
	
	// If the input is a valid key, return it; otherwise, return the default.
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

/**
 * URL sanitization callback example.
 *
 * - Sanitization: url
 * - Control: text, url
 * 
 * Sanitization callback for 'url' type text inputs. This callback sanitizes `$url` as a valid URL.
 * 
 * NOTE: esc_url_raw() can be passed directly as `$wp_customize->add_setting()` 'sanitize_callback'.
 * It is wrapped in a callback here merely for example purposes.
 * 
 * @see esc_url_raw() https://developer.wordpress.org/reference/functions/esc_url_raw/
 *
 * @param string $url URL to sanitize.
 * @return string Sanitized URL.
 */
function mdlwp_sanitize_url( $url ) {
	return esc_url_raw( $url );
}



