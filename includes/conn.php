<?php

Class Database{
 
	private $server = "mysql:host=boor1v7nvhpyfjyeezpv-mysql.services.clever-cloud.com;dbname=boor1v7nvhpyfjyeezpv";
	private $username = "ub1tolj8rlfoojdt";
	private $password = "MboaELXN7AFn79s7FzFd";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;
 	
	public function open(){
 		try{
 			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
 			return $this->conn;
 		}
 		catch (PDOException $e){
 			echo "Hay algun problema de conexion: " . $e->getMessage();
 		}
 
    }
 
	public function close(){
   		$this->conn = null;
 	}
 
}

$pdo = new Database();
 
?>