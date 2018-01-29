</div>
<footer class="text-center">
	<div class="contact">
		<a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field("email", "option"); ?></a>
		<a class="contact-me" target="_blank" href="tel:<?php the_field("phone", "option"); ?>"><i class="fa fa-phone" aria-hidden="true"></i><?php the_field("phone", "option"); ?></a>
	</div>
	<div>
		<span class="bottom-contact">Copyright <?php echo date("Y"); ?> GURUFIT LLC</span>
		<span class="bottom-contact">Website by <a target="_blank" href="https://www.eandvdesign.com">E and V Design</a></span>
	</div>
	<?php wp_footer(); ?>
	</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/personal.js"></script>
</body>
</html>
