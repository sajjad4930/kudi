<?php 
/*

Custom visual composer function

*/

if(function_exists('vc_map')){
  // Slider vc addons
   vc_map( array(
     'name' => __('Kudi Slider Home','kudi'),
     'base' => 'kudi-slider',
     'category' => __( 'Kudi Theme', 'craiglistmarketingpro' ),     
     'icon' => get_template_directory_uri() . "/assets/img/logo.png",
     
     'params' => array(
       array(
         'type' => 'textfield',
         'param_name' => 'title',
         'value' => '',
         'heading' => 'Slider Title'
       ),
       
       array(
         'type' => 'textarea',
         'param_name' => 'description',
         'value' => '',
         'heading' => 'Slider Descriptin'
       ),
       
       array(
         'type' => 'textfield',
         'param_name' => 'buttonlink',
         'value' => '',
         'heading' => 'Slider Button Link'
       ),
       array(
         'type' => 'textfield',
         'param_name' => 'buttontext',
         'value' => '',
         'heading' => 'Slider Button Text'
       ),
 
       array(
         'type' => 'attach_image',
         'param_name' => 'bcimage',
         'value' => '',
         'heading' => 'Upload Section Background image'
       ),
 
     )
 
   ));
 
    // Testimonial 
    vc_map( array(
     'name' => __('Testimonial','kudi'),
     'base' => 'testimonial',
     'category' => __( 'Kudi Theme', 'kudi' ),     
     'icon' => get_template_directory_uri() . "/assets/img/logo.png",
     
     'params' => array(
       array(
         'type' => 'textfield',
         'param_name' => 'title',
         'value' => '',
         'heading' => 'Testimonial Title'
       ),
       array(
         'type' => 'attach_image',
         'param_name' => 'testimonialicon',
         'value' => '',
         'heading' => 'Testimonial coat icon'
       ),
 
     )
 
   ));

       // Portfolio 
       vc_map( array(
        'name' => __('Portfolio','kudi'),
        'base' => 'portfolio',
        'category' => __( 'Kudi Theme', 'kudi' ),     
        'icon' => get_template_directory_uri() . "/assets/img/logo.png",
        
        'params' => array(
          array(
            'type' => 'textarea',
            'param_name' => 'title',
            'value' => '',
            'heading' => 'Portfolio Title'
          ),
          array(
            'type' => 'textarea_html',
            'param_name' => 'description',
            'value' => '',
            'heading' => 'Portfolio Description'
          ),
        )
    
      ));
 
 }
 