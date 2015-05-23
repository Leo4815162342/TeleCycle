		<div class="contact">
			<div class="contact-elems">
				<a href="/contact-us/" class="contact-elem call">
					<span class="contact-icon"></span><span>Speak to us</span>
				</a>
				<a href="/contact-us/" class="contact-elem enquiry side-border">
					<span class="contact-icon"></span><span>Online enquiry</span>
				</a>
				<a href="/contact-us/" class="contact-elem email">
					<span class="contact-icon"></span><span>Send us an email</span>
				</a>
			</div>
		</div>
		<footer>
			<?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'menu_class' => 'footer-nav container' ) ); ?>
			<div class="copyright container">	
				<div class="social-links">
					<a href="#" class="twitter-link" title="TeleCycle Twitter page"></a>
					<a href="#" class="fb-link" title="TeleCycle Facebook page"></a>
				</div>
				<p>© Copyright 2015 Telecycle</p>
			</div>						
		</footer>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/vendor/responsiveslides.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/vendor/jquery.jcarousellite.min.js"></script>
	<script src="<?php bloginfo('template_url');?>/js/main.js"></script>
	<?php wp_footer(); ?>
	</body>
</html>


