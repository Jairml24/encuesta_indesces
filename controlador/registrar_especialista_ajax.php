<?php
session_start();

    include '../modelo/especialista_clase.php';

    $rubro=$_POST['rubro'];
    // $dni=$_POST['dni'];
    $nombres=$_POST['nombres'];
    $apellidos=$_POST['apellidos'];
    $especialidad=$_POST['especialidad'];
    $entidad=$_POST['entidad'];
    $region=$_POST['region'];
    $correo=$_POST['correo'];
  
    $random=rand(1,10000);

    $_SESSION['dni']=$random;

    $especialista=new Especialista;
    $datos=$especialista->registrarEspecialista($random,$rubro,$nombres,$apellidos,$especialidad,$entidad,$region,$correo);
    // $datos=$especialista->registrarEspecialista('721315','dsa','dsadsdd','gf','vv','rrr','df');
    

?>