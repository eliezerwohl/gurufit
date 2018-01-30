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
          <p class="modal-text">Please fill out the information below for your free consultation</p>
          <div class="input-holder">
            <input placeholder="Name">
            <input placeholder="Telephone">
          </div>
        </div>
        <div class="thank" style="display: none;">
          <p class="modal-text">Thanks!</p>
          <p class="text-center">I will contact you soon to schedule your free consultation</p>
        </div>
      </div>
      <div class="modal-footer">
        <button id="submit" type="button" class="btn btn-default">Send</button>
      </div>
    </div>
  </div>
</div>
<div class="page-background">
  <div class="clear-container container-fluid first-session">
    <div class="row">
      <div class="col-md-12">
        <h1 class="animated slideInLeft">First Session</h1>
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
      <div class="col-md-4">
        <h2>Forms</h2>
      </div>
      <div class="col-md-8 forms">
        <p>Please fill out a Fitness Profile before your first session.  Either Download the form to print and fill out or complete it online.</p>
        <?php $file = get_field('file'); ?>
        <a download class="btn-blue" href="<?php echo $file['url']; ?>">Download PDF</a><button class="btn-blue mirrorBtn" data-toggle="modal" data-target=".bs-example-modal-lg">Online Form</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="mirror"></h3>
              </div>
              <div class="modal-body">
                <?php if( have_rows( 'section') ){ ?>
                <form id="theForm">
                  <?php $sectionCounter=0; $counter = 0; $rowCount=count( get_field( 'section' ) ); ?>
                  <?php while ( have_rows( 'section') ) { the_row(); $counter++; $sectionCounter++; ?>
                  <div class="section" data-current="<?php echo $sectionCounter; ?>">
                    <span class="hide mirror-<?php echo $sectionCounter; ?>"><?php the_sub_field('title'); ?></span>
                    <input type="hidden" name="<?php the_sub_field('title'); ?>" value="title1">
                    <?php $counter = 0; $subRowCount=count( get_field( 'question' ) ); ?>
                    <?php while ( have_rows( 'question') ) { the_row(); $counter++ ?>
                    <p><?php the_sub_field("txt"); ?></p>
                    <?php if (get_sub_field("type") == "Single"){ ?>
                    <input name="<?php the_sub_field("txt"); ?>"  value='goodbye'>
                    <?php }
                      else { ?>
                    <textarea name="<?php the_sub_field("txt"); ?>"  value='goodbye'></textarea>
                    <?php    } ?>
                    <?php  } ?>
                    <?php if ($sectionCounter != 1){ ?>
                    <button class="prev btn-blue float-left">Previous</previous>
                    <?php } ?>
                    <?php if ($sectionCounter == $rowCount){ ?>
                    <button type="submit" class="submit btn-blue">Submit</button>
                    <?php } else { ?>
                    <button class="next btn-blue">Next</button>
                    <?php } ?>
                  </div>
                  <?php } ?>
                  <?php  } ?>
                </form>
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
      <h2>Testimonials</h2>
      <?php while ( have_rows( 'testimonials') ) { the_row(); ?>
      <p><?php the_sub_field("quote"); ?></p>
      <p class="attr"><?php the_sub_field("attr"); ?></p>
      <?php  } ?>
    </div>
  </div>
</div>
<?php }; ?>
<?php get_footer(); ?>
