<?php get_header(); ?>

<section class="about-us" id="about">
  <div class="container">
      <h2 class="text-center"> <?php the_field('about_us_title')?> </h2>
    <div class="sub-heading">
      <p ><?php the_field('about_us_sub_heading')?></p>
      <p class="font-weight-light"><?php the_field('about_us_content')?></p>
      </div>
  </div>

  
  <div class="container mt-5">
     <div class="card-deck">
     <div class="card card-custom">
    <i class="far fa-calendar-times fa-7x"></i>
    <div class="card-body card-custom__body">
      <h5 class="card-title"><span><?php the_field('column_one_title')?></span></h5>
      <p class="card-text"><?php the_field('column_one_content')?></p>
    </div>
  </div>
  <div class="card card-custom">
    <i class="fas fa-users-slash fa-7x card-custom__icon"></i>
    <div class="card-body card-custom__body">
      <h5 class="card-title"><span><?php the_field('column_two_title')?> </span></h5>
      <p class="card-text"><?php the_field('column_two_content')?></p>
    </div>
  </div>
  <div class="card card-custom">
    <i class="fas fa-bullseye fa-7x card-custom__icon"></i>
    <div class="card-body card-custom__body">
      <h5 class="card-title"><span><?php the_field('column_three_title')?></span></h5>
      <p class="card-text"><?php the_field('column_three_content')?></p>
    </div>
  </div>
  <div class="card card-custom">
    <i class="fas fa-file-signature fa-7x card-custom__icon"></i>
    <div class="card-body card-custom__body">
      <h5 class="card-title"><span><?php the_field('column_four_title')?></span></h5>
      <p class="card-text"><?php the_field('column_four_content')?></p>
    </div>
  </div>
</div>

  </div>

<section class="image-grid">
 <div class="row">
   <div class="col-md-4 image-grid__col">
     <img class="image-grid__photo" src="<?php bloginfo('template_directory');?>/src/img/tailored2.jpg"  alt="Photo 1">
   </div>
    <div class="col-md-4 image-grid__col">
     <img class="image-grid__photo" src="<?php bloginfo('template_directory');?>/src/img/tailored3.jpg"  alt="Photo 1">
   </div>
    <div class="col-md-4 image-grid__col">
     <img class="image-grid__photo" src="<?php bloginfo('template_directory');?>/src/img/tailored4.jpg"  alt="Photo 1">
   </div>
 </div>
</section>
 
  
<section class="layout" id="layout"> 
  <div class="container">
      <h2 class="text-center">Vehicle Layout</h2>
    <div class="row">
    <div class="col-md-6 mt-5">
      <div class="sub__Heading">
        <p><?php the_field('sub_heading')?></p>
      </div>
      <h6 class="mb-4">Your Specification and Design – Endless Options</h6>
      <?php the_field('vehicle_layout_content')?>
    </div>
     <div class="col-md-6 mt-5">
    <div class="composition">
      <img class="composition__photo composition__photo--p1" src="<?php the_field('composition_image_one')?>"  alt="Photo 1">
      <img class="composition__photo composition__photo--p2" src="<?php the_field('composition_image_two')?>"  alt="Photo 2">
      <img class="composition__photo composition__photo--p3" src="<?php the_field('composition_image_three')?>"  alt="Photo 3">
    </div>
    </div>
    </div>
    <a  href="<?php echo site_url('vehicle-layout');?>" class="btn btn-primary mb-5 composition__button">Read More</a>
  </div>
</section>

<section class="banner">
  <div class="container">
      <h2 class="text-center"><?php the_field('industry_specific_title')?></h2>
    <div class="sub-heading">
      <p ><?php the_field('industry_specific_sub_heading')?></p>
      <p class="font-weight-light"><?php the_field('industry_specific_content')?></p>
      
    </div>
</section>

<section class="banner--testimonials">   
           <h2 class="text-center testimonials__heading">Testimonials</h2>
            
            <?php 
                $homePageTestimonials = new WP_Query(array(
                   'posts_per_page' => 5,
                   'post_type' => 'testimonial',

                ));

                while($homePageTestimonials->have_posts()) {
                   $homePageTestimonials->the_post(); ?>
                     <div class="container">
                     <div class="testimonials__container">
                      <div class="testimonials__text">
                       <h5 class="text-right"><a href="<?php the_permalink( )?>"><?php the_title();?></a></h5>
                       <blockquote class="testimonials__quote"><?php echo wp_trim_words(get_the_content(), 30)?>
                        <a href=" <?php the_permalink( )?>">Learn more</a>
                        <div>
                          <p class="text-right"><small><?php the_field('customer_name');?> = <?php the_field('customer_job_role')?></small> </p>
                        </div>
                        
                       </blockquote>
                      </div>
                     </div>
                     </div> 
                 

                <?php }  wp_reset_postdata(); 
             ?>
                  
                <div class="container text-center pt-5 pb-5">
                    <a href="<?php echo get_post_type_archive_link('testimonial');?>" class="btn btn-primary">Read More</a>
                </div>
</section>

<section class="contact" id="contact-us">
  <div class="container">
       <h2 class="text-center">Contact Us</h2>
       <h6 class="text-center">For a full information pack please contact</h6>
       <p class="text-center"><?php the_field('contact_us_sub_heading')?></p>
  </div>
  <div class="container">
      <div class="row">
    <div class="col-md-6">
      <div class="text-center mt-3">
          <i class="fas fa-phone fa-2x"></i>
        <p class="lead mt-3"><?php the_field('telephone')?></p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="text-center mt-3">
          <i class="fas fa-envelope fa-2x"></i>
        <p class="lead mt-3"><a class="text-dark" href ="mailto: john@example.com"><?php the_field('email')?></a></p>
      </div>
    </div>
  </div>
  </div>
  
</section>

<?php get_footer(); ?>
