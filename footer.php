<?php
/**
 * The footer template
 *
 *
 * @package Ming Johanson
 * @version 1.0
 */
?>

		</main><!-- #content -->

		<footer>
			<p class="copyright">© Copyright <?php echo date("Y"); ?> Ming Johanson</p>

			<nav class="nav social icons">
				<div class="gradient"></div>
				<?php 
					wp_nav_menu(array(
						'theme_location' => 'social_menu',
						'container' => '',
						'container_class' => '',
					)); 
				?> 
			</nav> 

			<div class="aimhigher logo">
				<a href="https://aimhigherweb.design" target="_blank" rel="nofollow">
					<?php
						$logo_aimhigher = get_site_url() . '/wp-content/themes/ming-johanson/resources/img/aimhigher.svg';
						echo file_get_contents($logo_aimhigher);
					?>
				</a>
			</div>
		</footer>

		<script type="text/javascript" src="/wp-content/themes/ming-johanson/resources/js/main.js" ></script>
		<?php wp_footer(); ?>
		<script id="__bs_script__">//<![CDATA[
			document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.12'><\/script>".replace("HOST", location.hostname));
		//]]></script>
    </body>
</html>
