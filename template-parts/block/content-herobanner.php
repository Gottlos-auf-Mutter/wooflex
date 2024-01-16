<?php
/**
 * Block Name: Herobanner
 * This is the template that displays the Herobanner block.
 */

// get image field (array)
$image = get_field('image');
$headline = get_field('headline');
$text = get_field('text');
$link = get_field('link');
$textposition = get_field('text_position');

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>


<section class="herobanner-block wf-block full-width"
					<?php if( $image ) : ?>
						style="background-image:url(<?php echo $image['url']; ?>)"
					<?php endif; ?>
			>

				<div class="herobanner-wrapper align-<?php echo "$textposition" ?>">
				
					<div class="herobanner-content">
						<?php if ( $headline ) : ?>
							<h2><?php echo "$headline" ?></h2>
						<?php endif; ?>

						<?php if ( $text ) : ?>
							<p class=""><?php echo "$text" ?></p>
						<?php endif; ?>

						<?php if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
								<a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
						<?php endif; ?>


					</div>
				</div>

</section> <!-- herobanner-block-->









