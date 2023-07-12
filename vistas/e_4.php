<style>
    label{
        font-size:14px
    }
</style>
<div id='e-4' style='display: flex;justify-content:center;margin-top: 30px'>
<form id='frm4'  class='w-100 ml-4 mr-4'>
        <h5 style='color:#3B61A8'>3. ÁREAS DE INTERÉS PARA USO URBANO</h5>
        <label>Para seleccionar áreas de interés para uso urbano en el ámbito de Paracas, elegir la variable más importante (derecha o izquierda) y marcar el círculo con el valor de cuán importante es respecto a la otra variable.</label>
        <label><strong>¿Cuál es la variable más importante para identificar áreas de interés para uso urbano?</strong> <button class='ml-5 btn-sm btn-danger' id='s-3'>Saltar esta sección</button></label>
        

      

<!-- LINEA 1 -->
<div class='row mt-4' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a mercados</label>
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
                                 <input id='<?php echo 'res_1_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_1' style='display:none'>
                        <label for='<?php echo 'res_1_'.$i ?>' class="white   label1 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label class='col-3 text-right' for="">Distancia a centros de salud </label>        
        </div>


<!-- LINEA 2 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a mercados</label>
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
                                 <input id='<?php echo 'res_2_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_2' style='display:none'>
                        <label for='<?php echo 'res_2_'.$i ?>' class="white   label2 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a centros educativos</label>        
        </div>

<!-- LINEA 3 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a mercados</label>
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
                                 <input id='<?php echo 'res_3_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_3' style='display:none'>
                        <label for='<?php echo 'res_3_'.$i ?>' class="white   label3 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a zona urbana actual</label>        
        </div>


<!-- LINEA 4 -->        
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a mercados</label>
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
                                 <input id='<?php echo 'res_4_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_4' style='display:none'>
                        <label for='<?php echo 'res_4_'.$i ?>' class="white   label4 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a vías (ejemplo: afirmado, asfaltado, sin afirmar y trocha)</label>        
        </div>

<!-- LINEA 5 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a centros de salud</label>
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
                                 <input id='<?php echo 'res_5_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_5' style='display:none'>
                        <label for='<?php echo 'res_5_'.$i ?>' class="white   label5 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a centros educativos</label>        
        </div>

<!-- LINEA 6 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a centros de salud</label>
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
                                 <input id='<?php echo 'res_6_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_6' style='display:none'>
                        <label for='<?php echo 'res_6_'.$i ?>' class="white   label6 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia zona urbana actual</label>        
        </div>


<!-- LINEA 7 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a centros de salud</label>
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
                                 <input id='<?php echo 'res_7_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_7' style='display:none'>
                        <label for='<?php echo 'res_7_'.$i ?>' class="white   label7  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a vías (ejemplo: afirmado, asfaltado, sin afirmar y trocha)</label>        
        </div>



<!-- LINEA 8 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a centros educativos</label>
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
                                 <input id='<?php echo 'res_8_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_8' style='display:none'>
                        <label for='<?php echo 'res_8_'.$i ?>' class="white   label8 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a zona urbana actual</label>        
        </div>


<!-- LINEA 9 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a centros educativos</label>
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
                                 <input id='<?php echo 'res_9_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_9' style='display:none'>
                        <label for='<?php echo 'res_9_'.$i ?>' class="white   label9 <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a vías (ejemplo: afirmado, asfaltado, sin afirmar y trocha)</label>        
        </div>
 

<!-- LINEA 10 -->
        <div class='row' style='background:#eee;border-radius:10px;margin-bottom:10px'>
            <label class='col-3' for="">Distancia a zona urbana actual</label>
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
                                 <input id='<?php echo 'res_10_'.$i ?>' class=' w-100 ' type="radio" value='<?php echo $c ?>' name='res_10' style='display:none'>
                        <label for='<?php echo 'res_10_'.$i ?>' class="white   label10  <?php echo $i ?>" id=''><?php echo abs($c) ?></label>
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
            <label id='<?php echo $i ?>' class='col-3 text-right' for="">Distancia a vías (ejemplo: afirmado, asfaltado, sin afirmar y trocha)</label>        
        </div>



        <!-- <label id='' for="" class="text-primary" style=''>* Actuales usos del suelo antrópicos (área urbana, pastos y cultivos, etc.) y coberturas del suelo naturales (bosque, cuerpos de agua, pajonales altoandinos, etc.) </label>

        <div style='background:#eee;border-radius:10px;margin-bottom:10px'>
            
            <h5 style='color:#3B61A8;margin-bottom: 0px'>¿Qué otras variables se pueden considerar?(Opcional)</h5><br>
            
            <input type="text" name='var1' style='width: 400px; margin-bottom: 20px'>
            <input type="text" name='var2' style='width: 400px;  margin-bottom: 20px' >
        </div>
        -->
        <label id='e-error' for="" class="text-danger" style='display: none'>Por favor seleccione todos los items </label>
        <div class='d-flex justify-content-end mb-4'>
            
            <button id='btn-4' class=' btn btn-primary'>Siguiente</button>
        </div>
    </form>
</div>

