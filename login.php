<?php 

session_start();
$errors = array();


if (empty($_POST['login'])) {
	$_SESSION['error']  = 'Enter your Login!';
	header('location:index.php');
		die();
}
if (empty($_POST['password'])) {
	$_SESSION['error']  = 'Enter your Password!';
	header('location:index.php');
		die();
}

$login = $_POST['login'];
$password = $_POST['password'];


$array = file('users.php');


foreach($array as $val){
	$array1 = explode(" ", $val);
	if($array1[0] == $login && $array1[1] == $password){
		$_SESSION['user'] = $array1[2];
		if(isset($_POST['rem'])){
			setcookie('user',$array1[2],time()+3600*24,'/');
		}
		header('location:home.php');
		die();
	}
}

$_SESSION['error'] = "Wrong login or password";  


header('location:index.php');
die();

?>
