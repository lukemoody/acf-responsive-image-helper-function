<?php

/**
 * ACF Responsive Image Helper Function
 * @param string $image_id the id of the image (from ACF or similar)
 * @param string $image_size the size of the thumbnail image or custom image size
 * @param string $max_width the max width this image will be shown to build the sizes attribute
 * NOTE https://awesomeacf.com/responsive-images-wordpress-acf/
 */

// Custom image size added to WordPress
add_image_size( 'img-1920', 1920 );

function get_acf_image_srcset($image_id, $image_size, $max_width) {

	// check the ACF image ID is not blank
	if($image_id != '') {

		// set the default src image size
		$image_src = wp_get_attachment_image_url( $image_id, $image_size );

		// set the srcset with various image sizes
		$image_srcset = wp_get_attachment_image_srcset( $image_id, $image_size );

    // generate the markup for the responsive image
    echo '<img srcset="' . $image_srcset . '" sizes="(max-width: ' . $max_width . ') 100vw, '. $max_width . '" src="' . $image_src . '" alt="' . get_post_meta( $image_id, '_wp_attachment_image_alt', true ) . '" />';

	}
}
