<?php 

get_header();

while(have_posts()){
    the_post(); ?>
    <div class="container">
                     <div class="testimonials__container mt-5">
                      <div class="testimonials__text">
                       <h5 class="text-right"><a href=" <?php the_permalink( )?>"><?php the_title();?></a></h5>
                       <blockquote class="testimonials__quote"><?php the_content()?>
                        <a href="<?php echo get_post_type_archive_link('testimonial');?>">Back to Testimonials</a>
                       </blockquote>
                      </div>
                     </div>
                     </div> 

<?php }; 

get_footer();


?>