<?php /* Template Name: Contact*/ ?>
<?php get_header(); ?>
<style>
::-webkit-input-placeholder { /* Chrome */
  color: #55b0d0;
  opacity: .3;
  font-style: italic;
}
 :-ms-input-placeholder { /* IE 10+ */
  color: #55b0d0;
  opacity: .3;
  font-style: italic;
}
 ::-moz-placeholder { /* Firefox 19+ */
  color: #55b0d0;
  opacity: .3;
  font-style: italic;
}
 :-moz-placeholder { /* Firefox 4 - 18 */
  color: #55b0d0;
  opacity: .3;
  font-style: italic;
}</style>
<div class="page-background">
  <div class="clear-container container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="mobile-background">
          <h1 class="animated slideInLeft"><?php the_field("contact_header"); ?></h1>
        </div>
        <p style="margin-bottom:0px"><span class="bold">Email:</span> <a target="_blank" href="mailto:<?php the_field("email", "option"); ?>"><?php the_field("email", "option"); ?></p>
        <p><span class="bold">Telephone:</span> <a target="_blank" href="tel:<?php the_field("phone", "option"); ?>"><?php the_field("phone", "option"); ?></a></p>
        <p><?php the_field("main"); ?></p>
    </div>
  </div>
</div>
  <div class="container-fluid white-container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 ">
        <?php echo do_shortcode( '[contact-form-7 id="83" title="Contact Page"]' ); ?>
      </div>
    </div>
  </div>
  <div class="padding"></div>
</div>

<?php get_footer(); ?>
