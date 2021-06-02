<!DOCTYPE html>
<html lang="en">
<head>
        
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>  
    <title>Dream Marketing</title>
    
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top navigation">
            <a class="navbar-brand" href="<?php bloginfo('url'); ?>">
            <img src="<?php bloginfo('template_directory');?>/src/img/mainlogo.png" class="navigation__logo" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link navigation__link" href="<?php echo home_url('#about');?>">What We Do<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link navigation__link" href="<?php echo site_url('vehicle-layout');?>">Vehicle Layout</a>
                </li>
                <li class="nav-item">
                <a class="nav-link navigation__link" href="<?php echo site_url('testimonial');?>">Testimonials</a>
                </li>
                <li class="nav-item">
                <a class="nav-link navigation__link" href="<?php echo home_url('#contact-us');?>">Contact Us</a>
                </li>
            </ul>

        </div>
       
        </nav>

        <?php if(!is_page( 10 )) { ?>
            <div class="header-inner">
            
        </div>
       <?php } else { ?>
              <div class="hero" style="background-image:linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)),
               url(<?php the_field('page_banner');?>);">
            <div class="hero__text-box">
                <h1 class="hero__heading-primary display-3"><?php the_field('heading_one');?></h1>
                <a href="#about" class="btn btn-primary">What We Do</a>
                <a href="<?php echo site_url('vehicle-layout');?>" class="btn btn-outline-primary">Vehicle Layout</a>
            </div>
        </div>
      <?php }?>

      
    </header>

 
        
    
    
