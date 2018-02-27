<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
		/* translators: %1$s: current date, %2$s: current time */
		// echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( 'Published on %1$s at %2$s.', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time>';
		echo '<p class="byline author">' . __( 'by ', 'foundationpress' ) . get_the_author() . '</p>';
	}
endif;
