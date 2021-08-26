<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

  <?php wp_head(); ?>
</head>
<body>

<header>
  <div class="container">
    <div class="header_inner">
      <ul class="nav" id="top-nav">
        <li><a href="#">Home</a></li>
        <li><a href="#gallery">Gallery</a></li>
        <li><a href="#contact">Kantakt</a></li>
        <li>
          <?php get_template_part('template-parts/content', 'speisekarte'); ?>
        </li>
      </ul>
      <a href="<?php echo home_url(); ?>" class="logo">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.svg" alt="teemone">
      </a>
      <ul class="social" id="top-social">
        <li id="top-facebook">
          <a href="https://www.facebook.com/teemonerestaurant/">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/facebook.svg" class="grow" alt="teemone">
          </a>
        </li>
        <li id="top-instagram">
          <a href="https://www.instagram.com/teem.one/?hl=en">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/img/social/instagram.svg" class="grow" alt="teemone">
          </a>
        </li>
      </ul>
    </div>
  </div>
</header>

<main>




	
