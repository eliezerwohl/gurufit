<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class='hero'>
  <div class="center">
    <img src="<?php bloginfo('template_url'); ?>/img/logo-yellow.png">
    <p>Custom fitness plans - for you and your lifestyle</p>
  </div>
</div>
<div class="container about-me">
  <div class="row">
    <div class="col-md-6">
      <h2>About Me</h2>
      <p>I’m Eric Gonzalez, a Certified Personal Trainer with 
      specializations in Performance Enhancement and 
      Corrective Exercise through the National Academy
      of Sports Medicine. I’m also a Registered Yoga 
      Teacher through the Yoga Alliance (RYT-200).
      </p>
      <p>I work work with individuals and teams in the NY Metro
      and Central Jersey area to help them reach their fitness 
      goals. Through my experience as Strength and Conditioning 
      Coach for the Jersey Sharks Football Team, I balance 
      individual strengths against each other to create a unified 
      whole. When working one-on-one with clients my experience 
      as a Physical Therapy Assistant allows me to adapt exercises 
      to fit most physical constraints.</p>
      <p>You don’t have to be a heavyweight champion to 
      get healthy! Contact me for a free consultation. 
      More…</p>
      <div class="btn-holder text-center">
        <button class="btn btn-default">Free Consultation</button>
      </div>
    </div>
    <div class="col-md-6 img-container">
      <img src="<?php bloginfo('template_url'); ?>/img/eric-belt.jpg">
    </div>    
  </div>
</div>

<div class="container-fluid training-options">
  <h2>Training Options</h2> 
  <div class="is-table-row training-container">
    <div class="row col-md-6 img-container">
      <img src="<?php bloginfo('template_url'); ?>/img/paul-bence.jpg">
    </div>  
    <div class="col-md-6 text-container">
      <p>Cheesing People Off</p>
      <p>Indian-Giving</p>
      <p>Cutting Ones</p>
      <p>Doing Some Other Things</p>
    </div> 
  </div>
  <div class="is-table-row training-container">
    <div class="col-md-6 col-md-push-6 img-container">
      <img src="<?php bloginfo('template_url'); ?>/img/senior-movement.jpg">
    </div>
    <div class="col-md-6 col-md-pull-6 text-container">
       <p>Cracking Wise</p>
      <p>World Domination</p>
      <p>Sending Me a Dollar</p>
      <p>Total Spaceship GuyTV</p>
    </div>    
  </div>
</div>
<div class="parallax-home">
  <h2>What People Are Saying</h2>
</div>
<div id="qoutes" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
     <div class="item active">
        <div class="col-sm-8 col-sm-offset-2">
           <p class="quote">"Eric has the background and commitment to help andyone succeed"</p>
           <p class="attr">-Lou Morra, Co-owner and Head Coach <br> Jersey Sharks Football </p>
        </div>
     </div>
     <div class="item">
        <div class="col-sm-8 col-sm-offset-2">
           <p class="quote">"Oh no!  SHARKS!  AHHHH!  I CAN"T SWIM!!!</p>
           <p class="attr">David K. <BR> Assisting Hands of Livingston</p>
        </div>
     </div>
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
<div class="container-fluid contact-div">
  <div class='row'>
    <div class="col-md-10 col-md-offset-1">
      <h2>Contact</h2>
      <?php echo do_shortcode('[contact-form-7 id="31" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>



<!-- div class="quote-container">
  <div class="container-fluid">
    <div class="row is-table-row">
      <div class="col-sm-6 col-xs-12 img-well">
        <?php $image = get_field('img'); ?>
        <?php if($image){ ?> <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>">
        <?php } ?> </div>
      <div class="col-sm-6 col-xs-12 purple">
        <div class="quote-well">
          <h2>
            <?php the_field("quote"); ?> </h2>
          <h4>
            <?php the_field("author"); ?> </h4>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="container main">
  <div class='row'>
    <div class="col-md-12">
      <?php the_field("main"); ?> </div>
    <div class="text-center col-md-12">
      <div class="long-line"></div>
    </div>
  </div>
  <div class="row sections">
    <div class="col-md-12">
      <?php if( have_rows( 'service_section_link') ){ ?>
      <div>
        <?php $counter = 0; $rowCount=count( get_field( 'service_section_link' ) ); ?>
        <?php while ( have_rows( 'service_section_link') ) { the_row(); $counter++ ?> <span class="service-section"><a href="<?php echo get_field('service_section_url') . '#' . get_sub_field('hash') ?>"><?php the_sub_field('text'); ?></a>
        <?php if ($counter != $rowCount){ echo "<span class='divider'>|</span>"; }?></span>
        <?php  } ?> </div>
      <?php }; ?> </div>
  </div>
  <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
</div>
<div id="about-me" class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2>
          <?php the_field("about_me_title"); ?> </h2>
        <?php if( have_rows( 'about_me_paragraphs') ){ ?>
        <?php $counter = 0; $rowCount=count( get_field( 'about_me_paragraphs' ) ); ?>
        <?php while ( have_rows( 'about_me_paragraphs') ) { the_row(); $counter++ ?>
        <p>
          <?php the_sub_field("paragraph"); if ($counter == $rowCount){ echo '<a class="read-more" href="' . get_field("about_me_link") .'">' . get_field("read_more") . '</a>';} ?></p>
        <?php  } }; ?> </div>
    </div>
  </div>
</div>
<div id="contact-div" class="container">
  <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <h2>
        <?php the_field("contact_me_title"); ?> </h2>
      <p class="text-center">
        <?php the_field("contact_me_text"); ?>
        <a target="_blank" href='tel:<?php the_field("phone", "option"); ?>'>
          <?php the_field("phone", "option"); ?> </a>.</p>
      <div class="btn-holder"> <a class="btn btn-default" href="#">Call</a><a class="btn   btn-default" href="#">Email</a> </div>
    </div>
  </div>
  <div class="text-center col-md-12">
    <div class="short-line"></div>
  </div>
  <div class="warning">
    <?php the_field("warning"); ?> </div>
</div> -->
<?php get_footer(); ?>