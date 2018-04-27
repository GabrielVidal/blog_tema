<?php 
/**************** SEGUNDO THUMB *****************/
function get_the_post_thumbnail_url( $post = null, $size = 'post-thumbnail2' ) {
	$post_thumbnail_id = get_post_thumbnail_id( $post );
	if ( ! $post_thumbnail_id ) {
		return false;
	}
	return wp_get_attachment_image_url( $post_thumbnail_id, $size );
}

/**
 * Display the post thumbnail URL.
 *
 * @since 4.4.0
 *
 * @param string|array $size Optional. Image size to use. Accepts any valid image size,
 *                           or an array of width and height values in pixels (in that order).
 *                           Default 'post-thumbnail'.
 */
function the_post_thumbnail_url( $size = 'post-thumbnail2' ) {
	$url = get_the_post_thumbnail_url( null, $size );
	if ( $url ) {
		echo esc_url( $url );
	}
}

/**
 * Returns the post thumbnail caption.
 *
 * @since 4.6.0
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 * @return string Post thumbnail caption.
 */
function get_the_post_thumbnail_caption( $post = null ) {
	$post_thumbnail_id = get_post_thumbnail_id( $post );
	if ( ! $post_thumbnail_id ) {
		return '';
	}

	$caption = wp_get_attachment_caption( $post_thumbnail_id );

	if ( ! $caption ) {
		$caption = '';
	}

	return $caption;
}

/**
 * Displays the post thumbnail caption.
 *
 * @since 4.6.0
 *
 * @param int|WP_Post $post Optional. Post ID or WP_Post object. Default is global `$post`.
 */
function the_post_thumbnail_caption( $post = null ) {
	/**
	 * Filters the displayed post thumbnail caption.
	 *
	 * @since 4.6.0
	 *
	 * @param string $caption Caption for the given attachment.
	 */
	echo apply_filters( 'the_post_thumbnail_caption', get_the_post_thumbnail_caption( $post ) );
}

 ?>