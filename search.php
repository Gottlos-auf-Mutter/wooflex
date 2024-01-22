<?php get_header(); ?>


	<header class="searchresults-header">

		<h1 class="page-title"><?php wp_title( $sep = '', $display = true, $seplocation = '' ) ?></h1>

		<section class="searchform">
				<?php get_search_form(); ?>
		</section>
	</header>


	<section class="searchresults">


		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content/content', 'search'); ?>

			<?php endwhile; ?>

			<?php else : ?>
			<p><?php _e('Sorry, nothing matched your criteria.'); ?></p>
		<?php endif; ?>


	</section>

	<?php echo wooflex_pagination(); ?>

	<?php get_footer(); ?>

