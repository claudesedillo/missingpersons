<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				case '1-home':
					wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', false);
                    wp_enqueue_style( '1.css', get_template_directory_uri() . '/css/1.css' );
                    wp_enqueue_style( '1general', get_template_directory_uri() . '/css/general.css' );
					break;
                case '2-browse-cases-full':
                    wp_enqueue_style( '2general', get_template_directory_uri() . '/css/general.css' );
                    break;
                case '3-browse-cases-with-pictures':
                    wp_enqueue_style( '3general', get_template_directory_uri() . '/css/general.css' );
                    wp_enqueue_style( '3.css', get_template_directory_uri() . '/css/3.css' );                   
                    wp_enqueue_script('browseCase.js', get_template_directory_uri() . '/js/browseCase.js', array('jquery'), '', false);
                    break;
                case '4-search-page':
                    wp_enqueue_style( '4general', get_template_directory_uri() . '/css/general.css' );
                    break;
                case '5-specific-case':
                    wp_enqueue_style( '5general', get_template_directory_uri() . '/css/general.css' );
                    wp_enqueue_script('specific-case', get_template_directory_uri() . '/js/sc.js', array('jquery'), '', false);
                    wp_enqueue_style( '5.css', get_template_directory_uri() . '/css/5.css' );
                    break;    
                case '6-user-dashboard':
                    wp_enqueue_style( '6general', get_template_directory_uri() . '/css/general.css' );
                    break;
                case '7-submit-report':
                    wp_enqueue_style( '7general', get_template_directory_uri() . '/css/general.css' );                  
					wp_enqueue_script('submitReport.js', get_template_directory_uri() . '/js/submitReport.js', array('jquery'), '', false);
					break;    
                case '8-about':
                    wp_enqueue_style( '8general', get_template_directory_uri() . '/css/general.css' );
                    break;                
                case '9-faq':
                    wp_enqueue_style( '9general', get_template_directory_uri() . '/css/general.css' );
                    break;
				case 'some-post':
					wp_enqueue_script('somepost', get_template_directory_uri() . '/js/somepost.js', array('jquery'), '1.6', true);
					break;
			}
		} 
	}

	add_action('wp_enqueue_scripts', 'add_theme_scripts_styles');
    register_nav_menus(array(
        'nav' => __('NavBar')
    ));
?>