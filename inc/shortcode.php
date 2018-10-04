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
                            <?php   $args = array(
                                'post_type' => 'testimonial',
                                'posts_per_page' => -1
                                );
                                ?>

                           <?php $loop = new WP_Query( $args ); ?>

                            <ol class="carousel-indicators">
                            <?php
                            for ($i = 0; $i < $loop->post_count; $i++) {
                            if ($i == 0) {
                            $class = 'active';
                            } else {
                            $class = '';
                            }                        
                            ?>
                         <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="<?php echo $class; ?>"></li>
                        <?php } ?>
                               
                            </ol>
                            <div class="carousel-inner">
                            <?php $count = 0; ?>
                           <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                           <?php 
                           $class = '';
                           if ($count == 0) {
                               $class = 'active';
                           }
                           ?>
                            <div class="carousel-item  text-center <?php echo $class; ?>">
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
                          <p><?php echo esc_attr( get_post_meta( get_the_ID(), 'hcf_des', true ) ); ?></p>

                            </div>
                            <?php $count++;?>
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

// portfolio

add_shortcode('portfolio', function($attr, $content){
	ob_start(); 
extract( shortcode_atts(array(
	'title' => 'Portfolio',	          
	'description' => '',	          
		          
          
), $attr) );
?>

 <!-- ==== Start Portfolio ==== -->
 <section class="portfolio" id="portfolio">
            <div class="container text-center">
                <div class="heading">
                    <span class="icon icon-basic-pencil-ruler"></span>
                    <h2><?php echo $title ; ?></h2>
                    <p><?php echo $description ; ?></p>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="button-group filter-button-group text-center m-auto">

                            <?php
                                    $terms = get_terms('portfolio-categories');
                                    $count = count($terms);
                                        echo '<button data-filter="*" class="active">All</button>';
                                    if ( $count > 0 ){
                                        foreach ( $terms as $term ) {
                                            $termname = strtolower($term->name);
                                            $termname = str_replace(' ', '-', $termname);              
                                            echo '<button data-filter=".'.$termname.'">'.$term->name.'</button>';
                                        }
                                    }
                            ?> 

                        </div>
                    </div>
                </div>
                <div class="row grid">
                    <?php
                    /* 
                    Query the post 
                    */
                    global $post;
                    $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
                    $kudi = new WP_Query( $args );


                    while ( $kudi->have_posts() ) : $kudi->the_post(); 
                                   
                        /* 
                        Pull category for each unique post using the ID 
                        */
                        $terms = get_the_terms( $post->ID, 'portfolio-categories' );	
                        if ( $terms && ! is_wp_error( $terms ) ) : 
                    
                            $links = array();
                    
                            foreach ( $terms as $term ) {
                                $links[] = $term->name;
                            }
                    
                            $tax_links = join( " ", str_replace(' ', '-', $links));          
                            $tax = strtolower($tax_links);
                        else :	
                        $tax = '';					
                        endif; 
                    ?>
                    <!-- Image-1 -->
                    <div class="col-lg-4 col-md-6 grid-item <?php echo $tax ;?>">
                        <div class="single-portfolio-item ">
                            
                            <?php if ( has_post_thumbnail() ) {
                  the_post_thumbnail( 'post-portfolio', array( 'class'  => 'img-fluid' ) );
                 } 
		?>
                            <div class="overlay text-center">
                                <div class="content">
                                    <h3><?php the_title() ; ?></h3>
                                    <p><?php the_content() ; ?></p>
                                    <?php $featured_img_url = get_the_post_thumbnail_url($post->ID, 'full'); ?>
                                    <a href="<?php echo $featured_img_url ; ?>" class="image-link">
                                        <span class="icon icon-basic-picture-multiple"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
         
                    <?php   endwhile; ?>

                </div>

            </div>
        </section>
        <!-- ==== End Portfolio ==== -->

<?php return ob_get_clean();

});