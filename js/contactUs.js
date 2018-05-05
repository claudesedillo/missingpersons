
$("document").ready(function(){
	
	$('#contactUsForm').on('submit', function (e) {
		e.preventDefault();
		$.ajax({
			type: 'post',
			url: "../wp-content/themes/missingPersons/methods.php",
			data: $('form').serialize() + "&action=contactUsForm",
			success: function (e) {
				alert(e);
			},
			error: function () {
				alert("Database Insertion Failed");
			},
			complete: function () {
				$("#contactUsForm")[0].reset();
			}
		});

	});
});