<?php 
include 'plantilla/header.php';
?>    
<style>
.blue {
  background: #007bff;
  border-radius: 1.5em;
  -moz-border-radius: 1.5em;
  -webkit-border-radius: 1.5em;
  color: #ffffff;
  display: inline-block;
  font-size:20px;
  line-height: 2em;

  text-align: center;
  width: 2em; 
}

.white{
  background: #fff;
  border:1px solid #007bff;
  border-radius: 1.5em;
  -moz-border-radius: 1.5em;
  -webkit-border-radius: 1.5em;
  color: #007bff;
  display: inline-block;
  font-size:20px;
  line-height: 2em;

  text-align: center;
  width: 2em; 
}

.red{
  background:#F57171;

  border-radius: 1.5em;
  -moz-border-radius: 1.5em;
  -webkit-border-radius: 1.5em;
  /* color: #F57171; */
  color: white; 
  display: inline-block;
  font-size:20px;
  line-height: 2em;

  text-align: center;
  width: 2em; 
}
</style>
<div id='contenido' class='' style='margin-bottom:20px'>
    
</div>
<!-- ayuda de radius -->
<div id='a-0' class='bg-dark text-white text-center' style='width:100px; border-radius:15px;position:fixed'>   
</div>






<script>
$(document).ready(function(){
   
    $('#contenido').on('click', '.label1', e => {
        $(".label1").removeClass("blue");	
        $(".label1").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label2', e => {
        $(".label2").removeClass("blue");	
        $(".label2").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label3', e => {
        $(".label3").removeClass("blue");	
        $(".label3").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

 

    $('#contenido').on('click', '.label4', e => {
        $(".label4").removeClass("blue");	
        $(".label4").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label5', e => {
        $(".label5").removeClass("blue");	
        $(".label5").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label6', e => {
        $(".label6").removeClass("blue");	
        $(".label6").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label7', e => {
        $(".label7").removeClass("blue");	
        $(".label7").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label8', e => {
        $(".label8").removeClass("blue");	
        $(".label8").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label9', e => {
        $(".label9").removeClass("blue");	
        $(".label9").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label10', e => {
        $(".label10").removeClass("blue");	
        $(".label10").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label11', e => {
        $(".label11").removeClass("blue");	
        $(".label11").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label12', e => {
        $(".label12").removeClass("blue");	
        $(".label12").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label13', e => {
        $(".label13").removeClass("blue");	
        $(".label13").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label14', e => {
        $(".label14").removeClass("blue");	
        $(".label14").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })


    $('#contenido').on('click', '.label15', e => {
        $(".label15").removeClass("blue");	
        $(".label15").addClass("white");	
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white");	
		$(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label16', e => {
        $(".label16").removeClass("blue");  
        $(".label16").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label17', e => {
        $(".label17").removeClass("blue");  
        $(".label17").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label18', e => {
        $(".label18").removeClass("blue");  
        $(".label18").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label19', e => {
        $(".label19").removeClass("blue");  
        $(".label19").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label20', e => {
        $(".label20").removeClass("blue");  
        $(".label20").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    $('#contenido').on('click', '.label21', e => {
        $(".label21").removeClass("blue");  
        $(".label21").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label22', e => {
        $(".label22").removeClass("blue");  
        $(".label22").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label23', e => {
        $(".label23").removeClass("blue");  
        $(".label23").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label24', e => {
        $(".label24").removeClass("blue");  
        $(".label24").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label25', e => {
        $(".label25").removeClass("blue");  
        $(".label25").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label26', e => {
        $(".label26").removeClass("blue");  
        $(".label26").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label27', e => {
        $(".label27").removeClass("blue");  
        $(".label27").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    $('#contenido').on('click', '.label28', e => {
        $(".label28").removeClass("blue");  
        $(".label28").addClass("white");  
        elemento=e.target
        console.log(elemento.previousSibling.previousSibling)
        $(elemento.previousSibling.previousSibling).attr('checked', true)
        $(elemento).removeClass("white"); 
    $(elemento).addClass("blue");
    })

    
    // evento para hover de radius 
    $('#contenido').on('mouseenter', '.0', e => {
     
       var posicion = e.target.getBoundingClientRect();

       
        $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Muy alta importancia</label>')
        $("#a-0").show()
    })

     $('#contenido').on('mouseleave', '.0', e => {  
        $("#a-0").hide() 
    })

  $('#contenido').on('mouseenter', '.1', e => {
     var posicion = e.target.getBoundingClientRect();
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Alta importancia</label>')
        $("#a-0").show()
    })

     $('#contenido').on('mouseleave', '.1', e => {  
        $("#a-0").hide() 
    })

  $('#contenido').on('mouseenter', '.2', e => {
     var posicion = e.target.getBoundingClientRect();
        $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Moderada importancia</label>')
        $("#a-0").show()    
    })

     $('#contenido').on('mouseleave', '.2', e => {  
        $("#a-0").hide() 
    })

  $('#contenido').on('mouseenter', '.3', e => {
     var posicion = e.target.getBoundingClientRect();
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Leve importancia</label>')
        $("#a-0").show()    
    })

     $('#contenido').on('mouseleave', '.3', e => {  
        $("#a-0").hide() 
    })


// valor central
    $('#contenido').on('mouseenter', '.5', e => {
     var posicion = e.target.getBoundingClientRect();
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Igual importancia</label>')
        $("#a-0").show()    
    })

     $('#contenido').on('mouseleave', '.5', e => {  
        $("#a-0").hide() 
    })
  

  $('#contenido').on('mouseenter', '.6', e => {
   var posicion = e.target.getBoundingClientRect();    
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Leve importancia</label>')
        $("#a-0").show()
    })
    
     $('#contenido').on('mouseleave', '.6', e => {  
        $("#a-0").hide() 
    })

    $('#contenido').on('mouseenter', '.7', e => {
     var posicion = e.target.getBoundingClientRect();  
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Moderada importancia</label>')
        $("#a-0").show()
    })

     $('#contenido').on('mouseleave', '.7', e => {  
        $("#a-0").hide() 
    })

    $('#contenido').on('mouseenter', '.8', e => { 
     var posicion = e.target.getBoundingClientRect();  
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Alta importancia</label>')
        $("#a-0").show()
    })

     $('#contenido').on('mouseleave', '.8', e => {  
        $("#a-0").hide() 
    })

  $('#contenido').on('mouseenter', '.9', e => { 
   var posicion = e.target.getBoundingClientRect();   
         $("#a-0").css('top',posicion.top+45)
        $("#a-0").css('left',posicion.left)
        $("#a-0").html( '<label for="">Muy alta importancia</label>')
        $("#a-0").show()
    })

     $('#contenido').on('mouseleave', '.9', e => {  
        $("#a-0").hide() 
    })


//--------------------------------------------------------------------------------------------------------------------------------------------
//---------------------------------------------------------------------------------------------------------------------------------------------


//PAGINA 1
// pasar a pagina2 de la encuesta

   $('#contenido').on('click', '#btn-1', e => { 
        e.preventDefault()
        
        var values =$("#frm1").serialize()

        for(var i=1;i<29;i++)
        { 
            elemento=`input[name="res_${i}"]:checked` 
           
            if(!document.querySelector(elemento)){
                $("#e-error").show()
                return false
            }
        }
        
 
        $.ajax({
            url: "../controlador/registrar_e1_ajax.php",
            type: "POST",
            data: values,    
            success: function() {
              
                $.ajax({
                    url: "e_2.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response)    
                        window.scroll(0,0)                        
                    }
                 })                          
            }
        })                                               
    })


 //PAGINA 2   
// pasar a pagina3 de la encuesta

   $('#contenido').on('click', '#btn-2', e => { 
        e.preventDefault()
        
        var values =$("#frm2").serialize()

        for(var i=1;i<16;i++)
        { 
            elemento=`input[name="res_${i}"]:checked` 
           
            if(!document.querySelector(elemento)){
                $("#e-error").show()
                return false
            }
        }
        
        
        $.ajax({
            url: "../controlador/registrar_e2_ajax.php",
            type: "POST",
            data: values,    
            success: function() {
         
                $.ajax({
                    url: "agradecimiento.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response) 
                        window.scroll(0,0)                             
                    }
                 })                          
            }
        })                                               
    })


// saltar pagina 2
$('#contenido').on('click', '#s-1', e => { 
        e.preventDefault()     
        
                $.ajax({
                    url: "e_3.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response) 
                        window.scroll(0,0)                             
                    }
                 })                          
                                                        
    })



    
//PAGINA 3
// pasar a pagina 4 de la encuesta

$('#contenido').on('click', '#btn-3', e => { 
        e.preventDefault()
        
        var values =$("#frm3").serialize()

        for(var i=1;i<11;i++)
        { 
            elemento=`input[name="res_${i}"]:checked` 
           
            if(!document.querySelector(elemento)){
                $("#e-error").show()
                return false
            }
        }
        
        console.log(values)
        $.ajax({
            url: "../controlador/registrar_e3_ajax.php",
            type: "POST",
            data: values,    
            success: function() {
        
                $.ajax({
                    url: "e_4.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response) 
                        window.scroll(0,0)                             
                    }
                 })                          
            }
        })                                               
    })
    
     
// saltar pagina 2
$('#contenido').on('click', '#s-2', e => { 
        e.preventDefault()     
        
                $.ajax({
                    url: "e_4.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response) 
                        window.scroll(0,0)                             
                    }
                 })                          
                                                        
    })


//PAGINA 4
// pasar a pagina 5 de la encuesta

$('#contenido').on('click', '#btn-4', e => { 
        e.preventDefault()
        
        var values =$("#frm4").serialize()

        for(var i=1;i<11;i++)
        { 
            elemento=`input[name="res_${i}"]:checked` 
           
            if(!document.querySelector(elemento)){
                $("#e-error").show()
                return false
            }
        }
        
        $.ajax({
            url: "../controlador/registrar_e4_ajax.php",
            type: "POST",
            data: values,    
            success: function() {
             
                $.ajax({
                    url: "mapa.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response)    
                        window.scroll(0,0)                          
                    }
                 })                          
            }
        })                                               
    })     


// saltar pagina 2
$('#contenido').on('click', '#s-3', e => { 
        e.preventDefault()     
        
                $.ajax({
                    url: "mapa.php",
                    type: "POST",
                    
                    success: function(response) {
                
                        $("#contenido").html(response) 
                        window.scroll(0,0)                             
                    }
                 })                          
                                                        
    })

//PAGINA 5
// pasar a pagina de mapa  de la encuesta

$('#contenido').on('click', '#btn-5', e => { 
        e.preventDefault()
        
        var values =$("#frm5").serialize()

        for(var i=1;i<10;i++)
        { 
            elemento=`input[name="res_${i}"]:checked` 
           
            if(!document.querySelector(elemento)){
                $("#e-error").show()
                return false
            }
        }
  
        $.ajax({
            url: "../controlador/registrar_e5_ajax.php",
            type: "POST",
            data: values,    
            success: function() {
             
                $.ajax({
                    url: "mapa.php",
                    type: "POST",
                    
                    
                    success: function(response) {
                
                        $("#contenido").html(response)
                        window.scroll(0,0)                              
                    }
                 })                          
            }
        })                                               
    })     
})

//PAGINA 6
// pasar a pagina de agradecimiento  de la encuesta

$('#contenido').on('click', '#btn-6', e => { 
        // e.preventDefault()

        let labels =document.querySelectorAll('.label'),
        array=[];
        for(let i=0;i<labels.length;i++)
        {
          // console.log(labels[i].innerHTML)
          array.push(labels[i].innerHTML)
          
        }
        console.log(array)

        var values =array

  
        $.ajax({
            url: "../controlador/registrar_mapa.php",
            type: "POST",
            data: {datos:values},    
            success: function() {
              
                $.ajax({
                    url: "agradecimiento.php",
                    type: "POST",
                    
                    
                    success: function(response) {
                
                        $("#contenido").html(response)
                        window.scroll(0,0)                              
                    }
                 })                          
            }
        })                                               
    })  


</script>

<script src='../src/js/presentacion.js' type="text/javascript"></script>
<script src='../src/js/registrar_especialista.js' type="text/javascript"></script>
<script src='../src/js/instrucciones.js' type="text/javascript"></script>



