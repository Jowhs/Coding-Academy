<?php

include_once("functions.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(isset($_GET['id'])){
	$conn = connect_db();
 
	if(isset($_POST['submit_name'])){
		if(strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 10){
			$sql = "UPDATE users SET username = '". $_POST['name']."' WHERE id = '".$_GET['id']."'";
			$result = $conn->query($sql);
		}else{
			$error = "Invalid name. It must contain between 3 and 10 characters";
		}
	}

	if(isset($_POST['submit_email'])){
		$sql = "UPDATE users SET email = '". $_POST['email']."' WHERE id = '".$_GET['id']."'";
		$result = $conn->query($sql);	
	}
	
	if(isset($_POST['submit_pass'])){
		if(strlen($_POST['password']) >= 3 && strlen($_POST['password']) <= 10){
			$sql = "UPDATE users SET password = '". $_POST['password']."' WHERE id = '".$_GET['id']."'";
			$result = $conn->query($sql);
		}else{

			$error = "Invalid password. It must contain between 3 and 10 characters";
		}
	}

	if(isset($_POST['submit_admin'])){
		$sql = "UPDATE users SET admin = '". $_POST['admin']."' WHERE id = '".$_GET['id']."'";
		$result = $conn->query($sql);	
	}

	$sql = "SELECT * FROM users WHERE id = '".$_GET['id']."'";
	$result = $conn->query($sql);
	$res = $result->fetch_assoc();
	/*if($res){
		print_r($res);
	}else{
		header("location:admin.php");
	}	*/
}

?>

<!-- ################################################################# -->

<link type="text/css" rel="stylesheet" href="style.css"/>

<h1>Welcome to Edit Panel</h1><br>

<a href="admin.php">Back to Administration Panel</a>

<div class="title">
	<h2>EDIT USERS</h2>
</div>

<form name="edit" id="edit_name" method="post">  

	<input type="text" name="name" id="nombre"  value="<?php echo $res['username']?>" placeholder="&#128272; New Name" required><br><br>
  
	<input type="submit" name="submit_name" value="Update"> <br>

</form>

<form name="edit" id="edit_email" method="post">  

	<input type="email" name="email" id="email" value="<?php echo $res['email'] ?>" placeholder="&#128231; New email" required><br><br>
  
	<input type="submit" name="submit_email" value="Update"> <br>

</form>

<form name="edit" id="edit_password" method="post">  

	<input type="password" name="password" id="pass" value="<?php echo $res['password'] ?>" placeholder="&#128272; New password" required><br><br>
	   
	<input type="submit" name="submit_pass" value="Update"> <br>

</form>


<form name="edit" id="edit_admin" method="post">  

	<select name="admin">
  		<option value="0">User</option>
  		<option value="1">Administrator</option>
	</select> 	

	<input type="submit" name="submit_admin" value="Update"> <br>

</form>

<div class="error_edit">				
	<?php

	/*Para que nos muestre el mensaje de error después del formulario generamos
	otro código php donde cargamos la variable*/
	if(isset($error)){
		echo $error;
		unset($error);
	}

	?>
</div>