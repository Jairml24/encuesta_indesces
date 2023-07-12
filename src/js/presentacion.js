 $.ajax({
            url: "presentacion.php",
            type: "POST",
                 
            success: function(response) {
                $("#contenido").html(response)                            
            }
        }) 
  
     
    $('#contenido').on('click', '#btn_iniciar', () =>
        $.ajax({
            // url: "e_2.php",
            url: "registro.php",
            type: "POST",
                 
            success: function(response) {
               
                $("#contenido").html(response)                            
            }
        }) 
    );