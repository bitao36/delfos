<?php

date_default_timezone_set("America/Bogota");

include('../../bot_config.php'); 
include('core/conexionDB.php');
include ('utils/Misc.php');
include('models/usuario.php');

$usuario= new Usuario();

$datos_user['id']=125644567;
$datos_user['username']="Pepito";
$datos_user['nombre']="Pepito perez";
$datos_user['mensaje_nro']=0;

echo "Este es un test";
//$usuario->insertar($datos_user);



//print_r($usuario->obtenerUsuarios(7));

$usuarios=$usuario->obtenerUsuarios(7);

foreach($usuarios as $item)
{
    
     //$item['timestamp_ultimo'];
     $time_almacenado=date_timestamp_get($item['timestamp_ultimo']);
     $dia_transcurridos=Misc::dias_transcurridos($item['timestamp_ultimo']);
     
     echo "<br/>Dias transcurridos=".$dia_transcurridos;
    
     $dia_mensaje=REGALOS[$item['mensaje_nro']]['dias'];
     
     echo "<br/>Dias para mandar mensaje=".$dia_mensaje;
     if($dia_transcurridos>=$dia_mensaje)
     {
         
         $msg=REGALOS[$item['mensaje_nro']]['mensaje'];
         echo "<br>".$msg;
         //enviar_mensaje
         //if ok enviado
         $usuario->actualizar_nro_mensaje($item['id'],$item['mensaje_nro']+1,date('Y-m-d H:i:s'));
         
     }
     
       
     
}

?>