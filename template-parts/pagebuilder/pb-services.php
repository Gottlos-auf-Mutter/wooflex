
<!-- Pagebuilder Services -->
<section class="pb-section pb-services">

	<h2><?php the_sub_field('services_headline'); ?></h2>
	<div class="services">
		<?php if( have_rows('service') ): ?>
		<?php while ( have_rows('service') ) : the_row(); ?>

			<?php
			$title = get_sub_field('service_title');
			$image = get_sub_field('service_image');
			$link = get_sub_field('service_link');
			?>

			<div class="service">	
				<?php if( !empty($link) ): ?>
				<a href="<?php echo "$link" ?>">
				<?php endif; ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<h4><?php echo "$title" ?></h4>
				<?php if( !empty($link) ): ?></a><?php endif; ?>
			</div>

		<?php endwhile;?>
		<?php endif; ?>

	<?php wp_reset_query(); ?>
	</div> <!-- services -->
</section> <!-- pb-services -->
