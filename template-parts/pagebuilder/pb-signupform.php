<?php
$headline = get_sub_field('signupform_headline');
$signupform = get_sub_field('signupform_html');
$fullWidthBg = get_sub_field('full_width_bg_signupform');
$fullWidthContent = get_sub_field('full_width_content_signupform');
$coloredBg = get_sub_field('colored_background_signupform');
$customColor = get_sub_field('custom_color_signupform');
$image = get_sub_field('signupform_image');
$infotext = get_sub_field('signupform_info_text');
$legaltext = get_sub_field('signupform_legal_text');
$legaltextlink = get_sub_field('signupform_legal_text_link');
?>

<!-- Pagebuilder Signupform -->
<section class="pb-section pb-signupform<?php if ( $fullWidthBg ): ?>full-width content-grid<?php endif; ?>
<?php if ( $coloredBg ): ?>bg-light<?php endif; ?> " 
	<?php if ( $customColor ): ?>style="background-color: <?php echo "$customColor"?> !important; "<?php endif; ?> >

					<h2><?php echo "$headline" ?></h2>
					<p><?php echo "$infotext" ?></p>

					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
					<?php echo "$signupform"?>
					<small>
						<?php echo "$legaltext" ?>&nbsp;<a class="text-muted" href="<?php echo "$legaltextlink" ?>">Data Protection Declaration</a>	
					</small>
				</div>

</section> <!-- pbsection -->


<?php wp_reset_query(); ?>
