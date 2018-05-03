

$("document").ready(function(){
	
	$('#loadMoreButton').click(function() {
		$.ajax({
			type: "GET",
			url: "../wp-content/themes/missingPersons/methods.php",
			data: { i: 2 ,
					action: "browseCasePicLoadMore",
					currentIndex: parseInt($('#loadMoreButton').attr('currentIndex'))},
			success: function( htmlSnippet ) {
				$('#caseFeed').append(htmlSnippet);
				$('#loadMoreButton').attr('currentIndex', 
										  parseInt($('#loadMoreButton').attr('currentIndex')) + 8);
			}
		});			

	});
});