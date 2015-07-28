<?php
/**
 * Adds a meta box to the post editing screen
 */
function mdlwp_custom_meta() {

	global $post;

	$pageTemplate = get_post_meta($post->ID, '_wp_page_template', true);

	 $exclude_pages = array(
        'templates/page-ribbon.php',
    );
	

	/**
	 * Create meta box for all posts and pages except $exclude_pages
	 */
	if (! in_array($pageTemplate, apply_filters( 'mdlwp_exclude_metabox_post_types' , $exclude_pages ))) {
		
		$screens = array( 'post', 'page' );

		if(has_filter('mdlwp_include_metabox_post_types')) {
			$screens = apply_filters('mdlwp_include_metabox_post_types', $screens);
		}

		foreach ( $screens as $screen ) {
			add_meta_box( 'mdlwp_meta', __( 'Customize', 'mdlwp' ), 'mdlwp_meta_callback', $screen );
		}
	}

	/**
	 * Create meta box just for Ribbon page template
	 */
	if ($pageTemplate == 'templates/page-ribbon.php' ) {

		add_meta_box( 'mdlwp_meta', __( 'Customize', 'mdlwp' ), 'mdlwp_ribbon_callback', 'page' );
	}
}
add_action( 'add_meta_boxes', 'mdlwp_custom_meta' );

/**
 * Posts & Pages - Outputs the content of the meta box
 */
function mdlwp_meta_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'mdlwp_nonce' );
	$mdlwp_stored_meta = get_post_meta( $post->ID );
	?>

	<table class="form-table">
		<tbody>

			<tr>
			    <th scope="row">
			        <label for="mdlwp-bg-color" class="mdlwp-row-title"><?php _e( 'Background Color', 'mdlwp' )?></label>
			    </th>
			    <td>
			        <input name="mdlwp-bg-color" type="text" value="<?php if ( isset ( $mdlwp_stored_meta['mdlwp-bg-color'] ) ) echo $mdlwp_stored_meta['mdlwp-bg-color'][0]; ?>" class="meta-color" /> 
			        <br>
        			<span class="description">This is the color that will be displayed if a featured image is NOT uploaded.</span>  
			    </td>
			</tr>
			
			<tr>
			    <th scope="row">
			        <label for="mdlwp-title-color" class="mdlwp-row-title"><?php _e( 'Title Color', 'mdlwp' )?></label>
			    </th>
			    <td>
			        <input name="mdlwp-title-color" type="text" value="<?php if ( isset ( $mdlwp_stored_meta['mdlwp-title-color'] ) ) echo $mdlwp_stored_meta['mdlwp-title-color'][0]; ?>" class="meta-color" /> 
			        <br>
        			<span class="description">This is the color of the title.</span>  
			    </td>
			</tr>

			<tr>
			    <th scope="row">
			        <label for="mdlwp-height" class="mdlwp-row-title"><?php _e( 'Height', 'mdlwp' )?></label>
			    </th>
			    <td>
			        <input type="text" name="mdlwp-height" id="mdlwp-height" class="medium-text" value="<?php if ( isset ( $mdlwp_stored_meta['mdlwp-height'] ) ) echo $mdlwp_stored_meta['mdlwp-height'][0]; ?>" />
			        <br>
	        		<span class="description">This will be the height of the featured image section. (Default = 280px)</span>   
			    </td>
			</tr>
			
		</tbody>
	</table>

	<?php
}

/**
 * Ribbon Page Template - Outputs the content of the meta box
 */
function mdlwp_ribbon_callback( $post ) {
	wp_nonce_field( basename( __FILE__ ), 'mdlwp_nonce' );
	$mdlwp_stored_meta = get_post_meta( $post->ID );
	?>

	<table class="form-table">
		<tbody>

			<tr>
			    <th scope="row">
			        <label for="mdlwp-ribbon-bg-color" class="mdlwp-row-title"><?php _e( 'Background Color', 'mdlwp' )?></label>
			    </th>
			    <td>
			        <input name="mdlwp-ribbon-bg-color" type="text" value="<?php if ( isset ( $mdlwp_stored_meta['mdlwp-ribbon-bg-color'] ) ) echo $mdlwp_stored_meta['mdlwp-ribbon-bg-color'][0]; ?>" class="meta-color" /> 
			        <br>
        			<span class="description">This is the color that will be displayed if a featured image is NOT uploaded.</span>  
			    </td>
			</tr>

			<tr>
			    <th scope="row">
			        <label for="mdlwp-ribbon-height" class="mdlwp-row-title"><?php _e( 'Height', 'mdlwp' )?></label>
			    </th>
			    <td>
			        <input type="text" name="mdlwp-ribbon-height" id="mdlwp-ribbon-height" class="medium-text" value="<?php if ( isset ( $mdlwp_stored_meta['mdlwp-ribbon-height'] ) ) echo $mdlwp_stored_meta['mdlwp-ribbon-height'][0]; ?>" />
			        <br>
	        		<span class="description">This will be the height of the featured image ribbon section. (Default = 40vh)</span>   
			    </td>
			</tr>
			
		</tbody>
	</table>

	<?php
}



/**
 * Saves the custom meta input
 */
function mdlwp_meta_save( $post_id ) {
 
	// Checks save status
	$is_autosave = wp_is_post_autosave( $post_id );
	$is_revision = wp_is_post_revision( $post_id );
	$is_valid_nonce = ( isset( $_POST[ 'mdlwp_nonce' ] ) && wp_verify_nonce( $_POST[ 'mdlwp_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
	// Exits script depending on save status
	if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
		return;
	}
 
	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'mdlwp-height' ] ) ) {
		update_post_meta( $post_id, 'mdlwp-height', sanitize_text_field( $_POST[ 'mdlwp-height' ] ) );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'mdlwp-bg-color' ] ) ) {
		update_post_meta( $post_id, 'mdlwp-bg-color', $_POST[ 'mdlwp-bg-color' ] );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'mdlwp-title-color' ] ) ) {
		update_post_meta( $post_id, 'mdlwp-title-color', $_POST[ 'mdlwp-title-color' ] );
	}

	// Checks for input and sanitizes/saves if needed
	if( isset( $_POST[ 'mdlwp-ribbon-height' ] ) ) {
		update_post_meta( $post_id, 'mdlwp-ribbon-height', sanitize_text_field( $_POST[ 'mdlwp-ribbon-height' ] ) );
	}

	// Checks for input and saves if needed
	if( isset( $_POST[ 'mdlwp-ribbon-bg-color' ] ) ) {
		update_post_meta( $post_id, 'mdlwp-ribbon-bg-color', $_POST[ 'mdlwp-ribbon-bg-color' ] );
	}

}
add_action( 'save_post', 'mdlwp_meta_save' );


/**
 * Loads the color picker javascript
 */
function mdlwp_color_enqueue() {
	wp_enqueue_style( 'wp-color-picker' );
	wp_enqueue_script( 'meta-box-color-js', get_template_directory_uri() . '/js/color-picker.js', array( 'wp-color-picker' ) );
}
add_action( 'admin_enqueue_scripts', 'mdlwp_color_enqueue' );

/**
 * Loads the image management javascript
 */
function mdlwp_image_enqueue() {	
		wp_enqueue_media();
 
		// Registers and enqueues the required javascript.
		wp_register_script( 'meta-box-image', get_template_directory_uri() . '/js/meta-image-uploader.js', array( 'jquery' ) );
		wp_localize_script( 'meta-box-image', 'meta_image',
			array(
				'title' => __( 'Choose or Upload an Image', 'mdlwp' ),
				'button' => __( 'Use this image', 'mdlwp' ),
			)
		);
		wp_enqueue_script( 'meta-box-image' );	
}
add_action( 'admin_enqueue_scripts', 'mdlwp_image_enqueue' );
