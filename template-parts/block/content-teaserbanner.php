<?php
/**
 * Block Name: Teaserbanner
 * This is the template that displays the Teaserbanner block.
 */

// get image field (array)
$wide = get_field('make_wide');
$height = get_field('teaser_height');
?>


<section class="teaserbanner-block wf-block  
	<?php if ( $wide ): ?> breakout<?php endif; ?>"
>

	<div class="teasers">

		<?php if( have_rows('teaser') ): ?>
		<?php while ( have_rows('teaser') ) : the_row(); ?>

		<?php
		$title = 	get_sub_field('teaser_title');
		$image = 	get_sub_field('teaser_image');
		$link = 	get_sub_field('teaser_link');
		$button = get_sub_field('show_button');
		?>
			<div class="teaser <?php echo "$height"; ?> ">

				<?php if( $link ): 
				$link_url = $link['url'];
				$link_title = $link['title'];
				$link_target = $link['target'] ? $link['target'] : '_self';
				?>
				<a href="<?php echo esc_url( $link_url ); ?>">
				<?php endif; ?>


				<div class="teaser-element"

				<?php if($image): ?>
					style="background-image:url(<?php echo $image['url']; ?>)"
				<?php endif; ?>>

					<h2><?php echo "$title" ?></h2>

					<?php if($button): ?>
						<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
					<?php endif; ?>

				</div> <!-- teaser-element -->


			<?php if( $link ): ?></a><?php endif; ?>

			</div> <!-- teaser -->

		<?php endwhile; ?>
		<?php endif; ?>

		<?php wp_reset_query(); ?>

	</div>  <!-- teasers -->
</section> <!-- teaserbanner-block -->

