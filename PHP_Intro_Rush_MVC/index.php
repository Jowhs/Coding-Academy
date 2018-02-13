<?php

$path = ltrim($_SERVER['REQUEST_URI'], '/');  	//Trims leading slash or slashes
$params = explode('/', $path);					//Splits path or slashes
//print_r($params);		
if(empty($params[2])){						//No path params means home page
	require_once('Controllers/TodoList/tasksController.php');
}else{
	array_shift($params);						//Pops off '/' from params
}

$rules = array(
	'{todolist/(?P<id>\d+)/?}' => 'Controllers/TodoList/taskController.php',
	'{todolist}' => 'Controllers/TodoList/tasksController.php'
);

$found = false;
foreach($rules as $pattern => $target){
	if(preg_match($pattern, $path, $params)){
		require_once($target);
		$found = true;
		break;
	}
}

if(!$found){
	header('HTTP/1.1 404 Not Found');
	require_once('Controllers/TodoList/404Controller.php');
}

?>