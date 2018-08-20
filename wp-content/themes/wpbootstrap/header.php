<!DOCTYPE html>
<html <?php language_attributes();?>>
  <head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="<?php bloginfo('description');?>">

    <title><?php bloginfo('name');?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url');?> " rel="stylesheet">
    <?php wp_head(); ?>

  </head>

  <body>
                <div class="blog-masthead">
                  <div class="container">
                    <nav class="blog-nav">
                      <a class="blog-nav-item active" href="front.php">Home</a>
                      <a class="blog-nav-item" href="technical.php">Technical</a>
                      <a class="blog-nav-item" href="nontechnical.php">Non-Technical</a>
                      <a class="blog-nav-item" href="blog.php">Blog</a>
                      <a class="blog-nav-item" href="specialevents.php">Special Events</a>
                    </nav>
                  </div>
                </div>
      
      <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">Information Security </h1>
        <p class="lead blog-description">The place to build your security foundation</p>
      </div>