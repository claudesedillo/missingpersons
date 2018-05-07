
$("document").ready(function(){
	
	$('#contactUsForm').on('submit', function (e) {
		e.preventDefault();
		
		if($('#name').val() != null    && $('#name').val()    != "" &&
		  ($('#email').val() != null   && $('#email').val()   != "" ||
		   $('#number').val() != null  && $('#number').val()  != "")&&
		   $('#message').val() != null && $('#message').val() != ""){
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
	   } else alert("Please fill up the whole form with one means of contact");

	});
});