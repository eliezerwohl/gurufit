<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link
    rel='stylesheet' id='sb-font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
<!--     <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?> >
    <div class="test">
    <div class="pre-navbar">
      <p>For more information call <a  href="tel:<?php the_field("phone", "option"); ?>"><?php the_field("phone", "option"); ?></a></p>
    </div>
    <nav id="navbar" class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <?php if (is_front_page()) { ?>
            <!-- <a class="navbar-brand visible-xs" href="<?php echo home_url(); ?>">Guru Fit Club</a> -->
          <?php } else { ?>
            <a class="navbar-brand brand" href="<?php echo home_url(); ?>">
              <img src="<?php bloginfo('template_url'); ?>/img/logo-yellow.png">
            </a>
          <?php } ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
            <?php if (is_front_page()) { ?>

              <a href="#" data-toggle="modal" data-target="#myModal">Get a FREE CONSULTATION <i class="fa fa-envelope" aria-hidden="true"></i></a>
            <?php } ?>
          </li>
        </ul>
        <ul  class="nav navbar-nav navbar-right">
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
            <a href="http://localhost/gurufit/about/"><i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
            <a href="http://localhost/gurufit/about/"><i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </li>
        </ul>
          <?php
              wp_nav_menu( array(
                  'menu'              => 'primary',
                  'theme_location'    => 'primary',
                  'depth'             => 2,
                  'menu_class'        => ' nav navbar-nav  navbar-right navbar-right-right',
                  'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                  'walker'            => new WP_Bootstrap_Navwalker())
              );
            ?>

        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav></div>
  <div id="main">
