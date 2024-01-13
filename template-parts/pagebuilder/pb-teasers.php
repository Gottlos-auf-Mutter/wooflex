<?php 
$height = get_sub_field('teaser_height');
?>
<!-- Pagebuilder Teaser -->
<section class="pb-section pb-teaser <?php if ( get_sub_field( 'full_width' ) ): ?> full-width <?php endif; ?>">
	<div class="teasers">

		<?php if( have_rows('teaser') ): ?>
		<?php while ( have_rows('teaser') ) : the_row(); ?>

			<div class="teaser <?php echo "$height"; ?> ">						
				<?php get_template_part( 'template-parts/pagebuilder/content','teaser' ); ?>
			</div> <!-- teaser-wrapper -->

		<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>

	</div>  <!-- teasers -->
</section> <!-- pb-teaser -->
