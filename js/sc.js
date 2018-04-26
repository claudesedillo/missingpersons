$("document").ready(function(){
	$("#btn-cancel").click(function(){
        $("#reply-field").val('');
    });
    
    $("#btn-preview").click(function(){
       console.log("preview clicked!");
        
       var postPreview = $("#thread-post-preview");
        
       if ( !($.trim( $("#reply-field").val() ) == '' )){
           console.log("passed the test!");
           
           var message = $('textarea#reply-field').val();
           console.log("reply field value is " + message);
           var thread = $("#thread");
           var previewText = "<div class = \"thread-post padding-10\" id = \"thread-post-preview\">" +
                                "<div class = \"thread-post-message border-black\">" +
                                    "<div class = \"thread-post-user-info padding-10\"> " +
                                        "<span class = \"user-poster\"> your-name-here  </span>" +
                                        "<span class = \"pull-right text-white\">your-post-number-here</span>" +
                                        "<span class = \"date-time pull-right text-white\">your-date-here</span>" + 
                                    "</div>" +
                                    "<div class = \"message-div\">" +
                                        "<p class = \"message padding-10\">" + message + "</p>" +
                                    "</div>" +
                                "</div>" +
                            "</div>";
           console.log("previewText is " + previewText);
           $(document.body).append(previewText);
       }
    });
});