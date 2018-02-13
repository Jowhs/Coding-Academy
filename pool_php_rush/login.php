<?php

include_once("functions.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(isset($_POST['password']) && isset($_POST['email'])){
		
	//if(isset($_SESSION['password']) && isset($_SESSION['email'])){
		
	$conn = connect_db();

	$password = $_POST['password'];
	$email = $_POST['email'];

	$sql = "SELECT * FROM users WHERE password = '$password' and email = '$email'";

	$result = $conn->query($sql);
		
	$data = $result->fetch_assoc();

	if(isset($data)){
		$_SESSION['data'] = $data;
		header("location:index.php");
	}else{
		$error = "Email or password are wrong.";
	}

	//msqli_free_result($result);
	//msqli_close($conn);
}

?>

<link type="text/css" rel="stylesheet" href="style.css"/>

<form name="login form" id="login form" method="post">

	<h2>LOGIN</h2><br>
	  
	<input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>" placeholder="&#128231; Email" required><br><br>

	<input type="password" name="password" id="pass" placeholder="&#128272; Password" required><br><br>
  
	<input type="submit" name="submit" value="Log in" <br>

</form>
		

<p>Don't you have an account?</p><br>

<center>
	<a href="inscription.php">Please register by clicking here</a>
</center>
<br>
<div class="error">

	<?php

	if(isset($error)){
		echo $error;
		unset($error);
	}

	?>

</div>