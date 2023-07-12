$('#contenido').on('click', '#btn_iniciar_encuesta2', e => {
        $.ajax({
                //     url: "e_1.php",
                    url: "e_1.php",
                    type: "POST",
                 
                    success: function(response) {
               
                    $("#contenido").html(response)                            
                    }
                 })  
        
 })