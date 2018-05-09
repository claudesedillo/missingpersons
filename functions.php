<?php
	function add_theme_scripts_styles() {
		global $post;

		if( is_page() || is_single() )
		{	
			wp_enqueue_style( 'general.css', get_template_directory_uri() . '/css/general.css' );
			switch($post->post_name) // Post/Page slug used, not the Title
			{
				case '1-home':
					wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array('jquery'), '', false);
                    wp_enqueue_style( '1home.css', get_template_directory_uri() . '/css/1home.css' );
                    break;
				case '2-browse-cases-full':
                    wp_enqueue_style( '2browsecasesfull.css', get_template_directory_uri() . '/css/2browsecasesfull.css' );
                    break;
                case '3-browse-cases-with-pictures':
                    wp_enqueue_style( '3browsecasespics.css', get_template_directory_uri() . '/css/3browsecasespics.css' );                   
                    wp_enqueue_script('browseCase.js', get_template_directory_uri() . '/js/browseCase.js', array('jquery'), '', false);
                    break;
				case '4-search-page':
					wp_enqueue_style( 'search-page', get_template_directory_uri() . '/css/4searchpage.css' );
                    break;
				case '5-specific-case':
                    wp_enqueue_script('specific-case', get_template_directory_uri() . '/js/sc.js', array('jquery'), '', false);
                    wp_enqueue_style( '5specificcase.css', get_template_directory_uri() . '/css/5specificcase.css' );
                    break; 
                case '6-user-dashboard':
                    wp_enqueue_style( 'user-dashboard', get_template_directory_uri() . '/css/6userdashboard.css' );
                    break;					
                case '7-submit-report':
					wp_enqueue_script('submitReport.js', get_template_directory_uri() . '/js/submitReport.js', array('jquery'), '', false);
					wp_enqueue_style( '7submitreport.css', get_template_directory_uri() . '/css/7submitreport.css' );
                    break;  				
                case '7-sign-up':
					wp_enqueue_script('signup.js', get_template_directory_uri() . '/js/signup.js', array('jquery'), '', false);
					wp_enqueue_style( '7submitreport2.css', get_template_directory_uri() . '/css/7submitreport.css' );
                    break;   
                case '8-about':
                    wp_enqueue_script('contactUs.js', get_template_directory_uri() . '/js/contactUs.js', array('jquery'), '', false);
					wp_enqueue_style( '8about', get_template_directory_uri() . '/css/8about.css' );
                    break;                
				case '10-login':
                    wp_enqueue_script('login.js', get_template_directory_uri() . '/js/login.js', array('jquery'), '', false);
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