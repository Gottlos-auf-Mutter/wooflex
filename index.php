<?php  /*
@package wooflextheme
*/
get_header(); ?>

<div class="container mt-5 mb-5">
 <h1>template:index.php</h1>
	
	<h1 class="page-title"><?php wp_title( $sep = '', $display = true, $seplocation = '' ) ?></h1>

	<div class="row justify-content-md-center cat-nav">
		<div>–&nbsp;</div>
		<?php 
		$categories = get_categories();
		foreach($categories as $category) {
   			echo '<div><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></div><span class="seperator">&nbsp;|&nbsp;</span>';
		} ?>
		<div>&nbsp;–</div>
	</div>


	<div class="row justify-content-md-center">

		<section class="content-main col-12 col-md-9">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content/content', get_post_format()); ?>

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


		<?php endif; ?>


		</section>



	</div> <!-- .row -->
	
	<?php get_footer(); ?>

</div> <!-- container -->
