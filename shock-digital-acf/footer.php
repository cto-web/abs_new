<footer class="site-footer">
	<div class="footer-inner">
		<div class="container">
			<div class="footer-top-panel">
				<div class="footer-newsletter">
					<h2 class="title heading-style"><?= get_field('newsletter_title', 'option'); ?></h2>
					<p class="content"><?= get_field('newsletter_content', 'option'); ?></p>
					<div class="newsletter-form"><?= get_field('newsletter_form', 'option'); ?></div>
					<p class="newsletter-form-content"><?= get_field('newsletter_form_content', 'option'); ?></p>
				</div>
				<div class="d-flex justify-between right">
					<div class="navigate-nav">
						<h2 class="heading-style">Navigatie</h2>
						<nav>
							<?php wp_nav_menu( array('theme_location'=>'navigatie','menu_id'=>'navigatie-menu')); ?>
						</nav>
					</div>
					<div class="contact-info">
						<h2 class="heading-style">Wijs & van Oostveen</h2>
						<p class="address"><?php echo get_field('address', 'option'); ?></p>
						<p><a href="tel:<?php echo get_field('phone', 'option'); ?>"><?php echo get_field('phone', 'option'); ?></a></p>
						<p><a href="mailto:<?php echo get_field('email', 'option'); ?>"><?php echo get_field('email', 'option'); ?></a></p>
					</div>
				</div>
			</div>
			<div class="d-flex footer-bottom-panel">
				<div class="footer-logo">
					<?php $image = get_field('footer_logo', 'option'); ?>
					<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
				</div>
				<div class="legal-nav">
					<nav class="nav-legal">
						<?php wp_nav_menu( array('theme_location'=>'legal','menu_id'=>'legal-menu')); ?>
					</nav>
					<div class="copyrights">
						<p>© 2024 SHOCK Digital.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
<?php wp_footer(); ?>