 function ocultar_campos_error()
      {
        $("#dni-error").hide()
        $("#nombres-error").hide()
        $("#apellidos-error").hide()
        $("#especialidad-error").hide()
        $("#entidad-error").hide()
        $("#region-error").hide()
        $("#correo-error").hide()
        $("#rubro-error").hide()
        $("#a-0").hide()
      }
$('#contenido').on('click', '#btn_iniciar_encuesta', e =>
     {
         e.preventDefault()
         ocultar_campos_error()
       
        if($("#nombres").val()=='')
        {
            $("#nombres-error").show()
            return false;
        }

        if($("#apellidos").val()=='')
        {
            $("#apellidos-error").show()
            return false;
        }

        if($("#rubro").val()=='')
        {
            $("#rubro-error").show()
            return false;
        }

        if($("#especialidad").val()=='')
        {
            $("#especialidad-error").show()
            return false;
        }

        if($("#entidad").val()=='')
        {
            $("#entidad-error").show()
            return false;
        }


        if($("#region").val()=='')
        {
            $("#region-error").show()
            return false;
        }

        if($("#correo").val()=='')
        {
            $("#correo-error").show()
            return false;
        }

        var values=$("#frm").serialize()

         console.log("desde ajax")
         $("#datos").hide()
         $.ajax({

            url: "../controlador/registrar_especialista_ajax.php",
            type: "POST",
            data: values,
                       
            success: function() {
                $.ajax({
                    url: "instrucciones.php",
                    type: "POST",
                 
                    success: function(response) {
               
                    $("#contenido").html(response)                            
                    }
                 })                           
            }
        }) 

         
       
       
    })