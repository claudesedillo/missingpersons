
$("document").ready(function(){
	//alert(/^(\d{4}-\b(0[1-9]|1[0-2])\b-(0[1-9]|1[\d]|2[\d]|3[01]))$/.test('1222-13-21'));

	$('#submitReportForm').on('submit', function (e) {
		e.preventDefault();
		
		if($('#fName').val() != null    && $('#fName').val()  != "" &&
		   $('#lName').val() != null  && $('#lName').val()  != ""&&
		   $('#lastSeen').val() != null  && $('#lastSeen').val()  != ""&&
		   /^(\d{4}-\b(0[1-9]|1[0-2])\b-(0[1-9]|1[\d]|2[\d]|3[01]))$/.test($('#lastSeen').val()) &&
		   $('#lastLocation').val() != null  && $('#lastLocation').val()  != ""&&
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