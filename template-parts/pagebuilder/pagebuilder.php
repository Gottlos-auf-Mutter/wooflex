
<?php while ( have_rows('content_elements') ) : the_row();?>	
	

	<?php if( get_row_layout() == 'herobanners' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-herobanners') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'teasers' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-teasers') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'textblock' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-textblock') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'products' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-products') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'services' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-services') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'posts' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-posts') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'accordion' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-accordion') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'codesnippet' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-codesnippet') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'shortcode' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-shortcode') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'brands' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-brands') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'customcode' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-customcode') ?>
	<?php endif; ?>

	<?php if( get_row_layout() == 'signupform' ): ?>
		<?php get_template_part('template-parts/pagebuilder/pb-signupform') ?>
	<?php endif; ?>

<?php endwhile;?>



