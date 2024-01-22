<?php  /*
@package wooflextheme
*/
get_header(); ?>

<?php if (function_exists('wooflex_nav_breadcrumb')) wooflex_nav_breadcrumb(); ?>
	
	<h1 class="page-title"><?php wp_title( $sep = '', $display = true, $seplocation = '' ) ?></h1>



		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content/content', get_post_format()); ?>

		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>


		<?php endif; ?>


<?php if (function_exists('wooflex_pagination')) wooflex_pagination(); ?>


	<?php get_footer(); ?>



	<!-- <nav aria-label="Page navigation example">
	  <ul class="pagination">
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li class="page-item"><a class="page-link" href="#">1</a></li>
	    <li class="page-item"><a class="page-link" href="#">2</a></li>
	    <li class="page-item"><a class="page-link" href="#">3</a></li>
	    <li class="page-item">
	      <a class="page-link" href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav> -->

