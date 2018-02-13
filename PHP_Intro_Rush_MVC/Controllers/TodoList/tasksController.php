<?php

include_once(dirname(__FILE__) . "/../../Models/TodoList/Task.php");

class TasksController{

	private $task;

	function __construct(){
		$this->task = new Task();
	}

	function getAllTasks(){
		$tasksAll = $this->task->get_tasks();
		foreach($tasksAll as $key => $value){
			$tasksAll[$key]['title'] = htmlspecialchars($tasksAll[$key]['title']);
			$tasksAll[$key]['description'] = nl2br(htmlspecialchars($tasksAll[$key]['description']));
		}
		return $tasksAll;
	}


	function secure_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	function createTask($title, $description = null){
		return $this->task->post_task($this->secure_input($title), $this->secure_input($description));
	}	

}

$my = new TasksController();


if(isset($_POST['submit_creation'])){
	if(isset($_POST['title']) && isset($_POST['description']) && strlen($_POST['title']) > 0){
		if($my->createTask($_POST['title'], $_POST['description'])){
			echo "Task created";
		}else{
			echo "Problem with creation";
		}
	}else{
		echo "No added";
	}
}



$tasks = $my->getAllTasks();

include_once(dirname(__FILE__) . "/../../Views/TodoList/tasks.php");

?>