
<?php
$headline = get_sub_field('textblock_headline');
$textblock = get_sub_field('textblock');
$coloredBg = get_sub_field('colored_background_textblock');
$customColor = get_sub_field('custom_color_textblock');
$backgroundwidth = get_sub_field('background_width_textblock');


?>

<!-- Pagebuilder textblock -->
<section class="pb-section pb-textblock content-grid
	<?php if ( $coloredBg ): ?>bg-light<?php endif; ?> 
	<?php if ( $backgroundwidth ): ?><?php echo "$backgroundwidth"?><?php endif; ?> " 
	<?php if ( $customColor ): ?>style="background-color: <?php echo "$customColor"?> !important; "<?php endif; ?> >

		<h3 class="text-center"><?php echo "$headline" ?></h2>
		<?php echo "$textblock"?>
		
</section> <!-- pb-textblock -->


<?php wp_reset_query(); ?>
