<!DOCTYPE html>
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

		<!-- General -->
		<link REL="stylesheet" href="../wp-content/themes/missingPersons/css/general.css" type="text/css">
		<link REL="stylesheet" href="../wp-content/themes/missingPersons/css/navBar.css" type="text/css"> 

		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>

	<body>
		<nav id = "navBar" class = "menuBar navbar">
			<div class = 'container'>
				<div class="navbar-header">
					<button id = 'collapsibleButton' type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsibleOptions">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span><h3><a href="#"><b id = 'navBarHeader'>LOGO</b></a></h3></span>
				</div>
				<div class="collapse navbar-collapse" id="collapsibleOptions">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><b>LOGIN</b></a></li>
					</ul>
					<ul class="navbar-left nav navbar-nav">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">CASES <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Unsolved</a></li>
								<li><a href="#">Solved</a></li>
							</ul>
						</li>
						<li><a href="#">SUBMIT A REPORT</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">FAQ</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
