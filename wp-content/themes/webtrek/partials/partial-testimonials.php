<?php  
function get_partial_testimonials($mb) {
?>
    <!-- Testimonials Section -->
    <section id="testimonials" class="section-bg wow fadeInUp">
      <div class="container">

        <header class="section-header">
          <h3>Testimonials</h3>
        </header>

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri() . '/img/testimonial-1.jpg' ?>" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-left.png' ?>" class="quote-sign-left" alt="">
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-right.png' ?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri() . '/img/testimonial-2.jpg' ?>" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
            <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-left.png' ?>" class="quote-sign-left" alt="">
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-right.png' ?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri() . '/img/testimonial-3.jpg' ?>" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
            <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-left.png' ?>" class="quote-sign-left" alt="">
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-right.png' ?>" class="quote-sign-right" alt="">
            </p>
          </div>

          <div class="testimonial-item">
            <img src="<?php echo get_template_directory_uri() . '/img/testimonial-4.jpg' ?>" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
            <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-left.png' ?>" class="quote-sign-left" alt="">
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <img src="<?php echo get_template_directory_uri() . '/img/quote-sign-right.png' ?>" class="quote-sign-right" alt="">
            </p>
          </div>

        </div>

      </div>
    </section><!-- #testimonials -->

    <?php  
}