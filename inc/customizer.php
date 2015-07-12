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
					'blue-grey' 	=> '#607D8B',
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
					//'blue-grey' 	=> '#607D8B',
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



