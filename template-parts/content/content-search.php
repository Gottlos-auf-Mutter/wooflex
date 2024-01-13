<article id="post-<?php the_ID(); ?>" class="searchresult">

	
	<?php if( has_post_thumbnail() ): ?>
			<a href="<?php echo get_post_permalink() ?>">
				<?php the_post_thumbnail( 'medium' ); ?>
			</a>
	<?php endif; ?>

	<span class="badge badge-primary resultbadge">
		<?php $postType = get_post_type_object(get_post_type());
		if ($postType) {
		    echo esc_html($postType->labels->singular_name);
		} ?>
	</span>


		<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>

		<p><?php the_excerpt();  ?></p>



</article>
