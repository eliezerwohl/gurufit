<?php /* Template Name: About */ ?>
<?php get_header(); ?>
<div class="page-background">
  <div class="about-container">
    <h1>About</h1>
    <?php while ( have_rows( 'about_section') ) { the_row(); ?>
      <p><?php the_sub_field("txt"); ?></p>
    <?php }; ?>
  </div>
  <div class="white-container">
    <?php the_field("main"); ?>
    <div class='text-center'>
      <button class="btn-blue">Contact Me</button>
    </div>
  </div>
  <br><br><br><br><br><br><br><br><br><br>
  <?php if( have_rows( 'image_gallery') ){ ?>
  <?php $first = true;?>
  <div class="container-fluid carousel-container">
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide multi-item-carousel" id="theCarousel">
          <div class="carousel-inner">
            <?php while ( have_rows( 'image_gallery') ) { the_row(); ?>
            <div class="item <?php if ($first){ echo 'active';  $first = false; } ?>">
              <?php $image=get_sub_field('img'); ?>
              <div class="col-xs-4"><a href="#1"><img class="img-pop img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"></a></div>
            </div>
            <?php  } ?>
          </div>
          <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
          <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
        </div>
      </div>
    </div>
  </div>
  <?php }; ?>
<div id="myModal" class="modal super-modal">
    <!-- The Close Button -->
    <span class="close-modal">&times;</span>
    <!-- Modal Content (The Image) -->
    <img class="modal-content super-modal-content" id="img01">
    <!-- Modal Caption (Image Text) -->
    <!--   <div id="caption"></div> -->
  </div>
</div>
<?php get_footer(); ?>
