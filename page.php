<?php get_header(); ?>




<!-- Page Builder Content -->
<?php if( have_rows('content_elements') ): ?>
	<?php get_template_part( 'template-parts/pagebuilder/pagebuilder' ); ?>


<!-- Regular Page Content  -->
<?php elseif ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="content">
		<?php if (function_exists('wooflex_nav_breadcrumb')) wooflex_nav_breadcrumb(); ?>

		<h2><?php the_title(); ?></h2>
		<p><?php the_content( $more_link_text = null, $strip_teaser = false );  ?></p>
	</section> <!-- content -->


<!-- if there is no Content at all  -->
<?php endwhile; else : ?>
	<section class="content">
		<p><?php esc_html_e( 'Coming soon ...' ); ?></p>
	</section> <!-- content -->
<?php endif; ?>


<?php get_footer(); ?>


