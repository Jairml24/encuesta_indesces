Edaficas<?php
session_start();
    // $a=5;
    include '../modelo/clima_clase.php';

// PREGUNTA 1
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

// PREGUNTA 11
if($_POST['res_11']==1)
{
    $r11a=1;
    $r11b=1;
}

if($_POST['res_11']<0)
{
    $r11a=abs($_POST['res_11']);
    $r11b=0;
}

if($_POST['res_11']>1)
{
    $r11a=0;
    $r11b=$_POST['res_11'];
}

// PREGUNTA 12
if($_POST['res_12']==1)
{
    $r12a=1;
    $r12b=1;
}

if($_POST['res_12']<0)
{
    $r12a=abs($_POST['res_12']);
    $r12b=0;
}

if($_POST['res_12']>1)
{
    $r12a=0;
    $r12b=$_POST['res_12'];
}

// PREGUNTA 13
if($_POST['res_13']==1)
{
    $r13a=1;
    $r13b=1;
}

if($_POST['res_13']<0)
{
    $r13a=abs($_POST['res_13']);
    $r13b=0;
}

if($_POST['res_13']>1)
{
    $r13a=0;
    $r13b=$_POST['res_13'];
}

// PREGUNTA 14
if($_POST['res_14']==1)
{
    $r14a=1;
    $r14b=1;
}

if($_POST['res_14']<0)
{
    $r14a=abs($_POST['res_14']);
    $r14b=0;
}

if($_POST['res_14']>1)
{
    $r14a=0;
    $r14b=$_POST['res_14'];
}

// PREGUNTA 15
if($_POST['res_15']==1)
{
    $r15a=1;
    $r15b=1;
}

if($_POST['res_15']<0)
{
    $r15a=abs($_POST['res_15']);
    $r15b=0;
}

if($_POST['res_15']>1)
{
    $r15a=0;
    $r15b=$_POST['res_15'];
}



    ini_set('date.timezone','America/Lima'); 
    $fecha = date('Y-m-d');
    $hora=date('h:i:s'); 

    $clima=new clima;
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas urbanas',$r1a,'Proximidad a la red vial',$r1b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas urbanas',$r2a,'Proximidad a la red electrica',$r2b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas urbanas',$r3a,'Proximidad a fuentes de agua superficial',$r3b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas urbanas',$r4a,'Proximidad a areas de conservacion',$r4b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas urbanas',$r5a,'Uso y cobertura vegetal actual del suelo',$r5b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red vial',$r6a,'Proximidad a la red electrica',$r6b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red vial',$r7a,'Proximidad a fuentes de agua superficial',$r7b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red vial',$r8a,'Proximidad a areas de conservacion ',$r8b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red vial',$r9a,'Uso y cobertura vegetal actual del suelo',$r9b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red electrica',$r10a,'Proximidad a fuentes de agua superficial',$r10b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red electrica',$r11a,'Proximidad a areas de conservacion',$r11b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a la red electrica',$r12a,'Uso y cobertura vegetal actual del suelo',$r12b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a fuentes de agua superficial',$r13a,'Proximidad a areas de conservacion',$r13b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a fuentes de agua superficial',$r14a,'Uso y cobertura vegetal actual del suelo',$r14b,$fecha,$hora);
    $datos=$clima->registrarSocioeconomica($_SESSION['dni'],'Proximidad a areas de conservacion',$r15a,'Uso y cobertura vegetal actual del suelo',$r15b,$fecha,$hora);




$var1=$_POST['var1'];
$var2=$_POST['var2'];


if(!$var1=='')
{
    $datos=$clima->registrarVariables($_SESSION['dni'],'socioeconomica',$var1);
}

if(!$var2=='')
{
    $datos=$clima->registrarVariables($_SESSION['dni'],'socioeconomica',$var2);
}



?>