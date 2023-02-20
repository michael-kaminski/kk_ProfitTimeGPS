<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="">
    <title> <?php echo get_the_title(); ?>  </title>
    <link href="../wp-content/themes/ProfitTimeGPS/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="/wp-content/themes/ProfitTimeGPS/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/wp-content/themes/ProfitTimeGPS/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/wp-content/themes/ProfitTimeGPS/img/favicon-16x16.png">
    <link rel="mask-icon" href="/wp-content/themes/ProfitTimeGPS/img/safari-pinned-tab.svg">
    <script type="text/javascript" async src="https://play.vidyard.com/embed/v4.js"></script>
    <?php 
      gravity_form_enqueue_scripts( 1, true );
    ?>
    <?php wp_head(); ?>
  </head>
  <body>