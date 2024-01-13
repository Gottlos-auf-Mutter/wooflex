<!-- Header Slider -->
<header class="main-headder">

	<div id="kiedanHeroCarouselIndicators" class="carousel slide" data-ride="carousel">
<!-- 	  <ol class="carousel-indicators">
	    <li data-target="#kiedanHeroCarouselIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#kiedanHeroCarouselIndicators" data-slide-to="1"></li>
	    <li data-target="#kiedanHeroCarouselIndicators" data-slide-to="2"></li>
	    <li data-target="#kiedanHeroCarouselIndicators" data-slide-to="3"></li>
	  </ol>
 -->

	  <div class="carousel-inner">


			<div class="carousel-item active">
			  	<!-- custom header image selectable in wordpress backend -->
				<?php if ( has_header_image() ): ?>
					<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
				<?php endif; ?>
					<div class="carousel-caption">
						<?php if ( has_custom_logo() ): ?>
							<?php echo wp_get_attachment_image( get_theme_mod( 'custom_logo' ), 'full' ); ?>
						<?php endif; ?>
						
						<?php $site_description = get_bloginfo( 'description', 'display' ); ?>
						<h1><?php echo  $site_description; ?></h1>
						<button class="btn btn-light">
							<a href="<?php echo get_theme_mod('cta_btn_url' ); ?>">
								<?php echo get_theme_mod('cta_btn_text', 'CTA Button'); ?>
							</a>
						</button>
				 	</div>
			 </div>

	  <?php

		//MOST RECENT BLOGPOSTS

			$args = array(
				'type'	=> 'posts',
				'posts_per_page' => 3,
			);

			$recentPosts = new WP_Query( $args );

			if ( $recentPosts->have_posts() ):
				while ( $recentPosts->have_posts() ) : $recentPosts->the_post(); ?>
					<div class="carousel-item">
						<?php if( has_post_thumbnail() ): ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
						<div class="carousel-caption d-none d-md-block">
							<?php the_title( sprintf('<h2 class="entry-title"><a href="%s">', esc_url( get_permalink() ) ),'</a></h2>' ); ?>
						</div>
					</div>


				<?php endwhile;
			 endif;

			 wp_reset_postdata();
		?> 

	  </div>


<!-- 	  <a class="carousel-control-prev" href="#kiedanHeroCarouselIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#kiedanHeroCarouselIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a> -->
	</div>

</header>
