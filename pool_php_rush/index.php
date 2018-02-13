<?php

include_once("functions.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();

if(empty($_SESSION['data'])){
	header("location:login.php");
}else{
	echo "Welcome " . $_SESSION['data']['username'] . "! \n";
}

?>

<br><br>

<a href="logout.php">Log Out</a>

<?php
if($_SESSION['data']['admin'] == 1){
?>

<a href="admin.php">Go to Administration Panel</a>

<?php
}
?>

<div class="product_list">
	
	<ul>
		<?php

			$conn = connect_db();

			$sql_query = "SELECT * FROM products";

			$result = $conn->query($sql_query);

			foreach($result as $row){
				echo "<li>". $row['name'] . "->" . $row['price'];
			}
		?>
	</ul>


</div>