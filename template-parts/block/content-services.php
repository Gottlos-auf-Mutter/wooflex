<?php
/**
 * Block Name: Services
 * This is the template that displays the Services block.
 */

$headline = get_field('headline');
$width = get_field('width');
$background = get_field('background');
$backgroundcolor = get_field('background_color');
$fontcolor = get_field('font_color');

?>

	<section class="services-block wf-block <?php echo "$width" ?> <?php echo "$background" ?>" 
		style="
			<?php if ( $backgroundcolor ) : ?>background-color: <?php echo "$backgroundcolor" ?>; <?php endif; ?>
			<?php if ( $fontcolor ) : ?>color: <?php echo "$fontcolor" ?>;<?php endif; ?>
		"
	>

		<?php if ( $headline ) : ?>
			<h2 <?php if ( $fontcolor ) : ?>style="color: <?php echo "$fontcolor" ?>;" <?php endif; ?>>
			<?php echo "$headline" ?></h2>
		<?php endif; ?>

	<div class="services">
		<?php if( have_rows('service') ): ?>
		<?php while ( have_rows('service') ) : the_row(); ?>

			<?php
			$title = get_sub_field('service_title');
			$image = get_sub_field('service_image');
			$link = get_sub_field('service_link');
			?>

			<div class="service">	

				<?php if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a href="<?php echo esc_url( $link_url ); ?>">
				<?php endif; ?>
				
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<h4	<?php if ( $fontcolor ) : ?>style="color: <?php echo "$fontcolor" ?>;" <?php endif; ?>><?php echo "$title" ?></h4>

				<?php if($link): ?></a><?php endif; ?>
			</div> <!-- service -->

		<?php endwhile;?>
		<?php endif; ?>

	<?php wp_reset_query(); ?>
	</div> <!-- services -->

</section> <!-- services-block-->









