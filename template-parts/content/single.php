<?php  /*
@package woostraptheme
-- Standard Post Format Single Page
 */
?>

<?php if( has_post_thumbnail() ): 
$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
?>
<?php endif; ?>

	<header class="entry-header full-width herobanner" style="background-image: url(<?php echo $featured_image; ?>);">
		<div class="herobanner-postheader">

			<h1 class="page-title"><?php wp_title( $sep = '', $display = true, $seplocation = '' ) ?></h1>

			<div class="entry-meta">
				<small>Date: <?php the_time( 'F j, Y' ); ?>  |  Category: <?php the_category(); ?></small>
			</div>	
		</div>
	</header>

		<div class="entry-content">

			<dic class="entry-content">
				<?php the_content(); ?>
			</dic>




		</div>

		<footer class="entry-footer">
		</footer>

	</article>
</div>
