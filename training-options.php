<?php /* Template Name: Training Options*/ ?>
<?php get_header(); ?>
<div class="page-background">
  <div class="clear-container container-fluid">
    <div class="row">
      <div class="col-md-12">
        <h1>Training Options</h1>
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and</p>
      </div>
    </div>
  </div>
  <div class="transparent-container container-fluid">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
      <?php if( have_rows( 'training_options') ){ ?>
  
            <?php $counter = 0; while ( have_rows( 'training_options') ) { the_row(); $counter++; ?> 
              <div class="col-md-3">
                <a href="#" data-toggle="modal" data-target=".modal-<?php echo $counter; ?>">
                 <?php $image=get_sub_field( 'img'); ?>
          <img class="" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>">
          <p><?php the_sub_field("txt"); ?></p></a>
        </div>

<div class="modal fade modal-<?php echo $counter; ?>" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <h4><?php the_sub_field("txt"); ?></h4>
        <p><?php the_sub_field("modal_txt"); ?><p>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
             
      
    
            <?php  } ?>
         </div>
  <?php }; ?>
       
    </div>
  </div>
  <br> <br><br> <br><br> <br><br> <br>
</div>
<div class="white-container container-fluid">
  <div class="row">
    <div class="col-md-12">
      <h4>Questions? Call me!</h4>
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
              <?php $image=get_sub_field( 'img'); ?>
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
  <div id="myModal" class="modal">
    <!-- The Close Button -->
    <span class="close">&times;</span>
    <!-- Modal Content (The Image) -->
    <img class="modal-content" id="img01">
    <!-- Modal Caption (Image Text) -->
    <!--   <div id="caption"></div> -->
  </div>
</div>



<?php get_footer(); ?>