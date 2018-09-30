<?php

// Skider Short code

add_shortcode('kudi-slider', function($attr, $content){
	ob_start(); 

extract( shortcode_atts(array(
	'title' => '',	          
	'description' => '',
  'bcimage' => '',
  'buttonlink' => '',
  'buttontext' => '',

), $attr) );

?>

<!-- ==== Start Slider ==== -->
<?php $slider_photo = wp_get_attachment_image_src($bcimage, 'full') ; ?>
<section class="slider" id="slider" style="background: url('<?php echo $slider_photo[0]; ?>') center center no-repeat;">
    <div class="content text-center">
        <h1><?php echo $title ?></h1>
        <p><?php echo $description ?></p>
        <a href="<?php echo $buttonlink ?>" class="btn"><?php echo $buttontext ?></a>
    </div>
</section>
<!-- ==== End Slider ==== -->

<?php return ob_get_clean();
});



// testimonial

add_shortcode('testimonial', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(
	'title' => 'Testimonials',	          
	'testimonialicon' => '',	          
          
), $attr) );
?>

 <!-- ==== Start Testimonials ==== -->
 <section class="testimonials" id="testimonials">
            <div class="container text-center">
                <h2><?php echo $title?></h2>
                <div class="row text-center">
                    <div class="col-md-12">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <!-- Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">

                            <?php   $args = array(
                                'post_type' => 'testimonial',
                                'posts_per_page' => -1
                                );

                            $loop = new WP_Query( $args );

                            while ( $loop->have_posts() ) : $loop->the_post(); ?>

                            <div class="carousel-item  text-center">
                            <?php $icontesti = wp_get_attachment_image_src($testimonialicon, 'full') ; ?>
                                <img src="<?php echo $icontesti[0]; ?>" alt="" class="colon">
                                <p><?php the_content();?></p>
                                
                                <?php if ( has_post_thumbnail() ) {
                            the_post_thumbnail( 'post-testimonial', array(
                                'class'  => 'center-block team',
                                'id'    => 'customid'
                                
                                ) );
                            }  ?>
                                <h3><?php the_title();?></h3>

                               
                                <h4><?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_author', true ) ); ?></h4>

                            </div>

                            <?php   endwhile; ?>


                            </div>
                            <a
                                class="carousel-control-prev"
                                href="#carouselExampleIndicators"
                                role="button"
                                data-slide="prev">
                                <span class="fa fa-angle-left icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a
                                class="carousel-control-next"
                                href="#carouselExampleIndicators"
                                role="button"
                                data-slide="next">
                                <span class="fa fa-angle-right icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ==== End Testimonials ==== -->



<?php return ob_get_clean();
});

