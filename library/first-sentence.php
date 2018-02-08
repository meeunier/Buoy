<?php
/**
 * Gets the first sentence of a post
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'winwar_first_sentence' ) ) :
	function winwar_first_sentence( $string ) {

    $sentence = preg_split( '/(\.|!|\?)\s/', $string, 2, PREG_SPLIT_DELIM_CAPTURE );
    return $sentence['0'] . $sentence['1'];

	} add_filter( 'get_the_excerpt', 'winwar_first_sentence', 10, 1 );
endif;
