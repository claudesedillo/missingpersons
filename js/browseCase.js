

$("document").ready(function(){
	
	$('#loadMoreButton').click(function() {
		$.ajax({
			type: "GET",
			url: "../wp-content/themes/missingPersons/methods.php",
			data: { i: 2 ,
					action: "browseCasePicLoadMore"},
			success: function( htmlSnippet ) {
				$('#caseFeed').append(htmlSnippet);
			}
		});			

	});
});