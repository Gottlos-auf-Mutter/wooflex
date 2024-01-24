<?php /*
Template Name: Page with Sidebar
@package wooflextheme
*/

get_header(); ?>

<section class="wf-page-with-sidebar breakout">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="main-content">
			<?php the_content( $more_link_text = null, $strip_teaser = false );  ?>
		</section>
	<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Coming soon ...' ); ?></p>
	<?php endif; ?>

	<?php get_sidebar(); ?>

</section>
<?php get_footer(); ?>

