<?php 
$height = get_sub_field('herobanner_height');
?>
<!-- Pagebuilder herobanner -->
<section class="pb-section pb-herobanner <?php if ( get_sub_field( 'full_width' ) ): ?> full-width <?php endif; ?>">
	<div class="herobanners">

		<?php if( have_rows('herobanner') ): ?>
		<?php while ( have_rows('herobanner') ) : the_row(); ?>

			<div class="herobanner <?php echo "$height"; ?> ">						
				<?php get_template_part( 'template-parts/pagebuilder/content','herobanner' ); ?>
			</div> <!-- herobanner-wrapper -->

		<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>

	</div>  <!-- herobanners -->
</section> <!-- pb-herobanner -->
