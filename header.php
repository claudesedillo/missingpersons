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


		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<!--[if lt IE 9]>
		<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
		<![endif]-->
		<?php wp_head(); ?>		
	</head>

	<body>
		<nav id = "navBar" class = "menuBar navbar">
			<div class="container">
				<div class="navbar-header">
					<button id = "collapsibleButton" type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsibleOptions">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="http://wordpress.local/"><b>LOGO</b></a>
				</div>

				<div class="collapse navbar-collapse navbar-left" id="collapsibleOptions">
				   <ul class="nav navbar-nav">
						<li class=dropdown><a class="dropdown-toggler" data-toggle="dropdown">CASES <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://wordpress.local/2-browse-cases-full?type={unsolved}">Unsolved Cases</a></li>
								<li><a href="http://wordpress.local/2-browse-cases-full?type={solved}">Solved Cases</a></li>   
							</ul>
						</li>
						<li><a href="http://wordpress.local/7-Submit-Report/">SUBMIT A REPORTS</a></li>
						<li class="dropdown"><a class="dropdown-toggler" data-toggle="dropdown">ABOUT <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://wordpress.local/9-faq/">Frequently Asked Questions</a></li>
								<li><a href="http://wordpress.local/8-about/">Contact Us</a></li>
							</ul>
					   </li>
					</ul>
				</div>

				<div class="topRight collapse navbar-collapse navbar-right">
					<ul class="nav navbar-nav">
                        <li id="search-div">
                            <div class="form-group">
								<form action="http://wordpress.local/4-search-page" method="GET">
									<input type="text" name="query" />
								</form>
                            </div>
                        </li>
						<li><a href="http://wordpress.local/login"><b>LOGIN</b></a></li>
					</ul>
				</div>
			</div>
		</nav>
