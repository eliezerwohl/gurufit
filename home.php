<?php /* Template Name: Home */ ?>
<?php get_header(); ?>
<div class="quote-container">
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
</div>
<?php get_footer(); ?>