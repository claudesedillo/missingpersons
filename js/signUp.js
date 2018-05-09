
$("document").ready(function(){
	
	$('#signUpForm').on('submit', function (e) {
		e.preventDefault();

		if($('#first_name').val() != null  && $('#first_name').val()    != "" &&
		   $('#last_name').val()  != null  && $('#last_name').val()     != "" &&
		   $('#email').val()	  != null  && $('#email').val()  		!= "" &&
		   $('#username').val()   != null  && $('#username').val()  	!= "" &&
		   $('#password').val()   != null  && $('#password').val()  	!= "" &&
		   $('#confirm_password').val() != null && $('#confirm_password').val() != "" &&
		   $('#confirm_password').val() == $('#password').val()){
			$.ajax({
				type: 'post',
				url: "../wp-content/themes/missingPersons/methods.php",
				data: $('form').serialize() + "&action=signUpForm",
				success: function (e) {
					alert(e);
				},
				error: function () {
					alert("Database Insertion Failed");
				},
				complete: function () {
					$("#signUpForm")[0].reset();
				}
			});
	   } else alert("Please fill up the whole form with one means of contact");

	});
});