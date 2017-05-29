

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Beerspot</title>
    <!-- Hier staan je eigen links en meta tags -->
    





    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>







    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/main.css">

    <?php wp_head(); ?>

   
          
    
    
</head>
<body>

<!--<?php bloginfo('template_url');?>-->

<header>
<!--<h1><?php bloginfo('name'); ?></h1>-->
<nav>

</nav>
</header>

<!-- navigatie bar-->

<nav class="navbar navbar-toggleable-md navbar-dark bg-dark" >
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="<?php bloginfo('url');?>">

  <?php
if(has_custom_logo())
{
  the_custom_logo();
}else {
  bloginfo('name');
}
  ?>
  <!-- primary navigatie bar-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!--<ul class="navbar-nav mr-auto">-->
      <?php wp_nav_menu( 
          array( 
              'theme_location' => 'primary-menu',
              'container_class' => 'navbar-nav mr-auto'
              ) 
          ); ?>
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>


  </div>

<!-- secondary navigatie bar-->
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <!--<ul class="navbar-nav mr-auto">-->
      <?php wp_nav_menu( 
          array( 
              'theme_location' => 'secondary-menu',
              'container_class' => 'navbar-nav mr-auto'
              ) 
          ); ?>


        
    <!--<form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
    </form>


  </div>

</nav>

