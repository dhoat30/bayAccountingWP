<?php 
//custom post register

//custom post register


add_post_type_support( "sliders", "thumbnail" ); 



function register_custom_type2(){ 

// sliders psot type
   register_post_type("header", array(
      "supports" => array("title", "page-attributes"), 
      "public" => true, 
      "show_ui" => true, 
      "hierarchical" => true,
      "show_in_graphql "=> true, 
      "graphql_single_name"=> "header",
      "graphql_plural_name"=> "header",
      "labels" => array(
         "name" => "Header", 
         "add_new_item" => "Add New Header", 
         "edit_item" => "Edit Header", 
         "all_items" => "All Header", 
         "singular_name" => "Header"
      ), 
      "menu_icon" => "dashicons-heading"
   )
   ); 

 }

add_action("init", "register_custom_type2"); 




//custom taxonomy
function wpdocs_register_private_taxonomy() {
   $args = array(
       'label'        => __( 'slider', 'textdomain' ),
       'public'       => true,
       'rewrite'      => true,
       'hierarchical' => true
   );
    
   register_taxonomy( 'slider', 'sliders', $args );


}
add_action( 'init', 'wpdocs_register_private_taxonomy', 0 );