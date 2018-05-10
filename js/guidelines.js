$("document").ready(function(){
    
    $('#btn-proceed-signup').on('click', function(){
        if(!$('#terms').prop('checked')){
           alert('you must agree to the terms and conditions');
        }
        else{
           window.location = "wordpress.local/7-sign-up";
        }
        
    });
    
    $('#btn-proceed-submit').on('click', function(){
        if(!$('#terms').prop('checked')){
           alert('you must agree to the terms and conditions');
        }
        else{
           window.location = "wordpress.local/7-submit-report";
        }
    });
});