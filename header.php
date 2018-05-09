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
		<nav id = "navBar" class = "navbar">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" 
							data-toggle="collapse" data-target="#nav-opts" id="btn-nav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span> 
					</button>
					<a class="navbar-brand" href="http://wordpress.local/">LOGO</a>
				</div>

				<div class="collapse navbar-collapse" id="nav-opts">
					<ul class="nav navbar-nav">
						<li class="dropdown"><a class="dropdown-toggler" 
							data-toggle="dropdown">CASES <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://wordpress.local/2-browse-cases-full?type={unsolved}">Unsolved Cases</a></li>
								<li><a href="http://wordpress.local/2-browse-cases-full?type={solved}">Solved Cases</a></li>
							</ul>
						</li>
						<li><a href="http://wordpress.local/7a-guidelines/">SUBMIT A REPORT</a></li>
						<li class="dropdown"><a class="dropdown-toggler" data-toggle="dropdown">ABOUT <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="http://wordpress.local/9-faq/">FAQs</a></li>
								<li><a href="http://wordpress.local/8-about/">Contact Us</a></li>
							</ul>
						</li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li id="search-div">
							<div class="form-group">
								<form action="http://wordpress.local/4-search-page" method="GET">
									<input type="text" name="query" id="search-bar"/>
								</form>
							</div>
						</li>
						<li class="dropdown"><a class="dropdown-toggler" data-toggle="dropdown">LOGIN</a>
							<ul class="dropdown-menu" id="login-div">
								<form>
									<div class="form-group">
										<input type="email" class="form-control" placeholder="email address">
									</div>
									<div class="form-group">
										<input type="password" class="form-control" placeholder="password">
									</div>
									<button class="btn btn-default2" id="btn-login">LOGIN</button>
								</form>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
