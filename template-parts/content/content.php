<?php  /*
@package woostraptheme
-- Standard Post Format
*/
?>
<div class="blogpost-preview">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
			<div class="entry-meta">
				<small>Date: <?php the_time( 'F j, Y' ); ?>  |  Category: <?php the_category(); ?></small>
			</div>	

		<?php if( has_post_thumbnail() ): 
			$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		?>
	<?php endif; ?>

		<header class="entry-header" style="background-image: url(<?php echo $featured_image; ?>);">

			<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>

		</header>

		<div class="entry-content">

			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>

			<div class="btn-container">
				<a href="<?php the_permalink(); ?>" class="btn btn-outline-primary"><?php _e( 'Read More' ) ?></a>
			</div>
			

			
		</div>

		<footer class="entry-footer"></footer>


	</article>
</div>
