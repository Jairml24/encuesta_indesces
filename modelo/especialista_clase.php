<?php
include_once('connection.php');
class Especialista{

    

    function registrarEspecialista($random,$rubro,$nombres,$apellidos,$especialidad,$entidad,$region,$correo)
    {
        $objCnx=new Connection();

        $coa_cnt = $objCnx->obj_pgsql->prepare('insert into especialista 
                                                (random,dni,nombres,apellidos,especialidad,entidad,region,correo)
                                                values
                                                (?,?,?,?,?,?,?,?)');
        $coa_cnt->execute([$random,$rubro,$nombres,$apellidos,$especialidad,$entidad,$region,$correo]);
      
        
        $objCnx->CloseConnection();
    }

   
}


?>