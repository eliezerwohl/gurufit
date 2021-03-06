<?php /* Template Name: Training Options*/ ?>
<?php get_header(); ?>
<div class="page-background">
  <div class="clear-container container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="mobile-background">
          <h1 class="animated slideInLeft"><?php the_field("training_services_header"); ?></h1>
        </div>
        <p><?php the_field("main"); ?></p>
        <?php if( have_rows( 'main_list') ){ ?>
        <div class="col-md-10">
          <ul class="bullet-list">
            <?php while ( have_rows( 'main_list') ) { the_row(); ?>
            <li><span><span class="bold"><?php the_sub_field("tag"); ?></span><br>
              <?php the_sub_field("content"); ?></span>
            </li>
            <?php  } ?>
          </ul>
        </div>
      </div>
      <?php }; ?>
    </div>
  </div>
  <div class="white-container container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <?php if( have_rows( 'training_options') ){ ?>
        <?php $counter = 0; while ( have_rows( 'training_options') ) { the_row(); $counter++; $rowCounter++; ?>
        <?php if ($rowCounter == 1 ){ echo "<div class='row training-row'>"; } ?>
        <div class="col-md-3 col-sm-3 col-xs-12 content-container">
          <a href="#" data-toggle="modal" data-target=".modal-<?php echo $counter; ?>">
            <?php $image=get_sub_field( 'img'); ?>
            <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
            <p><?php the_sub_field("txt"); ?></p>
          </a>
        </div>
        <?php if ($rowCounter == 4 ){ echo "</div>"; $rowCounter=0; } ?>
        <div class="modal fade modal-<?php echo $counter; ?>" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              </div>
              <div class="modal-body">
                <h3>
                  <?php echo strip_tags(get_sub_field("txt")); ?>
                  <div class="blue-line"></div>
                </h3>
                <p><?php echo strip_tags(get_sub_field("modal_txt")); ?>
                <p>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
        <?php  } ?>
      </div>
      <?php }; ?>
    </div>
  </div>
  <div class="padding"></div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4><a class="tel" target="_blank" href="tel:<?php the_field("phone", "option"); ?>"><?php the_field("call_me_text"); ?></a></h4>
    </div>
  </div>
</div>
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
            <div class="col-sm-4 col-xs-12"><img class="img-pop img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>"></div>
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
</div>
<?php get_footer(); ?>
