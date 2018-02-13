<?php

include_once(dirname(__FILE__) . "/../../Models/TodoList/Task.php");

class TaskController{

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

	function getTask($id){		
		$taskId = $this->task->get_task($id);
		return $taskId;		
	}

	function updateTask($id, $title, $description = null){
		return $this->task->put_task($id, $this->secure_input($title), $this->secure_input($description));
	}

	function deleteTask($id){
		return $this->task->delete_task($id);
	}

	function secure_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
}

$my = new TaskController();

echo "<pre>";
print_r($my->getTask($params['id']));
echo "</pre>";

$tab = $my->getTask($params['id']);

if(count($tab) == 0){
	header(location:/PHP_Intro_Rush/index.php/todolist);
}

if(isset($_POST['submit_edit'])){
	if(isset($_POST['title']) && isset($_POST['description']) && strlen($_POST['title']) > 0){
		if($my->updateTask($params['id'], $_POST['title'], $_POST['description'])){
		echo "Task updated";
		}else{
		echo "Cannot update";
		}
	}
}

if(isset($_POST['submit_delete'])){	
	if($my->deleteTask($params['id'])){
		echo "Task deleted";
	}else{
		echo "Cannot delete";
	}
}

$tasks = $my->getAllTasks();

include_once(dirname(__FILE__) . "/../../Views/TodoList/task.php");

?>