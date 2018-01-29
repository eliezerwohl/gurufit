<?php /* Template Name: First Session*/ ?>
<?php get_header(); ?>
<div class="page-background">
  <div class="clear-container container-fluid first-session">
    <div class="row">
      <div class="col-md-12">
        <h1 class="animated slideInLeft">First Session</h1>
        <p>The first time we meet, I will want to discuss your goals for training, learn about your past experience with exercise, and find out if you have any injuries or areas of concern. I will conduct a fitness assessment and present you with ideas for your training plan.</p>
        <p>Personal training sessions are 1-hour long. However, clients can expect the first session to be approximately 70 minutes consisting of:</p>
        <ul class="bullet-list">
          <li><span><span class="bold">Planning:</span><br>We discuss your exercise goals and training.
            <br>This includes reviewing your previous training.
            </span>
          </li>
          <li><span><span class="bold">Assessment:</span><br>I will assess your fitness level and match you<br>
            to appropriate exercises.
            </span>
          </li>
          <li><span><span class="bold">Workout:</span><br>Introduction to a personalized routine.
            </span>
          </li>
        </ul>
        <button class="btn-blue">Free Consultation</button>
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
        <button class="btn-blue">Download PDF</button> <button class="btn-blue mirrorBtn" data-toggle="modal" data-target=".bs-example-modal-lg">Online Form</button>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
          <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title" id="mirror"></h3>
              </div>
              <div class="modal-body">
                <?php if( have_rows( 'section') ){ ?>
                <form id="theForm"">
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
<div class="white-container container-fluid testimonials">
  <div class="row">
    <div class="col-md-12">
      <h2>Testimonials</h2>
      <p>“I met Eric through a mutual friend over 4 years ago.  At the time, I turned 40 and finally decided I needed to be more active if I was going keep up with my three children and live another healthy 40 years.  I also realized I wasn't going to be able to do this on my own.  I told Eric what I was looking for - someone who was willing to structure a program that included strength, cardio, and flexibility, willing to work around my often crazy work schedule, and willing to push me when needed.  Its be more than 4 years and Eric and I are still going strong.  We work out twice a week and I run twice a week and I now consider him a good friend. It was a great decision to train with Eric and I will likely be doing so for years to come.”
      <p>
      <p class="attr">-Mitch L, (Client 5 years)</p>
      <p>“I can honestly state that I have achieved 94 years, living independently moving about on my own, despite a bad fall and a major aortic valve surgery.  I recovered quickly and traveled within a month of surgery because I was physically fit.   I now brag about doing push ups.
        I owe my good fortune to Eric Gonzalez who has been my person Physical Trainer for past eleven years, an intelligent diet and family history. I have watched Eric grow, advancing his specialty in physical training through continuous study and practice, and enhancing his profession with continued advanced education in physical therapy.  I am indeed fortunate that his knowledge transforms him into a more understanding professional trainer, and he is there for me.”
      <p>
      <p class="attr">-Sedell R, (96 years old Client of 12 years)</p>
    </div>
  </div>
</div>
<?php get_footer(); ?>
