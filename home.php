<?php 

session_start();
if (!isset($_SESSION['user'])) {
	header('location:index.php');
	die();
}
echo "Hello ".$_SESSION['user'];
 ?>

<a href="logout.php">Log out</a>
<input type="text">
<button id="add">Add</button>