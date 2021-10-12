<?php

//Este archivo en la carpeta padre que es inaccesecible
include('../../bot_config.php'); 
include ('models/delfos.php');
include ('libs/Misc.php');


//Obtenemos el token almacenado en un lugar no accesible publicamente
$token = $config['token'];
//En caso de que haya problemas poner debug en true
$debug=false;
$salto_de_linea=PHP_EOL;

//Link de la api de Telegram
$website = 'https://api.telegram.org/bot'.$token;

$input = file_get_contents('php://input');

if($debug)
{
    //Pueden haber problemas en caso de que la estructura del json cambie
    //Interactuar con el bot con la siguiente url y extraer el id 
    //https://api.telegram.org/bot$token/getUpdates
    //Antes de ejecutar esta url debes haber eliminado el webhook dejando la url vacia
    //https://api.telegram.org/bot$token/setWebhook
    //ChatId obtenido
    $chatId="1186727080";
    $message=serialize($input);

    $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
    );

    sendMessage("sendMessage", $parameters);
    die();    
}

$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];
$nombre=$update['message']['chat']['first_name'];

switch($message) 
{
    case '/start':
        $message = 'Me has iniciado';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        
        sendMessage("sendMessage", $parameters);
        
        break;
    case '/info':
        $message = 'Hola! Soy el Oráculo de Delfos';
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        sendMessage("sendMessage", $parameters);
        break;
    default:


        if (strpos($message, "/dharma") === 0 ) 
        {
                $fecha_nacimiento = substr($message, 8);
            
                $arreglo_fecha = explode("/", $fecha_nacimiento);
    
                $resultado=Misc::validar_fecha($arreglo_fecha);
    
             if($resultado["respuesta"])
             {
                //En este momento la fecha pasó la validación pero
                //  la respuesta nos trae el dia mes y año con digitos
                // sin cero adelante o alfanumericos atras y en string
                $dia=$resultado["dia"];
                $mes=$resultado["mes"];
                $ano=$resultado["ano"];
        
                $mensaje.="";
        
                $delfos = new delfos($dia,$mes,$ano);
    
                $mensaje.= "<b>".$nombre."</b> ".$delfos->getPersonalidad().$salto_de_linea;
                $mensaje.= $salto_de_linea."<b>En cuanto a tu alma:</b>".$salto_de_linea;
                $mensaje.= $delfos->getAlma().$salto_de_linea;
                $mensaje.= $salto_de_linea."<b>Estos son tus dones:</b>".$salto_de_linea;
                $mensaje.= $delfos->getRegalo().$salto_de_linea;
                $mensaje.= $salto_de_linea."<b>Tu viniste a este mundo a:</b>".$salto_de_linea;
                $mensaje.= $delfos->getProposito();
         
                
            }
            else
            {
                $mensaje=$resultado["msg"];  
            }
            
            
            $parameters = array(
            "chat_id" => $chatId,
            "text" => $mensaje,
            "parse_mode" => "HTML"
            );    
            
        }
        else
        {
          $message = '<i>No te he entendido</i>';
        
            $parameters = array(
            "chat_id" => $chatId,
            "text" => $message,
            "parse_mode" => "html"
            );    
        }
        
        
        sendMessage("sendMessage", $parameters);
        break;
}


function sendMessage($method, $data)
{
    $url = $GLOBALS['website'].'/'.$method;
    
    if(!$curld = curl_init())
    {
        exit;
    }
    curl_setopt($curld, CURLOPT_POST, true);
    curl_setopt($curld, CURLOPT_POSTFIELDS, $data);
    curl_setopt($curld, CURLOPT_URL, $url);
    curl_setopt($curld, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($curld);
    curl_close($curld);
    return $output;
}

?>