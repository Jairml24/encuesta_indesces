<?php
include_once('connection.php');
class Clima{


 // FISICA
    function registrarFisica ($dni,$var1,$valor1,$var2,$valor2,$fecha,$hora)
    {
        $objCnx=new Connection();

        $coa_cnt = $objCnx->obj_pgsql->prepare('insert into fisica
                                                (dni,var1,valor1,var2,valor2,fecha,hora)
                                                values
                                                (?,?,?,?,?,?,?)');
        $coa_cnt->execute([$dni,$var1,$valor1,$var2,$valor2,$fecha,$hora]);
      
        
        $objCnx->CloseConnection();
    }


 // SOCIOECONOMICA
 function registrarSocioeconomica($dni,$var1,$valor1,$var2,$valor2,$fecha,$hora)
 {
     $objCnx=new Connection();

     $coa_cnt = $objCnx->obj_pgsql->prepare('insert into socioeconomica
                                             (dni,var1,valor1,var2,valor2,fecha,hora)
                                             values
                                             (?,?,?,?,?,?,?)');
     $coa_cnt->execute([$dni,$var1,$valor1,$var2,$valor2,$fecha,$hora]);
   
     
     $objCnx->CloseConnection();
 }

 //VARIABLES EXTRAS
 function registrarVariables($dni,$var,$valor)
 {
     $objCnx=new Connection();

     $coa_cnt = $objCnx->obj_pgsql->prepare('insert into variables
                                             (dni,variable,valor)
                                             values
                                             (?,?,?)');
     $coa_cnt->execute([$dni,$var,$valor]);
   
     
     $objCnx->CloseConnection();
 }

}


?>