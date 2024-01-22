<?php
$title = get_sub_field('teaser_title');
$image = get_sub_field('teaser_image');
$buttontext = get_sub_field('teaser_button_text');
?>

<?php if ( get_sub_field( 'teaser_link' ) ): ?>
<a href="<?php the_sub_field('teaser_link'); ?>">
<?php endif; ?>

<div class="teaser-element"
<?php if( !empty($image) ): ?>
	style="background-image:url(<?php echo $image['url']; ?>)"
<?php endif; ?>>
			<h2><?php echo "$title" ?></h2>
			<?php if( $buttontext ): ?>
			<button type="button" class="btn-primary">
				<?php echo esc_html($buttontext); ?>
			</button>
			<?php endif; ?>
</div> <!-- teaser-element -->

<?php if ( get_sub_field( 'teaser_link' ) ): ?>
</a>
<?php endif; ?>
