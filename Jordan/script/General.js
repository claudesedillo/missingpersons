

$("document").ready(function(){
	var acc = document.getElementsByClassName("accordion");
	var i;

	for (i = 0; i < acc.length; i++) {
		acc[i].addEventListener("click", function() {
			
			this.classList.toggle("active");
			var panel = this.nextElementSibling;
			if (panel.style.maxHeight){
				panel.style.maxHeight = null;
			} else {
				panel.style.maxHeight = panel.scrollHeight + "px";
			} 
		});
	}

	$('#navBar').append('<div class = \'container\'>' +
						'	<div class="navbar-header">' +
						'		<button id = \'collapsibleButton\' type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapsibleOptions">'+
						'			<span class="icon-bar"></span>' +
						'			<span class="icon-bar"></span>' +
						'			<span class="icon-bar"></span>' +
						'		</button>' +
						'		<span><h3><a href="#"><b id = \'navBarHeader\'>LOGO</b></a></h3></span>' +
						'	</div>' +
						'	<div class="topRight collapse navbar-collapse navbar-right">' +
						'		<ul class="nav navbar-nav">' +
						'			<li><a href="#"><b>LOGIN</b></a></li>' +
						'		</ul>' +
						'	</div>' +
						'	<div class="collapse navbar-collapse navbar-left" id="collapsibleOptions">' +
						'		<ul class="nav navbar-nav">' +
						'			<li class="dropdown">' +
						'				<a href="#" class="dropdown-toggle" data-toggle="dropdown">CASES <b class="caret"></b></a>' +
						'				<ul class="dropdown-menu">' +
						'					<li><a href="#">Unsolved</a></li>' +
						'					<li><a href="#">Solved</a></li>' +
						'				</ul>' +
						'			</li>' +
						'			<li><a href="#">SUBMIT A REPORT</a></li>' +
						'			<li class="dropdown">' +
						'				<a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT <b class="caret"></b></a>' +
						'				<ul class="dropdown-menu">' +
						'					<li><a href="#">Contact Us</a></li>' +
						'					<li><a href="#">FAQ</a></li>' +
						'				</ul>' +
						'			</li>' +
						'		</ul>' +
						'	</div>' +
						'</div>');
	for(var i = 0; i < 8; i++){
		$('#caseFeed').append('<span class="casePreview">' + 
							  '		<a href="#Custom Case Page"><img class="alignleft" ' +
							  '		   src="https://365psd.com/images/istock/previews/1012/101282869-white-blank-poster-mockup.jpg"' + 
							  '		   alt="Poster" width="205" height="228"></a>' +
							  '		<p class = \'caseDescription\'><strong>NAME, PLACE</strong><br><br>' +
							  '		   Last seen: _________________<br>' +
							  '		</p>' +
							  '</span>');
	}
});