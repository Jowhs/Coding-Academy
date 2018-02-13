<?php

include_once(dirname(__FILE__) . "/../Db.php");;

class Task{

	public $pdo;

	function __construct(){
		$this->pdo = Connexion::connect_db()->getDb();
	}

	function get_tasks(){
		$result = $this->pdo->query("SELECT * FROM tasks");
		return mysqli_fetch_all($result, MYSQLI_ASSOC);
	}

//Como buena práctica podríamos añadir la función mysqli_real_escape_string 
//para evitar inyecciones SQL
	function get_task($id){
		$result = $this->pdo->query("SELECT * FROM tasks WHERE id = $id");
		return mysqli_fetch_assoc($result);
	}

	function post_task($title, $description = null){
		return $this->pdo->query("INSERT INTO tasks (id, title, description, creation_date, edition_date) VALUES (NULL, '$title', '$description', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP)");
	}


//Al ejecutar la función sólo actualiza los datos que pasamos como parámetros,
//también deberemos actualizar el campo de edición
	function put_task($id, $title, $description = null){
		return $this->pdo->query("UPDATE tasks SET title='$title', description='$description', edition_date=CURRENT_TIMESTAMP WHERE id = $id");
	}

	function delete_task($id){
		$result = $this->pdo->query("DELETE FROM tasks WHERE id = $id");
		return $result;
	}
}

$obj = new Task();
$obj->get_tasks();
$obj->get_task(1);	
//$obj->delete_task(6);
//$obj->post_task("SQL", "Queries to database");
$obj->put_task(4, "Jquery", "Librería para JavaScript");
?>