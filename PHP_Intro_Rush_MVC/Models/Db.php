<?php

class Connexion{

	private static $instance = null;
	private $db;

	public static function connect_db(){
	
		if(self::$instance == null){
			self::$instance = new Connexion();
		}
		return self::$instance;
	}

	function getDb(){
		return $this->db;
	}

	private function __construct(){
		$this->db = mysqli_connect("localhost", "root", "mierdasql", "todo_php", 3306);
	}

}

$obj = Connexion::connect_db();

?>