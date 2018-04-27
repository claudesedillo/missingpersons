

$("document").ready(function(){
	
	$('#loadMoreButton').click(function() {
		$.ajax({
			type: "GET",
			url: "../wp-content/themes/missingPersons/methods.php",
			data: { i: 2 }
		}).done(function( msg ) {
			alert( "Data Saved: " + msg );
		});    

	});
});