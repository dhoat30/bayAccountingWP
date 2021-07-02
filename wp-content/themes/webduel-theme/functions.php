<?php 
/**
 * Inspiry functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package inspiry

 */


require get_theme_file_path('/inc/custom-post-type.php');

require get_theme_file_path('/inc/nav-registeration.php');




 //enqueue scripts

 function inspiry_scripts(){ 
   wp_enqueue_script("jQuery");
   
   wp_enqueue_style('our-main-styles', get_theme_file_uri('/style.css')); 
   
    wp_localize_script("main", "inspiryData", array(
      "root_url" => get_site_url(),
      "nonce" => wp_create_nonce("wp_rest")
    ));
}
add_action( "wp_enqueue_scripts", "inspiry_scripts" ); 

  //admin bar
  if ( ! current_user_can( "manage_options" ) ) {
   show_admin_bar( false );
}


//custom post register

add_theme_support("post-thumbnails");
