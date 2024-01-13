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
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
		<body>
		<?php get_template_part( 'template-parts/header/mainnavigation'); ?>
		<main id="main" role="main" class="content-grid">
