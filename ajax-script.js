jQuery(document).ready(function() {

// jQuery(document).on('click','#showData',function(e){
    jQuery("#showData").click(function() {                

      jQuery.ajax({    
        type: "POST",
        url: "database_connection.php",             
        dataType: "html",                  
        success: function(row){                    
            jQuery("#table-container").html(row); 
        }
        });
    });
});