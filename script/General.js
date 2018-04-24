

$("document").ready(function(){
	var acc = document.getElementsByClassName("accordion");
	var i;
    
    $("#navBar").load("nav.html");

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