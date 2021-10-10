<?php
    include ('models/delfos.php');
    include ('libs/Misc.php');
    
    //Libreria auxiliar que ayudará con la validación de la fecha
    
    $nombre="Gustavo ";
    $fecha_nacimiento="12/09/1999";
    $salto_de_linea="<br/>";
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
    
        $mensaje.= "<strong>".$nombre."</strong>".$delfos->getPersonalidad().$salto_de_linea;
        $mensaje.= $salto_de_linea."En cuanto a tu alma:<br/>";
        $mensaje.= $delfos->getAlma().$salto_de_linea;
        $mensaje.= $salto_de_linea."Estos son tus dones:".$salto_de_linea;
        $mensaje.= $delfos->getRegalo().$salto_de_linea;
        $mensaje.= $salto_de_linea."Tu viniste a este mundo a:".$salto_de_linea;
        $mensaje.= $delfos->getProposito();
         
        echo $mensaje; 
    }
    else
    {
      echo $resultado["msg"];  
    }
     


?>