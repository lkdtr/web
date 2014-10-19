<!DOCTYPE html>
<html>
  <head>
  <title><?php
  
  global $page, $paged;

  wp_title( '|', true, 'right' );

  
  bloginfo( 'name' );

  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";
  ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link href='http://fonts.googleapis.com/css?family=Crete+Round|Homenaje&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <header>
      <figure class="logo"></figure>
      <nav>
        <ul>
          <?php wp_list_pages('title_li'); ?>
        </ul>
      </nav>
    </header>