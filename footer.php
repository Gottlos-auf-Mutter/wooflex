
		</main>

		<footer class="primary-footer content-grid">	
				<section class="footer-logo">
					<hr>
					<a class="footer-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo get_theme_mod('footer_logo');  ?>" alt="">
					</a>
					<hr>
				</section>
			<div class="footermenu breakout">
				<?php 
				wp_nav_menu( array(
					'theme_location' => 'footer-menu-1',
					'container'         => 'nav',
					'menu_class'        => 'footermenu',
				) ); 
				?>

				<?php 
				wp_nav_menu( array(
					'theme_location' => 'footer-menu-2',
					'container'         => 'nav',
					'menu_class'        => 'footermenu',
				) ); 
				?>

				<?php 
				wp_nav_menu( array(
					'theme_location' => 'footer-menu-3',
					'container'         => 'nav',
					'menu_class'        => 'footermenu',
				) ); 
				?>

				<?php 
				wp_nav_menu( array(
					'theme_location' => 'footer-menu-4',
					'container'         => 'nav',
					'menu_class'        => 'footermenu',
				) ); 
				?>

			</div>
		</footer>

		<?php wp_footer(); ?>

	</body>
</html>
