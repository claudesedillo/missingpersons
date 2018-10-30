<?php
    //setcookie("logged", "claude");
	/* Template Name: 404
	 */

?>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta name="viewport" content="width=device-width">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		
		<!-- JQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		
		<!-- Bootstrap -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<link 	rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" 
						integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl"
						crossorigin="anonymous"></script>


		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>		
	</head>
<body>
    <div class="error-404">
        <div class="error-code m-b-10 m-t-20 h4-color">404 <i class="fa fa-warning"></i></div>

        <div>
            <img id = "oops_img" src="wp-content/themes/missingPersons/images/oopse.jpg">
        </div>


        <h2 class="font-bold">Oopsie 404! That page can’t be found-desu.</h2>

        <div class="error-desc">
            Sorry, but the page you are looking for was either not found or does not exist. <br/>
            Try refreshing the page or click the button below to go back to the Homepage.
            <div><br/>
                <!-- <a class=" login-detail-panel-button btn" href="http://vultus.de/"> -->
                <a href="/" class="btn btn-primary btn-default"><span class="glyphicon glyphicon-home"></span> Go back to Homepage</a>
            </div>
        </div>
    </div>
</body>
</html>