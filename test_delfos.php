<?php
    include ('models/delfos.php');
    
    $nombre="Pepito ";
    $fecha_nacimiento="3/1/2005";
    $salto_de_linea="<br/>";
    $arreglo_fecha = explode("/", $fecha_nacimiento);
    
    
    $resultado=validar_fecha($arreglo_fecha);
    
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
     
     
  /** 
    * Este método validará que la fecha ingresasa tenga el formato correcto
    * @param array Es un arreglo de tres posiciones con dia mes y ano
    * @return array arreglo con la respuesta,mensaje y dia,mes y año en formato correcto
    */   
  function validar_fecha($arreglo_fecha)
  {
    $msg="";
    $ok=true;

    if(count($arreglo_fecha)==3)
    {
        //Con este casting eliminamos del numero ceros adelante 
        //o caracteres alfanumericos detras.
        //si algun caracter es solo alfanumerico en el numero queda cero.
        $numerodia=(int)$arreglo_fecha[0];
        $numeromes=(int)$arreglo_fecha[1];
        $numeroano=(int)$arreglo_fecha[2];
        
        //Validamos que el mes primero porque lo necesitamos para validar el dia
        //debido a que los dias dependen del numero del mes
            
            //Validamos que el mes se encuentre en el rango de 1 a 12 
            if($numeromes<=0 || $numeromes>12)
            {
                $msg.="El mes debe ser un número mayor que cero y menor o igual a 12"; 
                $ok=false;
            }
             
            
            //Solo validamos dia si la validación del mes es correcta
            if($ok)
            {
             //Validamos que el dia sea mayor que cero y menor a los dias
            //dependiendo del mes 
             $cantidadDiasDelMes = cal_days_in_month(CAL_GREGORIAN, $numeromes, $numeroano);
                if($numerodia<=0 || $numerodia>$cantidadDiasDelMes)
                {
                $msg.="El día debe ser un número mayor que cero y menor o igual a ".$cantidadDiasDelMes; 
                $ok=false;
                }
                
            }
             
            //validamos que el año sea mayor a 1910
            if(!($numeroano>=1910))
            {
                $msg.="El año debe ser un número mayor o igual a 1910"; 
                $ok=false;
            }
             
    }
    else
    {
        $msg="Introduce una fecha con este formato dia/mes/año";
        $ok=false;
    }
    
     return array("respuesta"=>$ok,"msg"=>$msg,"dia"=>(string)$numerodia,"mes"=>(string)$numeromes,"ano"=>(string)$numeroano);
  }



?>