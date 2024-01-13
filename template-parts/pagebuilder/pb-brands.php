<!-- Pagebuilder Services -->
<section class="pb-section pb-brands full-width bg-light">
	<div class="brands">
		<h2><?php the_sub_field('brands_headline'); ?></h2>				
			<?php if( have_rows('brand') ): ?>
			<?php while ( have_rows('brand') ) : the_row(); ?>
			
				<div class="brand">	
					<?php
					$title = get_sub_field('brand_title');
					$image = get_sub_field('brand_image');
					?>
					
					<?php if ( $brandlink = get_sub_field( 'brand_link' ) ): ?>
					<a href="<?php echo "$brandlink" ?>" alt="<?php echo "$title" ?>" class="brand-link">
					<?php endif; ?>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<h4 class="text-secondary"><?php echo "$title" ?></h4>

					<?php if ( $brandlink = get_sub_field( 'brand_link' ) ): ?></a><?php endif; ?>
				</div>


								
				<?php endwhile;?>
			<?php endif; ?>

			<?php wp_reset_query(); ?>
			
   	</div> <!-- brands -->
</section> <!-- pb-brands -->
