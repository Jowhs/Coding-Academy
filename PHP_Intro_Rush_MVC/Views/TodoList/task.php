<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MVC Update & Delete</title>
</head>
<body>

	<ul>	
		<?php
		foreach($tasks as $key => $value){
			echo "<li>" . $value['id'] . "-" . $value['title'] . "-" . $value['description'] . "</li>";
		}
		?>
	</ul>

	<form method="post">
	
	<h2>EDIT A TASK</h2><br>  
 
	<input type="text" name="title" placeholder="Title" required><br><br>

	<input type="text" name="description" placeholder="Description"><br><br>
  
	<input type="submit" name="submit_edit" value="Edit Task"> <br>

	</form>

	<form method="post">
		
		<h2>DELETE A TASK</h2><br>  
	  
		<input type="submit" name="submit_delete" value="Delete Task"> <br>

	</form>
</body>
</html>

