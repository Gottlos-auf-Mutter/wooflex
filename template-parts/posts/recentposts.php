<?php
//MOST RECENT BLOGPOSTS

	$args = array(
		'type'	=> 'posts',
		'posts_per_page' => 3,
	);
	
	$recentPosts = new WP_Query( $args );

	if ( $recentPosts->have_posts() ): 
		while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
			
			<article class="col-12 col-md-4 post-teaser teaser-wrapper ">
				<?php get_template_part( 'template-parts/content/content','featured' ); ?>
			</article>

		<?php endwhile;
	 endif; 

	 wp_reset_postdata();
?>