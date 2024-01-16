<?php
/**
 * Block Name: Accordion
 * This is the template that displays the Accordion block.
 */

$headline = get_field('headline');

;?>

<section class="accordion-block wf-block">

<h2><?php echo $headline ; ?></h2>
	<div class="accordions">

		<?php $accordionnumber = 0; ?>
		<?php if( have_rows('columns') ): ?>
			<?php while ( have_rows('columns') ) : the_row(); ?>

				<?php $accordionnumber++; ?>
				<div class="accordion tabs" id="accordion<?php echo"$accordionnumber"; ?>">

					<?php $elementnumber = 0; ?>
					<?php if( have_rows('elements') ): ?>
						<?php while ( have_rows('elements') ) : the_row(); ?>
							<?php
							$elementnumber++;  
							$title = get_sub_field('title');
							$text = get_sub_field('text');
							?>
							<div class="tab">

								<input type="checkbox" id="chck<?php echo"$accordionnumber-$elementnumber"; ?>">

								<label class="tab-label" for="chck<?php echo"$accordionnumber-$elementnumber"; ?>">
									<?php echo "$title"; ?>
								</label>

								<div class="tab-content">
									<?php echo "$text"; ?>
								</div>

							</div>

						<?php endwhile;?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>

				</div> <!-- accordion -->

			<?php endwhile;?>
		<?php endif; ?>
		<?php wp_reset_query(); ?>

	</div> <!-- accordions -->

</section> <!-- accordion-block-->







