jQuery(document).ready(function() {

// jQuery(document).on('click','#showData',function(e){
    jQuery("#showData").click(function() {                

      jQuery.ajax({    
        type: "POST",
        url: "database_connection.php?action=fetch_data",             
        // dataType: "JSON",                  
        success: function(response){              
            console.log(JSON.parse(response));
            let responseObj = JSON.parse(response);
            jQuery("#table-container").html(responseObj.empTable); 
        }
        });
    });
});