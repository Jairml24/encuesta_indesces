}<?php
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

// PREGUNTA 16
if($_POST['res_16']==1)
{
    $r16a=1;
    $r16b=1;
}

if($_POST['res_16']<0)
{
    $r16a=abs($_POST['res_16']);
    $r16b=0;
}

if($_POST['res_16']>1)
{
    $r16a=0;
    $r16b=$_POST['res_16'];
}

// PREGUNTA 17
if($_POST['res_17']==1)
{
    $r17a=1;
    $r17b=1;
}

if($_POST['res_17']<0)
{
    $r17a=abs($_POST['res_17']);
    $r17b=0;
}

if($_POST['res_17']>1)
{
    $r17a=0;
    $r17b=$_POST['res_17'];
}

// PREGUNTA 18
if($_POST['res_18']==1)
{
    $r18a=1;
    $r18b=1;
}

if($_POST['res_18']<0)
{
    $r18a=abs($_POST['res_18']);
    $r18b=0;
}

if($_POST['res_18']>1)
{
    $r18a=0;
    $r18b=$_POST['res_18'];
}

// PREGUNTA 19
if($_POST['res_19']==1)
{
    $r19a=1;
    $r19b=1;
}

if($_POST['res_19']<0)
{
    $r19a=abs($_POST['res_19']);
    $r19b=0;
}

if($_POST['res_19']>1)
{
    $r19a=0;
    $r19b=$_POST['res_19'];
}

// PREGUNTA 20
if($_POST['res_20']==1)
{
    $r15a=1;
    $r15b=1;
}

if($_POST['res_20']<0)
{
    $r20a=abs($_POST['res_20']);
    $r20b=0;
}

if($_POST['res_20']>1)
{
    $r20a=0;
    $r20b=$_POST['res_20'];
}

// PREGUNTA 21
if($_POST['res_21']==1)
{
    $r21a=1;
    $r21b=1;
}

if($_POST['res_21']<0)
{
    $r21a=abs($_POST['res_21']);
    $r21b=0;
}

if($_POST['res_21']>1)
{
    $r21a=0;
    $r21b=$_POST['res_21'];
}


// PREGUNTA 22
if($_POST['res_22']==1)
{
    $r22a=1;
    $r22b=1;
}

if($_POST['res_22']<0)
{
    $r22a=abs($_POST['res_22']);
    $r22b=0;
}

if($_POST['res_22']>1)
{
    $r22a=0;
    $r22b=$_POST['res_22'];
}

// PREGUNTA 23
if($_POST['res_23']==1)
{
    $r23a=1;
    $r23b=1;
}

if($_POST['res_23']<0)
{
    $r23a=abs($_POST['res_23']);
    $r23b=0;
}

if($_POST['res_23']>1)
{
    $r23a=0;
    $r23b=$_POST['res_23'];
}

// PREGUNTA 24
if($_POST['res_24']==1)
{
    $r24a=1;
    $r24b=1;
}

if($_POST['res_24']<0)
{
    $r24a=abs($_POST['res_24']);
    $r24b=0;
}

if($_POST['res_24']>1)
{
    $r24a=0;
    $r24b=$_POST['res_24'];
}

// PREGUNTA 25
if($_POST['res_25']==1)
{
    $r25a=1;
    $r25b=1;
}

if($_POST['res_25']<0)
{
    $r25a=abs($_POST['res_25']);
    $r25b=0;
}

if($_POST['res_25']>1)
{
    $r25a=0;
    $r25b=$_POST['res_25'];
}

// PREGUNTA 26
if($_POST['res_26']==1)
{
    $r26a=1;
    $r26b=1;
}

if($_POST['res_26']<0)
{
    $r26a=abs($_POST['res_26']);
    $r26b=0;
}

if($_POST['res_26']>1)
{
    $r26a=0;
    $r26b=$_POST['res_26'];
}

// PREGUNTA 27
if($_POST['res_27']==1)
{
    $r27a=1;
    $r27b=1;
}

if($_POST['res_27']<0)
{
    $r27a=abs($_POST['res_27']);
    $r27b=0;
}

if($_POST['res_27']>1)
{
    $r27a=0;
    $r27b=$_POST['res_27'];
}

// PREGUNTA 28
if($_POST['res_28']==1)
{
    $r28a=1;
    $r28b=1;
}

if($_POST['res_28']<0)
{
    $r28a=abs($_POST['res_28']);
    $r28b=0;
}

if($_POST['res_28']>1)
{
    $r28a=0;
    $r28b=$_POST['res_28'];
}



    ini_set('date.timezone','America/Lima'); 
    $fecha = date('Y-m-d');
    $hora=date('h:i:s'); 





    $clima=new clima;
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar',$r1a,'Temperatura ambiental',$r1b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar',$r2a,'Precipitacion',$r2b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar',$r3a,'Velocidad del viento',$r3b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar',$r4a,'Presion atmosferica',$r4b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar',$r5a,'Textura del suelo',$r5b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar ',$r6a,'Pendiente del terreno',$r6b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Radiacion Solar ',$r7a,'Aspecto del terreno',$r7b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r8a,'Precipitacion',$r8b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r9a,'Velocidad del viento',$r9b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r10a,'Presion atmosferica',$r10b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r11a,'Textura del suelo',$r11b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r12a,'Pendiente del terreno',$r12b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Temperatura ambiental',$r13a,'Aspecto del terreno',$r13b,$fecha,$hora);

$datos=$clima->registrarFisica($_SESSION['dni'],'Precipitacion',$r14a,'Velocidad del viento',$r14b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Precipitacion',$r15a,'Presion atmosferica',$r15b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Precipitacion',$r16a,'Textura del suelo',$r16b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Precipitacion',$r17a,'Pendiente del terreno',$r17b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Precipitacion',$r18a,'Aspecto del terreno',$r18b,$fecha,$hora);

$datos=$clima->registrarFisica($_SESSION['dni'],'Velocidad del viento',$r19a,'Presion atmosferica',$r19b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Velocidad del viento',$r20a,'Textura del suelo',$r20b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Velocidad del vientoo',$r21a,'Pendiente del terreno',$r21b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Velocidad del vientoo',$r22a,'Aspecto del terreno',$r22b,$fecha,$hora);


$datos=$clima->registrarFisica($_SESSION['dni'],'Presion atmosferica',$r23a,'Textura del suelo',$r23b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Presion atmosferica',$r24a,'Pendiente del terreno',$r24b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Presion atmosferica',$r25a,'Aspecto del terreno',$r25b,$fecha,$hora);

$datos=$clima->registrarFisica($_SESSION['dni'],'Textura del suelo',$r26a,'Pendiente del terreno',$r26b,$fecha,$hora);
$datos=$clima->registrarFisica($_SESSION['dni'],'Textura del suelo',$r27a,'Aspecto del terreno',$r27b,$fecha,$hora);

$datos=$clima->registrarFisica($_SESSION['dni'],'Pendiente del terreno',$r28a,'Aspecto del terreno',$r28b,$fecha,$hora);


$var1=$_POST['var1'];
$var2=$_POST['var2'];

if(!$var1=='')
{
    $datos=$clima->registrarVariables($_SESSION['dni'],'fisica',$var1);
}

if(!$var2=='')
{
    $datos=$clima->registrarVariables($_SESSION['dni'],'fisica',$var2);
}



?>