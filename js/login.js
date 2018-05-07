function validateEmail(email) {
         var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
         return re.test(email);
};

$("document").ready(function(){
    
    $('#login-form').on('submit', function (e) {
        e.preventDefault();
        
        var email = $('#email').val();
        var password = $('#password').value;
        
        if(validateEmail(email) && password !== null && password !== ""){
            alert('correct!');
            $.ajax({
                type: 'get',
                url: "../wp-content/themes/missingPersons/methods.php",
                data: $('form').serialize() + "&action=login-form",
                success: function (e) {
                    alert(e);
                },
                error: function () {
                    alert("Database Insertion Failed");
                },
                complete: function () {
                    $("#login-form")[0].reset();
                }
            });

        } else alert('something is wrong!');
    
	   });
});     
