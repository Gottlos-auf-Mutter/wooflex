<?php  /*
@package woostflextheme
*/
get_header(); ?>

	

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content/single', get_post_format()); ?>

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

		<?php if (function_exists('wooflex_post_navigation')) wooflex_post_navigation(); ?>

	<?php get_footer(); ?>

