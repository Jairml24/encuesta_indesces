<?php
include_once('connection.php');
class Mapa{

    

    function registrarMapa($random,$mapa)
    {
        $objCnx=new Connection();

        $coa_cnt = $objCnx->obj_pgsql->prepare('insert into mapa
                                                (dni,valor) values
                                                (?,?)');
        $coa_cnt->execute([$random,$mapa]);
      
        
        $objCnx->CloseConnection();
    }

   
}


?>