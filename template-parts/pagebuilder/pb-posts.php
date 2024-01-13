<!-- Pagebuilder Posts -->
<section class="pb-section pb-posts">

<h2><?php the_sub_field('posts_headline'); ?></h2>
<div class="posts">
	<?php get_template_part( 'template-parts/pagebuilder/posts/loop-latest_posts'); ?>
</div>

	<?php if(get_sub_field('posts_button')) ?>
		<?php 
		$link = get_sub_field('posts_button_link');
		if( $link ): 
			$link_url = $link['url'];
			$link_title = $link['title'];
		?>
			<a class="btn btn-primary" href=" <?php echo "$link_url" ?>" role="button">
				<?php echo "$link_title"; ?>
			</a>
	<?php endif; ?>

</section> <!-- pb-posts -->






