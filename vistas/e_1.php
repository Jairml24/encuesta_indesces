

<div id='e-1' style='display: flex;justify-content:center;margin-top: 30px'>
<form id='frm1'  class='w-100 ml-4 mr-4'>
        <h5 style='color:#3B61A8'>1. POTENCIALIDAD FÍSICA DEL TERRITORIO PARA PLANTAS DE ENERGÍA SOLAR</h5>
        <label>Para seleccionar áreas de interés para para la ubicación óptima de plantas de energía solar, elegir la variable más importante (derecha o izquierda) y marcar el círculo con el valor de cuán importante es respecto a la otra variable.</label>
        


      

<!-- LINEA 1 -->
        <div class='row mt-4' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_1_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_1' style='display:none'>
                        <label for='<?php echo 'res_1_'.$i ?>' class="white   label1 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_1_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_1' style='display:none'>
                    <label for='res_1_9' class="white label1 9" id=''>9</label>
            </div>
            <label class='col-3 text-right' for="">Temperatura ambiental </label>        
        </div>


<!-- LINEA 2 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_2_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_2' style='display:none'>
                        <label for='<?php echo 'res_2_'.$i ?>' class="white   label2 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_2_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_2' style='display:none'>
                    <label for='res_2_9' class="white label2 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Precipitación </label>        
        </div>

<!-- LINEA 3 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_3_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_3' style='display:none'>
                        <label for='<?php echo 'res_3_'.$i ?>' class="white   label3 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_3_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_3' style='display:none'>
                    <label for='res_3_9' class="white label3 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Velocidad del viento</label>        
        </div>


<!-- LINEA 4 -->        
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_4_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_4' style='display:none'>
                        <label for='<?php echo 'res_4_'.$i ?>' class="white   label4 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_4_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_4' style='display:none'>
                    <label for='res_4_9' class="white label4 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Presión atmosférica</label>        
        </div>

<!-- LINEA 5 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_5_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_5' style='display:none'>
                        <label for='<?php echo 'res_5_'.$i ?>' class="white   label5 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_5_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_5' style='display:none'>
                    <label for='res_5_9' class="white label5 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Textura del suelo</label>        
        </div>

<!-- LINEA 6 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_6_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_6' style='display:none'>
                        <label for='<?php echo 'res_6_'.$i ?>' class="white   label6 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_6_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_6' style='display:none'>
                    <label for='res_6_9' class="white label6 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>        
        </div>


<!-- LINEA 7 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Radiación Solar</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_7_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_7' style='display:none'>
                        <label for='<?php echo 'res_7_'.$i ?>' class="white   label7  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_7_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_7' style='display:none'>
                    <label for='res_7_9' class="white label7 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>        
        </div>



<!-- LINEA 8 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_8_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_8' style='display:none'>
                        <label for='<?php echo 'res_8_'.$i ?>' class="white   label8 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_8_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_8' style='display:none'>
                    <label for='res_8_9' class="white label8 9 " id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Precipitación</label>        
        </div>


<!-- LINEA 9 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_9_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_9' style='display:none'>
                        <label for='<?php echo 'res_9_'.$i ?>' class="white   label9 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_9_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_9' style='display:none'>
                    <label for='res_9_9' class="white label9 9 " id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Velocidad del viento</label>        
        </div>
 

<!-- LINEA 10 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_10_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_10' style='display:none'>
                        <label for='<?php echo 'res_10_'.$i ?>' class="white   label10  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2; 
                    }
                ?>
                    <input id='res_10_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_10' style='display:none'>
                    <label for='res_10_9' class="white label10 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Presión atmosférica</label>        
        </div>

<!-- LINEA 11 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_11_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_11' style='display:none'>
                        <label for='<?php echo 'res_11_'.$i ?>' class="white   label11 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_11_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_11' style='display:none'>
                    <label for='res_11_9' class="white label11 9 " id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Textura del suelo</label>        
        </div>
 
 <!-- LINEA 12 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental </label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_12_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_12' style='display:none'>
                        <label for='<?php echo 'res_12_'.$i ?>' class="white   label12 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_12_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_12' style='display:none'>
                    <label for='res_12_9' class="white label12  9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>        
        </div>

<!-- LINEA 13 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Temperatura ambiental</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_13_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_13' style='display:none'>
                        <label for='<?php echo 'res_13_'.$i ?>' class="white   label13 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_13_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_13' style='display:none'>
                    <label for='res_13_9' class="white label13 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>        
        </div>
 
<!-- LINEA 14 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Precipitación</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_14_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_14' style='display:none'>
                        <label for='<?php echo 'res_14_'.$i ?>' class="white   label14   <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_14_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_14' style='display:none'>
                    <label for='res_14_9' class="white label14 9" id=''>9</label>
            </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Velocidad del viento</label>        
        </div>

<!-- LINEA 15 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Precipitación</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_15_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_15' style='display:none'>
                        <label for='<?php echo 'res_15_'.$i ?>' class="white   label15  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_15_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_15' style='display:none'>
                    <label for='res_15_9' class="white label15 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Presión atmosférica</label>   
        </div>


<!-- LINEA 16 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Precipitación</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_16_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_16' style='display:none'>
                        <label for='<?php echo 'res_16_'.$i ?>' class="white   label16  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_16_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_16' style='display:none'>
                    <label for='res_16_9' class="white label16 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Textura del suelo</label>   
        </div>



<!-- LINEA 17 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Precipitación</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_17_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_17' style='display:none'>
                        <label for='<?php echo 'res_17_'.$i ?>' class="white   label17  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_17_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_17' style='display:none'>
                    <label for='res_17_9' class="white label17 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>   
        </div>

<!-- LINEA 18 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Precipitación</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_18_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_18' style='display:none'>
                        <label for='<?php echo 'res_18_'.$i ?>' class="white   label18  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_18_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_19' style='display:none'>
                    <label for='res_18_9' class="white label18 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>   
        </div>




<!-- LINEA 19 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Velocidad del viento</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_19_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_19' style='display:none'>
                        <label for='<?php echo 'res_19_'.$i ?>' class="white   label19  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_19_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_19' style='display:none'>
                    <label for='res_19_9' class="white label19 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Presión atmosférica</label>   
        </div>


<!-- LINEA 20 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Velocidad del viento</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_20_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_20' style='display:none'>
                        <label for='<?php echo 'res_20_'.$i ?>' class="white   label20  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_20_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_20' style='display:none'>
                    <label for='res_20_9' class="white label20 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Textura del suelo</label>   
        </div>


<!-- LINEA 21 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Velocidad del viento</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_21_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_21' style='display:none'>
                        <label for='<?php echo 'res_21_'.$i ?>' class="white   label21  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_21_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_21' style='display:none'>
                    <label for='res_21_9' class="white label21 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>   
        </div>

        <!-- LINEA 22 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Velocidad del viento</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_22_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_22' style='display:none'>
                        <label for='<?php echo 'res_22_'.$i ?>' class="white   label22  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_22_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_22' style='display:none'>
                    <label for='res_22_9' class="white label22 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>   
        </div>


        <!-- LINEA 23 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Presión atmosférica</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_23_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_23' style='display:none'>
                        <label for='<?php echo 'res_23_'.$i ?>' class="white   label23  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_23_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_23' style='display:none'>
                    <label for='res_23_9' class="white label23 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Textura del suelo</label>   
        </div>



        <!-- LINEA 24 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Presión atmosférica</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_24_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_24' style='display:none'>
                        <label for='<?php echo 'res_24_'.$i ?>' class="white   label24  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_24_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_24' style='display:none'>
                    <label for='res_24_9' class="white label24 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>   
        </div>


        <!-- LINEA 25 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Presión atmosférica</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_25_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_25' style='display:none'>
                        <label for='<?php echo 'res_25_'.$i ?>' class="white   label25  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_25_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_25' style='display:none'>
                    <label for='res_25_9' class="white label25 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>   
        </div>

                <!-- LINEA 26 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Textura del suelo</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_26_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_26' style='display:none'>
                        <label for='<?php echo 'res_26_'.$i ?>' class="white   label26  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_26_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_26' style='display:none'>
                    <label for='res_26_9' class="white label26 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Pendiente del terreno</label>   
        </div>


                <!-- LINEA 27 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Textura del suelo</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_27_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_27' style='display:none'>
                        <label for='<?php echo 'res_27_'.$i ?>' class="white   label27  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_27_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_27' style='display:none'>
                    <label for='res_27_9' class="white label27 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>   
        </div>


                <!-- LINEA 28 -->
<div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Pendiente del terreno</label>
            <div class='col-6 d-flex justify-content-between ' >
                <?php
                $c=-9; 
                    for($i=0;$i<9;$i++)
                    {
                        if($c!=-1)
                        {
                            if($c==1)
                            {
                                ?>
                                 <label for='<?php echo $i ?>' class="red" id=''></label>
                                <?php
                                
                            }
                            else{

                           
                        ?>
                        <input id='<?php echo 'res_28_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_28' style='display:none'>
                        <label for='<?php echo 'res_28_'.$i ?>' class="white   label28  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
                        <?php
                            } 
                         }
                        $c=$c+2;
                    }
                ?>
                    <input id='res_28_9' class='<?php echo $i ?> w-100' type="radio" value='9' name='res_28' style='display:none'>
                    <label for='res_28_9' class="white label28 9" id=''>9</label>
           </div>
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Aspecto del terreno</label>   
        </div>



        <div style='background:#eee;border-radius:10px;margin-bottom:10px'>
            
            <h5 style='color:#3B61A8;margin-bottom: 0px'>¿Qué otras variables sugiere se puedan incorporar?(Opcional)</h5><br>
            
            <input type="text" name='var1' style='width: 400px; margin-bottom: 20px'>
            <input type="text" name='var2' style='width: 400px;  margin-bottom: 20px' >
        </div>
        <label id='e-error' for="" class="text-danger" style='display: none'>Por favor seleccione todos los items </label>
       

        <div class='d-flex justify-content-end mb-4'>
            
            <button id='btn-1' class=' btn btn-primary'>Siguiente</button>
        </div>
    </form>
</div>

