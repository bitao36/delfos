<?php

include('config.php'); 

/* Este archivo esta en la carpeta padre que es inaccesible porque contiene
 información sensible como el token del bot y los datos de acceso a la base de datos
 */

include(RUTA_BASE.'bot_config.php'); 
include ('core/delfos.php');
include ('utils/Misc.php');
include ('core/chatBot.php');
include('core/conexionDB.php');
include('models/usuario.php');



//En caso de que haya problemas poner debug en true
$debug=false;
$salto_de_linea=PHP_EOL;

//Link de la api de Telegram
$website = 'https://api.telegram.org/bot'.TOKEN;

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

$username=$update['message']['chat']['username'];

$chatBot = new chatBot($website);

/*
"<b>Universo fractal</b> 
En la actualidad existe una teoría de unificación que se sustenta en demostrar teóricamente que el universo es un fractal holográfico.".PHP_EOL."Te quiero invitar para que veas un viaje que Gustavo Torres siguió durante varios años para llegar a un antiguo símbolo que contiene la geometría clave. Sin más preámbulo te comparto con mucho amor <a href='http://activosdigitales.gustavotorresfev.com/mandala/'>La llave del universo</a>"
*/

switch($message) 
{
    case '/start':
        $message = 'Hola '.$nombre.' me has iniciado, eres un crack. Esperemos que este sea el inicio de una bonita amistad!'.PHP_EOL.' Estos son los comandos que puedo ofrecerte por el momento '.PHP_EOL.' /info Te mostraré información acerca de mi.'.PHP_EOL.'/help Te mostraré información sobre todo lo que puedo ofrecerte'.PHP_EOL.' /dharma dia/mes/año Especificando tu fecha de nacimiento en el formato especificado te  daré pistas para encontrar tu propósito'.PHP_EOL.'/regalo Te daré acceso a una guía básica de desinfoxicación, que consiste en un ebook que he creado con mucho amor para que empiezes a practicar técnicas de meditación enfocadas en disminuir ansiedad y estrés';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        
        $chatBot->sendMessage("sendMessage", $parameters);
        
        break;
    case '/help':
        $message = "Hola de nuevo ".$nombre.PHP_EOL;
        $message.='Dharma en sánscrito está asociado con las acciones que deberías hacer para llevar a cabo tu misión. En la medida en que estés más alejado del Dharma hay una alta probabilidad de que experimentes depresión y que la vida no tenga sentido aunque tengas fama y dinero.'.PHP_EOL.'Estos son los comandos que puedo ofrecerte por el momento '.PHP_EOL.' /info te muestra información acerca de mi.'.PHP_EOL.' /dharma dia/mes/año Especificando tu fecha de nacimiento en el formato especificado te daré pistas para encontrar tu propósito. ';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        
        $chatBot->sendMessage("sendMessage", $parameters);
        
        break;
    case '/info':
        $message = "Hola de nuevo ".$nombre;
        $message.=', más que un bot soy un Oráculo que te va ayudar a descubrir tu propósito. Tu no llegaste aquí por casualidad. Date el tiempo para explorar y hacer las preguntas correctas.';
        
        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        
        $chatBot->sendMessage("sendMessage", $parameters);
        
        break;    
        
    case '/test':
        $message = "Hola de nuevo ".$nombre;
        $message.="<b>Conexión cósmica</b>Este es mi último regalo. La meditación parece que es algo simple. Incluso cuando se le preguntó a Sakya Muni sobre esto, dijo la verdad, que no ganas nada, pero sueltas todo aquello que te esclaviza.
<a href='https://drive.google.com/file/d/1n9QMSYBC0Q5H5TccviTUxjnMAmp5ShM7/view?usp=sharing'> ¿Que ganas con la meditación? </a>";



        $parameters = array(
        "chat_id" => $chatId,
        "text" => $message,
        "parse_mode" => "html"
        );
        
        $chatBot->sendMessage("sendMessage", $parameters);
        
        break;    
        
    case '/regalo':
        
                
                $msg="Me alegra mucho de que puedas descargar este ebook que fué creado con mucho cariño. Espero que sea una aproximación a la práctica de meditación, una práctica muy necesaria en los tiempos en los que estamos viviendo. Haz click en el siguiente link de Google Drive para descargar <a href='https://drive.google.com/file/d/1dMjuUFV3yqRire_8tLLW_XmtpRT4bJHw/view?usp=sharing' > Guía Básica de Desinfoxicación</a>".PHP_EOL." Si has llegado hasta aquí también puedes suscribirte para recibir 7 perlas de sabiduría cada 2 días que yo personalmente te entregaré. Estoy seguro que te van a ayudar mucho en tu camino. Debes usar el comando /7gemas me despido deseándote lo mejor";
             
            $parameters = array(
            "chat_id" => $chatId,
            "text" => $msg,
            "parse_mode" => "html"
            );
            
            $chatBot->sendMessage("sendMessage", $parameters);
            
        break;
        
    case '/7gemas':
            $usuario= new Usuario();
        
            $datos_user['id']=$chatId;
            $datos_user['username']=$username;
            $datos_user['nombre']=$nombre;
            $datos_user['mensaje_nro']=0;


            if($usuario->insertar($datos_user))
            {
                $message ="Has sido registrado y en los próximos días empezarás a recibir cada una de las perlas de sabiduría.";
            
            }
            else
            {
                $message ="Ha ocurrido un error. Intenta de nuevo más tarde.";
            }
            $parameters = array(
                    "chat_id" => $chatId,
                    "text" => $message,
                    "parse_mode" => "html"
                    );
            $chatBot->sendMessage("sendMessage", $parameters);
              
            
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
                
                $mensaje.=PHP_EOL."Si aún no has encontrado el propósito de vida y deseas averiguarlo de una vez por todas, te recomiendo este entrenamiento <a href='https://bit.ly/DescrubreTuProposito'>Si deseo descubrir mi propósito</a> ";
         
                
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
        elseif (strpos($message, "/start") === 0 ) 
        {
            $parametro = substr($message, 7);
            $msg=md5($parametro);
            //En la pagina www.gustavotorresfev.com/ep se puso un hash al
            //parametro start con el valor registro
            if($parametro=="2567a5ec9705eb7ac2c984033e06189d")
            {
                $msg= "¡ Bienvenido ".$nombre." !".PHP_EOL;
                $msg.="Me alegra mucho de que puedas descargar este ebook que fué creado con mucho cariño. Espero que sea una aproximación a la práctica de meditación, una práctica muy necesaria en los tiempos en los que estamos viviendo. Haz click en el siguiente link de Google Drive para descargar <a href='https://drive.google.com/file/d/1dMjuUFV3yqRire_8tLLW_XmtpRT4bJHw/view?usp=sharing' > Guía Básica de Desinfoxicación</a>".PHP_EOL." Si has llegado hasta aquí también puedes suscribirte para recibir 7 perlas de sabiduría cada 2 días que yo personalmente te entregaré. Estoy seguro que te van a ayudar mucho en tu camino. Debes usar el comando /7gemas me despido deseándote lo mejor";
                
                
            }
             
            $parameters = array(
            "chat_id" => $chatId,
            "text" => $msg,
            "parse_mode" => "html"
            );    
        }
        else
        {
          $message = '<i>No te he entendido,</i> por favor verifica que hayas escrito bien el comando';
        
            $parameters = array(
            "chat_id" => $chatId,
            "text" => $message,
            "parse_mode" => "html"
            );    
        }
        
        $chatBot->sendMessage("sendMessage", $parameters);
        
        break;
}


?>