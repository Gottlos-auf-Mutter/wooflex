<header class="primary-header content-grid">
	<div class="menu breakout">

			<a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo get_theme_mod('small_logo');  ?>" alt="">
			</a>

			<?php
			wp_nav_menu( array(
				'theme_location'    => 'header-menu',
				'depth'             => 2,
				'container'         => 'nav',
				'menu_class'        => 'mainnav',
			) );
			?>

			<ul class="shopnav">
<!--
				<li class="nav-item menusearch">
					<div class="menusearchform">
						<?php get_search_form(); ?>
					</div>
				</li>
				<li class="nav-item open-search">
					<a class="nav-link" href="#"><i class="fas fa-search"></i></a>
				</li>
-->
			<?php
			include_once(ABSPATH.'wp-admin/includes/plugin.php');
			if( is_plugin_active( 'woocommerce/woocommerce.php' ) ):  ?>
				<li class="nav-item">
					<?php if ( is_user_logged_in() ): ?>
						<a class="nav-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('My Account','woothemes'); ?>"><i class="fas fa-user-circle"></i></a>
					<?php else: ?>
						<a class="nav-link" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>" title="<?php _e('Login / Register','woothemes'); ?>"><i class="fas fa-user-circle"></i></a>
					<?php endif; ?>
				</li>
				<li class="nav-item header-cart">
					<a class="nav-link header-cart-link" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Shopping Cart' ) ?>" tabindex="-1">
						<i class="fas fa-shopping-cart"></i>
						<div class="navbar-icon-link-badge">
							<?php echo sprintf ( WC()->cart->get_cart_contents_count() ); ?>
						</div>
					</a>
				</li>
			<?php endif; ?>

			</ul>
	</div>
</header>
