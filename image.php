<?php
/**
 * @param string $image example ACF image field variable
 * img-1920 the size of the thumbnail image or custom image size add_image_size()
 * 1920px represents the max-width of the image to be shown
 */
$image = get_field('image');

// Function to generate img tag using variables
get_acf_image_srcset( $image, 'img-1920', '1920px' );
