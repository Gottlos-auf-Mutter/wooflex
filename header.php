<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>
		    <?php if(is_front_page() || is_home()){
		        echo get_bloginfo('name');
		    } else{
		        echo wp_title('');
		    }?>
		</title>
		<?php wp_head(); ?>
    <?php $site_icon_url = get_site_icon_url();
    if ($site_icon_url) {
        echo '<link rel="icon" href="' . esc_url($site_icon_url) . '" type="image/x-icon">' . "\n";
        echo '<link rel="shortcut icon" href="' . esc_url($site_icon_url) . '" type="image/x-icon">' . "\n";
		} ?>	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	<body <?php body_class(); ?>>
		<?php get_template_part( 'template-parts/header/mainnavigation'); ?>
		<main id="main" role="main" class="content-grid">
