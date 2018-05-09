
$("document").ready(function(){
	
	
	$('#messageForm').on('submit', function (e) {
		e.preventDefault();
		alert("submit");
		if($('#recepient').val() != null && $('#recepient').val()    != "" &&
		   $('#subject').val() != null   && $('#subject').val()   != "" &&
		   $('#message').val() != null   && $('#message').val()  != ""){
			$.ajax({
				type: 'post',
				url: "../wp-content/themes/missingPersons/methods.php",
				data: $('#messageForm').serialize() + "&action=messageForm&userId="+$('#sidenav').attr("user") + "&postId=1",
				// TODO: POST ID
				success: function (e) {
					alert(e);
				},
				error: function () {
					alert("Database Insertion Failed");
				},
				complete: function () {
					$("#messageForm")[0].reset();
				}
			});
	   } else alert("Please fill up the whole form with one means of contact");

	});
});