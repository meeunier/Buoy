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

<article id="post-<?php the_ID(); ?>" class="story-article" <?php post_class(); ?>>
	<header>
	<?php get_template_part( 'template-parts/content-article-pre', '' ); ?>
	<div class="article-subtitle">
		<h4 class="subtitle">Tales of a vanlifer lost in Europe</h4>
	</div>
	<?php
		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		}
	?>
		<?php foundationpress_entry_meta(); ?>
	</header>
	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</article>
