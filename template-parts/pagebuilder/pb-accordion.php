<!-- Pagebuilder Accordion -->
<section class="pb-section pb-accordion<?php if ( get_sub_field( 'full_width_accordion' ) ): ?> breakout <?php endif; ?>">
<h2><?php the_sub_field('accordion_headline'); ?></h2>
	<div class="accordions">

		<?php $accordionnumber = 0; ?>
		<?php if( have_rows('accordion_columns') ): ?>
			<?php while ( have_rows('accordion_columns') ) : the_row(); ?>

				<?php $accordionnumber++; ?>
				<div class="accordion tabs" id="accordion<?php echo"$accordionnumber"; ?>">

					<?php $elementnumber = 0; ?>
					<?php if( have_rows('accordion_elements') ): ?>
						<?php while ( have_rows('accordion_elements') ) : the_row(); ?>
							<?php
							$elementnumber++;  
							$title = get_sub_field('accordion_title');
							$text = get_sub_field('accordion_text');
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
</section> <!-- pb-accordion -->

