<?php
/*
Plugin Name: Like Button 123 for Facebook
Plugin URI: https://wordpress.org/plugins/like-button-123-for-facebook/
Description: plugin for setup Facebook Like Button to every post on your wordpress blog.
Version: 1.2
Author: Groovy
Author URI:  https://profiles.wordpress.org/aleksandrposs
*/


function like_button_123_for_facebook($content) {
	
	$current_url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];       
     
        
     if (!is_home()) {
	  	        
                    $content .= '   
                     <div id="fb-root"></div>
            <script>(function(d, s, id) {
              var js, fjs = d.getElementsByTagName(s)[0];
              if (d.getElementById(id)) return;
              js = d.createElement(s); js.id = id;
              js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
              fjs.parentNode.insertBefore(js, fjs);
            }(document, \'script\', \'facebook-jssdk\'));
                </script>

            <div class="fb-like" data-href="' . $current_url . '" data-width="160" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>

                    '; 


     }
        
        return $content;  
}
add_action('the_content','like_button_123_for_facebook');
