<?php  
function get_partial_alt_hero($mb) { ?>
 <!--==========================
    Alt Hero Section Partial
  ============================-->
  <section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

           
            <div class="carousel-item">
                <div class="carousel-background"><img src="<?php echo get_template_directory_uri() . '/img/intro-carousel/4.jpg' ?>" alt=""></div>
                <div class="carousel-container">
                <div class="carousel-content">
                    <h2>Nam libero tempore</h2>
                    <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum.</p>
                    <a href="#featured-services" class="btn-get-started scrollto">Get Started</a>
                </div>
                </div>
            </div>


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section><!-- #intro -->
<?php 
}