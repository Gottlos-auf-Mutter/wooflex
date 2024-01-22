<?php  /*
@package wooflextheme
*/
get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content( $more_link_text = null, $strip_teaser = false );  ?>

<?php endwhile; else : ?>
	<section class="content">
		<p><?php esc_html_e( 'Coming soon ...' ); ?></p>
	</section> <!-- content -->
<?php endif; ?>


<?php get_footer(); ?>

