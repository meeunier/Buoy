<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="paddlers-list-title">
		<?php the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );?>
		</div>
	</header>
	<div class="paddlers-list-excerpts">
		<?php winwar_first_sentence( the_excerpt() ); ?>
	</div>
	<button class="button">
	<a href="<?php the_permalink(); ?>">read on</a>
	</button>
</article>
