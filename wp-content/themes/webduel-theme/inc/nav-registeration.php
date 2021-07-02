<?php 
 //add nav menu
 function webduel_config(){ 
    register_nav_menus( 
       array(
           "top-navbar" => "Top Navbar",
          "main_menu" => "Main Menu",
          "footer-quick-links" => 'Footer Quick Links',
          "extra-links" => 'Footer Extra Links'
       )
       );  
  }
 
  add_action("after_setup_theme", "webduel_config", 0);
?>