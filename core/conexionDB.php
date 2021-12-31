<?php

class conexionDB 
{
    
	protected $manejador		=	DB_MANEJADOR;
	private static $servidor	=	DB_HOST;
	private static $usuario		=	DB_USER;
	private static $pass 		=	DB_PASSWORD;
	protected $db_name			=	DB_NAME;
	
	
	
	protected $db;
	private static $_instancia;
    
	
	
	private function __construct() 
	{
        try {
            $params = array(PDO::ATTR_PERSISTENT=>true,PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
            $this->db=new PDO($this->manejador.":host=".self::$servidor.";dbname=".$this->db_name,self::$usuario,self::$pass,$params);
            //parent::setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } 
        catch(PDOException $e) 
        {
            echo $e->getMessage();
        }
    }
    
	
	public function getConexion() 
	{
            return $this->db;
    }
    

    public static function getInstance() 
    {
        if(!self::$_instancia) 
        {
            self::$_instancia = new self();
                      /* otra opcion
                        $c = __CLASS__;
             self::$instancia = new $c;
                */
        }
        return self::$_instancia;
    }
    
    public function cerrarConexion()
    {
        return $this->db=null;
    }
   
   
    public function __clone() {} 

}





?>