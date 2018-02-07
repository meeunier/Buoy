<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-grid">
	<main class="main-content">
		<div class="featured-hero"
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php $sticky = get_option( 'sticky_posts' );
$my_query = new WP_Query( array( 'p' => $sticky[0] ) ); ?>
			<?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
			<?php get_template_part( 'template-parts/content-new', get_post_format() ); ?>
			<?php endwhile; wp_reset_query(); ?>


			<?php else : ?>
				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; // End have_posts() check. ?>
		<div class="home-posts">

			<?php /* Start the Loop */ ?>
			<?php $query = new WP_Query( array( 'post__not_in' => get_option( 'sticky_posts' ) ) ); ?>
			<?php while ($query->have_posts()) : $query->the_post(); ?>
			<?php get_template_part( 'template-parts/content-new', get_post_format() ); ?>
			<?php endwhile; ?>

			<?php /* Display navigation to next/previous pages when applicable */ ?>
			<?php
			if ( function_exists( 'foundationpress_pagination' ) ) :
				foundationpress_pagination();
			elseif ( is_paged() ) :
			?>
				<nav id="post-nav">
					<div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
					<div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
				</nav>
			<?php endif; ?>
		</div>
		<div class="home-events">
			<div class="home-events-block"></div>
		</div>
	</main>

</div>

<?php get_footer();
