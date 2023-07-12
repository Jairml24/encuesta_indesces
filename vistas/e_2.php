
<style>
    label{
        font-size:14px
    }
</style>
<div id='e-2' style='display: flex;justify-content:center;margin-top: 30px'>
<form id='frm2'  class='w-100 ml-4 mr-4'>
        <h5 style='color:#3B61A8'>2. POTENCIALIDAD SOCIOECONÓMICA DEL TERRITORIO PARA PLANTAS DE ENERGÍA SOLAR</h5>
        <label>Para seleccionar áreas de interés para para la ubicación óptima de plantas de energía solar, elegir la variable más importante (derecha o izquierda) y marcar el círculo con el valor de cuán importante es respecto a la otra variable.</label>
        <!-- <button class='ml-5 btn-sm btn-danger' id='s-1'>Saltar esta sección</button> -->
        


      

<!-- LINEA 1 -->
<div class='row mt-4' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas urbanas </label>
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
            <label class='col-3 text-right' for="">Proximidad a la red vial  </label>        
        </div>


<!-- LINEA 2 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas urbanas </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a la red eléctrica  </label>        
        </div>

<!-- LINEA 3 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas urbanas </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a fuentes de agua superficial </label>        
        </div>


<!-- LINEA 4 -->        
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas urbanas </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a áreas de conservación </label>        
        </div>

<!-- LINEA 5 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas urbanas </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Uso y cobertura vegetal actual del suelo</label>        
        </div>

<!-- LINEA 6 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red vial </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a la red eléctrica  </label>        
        </div>


<!-- LINEA 7 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red vial </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a fuentes de agua superficial </label>        
        </div>



<!-- LINEA 8 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red vial </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a áreas de conservación </label>        
        </div>


<!-- LINEA 9 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red vial  </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Uso y cobertura vegetal actual del suelo</label>        
        </div>
 

<!-- LINEA 10 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red eléctrica </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a fuentes de agua superficial </label>        
        </div>

<!-- LINEA 11 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red eléctrica  </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a áreas de conservación </label>        
        </div>
 
 <!-- LINEA 12 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a la red eléctrica </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Uso y cobertura vegetal actual del suelo</label>        
        </div>

<!-- LINEA 13 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a fuentes de agua superficial </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Proximidad a áreas de conservación </label>        
        </div>
 
<!-- LINEA 14 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a fuentes de agua superficial </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Uso y cobertura vegetal actual del suelo</label>        
        </div>

<!-- LINEA 15 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Proximidad a áreas de conservación </label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Uso y cobertura vegetal actual del suelo</label>   
        </div>



        <div style='background:#eee;border-radius:10px;margin-bottom:10px'>
            
            <h5 style='color:#3B61A8;margin-bottom: 0px'>¿Qué otras variables sugiere se puedan incorporar?(Opcional)</h5><br>
            
            <input type="text" name='var1' style='width: 400px; margin-bottom: 20px'>
            <input type="text" name='var2' style='width: 400px;  margin-bottom: 20px' >
        </div>


        <label id='e-error' for="" class="text-danger" style='display: none'>Por favor seleccione todos los items </label>
       

        <div class='d-flex justify-content-end mb-4'>
            
            <button id='btn-2' class=' btn btn-primary'>Finalizar encuesta</button>
        </div>
    </form>
</div>


