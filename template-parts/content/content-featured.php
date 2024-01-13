
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
	<article id="post-<?php the_ID(); ?>"
		<?php if( has_post_thumbnail() ): ?>
			style="background-image:url(<?php the_post_thumbnail_url( 'large' ); ?>)"
		<?php endif; ?>>

				<h4><?php the_title(); ?></h4>

				<span>– read on –</span>

	</article>
</a>

