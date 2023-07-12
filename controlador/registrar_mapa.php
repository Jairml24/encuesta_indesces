<?php
session_start();

    include '../modelo/mapa_clase.php';

    $mapa=$_POST['datos'];

    ;

    $especialista=new Mapa;

    for($i=0;$i<sizeof($mapa);$i++)
    {
        $datos=$especialista->registrarMapa($_SESSION['dni'],$mapa[$i]);
      
    }

    

?>