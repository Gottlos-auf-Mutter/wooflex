<?php
/**
 * Block Name: Textwithimage
 * This is the template that displays the textwithimage block.
 */

// get the ACF Fields
$image = get_field('image');
$headline = get_field('headline');
$text = get_field('text');
$initial = get_field('initial_letter');
$initialsize = get_field('initial_letter_size');
$imageposition = get_field('image_position');
$imagesize = get_field('image_size');
$width = get_field('width');
$background = get_field('background');
$backgroundcolor = get_field('background_color');
$fontcolor = get_field('font_color');
?>

	<section class="textwithimage-block wf-block <?php echo "$width" ?> <?php echo "$background" ?>" 
		style="
			<?php if ( $backgroundcolor ) : ?>background-color: <?php echo "$backgroundcolor" ?>; <?php endif; ?>
			<?php if ( $fontcolor ) : ?>color: <?php echo "$fontcolor" ?>;<?php endif; ?>
		"
	>

	<?php if ( $headline ) : ?>
		<h2 <?php if ( $fontcolor ) : ?>style="color: <?php echo "$fontcolor" ?>;" <?php endif; ?>>
		<?php echo "$headline" ?></h2>
	<?php endif; ?>

	<?php if( $image ) : ?>
		<img class="float-<?php echo "$imageposition" ?> size-<?php echo "$imagesize" ?>" 
		src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" 
		style="shape-margin: 2rem; shape-outside: url('<?php echo $image['url']; ?>');" >
	<?php endif; ?>

	<section class="text  
	<?php if ( $initial ) : ?>initial-letter initial-<?php echo "$initialsize" ?><?php endif; ?>"
	>

		<?php if ( $text ) : ?>
			<?php echo "$text" ?>
		<?php endif; ?>
	</section>

</section> <!-- textwithimage-block-->







