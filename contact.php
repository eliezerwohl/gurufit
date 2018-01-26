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
        <p>It is a long established fact that a reader will be distracted by</p>
        <p>It is a long established fact that a reader will be distracted by </p>
        <p>the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normalr</p>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 white">
        <?php echo do_shortcode( '[contact-form-7 id="83" title="Contact Page"]' ); ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
