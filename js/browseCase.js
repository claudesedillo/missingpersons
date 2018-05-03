

$("document").ready(function(){
	
	$('#loadMoreButton').click(function() {
		$.ajax({
			type: "GET",
			url: "../wp-content/themes/missingPersons/methods.php",
			data: { i: 2 ,
					action: "browseCasePicLoadMore",
					currentIndex: parseInt($('#loadMoreButton').attr('currentIndex'))},
			success: function( e ) {
				var splittedData = e.split(';');
				$('#caseFeed').append(splittedData[0]);
				$('#loadMoreButton').attr('currentIndex', splittedData[1]);
			}
		});			

	});
});