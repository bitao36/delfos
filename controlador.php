<?php

//Este archivo en la carpeta padre que es inaccesecible
include('../../bot_config.php'); 

//Obtenemos el token almacenado en un lugar no accesible publicamente
$token = $config['token'];
//En caso de que haya problemas poner debug en true
$debug=false;

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
        "parseMode" => "html"
    );

    sendMessage("sendMessage", $parameters);
    die();    
}

$update = json_decode($input, TRUE);

$chatId = $update['message']['chat']['id'];
$message = $update['message']['text'];

switch($message) 
{
    case '/start':
        $message = 'Me has iniciado';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parseMode" => "html"
        );
        
        sendMessage("sendMessage", $parameters);
        
        break;
    case '/info':
        $message = 'Hola! Soy El Oraculo de Delfos';
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parseMode" => "html"
        );
        sendMessage("sendMessage", $parameters);
        break;
    default:
        $message = 'No te he entendido';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parseMode" => "html"
        );
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