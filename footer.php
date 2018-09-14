		<!-- footer -->
		<footer class="footer text-center py-5" role="contentinfo">
			<div class="container">
				<div class="d-flex justify-content-around">
					<div class="footer-1">
						<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="<?php bloginfo('name')?>" class="footerLogo"></a>
					</div>
					<div class="footer-2">
						<ul class="list-unstyled">
							<li class="mb-2"><a href="#">The Companny</a></li>
							<li class="mb-2"><a href="#">About</a></li>
							<li class="mb-2"><a href="#">Projects</a></li>
						</ul>
					</div>
					<div class="footer-3">
						<ul class="list-unstyled">
							<li class="mb-2"><a href="#">Equity Investment</a></li>
							<li class="mb-2"><a href="#">EB5 VISAS</a></li>
						</ul>
					</div>
					<div class="footer-4">
						<ul class="list-unstyled">
							<li class="mb-2"><a href="#">News</a></li>
							<li class="mb-2"><a href="#">Press</a></li>
						</ul>
					</div>
					<div class="newsletter footer-5">
						<h6 class="brown">Newsletter</h6>
						<p>Subscribe and get the latest on your inbox</p>
						<?php get_template_part('include/optin') ?>
					</div>
				</div>
			</div>
			<!-- copyright -->
			<p class="copyright mt-5">
				&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Develop by', 'html5blank'); ?>
				<a href="//jeanfondeur.com" title="Jean Fondeur" target="_blank">Jean Fondeur</a>.
			</p>
			<!-- /copyright -->
		</footer>
			<!-- /footer -->
		<?php wp_footer(); ?>
		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

		<script type="text/javascript" src="https://qz363.infusionsoft.com/app/webTracking/getTrackingCode"></script>
		<script type="text/javascript" src="https://qz363.infusionsoft.com/app/timezone/timezoneInputJs?xid=6730495c336af971211de89344250e00"></script>

	</body>
</html>
