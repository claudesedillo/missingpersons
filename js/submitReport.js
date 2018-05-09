
$("document").ready(function(){
	
	$('#submitReportForm').on('submit', function (e) {
		e.preventDefault();
		
		if($('#fName').val() != null    && $('#fName').val()  != "" &&
		   $('#lName').val() != null  && $('#lName').val()  != ""&&
//		  ($('#email').val() != null   && $('#email').val()   != "" ||
//		   $('#number').val() != null  && $('#number').val()  != "")&&
		   $('#report_details').val() != null && $('#report_details').val() != ""){
			$.ajax({
				type: 'post',
				url: "../wp-content/themes/missingPersons/methods.php",
				data: $('#submitReportForm').serialize() + "&action=submitReportForm",
				success: function (e) {
					alert(e);
				},
				error: function () {
					alert("Database Insertion Failed");
				},
				complete: function () {
					$("#submitReportForm")[0].reset();
				}
			});
	   } else alert("Please fill up the whole form with one means of contact");

	});
});