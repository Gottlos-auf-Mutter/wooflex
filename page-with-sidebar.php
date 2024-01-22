<?php /*
Template Name: Page with Sidebar
@package wooflextheme
*/

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="content-with-sidebar breakout">
	<section class="main-content">
		<?php the_content( $more_link_text = null, $strip_teaser = false );  ?>
	</section>
	<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Coming soon ...' ); ?></p>
<?php endif; ?>

	<aside class="main-sidebar">
		<?php get_sidebar(); ?>
	</aside>

</div> <!-- content-with-sidebar -->
<?php get_footer(); ?>

