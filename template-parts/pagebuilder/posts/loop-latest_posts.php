<?php
	$postsnumber = get_sub_field('posts_number');

	$args = array(
		'type'	=> 'posts',
		'posts_per_page' => $postsnumber,
	);
	
	$recentPosts = new WP_Query( $args );
	if ( $recentPosts->have_posts() ): 
		while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
			
			<article class="post">
				<?php get_template_part( 'template-parts/content/content','featured' ); ?>
			</article>

		<?php endwhile;
	 endif; 
	 wp_reset_postdata();
?>
