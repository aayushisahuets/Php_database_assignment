jQuery(document).ready(function() {

jQuery(document).on('click','#showData',function(e){
      jQuery.ajax({    
        type: "GET",
        url: "database_connection.php",             
        dataType: "html",                  
        success: function(data){                    
            jQuery("#table-container").html(data); 
           
        }
    });
});