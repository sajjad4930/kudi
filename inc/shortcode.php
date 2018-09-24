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
