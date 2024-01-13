<?php
$headline = get_sub_field('customcode_headline');
$customcode = get_sub_field('customcodecodeblock');
$fullWidthBg = get_sub_field('full_width_bg_customcode');
$fullWidthContent = get_sub_field('full_width_content_customcode');
$coloredBg = get_sub_field('colored_background_customcode');
$customColor = get_sub_field('custom_color_customcode');


?>

<!-- Pagebuilder Customcode -->
<section class="pb-section pb-customcode
	<?php if ( $fullWidthContent ): ?>full-width<?php endif; ?>
	<?php if ( $fullWidthBg ): ?>full-width content-grid<?php endif; ?>
	<?php if ( $coloredBg ): ?>bg-light<?php endif; ?> " 
	<?php if ( $customColor ): ?>style="background-color: <?php echo "$customColor"?> !important; "<?php endif; ?> >

		<h3 class="text-center"><?php echo "$headline" ?></h2>
		<?php echo "$customcode"?>

</section> <!-- pb-customcode -->


<?php wp_reset_query(); ?>
