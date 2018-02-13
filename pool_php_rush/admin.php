<?php

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once("functions.php");

session_start();

if(empty($_SESSION['data']) || $_SESSION['data']['admin'] == 0){
	header("location:index.php");
}

$conn = connect_db();

if(isset($_POST['submit'])){
	
	$check_mail = "SELECT * FROM users WHERE email = '".$_POST['email']."'";

	$mail_exists = $conn->query($check_mail);

	if($mail_exists->num_rows > 0){
		
		$error_mail = "This email already exists. Please try another one.";	
		
	}else{
		
		$insert = "INSERT INTO users (username, password, email, admin) VALUES ('". $_POST['name']."', '".$_POST['password']."', '".$_POST['email']."', '".$_POST['admin']."')";
		if($conn->query($insert)){
			echo "User created successfully.";
		}else{
			echo "Cannot create the user.";
		}
	}
}else if(isset($_POST['del'])){

	$sql = "DELETE FROM users WHERE email = '".$_POST['email_del']."'";
	echo $sql;
	if($conn->query($sql)){
		echo "User deleted successfully";
	}else{
		echo "Not possible to delete the user";
	}

}

if(isset($_POST['submit_category'])){

	$check_category = "SELECT * FROM categories WHERE name = '".$_POST['category']."'";

	$category_exists = $conn->query($check_category);

	if($category_exists->num_rows > 0){
		
		$error_category = "This category already exists. Please create a new one.";
		
	}else{

		$sql = "INSERT INTO categories (name) VALUES ('". $_POST['category'] ."')";

		if($conn->query($sql)){
			echo "Category added successfully";
		}else{
			echo "Not possible to add the category";
		}
	}
}

if(isset($_POST['submit_product'])){

	$sql = "INSERT INTO products (name, price, category_id) VALUES ('". $_POST['product'] ."', '". $_POST['price'] ."', '". $_POST['id_category'] ."')";

		if($conn->query($sql)){
			echo "Product added successfully";
		}else{
			echo "Not possible to add the product";
		}
}

?>

<link type="text/css" rel="stylesheet" href="style.css"/>

<h1>Welcome to Administration Panel</h1>
<a href="index.php">Back</a>

<form name="registration" id="registration" method="post">
	
	<h2>ADD USERS</h2><br>  
	 
	<input type="text" name="name" id="nombre"  value="<?php echo isset($_POST['name']) ? $_POST['name'] : "" ?>" placeholder="&#128272; Name" required><br><br>

	<input type="password" name="password" id="pass" placeholder="&#128272; Password" required><br><br>
	  
	<input type="email" name="email" id="email" value="<?php echo isset($_POST['email']) ? $_POST['email'] : "" ?>" placeholder="&#128231; Email" required><br><br>

	<select name="admin">
  		<option value="0">User</option>
  		<option value="1">Administrator</option>
	</select> 
  
	<input type="submit" name="submit" value="Add User"> <br>

</form>

<form name="delete" id="delete" method="post">
	
	<h2>DELETE USER</h2><br>  
	  
	<input type="email" name="email_del" id="email" value="<?php echo isset($_POST['email_del']) ? $_POST['email_del'] : "" ?>" placeholder="&#128231; Email" required><br><br>
  
	<input type="submit" name="del" value="Delete"> <br>

</form>

<div class="error">

	<?php

	if(isset($error)){
		echo $error;
		unset($error);
	}

	?>

</div>

<div class="error">				
	<?php

	if(isset($error_mail)){
		echo $error_mail;
		unset($error_mail);
	}

	?>
</div>

<div class="error">				
	<?php

	if(isset($error_category)){
		echo $error_category;
		unset($error_category);
	}

	?>
</div>

<div class="admin_list_user">
	
	<ul class="list">
		<?php
			$sql_query = "SELECT * FROM users";
			$result = $conn->query($sql_query);

			foreach($result as $row){
				echo "<li>". $row['email'] . "<a href='edit.php?id=" . $row['id'] . "'>Edit</a></li>" ;
			}
		?>
	</ul>


</div>

<div class="forms">

	<form name="add_product" id="add_product" method="post">  

		<h3>ADD NEW PRODUCT</h3><br>

		<input type="text" name="product" id="product" placeholder="&#128722; New Product">

		<input type="text" name="price" id="price" placeholder="&#8364; Price">

		<select name="id_category">

	  		<?php
				$sql_query = "SELECT * FROM categories";
				$result = $conn->query($sql_query);

				foreach($result as $row){
					echo "<option value=" . $row['id'] . ">". $row['name'] . "</option>" ;
				}
			?>

		</select> 	

		<input type="submit" name="submit_product" value="Add Product"> <br>

	</form>
	
	<form name="add_category" id="add_category" method="post">
		
		<h3>ADD NEW CATEGORY</h3><br>  
		  
		<input type="text" name="category" id="category" value="" placeholder="&#128405; New Category" required><br><br>
	  
		<input type="submit" name="submit_category" value="Add Category"> <br>

	</form>

</div>


