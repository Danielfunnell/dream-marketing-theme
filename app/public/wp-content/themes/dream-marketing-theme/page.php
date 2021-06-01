<?php 

get_header();


while(have_posts()){
    the_post(); ?>
    <section class="page">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                <h2 class="text-center"><?php the_title();?></h2>
                <p><?php the_content()?></p>
            </div>
            <div class="col-md-4">
                <?php if(has_post_thumbnail()):?>
                <img src="<?php the_post_thumbnail_url('post_image');?>" alt="feature-image" class="img-fluid mb-5">
                <?php endif; ?>
            </div>
            </div>
            
        </div>
    </section>
   
    

<?php }; 

get_footer();
echo "hello";
?>