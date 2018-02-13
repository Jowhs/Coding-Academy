<?php

//Incluimos la función que contiene el objeto PDO que nos conectará a la base de datos
include_once("functions.php");

//Las siguientes funciones nos mostrarán algunes errores que pudieran ocurrir
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Si los datos introducidos en el formulario son correctos intentará conectar con la base de datos y almacenarlos en ella
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){
	
	if(strlen($_POST['password']) >= 3 && strlen($_POST['password']) <= 10){
		
		if(strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 10){

			$conn = connect_db();

			$check_mail = "SELECT * FROM users WHERE email = '".$_POST['email']."'";

			$mail_exists = $conn->query($check_mail);

			if($mail_exists){
				$error_mail = "This email already exists. Please try another one.";	
			}else{
				$insert = "INSERT INTO users (username, password, email, admin) VALUES('". $_POST['name']."', '".$_POST['password']."', '".$_POST['email']."', 0)";

				if($conn->query($insert)){
					header("location:login.php");
				}else{
					echo "Wrong insertion.";
				}

			}
		}else{
			$error = "Invalid name. It must contain between 3 and 10 characters";
		}
	}else{
		$error = "Invalid password. It must contain between 3 and 10 characters";
	}
}

?>

<!--Creamos el formulario en html-->

<link type="text/css" rel="stylesheet" href="style.css"/>

<form name="registration" id="registration" method="post">
	
	<h2>REGISTRATION</h2><br>  
	 
	 <input type="text" name="name" id="nombre"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>" placeholder="&#128272; Name" required><br><br>

	 <input type="password" name="password" id="pass" placeholder="&#128272; Password" required><br><br>
	  
	 <input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>" placeholder="&#128231; Email" required><br><br>
  
	<input type="submit" name="submit" value="Sign in"> <br>

</form>

<p>Are you registered yet?</p><br>

<center>
	<a href="login.php">Please login by clicking here</a>
</center>
<br>
<div class="error">				
	<?php

	/*Para que nos muestre el mensaje de error después del formulario generamos
	otro código php donde cargamos la variable*/
	if(isset($error)){
		echo $error;
		unset($error);
	}

	?>
</div>

<div class="error">				
	<?php

	/*Para que nos muestre el mensaje de error después del formulario generamos
	otro código php donde cargamos la variable*/
	if(isset($error_mail)){
		echo $error_mail;
		unset($error_mail);
	}

	?>
</div>