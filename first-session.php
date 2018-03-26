<?php /* Template Name: First Session*/ ?>
<?php get_header(); ?>
<div class="modal fade" id="freeModal" tabindex="-1" role="dialog" aria-labelledby="freeModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="input-front">
          <p class="modal-text"><?php the_field("consult_txt", "option"); ?></p>
          <div class="input-holder">
            <form id="freeForm">
              <input value="title1" name="Free Consultation" type="hidden">
              <div class="col-sm-6 col-sm-12">
              <input class="col-sm-12" name="name" placeholder="Name">
            </div>
              <div class="col-sm-6 col-sm-12">
              <input class="col-sm-12" name="telephone" placeholder="Telephone">
            </div>
            </form>
          </div>
        </div>
        <div class="thank" style="display: none;">
          <p class="modal-text">Thanks!</p>
          <p class="text-center">I will contact you soon to schedule your free consultation</p>
        </div>
      </div>
      <div class="modal-footer">
        <button id="freeSubmit" type="button" class="btn btn-default">Send</button>
      </div>
    </div>
  </div>
</div>
<div class="page-background">
  <div class="clear-container container-fluid first-session">
    <div class="row">
      <div class="col-md-12">
        <div class="mobile-background">
          <h1 class="animated slideInLeft"><?php the_field("first_session_header"); ?></h1>
        </div>
        <?php the_field("main"); ?>
        <?php if( have_rows( 'main_list') ){ ?>
        <ul class="bullet-list">
          <?php while ( have_rows( 'main_list') ) { the_row(); ?>
          <li><span><span class="bold"><?php the_sub_field("tag"); ?></span><br>
            <?php the_sub_field("content"); ?></span>
          </li>
          <?php  } ?>
        </ul>
        <?php }; ?>
        <a class="btn-blue" href="#" data-toggle="modal" data-target="#freeModal">Free Consultation</a>
      </div>
    </div>
  </div>
  <div class="white-container container-fluid">
    <div class="row">
      <div class="col-sm-4">
        <div class="mobile-background">
          <h2><?php the_field("forms_header"); ?></h2>
        </div>
      </div>
      <div class="col-sm-8 forms">
        <p><?php the_field("forms_text"); ?></p>
        <?php $file = get_field('file'); ?>
        <!-- <div class="col-md-12 btn-container"> -->
        <p class="a-btn"><a download class="btn-blue" href="<?php echo $file['url']; ?>">Download PDF</a></p>
        <p class="a-btn"><a class="btn-blue mirrorBtn" data-toggle="modal" href="#" data-target=".bs-example-modal-lg">Online Form</a></p>
      <!-- </div> -->
        <div id="first-session-modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="mirror"></h3>
              </div>
              <div class="modal-body">
                <?php if( have_rows( 'section') ){ ?>
                <form id="theForm">
                  <span id="my_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>
                  <?php $sectionCounter=0; $counter = 0; $rowCount=count( get_field( 'section' ) ); ?>
                  <?php while ( have_rows( 'section') ) { the_row(); $counter++; $sectionCounter++; ?>
                  <div class="section" data-current="<?php echo $sectionCounter; ?>">
                    <span class="hide mirror-<?php echo $sectionCounter; ?>"><?php the_sub_field('title'); ?></span>
                    <input type="hidden" name="<?php the_sub_field('title'); ?>" value="title1">
                    <?php $counter = 0; $subRowCount=count( get_field( 'question' ) ); ?>
                    <?php while ( have_rows( 'question') ) { the_row(); $counter++ ?>
                    <p><?php the_sub_field("txt"); ?></p>
                    <?php if (get_sub_field("type") == "Single"){ ?>
                    <input name="<?php the_sub_field("txt"); ?>">
                    <?php } else { ?>
                    <textarea name="<?php the_sub_field("txt"); ?>"></textarea>
                    <?php    } ?>
                    <?php  } ?>
                    <?php if (get_sub_field('warning')) { ?>
                     <p class="warn"><?php the_sub_field('warning'); ?></p>
                    <?php } ?>
                    <?php if ($sectionCounter != 1){ ?>
                    <a class="prev btn-blue float-left">Previous</a>
                    <?php } ?>
                    <?php if ($sectionCounter == $rowCount){ ?>
                    <a type="submit" class="submit btn-blue">Submit</a>
                    <?php } else { ?>
                    <a class="next btn-blue">Next</a>
                    <?php } ?>
                  </div>
                  <?php } ?>
                  <?php  } ?>
                </form>
                <div class="thank"><h4 class="text-center"><?php the_field("form_thank"); ?><h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  <div class="padding"></div>
</div>
<?php if( have_rows( 'main_list') ){ ?>
<div class="white-container container-fluid testimonials">
  <div class="row">
    <div class="col-md-12">
      <div class="mobile-background">
        <h2><?php the_field("testimonials_header"); ?></h2>
      </div>
      <?php while ( have_rows( 'testimonials') ) { the_row(); ?>
      <p><?php the_sub_field("quote"); ?></p>
      <p class="attr"><?php the_sub_field("attr"); ?></p>
      <?php  } ?>
    </div>
  </div>
</div>
<?php }; ?>
<?php get_footer(); ?>
