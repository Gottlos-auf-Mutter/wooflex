
		</main>
		<footer class="footer-area">	
			<footer class="widget-footer content-grid">	
					<?php dynamic_sidebar( 'footer_widgets_top' ); ?>
			</footer>

			<footer class="primary-footer content-grid">	
					

					<section class="footer-logo">
						<hr>
						<a class="footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<img src="<?php echo get_theme_mod('footer_logo');  ?>" alt="">
						</a>
						<hr>
					</section>

					<?php dynamic_sidebar( 'footer_widgets_middle' ); ?>

				<section class="footermenu breakout">
					<?php 
					// there are 4 Menuspots in the footer so we loop 4 times
					// (Menu Locations are defined in /inc/menu-functions.php
					for ($menunr=1; $menunr <=4; $menunr+=1)
					{
						$location = 'footer-menu-' . $menunr;
						// Only show menus that have got menus assigned in WP Backend
						if ( has_nav_menu( $location ) ) {
							
							if (function_exists('wooflex_get_menu_by_location')) {
								$menu_obj = wooflex_get_menu_by_location($location );-
								wp_nav_menu( array(
									'theme_location' => $location, 
									'items_wrap'=> '<h5>'.esc_html($menu_obj->name).'</h5><ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>') );
							}
						}
					}
					?>
				</section>

				<?php dynamic_sidebar( 'footer_widgets_bottom' ); ?>
			</footer>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
