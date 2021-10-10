<?php
class Misc {
  private static $instance;

    public static function singleton() 
    {
        if(!isset(self::$instance)) 
        {
            $c = __CLASS__;
            self::$instance = new $c;
        }

        return self::$instance;
    }
    
    
    /** 
    * Este método validará que la fecha ingresasa tenga el formato correcto
    * @param array Es un arreglo de tres posiciones con dia mes y ano
    * @return array arreglo con la respuesta,mensaje y dia,mes y año en formato correcto
    */   
  public static function validar_fecha($arreglo_fecha)
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

  
  }
?>