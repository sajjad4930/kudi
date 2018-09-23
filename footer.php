<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kudi
 */

?>

        <!-- ==== Start Footer ==== -->
        <footer class="footer">
            <div class="container text-center">
                <div class="logo">


										
										<?php $logofooter=get_theme_mod('footer_logo');?>
								<?php if ($logofooter) { ?>
								<img src="<?php echo $logofooter; ?>" alt="<?php bloginfo( 'name' ); ?>">	

								<?php } else { ?>
                        <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                        <h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
										<?php } ?>

                </div>
                <div class="social-icons">

												<?php if (get_theme_mod('facebook')) : ?>
												<a href="<?php echo get_theme_mod('facebook');?>">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
										</a>												
                        <?php	else : ?>
												<?php endif ;?>
												
         

                    <a href="#0">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </a>
                    <a href="#0">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                    </a>
                    <a href="#0">
                        <i class="fa fa-behance" aria-hidden="true"></i>
                    </a>
                    <a href="#0">
                        <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                    </a>
                </div>
                <p>© 2018 Brex-Theme. ALL Right Reserved.</p>
            </div>
				</footer>
				
				<!-- ==== End Footer ==== -->

<?php wp_footer(); ?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>

</body>
</html>
