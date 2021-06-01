<footer class="page-footer font-small blue pt-5">
  <div class="container-fluid text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3 pl-5">
        <h5 class="text-uppercase">About</h5>
        <p class="pb-5"><small><?php the_field('footer_content');?>  </small></p>
      </div>
    
      <hr class="clearfix w-100 d-md-none pb-3">

      <div class="col-md-3 mb-md-0 mb-3">

       
      </div>
     
      <div class="col-md-3 mb-md-0 mb-3">

        <h5 class="text-uppercase">menu</h5>
        <ul class="list-unstyled">
          <li>
            <a href="<?php bloginfo('url'); ?>">Home</a>
          </li>
          <li>
            <a href="#about">What We Do</a>
          </li>
          <li>
            <a href="<?php echo site_url('vehicle-layout');?>">Vehicle Layout</a>
          </li>
          <li>
            <a href="<?php echo site_url('testimonial');?>">Testimonials</a>
          </li>
          <li>
            <a href="#contact-us">Contact Us</a>
          </li>
        </ul>

      </div>
      
    </div>
    

  </div>
  

  
  <div class="footer-copyright text-center text-dark">© 2021 Copyright:
    <a class="text-dark" href="<?php bloginfo('url'); ?>">dream-marketing.com</a>
  </div>
 

</footer>


<?php wp_footer();?>

</body>
</html>