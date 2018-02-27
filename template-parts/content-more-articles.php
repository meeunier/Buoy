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
	<header class="more-img" role="banner" data-interchange="[<?php the_post_thumbnail_url( 'featured-small' ); ?>, small], [<?php the_post_thumbnail_url( 'featured-medium' ); ?>, medium], [<?php the_post_thumbnail_url( 'featured-large' ); ?>, large], [<?php the_post_thumbnail_url( 'featured-xlarge' ); ?>, xlarge]">

	</header>
	<div>
		<?php the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );?>
	</div>
	<div>
		<?php winwar_first_sentence( the_excerpt() ); ?>
	</div>
	<button class="button">
	<a href="<?php the_permalink(); ?>">read on</a>
	</button>
</article>
