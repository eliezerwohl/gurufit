<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/img/favicon.ico" type="image/x-icon">
    <title>
      <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/styles/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway|Roboto" rel="stylesheet">
    <link
    rel='stylesheet' id='sb-font-awesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-114390136-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-114390136-1');
    </script>
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
              <img src="<?php bloginfo('template_url'); ?>/img/logo-yellow.png" alt="Guru Fit Club Logo">
            </a>
          <?php } ?>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
            <?php if (is_front_page()) { ?>
              <a href="#" class="modal-brand" data-toggle="modal" data-target="#freeModal">Get a FREE CONSULTATION <i class="fa fa-envelope" aria-hidden="true"></i></a>
            <?php } ?>
          </li>
        </ul>
        <ul  class="nav navbar-nav navbar-right">
          <?php wp_nav_menu(array(
            'container' => false,
            'depth'           => 0,
           'items_wrap'      => '%3$s',
          )); ?>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
            <a target="_blank" href="<?php the_field("instagram", "option"); ?>"><i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
          </li>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-22">
            <a target="_blank" href="<?php the_field("linkedin", "option"); ?>"><i class="fa fa-linkedin" aria-hidden="true"></i>
            </a>
          </li>
        </ul>

        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav></div>
  <div id="main">
