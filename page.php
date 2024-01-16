<?php get_header(); ?>
<!-- Page Builder Content -->
<?php if( have_rows('content_elements') ): ?>
	<?php get_template_part( 'template-parts/pagebuilder/pagebuilder' ); ?>


<!-- Regular Page Content  -->
<?php elseif ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<?php the_content( $more_link_text = null, $strip_teaser = false );  ?>


<!-- if there is no Content at all  -->
<?php endwhile; else : ?>
	<section class="content">
		<p><?php esc_html_e( 'Coming soon ...' ); ?></p>
	</section> <!-- content -->
<?php endif; ?>


<?php get_footer(); ?>

