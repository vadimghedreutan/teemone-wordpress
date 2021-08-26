<?php

function tem_enqueue() {

  $ver = TEM_DEV_MODE ? time() : false;


  wp_register_style('tem_google_oswald' , 'https://fonts.googleapis.com/css?family=Oswald:400,600&display=swap', [], $ver);
  wp_register_style('tem_google_open_sans' , 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap" rel="stylesheet" rel="stylesheet', [], $ver);
  
  wp_enqueue_style('tem_google_oswald');
  wp_enqueue_style('tem_google_open_sans');

  wp_register_script('tem_ham', get_template_directory_uri() . '/js/app.js', array(), false , true );
  wp_register_script('tem_gsap', 'https://cdn.jsdelivr.net/npm/gsap@3.0.1/dist/gsap.min.js', [], $ver  );
  wp_register_script('tem_smooth-scroll', 'https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@16.1.3/dist/smooth-scroll.polyfills.min.js', [], $ver  );

  wp_enqueue_script('tem_ham');
  wp_enqueue_script('tem_gsap');
  wp_enqueue_script('tem_smooth-scroll');
  
  
  wp_register_style('tem_style', get_template_directory_uri() . '/sass/style.css', [], $ver);
  
  wp_enqueue_style('tem_style');
  
  }