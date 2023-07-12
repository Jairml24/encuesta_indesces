<?php
session_start();
    // $a=5;
    include '../modelo/clima_clase.php';

/// PREGUNTA 1
if($_POST['res_1']==1)
{
    $r1a=1;
    $r1b=1;
}

if($_POST['res_1']<0)
{
    $r1a=abs($_POST['res_1']);
    $r1b=0;
}

if($_POST['res_1']>1)
{
    $r1a=0;
    $r1b=$_POST['res_1'];
}

// PREGUNTA 2
if($_POST['res_2']==1)
{
    $r2a=1;
    $r2b=1;
}

if($_POST['res_2']<0)
{
    $r2a=abs($_POST['res_2']);
    $r2b=0;
}

if($_POST['res_2']>1)
{
    $r2a=0;
    $r2b=$_POST['res_2'];
}

// PREGUNTA 3
if($_POST['res_3']==1)
{
    $r3a=1;
    $r3b=1;
}

if($_POST['res_3']<0)
{
    $r3a=abs($_POST['res_3']);
    $r3b=0;
}

if($_POST['res_3']>1)
{
    $r3a=0;
    $r3b=$_POST['res_3'];
}

// PREGUNTA 4
if($_POST['res_4']==1)
{
    $r4a=1;
    $r4b=1;
}

if($_POST['res_4']<0)
{
    $r4a=abs($_POST['res_4']);
    $r4b=0;
}

if($_POST['res_4']>1)
{
    $r4a=0;
    $r4b=$_POST['res_4'];
}

// PREGUNTA 5
if($_POST['res_5']==1)
{
$r5a=1;
$r5b=1;
}

if($_POST['res_5']<0)
{
$r5a=abs($_POST['res_5']);
$r5b=0;
}

if($_POST['res_5']>1)
{
$r5a=0;
$r5b=$_POST['res_5'];
}

// PREGUNTA 6
if($_POST['res_6']==1)
{
$r6a=1;
$r6b=1;
}

if($_POST['res_6']<0)
{
$r6a=abs($_POST['res_6']);
$r6b=0;
}

if($_POST['res_6']>1)
{
$r6a=0;
$r6b=$_POST['res_6'];
}


// PREGUNTA 7
if($_POST['res_7']==1)
{
$r7a=1;
$r7b=1;
}

if($_POST['res_7']<0)
{
$r7a=abs($_POST['res_7']);
$r7b=0;
}

if($_POST['res_7']>1)
{
$r7a=0;
$r7b=$_POST['res_7'];
}


// PREGUNTA 8
if($_POST['res_8']==1)
{
$r8a=1;
$r8b=1;
}

if($_POST['res_8']<0)
{
$r8a=abs($_POST['res_8']);
$r8b=0;
}

if($_POST['res_8']>1)
{
$r8a=0;
$r8b=$_POST['res_8'];
}


// PREGUNTA 9
if($_POST['res_9']==1)
{
$r9a=1;
$r9b=1;
}

if($_POST['res_9']<0)
{
$r9a=abs($_POST['res_9']);
$r9b=0;
}

if($_POST['res_9']>1)
{
$r9a=0;
$r9b=$_POST['res_9'];
}


// PREGUNTA 10
if($_POST['res_10']==1)
{
$r10a=1;
$r10b=1;
}

if($_POST['res_10']<0)
{
$r10a=abs($_POST['res_10']);
$r10b=0;
}

if($_POST['res_10']>1)
{
$r10a=0;
$r10b=$_POST['res_10'];
}



    ini_set('date.timezone','America/Lima'); 
    $fecha = date('Y-m-d');
    $hora=date('h:i:s'); 

    $clima=new clima;
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para conservación de la biodiversidad',$r1a,'Áreas de interés para la agricultura',$r1b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para conservación de la biodiversidad',$r2a,'Áreas de interés para el turismo',$r2b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para conservación de la biodiversidad',$r3a,'Áreas de interés para uso urbano',$r3b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para conservación de la biodiversidad',$r4a,'Áreas de interés para la pesca y acuicultura',$r4b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para la agricultura',$r5a,'Áreas de interés para el turismo',$r5b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para la agricultura',$r6a,'Áreas de interés para uso urbano',$r6b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para la agricultura',$r7a,'Áreas de interés para la pesca y acuicultura',$r7b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para el turismo',$r8a,'Áreas de interés para uso urbano',$r8b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para el turismo',$r9a,'Áreas de interés para la pesca y acuicultura',$r9b,$fecha,$hora);
    $datos=$clima->registrarInteres($_SESSION['dni'],'Áreas de interés para el turismo',$r10a,'Áreas de interés para la pesca y acuicultura',$r10b,$fecha,$hora);



?>