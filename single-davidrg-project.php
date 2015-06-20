<?php
/**
 * The template for displaying all single posts.
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'project' ); ?>

			<?php /* davidrg_post_navigation(); */ ?>

		<?php endwhile; ?>

		</main>
	</div>

<?php get_footer(); ?>
