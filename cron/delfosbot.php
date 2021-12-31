<?php

date_default_timezone_set("America/Bogota");
//Esta es la ruta base del proyecto fractaldelfosbot
$ruta_base="/home/gustavot/public_html/fractaldelfosbot";

include('/home/gustavot/bot_config.php'); 
include($ruta_base.'/cron/mensaje_regalos.php');
include($ruta_base.'/core/conexionDB.php');
include($ruta_base.'/core/chatBot.php');
include ($ruta_base.'/core/delfos.php');
include ($ruta_base.'/utils/Misc.php');
include($ruta_base.'/models/usuario.php');


$ruta_bitacora=__DIR__.'/bitacora_cronjob.log';
$salto_de_linea=PHP_EOL;
//Link de la api de Telegram
$website = 'https://api.telegram.org/bot'.TOKEN;

$usuario= new Usuario();

//Voy a obtener los usuarios que el numero de mensaje que se le ha enviado
//es menor a 7

$usuarios=$usuario->obtenerUsuarios(9);

foreach($usuarios as $item)
{
    
    //Se mira el ultimo envio y se mira si cumple la condicion de los dias
    //que han pasado para enviar el siguiente mensaje al bot
    
    //$myDateTime = DateTime::createFromFormat('U', $item['timestamp_ultimo']);
//$formattedweddingdate = $myDateTime->format('d-m-Y');
    
     //$time_almacenado=date_timestamp_get($item['timestamp_ultimo']);
     
     $time_almacenado=date_timestamp_get(date_create($item['timestamp_ultimo']));
     
     //$time_almacenado=date_timestamp_get($myDateTime);
     
     $dia_transcurridos=Misc::dias_transcurridos($item['timestamp_ultimo']);
     
    // echo "<br/>Dias transcurridos=".$dia_transcurridos;
    
     $dia_mensaje=REGALOS[$item['mensaje_nro']]['dias'];
     
     //echo "<br/>Dias para mandar mensaje=".$dia_mensaje;
     if($dia_transcurridos>=$dia_mensaje)
     {
         
         $msg=REGALOS[$item['mensaje_nro']]['mensaje'];
         echo "<br>Mensaje=".$msg;
         //enviar_mensaje
         //if ok enviado
         $parameters = array(
        "chat_id" => $item['id'],
        "text" => $msg,
        "parse_mode" => "html"
        );
        
        $chatBot = new chatBot($website);
        $result=$chatBot->sendMessage("sendMessage", $parameters);
        
        //$result=sendMessage("sendMessage", $parameters);
        
        
        if($result) 
         $usuario->actualizar_nro_mensaje($item['id'],$item['mensaje_nro']+1,date('Y-m-d H:i:s'));
         //else
           //Misc::crearlog($ruta_bitacora,"Crontab","Cron en línea!");
         
     }
     
       
     
}

Misc::crearlog($ruta_bitacora,"Crontab","Estamos ready!");

?>