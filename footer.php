</div>
<footer class="text-center">
  <div class="contact">
    <a class="contact-me" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><i class="fa fa-envelope-o" aria-hidden="true"></i> <?php the_field("email", "option"); ?></a>
    <a class="contact-me" target="_blank" href="tel:<?php the_field("phone", "option"); ?>"><i class="fa fa-phone" aria-hidden="true"></i> <?php the_field("phone", "option"); ?></a>
  </div>
  <div>
    <span class="bottom-contact">Copyright <?php echo date("Y"); ?> GURUFIT LLC</span>
    <span class="bottom-contact">Website by <a target="_blank" href="https://www.eandvdesign.com">E and V Design</a></span>
  </div>
  <?php wp_footer(); ?>
</footer>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/parallax.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/modal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/personal.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll.js"></script>
<?php if ( (get_field("active", "option") ) && (is_front_page()) ) { ?>
<div id="specialModal" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="inner row">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <div class="col-md-10 col-md-offset-1">
            <h3><?php the_field("title", "options"); ?></h3>
            <p class='sub'><?php the_field("sub_title", "options"); ?></p>
            <?php echo do_shortcode( '[contact-form-7 id="142" title="Special"]' ); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/special.js"></script>
<?php } ?>
</body>
</html>
