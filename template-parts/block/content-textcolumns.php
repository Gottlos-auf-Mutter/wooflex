<?php
/**
 * Block Name: Textcolumns
 * This is the template that displays the Textcolumns block.
 */

// get the ACF Fields
$image = get_field('image');
$headline = get_field('headline');
$text = get_field('text');
$columns = get_field('text_columns');
$initial = get_field('initial_letter');
$initialsize = get_field('initial_letter_size');

$width = get_field('width');
$background = get_field('background');
$backgroundcolor = get_field('background_color');
$fontcolor = get_field('font_color');
?>

	<section class="textcolumns-block wf-block <?php echo "$width" ?> <?php echo "$background" ?>" 
		style="
			<?php if ( $backgroundcolor ) : ?>background-color: <?php echo "$backgroundcolor" ?>; <?php endif; ?>
			<?php if ( $fontcolor ) : ?>color: <?php echo "$fontcolor" ?>;<?php endif; ?>
		"
	>


	<?php if ( $headline ) : ?>
		<h2 <?php if ( $fontcolor ) : ?>style="color: <?php echo "$fontcolor" ?>;" <?php endif; ?>>
		<?php echo "$headline" ?></h2>
	<?php endif; ?>

		<section class="textcolumns columns-<?php echo "$columns" ?> 
		<?php if ( $initial ) : ?>initial-letter initial-<?php echo "$initialsize" ?><?php endif; ?>"
		>

		<?php if ( $text ) : ?>
			<?php echo "$text" ?>
		<?php endif; ?>
	</section>

</section> <!-- textcolumns-block-->








