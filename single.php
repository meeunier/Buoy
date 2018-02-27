<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div class="main-container single-post">
	<?php get_template_part( 'template-parts/featured-image' ); ?>
	<div class="main-grid">
		<main class="main-content-article">
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content-article', '' ); ?>
			<?php endwhile; ?>
		</main>
		<div class="section-title">
			<h3>More Adventures	</h3>
			<span class="section-divider"></span>

			<div class="more-articles">

				<?php /* Start the Loop */ ?>
				<?php $query = new WP_Query( 'posts_per_page=3' ); ?>
				<?php while ($query->have_posts()) : $query->the_post(); ?>
				<?php get_template_part( 'template-parts/content-more-articles', get_post_format() ); ?>
				<?php endwhile; ?>


			</div>

		</div>
	</div>
</div>
<?php get_footer();
