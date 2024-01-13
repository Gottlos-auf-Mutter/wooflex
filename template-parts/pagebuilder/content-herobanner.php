<?php
$title = get_sub_field('herobanner_title');
$image = get_sub_field('herobanner_image');
$buttontext = get_sub_field('herobanner_button_text');
?>

<?php if ( get_sub_field( 'herobanner_link' ) ): ?>
	<a href="<?php the_sub_field('herobanner_link'); ?>">
<?php endif; ?>

	<div class="herobanner-element"
	<?php if( !empty($image) ): ?>
		style="background-image:url(<?php echo $image['url']; ?>)"
	<?php endif; ?>>
				<h2><?php echo "$title" ?></h2>
				<?php if( $buttontext ): ?>
				<button type="button" class="btn-primary">
					<?php echo esc_html($buttontext); ?>
				</button>
				<?php endif; ?>
	</div> <!-- herobanner-element -->

<?php if ( get_sub_field( 'herobanner_link' ) ): ?>
	</a>
<?php endif; ?>
