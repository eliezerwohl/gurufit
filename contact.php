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
        <h1 class="animated slideInLeft">Contact</h1>
        <p style="margin-bottom:0px"><span class="bold">Email:</span>eric@gurufit.com</p>
        <p><span class="bold">Telephone:</span>971-684-5080</p>
        <p>I travel within the Central New Jersey and NYC metro area, with my own equipment, to make your sessions more convenient for you either at your home or workplace. For general questions please use the form below.</p>
    </div>
  </div>
</div>
  <div class="container-fluid white ">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 ">
        <?php echo do_shortcode( '[contact-form-7 id="83" title="Contact Page"]' ); ?>
      </div>
    </div>
  </div>
  <div class="padding"></div>
</div>

<?php get_footer(); ?>
