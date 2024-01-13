<?php
$headline = get_sub_field('shortcode_headline');
$shortcode = get_sub_field('shortcodeblock');
$fullWidthBg = get_sub_field('full_width_bg_shortcode');
$fullWidthContent = get_sub_field('full_width_content_shortcode');
$coloredBg = get_sub_field('colored_background_shortcode');
$customColor = get_sub_field('custom_color_shortcode');


?>

		<!-- Pagebuilder Shortcode -->
<section class="pb-section pb-shortcode<?php if ( $fullWidthBg ): ?>full-width content-grid<?php endif; ?>
<?php if ( $coloredBg ): ?>bg-light<?php endif; ?> " 
	<?php if ( $customColor ): ?>style="background-color: <?php echo "$customColor"?> !important; "<?php endif; ?> >

						<h2 class="text-center"><?php echo "$headline" ?></h2>
							<?php echo do_shortcode($shortcode); ?>

		</section> <!-- pb-shortcode -->


<?php wp_reset_query(); ?>
