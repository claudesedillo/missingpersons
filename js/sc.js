$("document").ready(function(){
	$("#btn-cancel").click(function(){
        $("#reply-field").val('');
        $("#thread-post-preview").remove();
        $("#preview").remove();
    });
    
    $("#btn-reply").click(function(){
        $("#thread-post-preview").remove();
        $("#preview").remove();      
    });
    
    $("#btn-preview").click(function(){
       console.log("preview clicked!");
        
       if (!($.trim( $("#reply-field").val() ) == '' ) && !$('#thread-post-preview').length){
           
          var d = new Date();

          var month = d.getMonth()+1;
          var day = d.getDate();
           
          var time = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
           
          var date =
                (month<10 ? '0' : '') + month + '-' +
                (day<10 ? '0' : '') + day + '-' +
                (d.getFullYear() % 2000);;
           
           var message = $('textarea#reply-field').val();
           console.log("reply field value is " + message);
           var thread = $("#thread-div");
           var previewText = "<div class=\"row reply-div\" id = \"thread-post-preview\">" +
                                "<span class=\"maintext username\"> Claude </span>" +
                                "<span class=\"maintext date\">" + date + ' ' + time + "</span>" +
                                "<p class=\"reply-text\">" + message + "</p>" + 
                            "</div>";
           console.log("previewText is " + previewText);
           $(thread).append(previewText);
       }
    });
});