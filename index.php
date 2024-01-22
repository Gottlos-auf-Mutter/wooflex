<?php  /*
@package wooflextheme
*/
get_header(); ?>

<h1 class="page-title"><?php wp_title( $sep = '', $display = true, $seplocation = '' ) ?></h1>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content/content', get_post_format()); ?>

	<?php endwhile; else : ?>
	<p><?php esc_html_e( 'Coming soon ...' ); ?></p>

<?php endif; ?>

<?php get_footer(); ?>

