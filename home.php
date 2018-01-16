<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class='hero'>
  <div class="center">
    <img src="<?php bloginfo('template_url'); ?>/img/logo-yellow.png">
    <p><?php the_field("logo_text"); ?></p>
  </div>
</div>
<div class="container about-me">
  <div class="row">
    <div class="col-md-6 col-xs-12">
      <h2>About Me</h2>
      <?php if( have_rows( 'about_me_text') ){ ?>
        <?php $counter = 0; $rowCount=count( get_field( 'about_me_text' ) ); ?>
        <?php while ( have_rows( 'about_me_text') ) { the_row(); $counter++ ?> 
        <p><?php the_sub_field('txt'); ?>
        <?php if($counter == $rowCount){
          echo "<span class='more'>more...</span>";
        } ?>  
        </p>
        <?php  } ?>
      <?php }; ?> 
      <div class="btn-holder text-center">
        <button class="btn btn-default">Free Consultation</button>
      </div>
    </div>
    <div class="col-md-6 col-xs-12 img-container">
      <img src="<?php bloginfo('template_url'); ?>/img/eric-belt.jpg">
    </div>    
  </div>
</div>
<?php if( have_rows( 'training_options') ){ ?>
<div class="container-fluid training-options">
  <h2>Training Options</h2> 
  <?php $counter = 0; $rowCount=count( get_field( 'training_options' ) ); ?>
  <?php while ( have_rows( 'training_options') ) { the_row(); $counter++ ?> 
  <div class="is-table-row row training-container">
    <div class="col-sm-6 <?php if(!($counter % 2)){ echo 'col-sm-push-6'; } ?> img-container">
      <?php $image=get_sub_field( 'img'); ?>
      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
    </div>  
    <div class="col-sm-6 <?php if(!($counter % 2)){ echo 'col-sm-pull-6'; } ?> text-container">
      <?php the_sub_field("txt"); ($counter % 2); ?>
    </div> 
  </div>
  <?php  } ?>
</div>
<?php }; ?>
<?php if( have_rows( 'qoutes') ){ ?>
<div class="parallax-home">
  <h2>What People Are Saying</h2>
</div>
<div id="qoutes" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $counter = 0; $rowCount=count( get_field( 'qoutes' ) ); ?>
    <?php while ( have_rows( 'qoutes') ) { the_row(); $counter++ ?>
    <div class="item <?php if ($counter == 1){ echo 'active'; } ?>">
      <div class="col-sm-8 col-sm-offset-2">
        <p class="quote"><?php the_sub_field('quote_text'); ?></p>
        <p class="attr"><?php the_sub_field('quote_attr'); ?></p>
      </div>
    </div> 
    <?php  } ?>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#qoutes" role="button" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#qoutes" role="button" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
  </a>
</div>
<?php }; ?> 
<div class="container-fluid contact-div">
  <div class='row'>
    <div class="col-md-10 col-md-offset-1">
      <h2>Contact</h2>
      <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>