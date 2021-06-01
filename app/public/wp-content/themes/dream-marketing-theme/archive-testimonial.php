<?php 

get_header();

while(have_posts()){
    the_post(); ?>
    <div class="container">
                     <div class="testimonials__container mt-5">
                      <div class="testimonials__text">
                       <h5 class="text-right"><a href=" <?php the_permalink( )?>"><?php the_title();?></a></h5>
                       <blockquote class="testimonials__quote"><?php echo wp_trim_words(get_the_content(), 30)?>
                        <a href=" <?php the_permalink( )?>">Learn more</a>
                       </blockquote>
                      </div>
                     </div>
                     </div> 

<?php }; 

get_footer();


?>