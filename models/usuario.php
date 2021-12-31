<?php

class Usuario  {		 

    private $db;
        
    public  function __construct() 
    {
            $conn = conexionDB::getInstance();
            $this->db = $conn->getConexion();
    }
	// aqui implementas tus métodos de consulta MYSQL
    // ejemplo de un método para un select
    public function obtenerUsuarios($numero_mensaje_final) 
    {
        
		try
		{
		    
			$query = $this->db->prepare("SELECT * FROM usuarios WHERE mensaje_nro<".$numero_mensaje_final);
		    $query->execute();
		
		   if($query -> rowCount() == 0)
			    return null;
			    
		    $result = $query -> fetchAll(PDO::FETCH_ASSOC);
		
			return $result;
		}
		
		catch (PDOException $e)
		{
			echo "Error : ".$e->getMessage();			
		}
	}
	//Inserta un usuario en la tabla usuarios
	public function insertar($usuario)
	{
		try
		{
			$sql = "INSERT INTO `usuarios` (`id`,`username`, `nombre`,`mensaje_nro`) VALUES ('".$usuario['id']."', '".$usuario['username']."', '".$usuario['nombre']."',0)";
			$this->db->exec($sql);
			return true;
		}
		catch(PDOException $e)
		{     

            $msg=$e->getMessage();
            die($msg);            
		}
			
	}
	
	//Actualiza el numero del mensaje enviado a un usuario dado su id
	
	public function actualizar_nro_mensaje($id_usuario,$id_mensaje,$fechatimestamp)
	{
		try
		{
			$sql = "UPDATE `usuarios` SET `timestamp_ultimo`='".$fechatimestamp."',`mensaje_nro`= ".$id_mensaje." WHERE id=".$id_usuario;
			$this->db->exec($sql);
			return true;
		}
		catch(PDOException $e)
		{                        
            $msg=$e->getMessage();
            die($msg);            
		}
		
			
	}

}

?>