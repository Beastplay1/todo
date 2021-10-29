<?php 		
session_start();
$errors = array();

if (empty($_POST['login'])) {
	$errors['login'] = 'Enter your Login!';
}
if (empty($_POST['password'])) {
	$errors['password'] = 'Enter your Password!';
}
if (empty($_POST['passwordConf'])) {
	$errors['conf'] = 'Enter your Password!';
}
if (empty($_POST['email'])) {
	$errors['email'] = 'Enter your Email!';
}
if (!filter_var(empty($_POST['email']))) {
	$errors['email'] = 'Invalid Email!';
}
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordConf = $_POST['passwordConf'];

if ($password !== $passwordConf) {
	$errors['match'] = 'Passwords not match!';
}
$array = file('users.php');
foreach($array as $val){
	$array1 = explode(" ", $val);
	if($array1[2] == $email){
		$errors['email1'] = "This email already exists!";
		break;
	}
}


if (!empty($errors)) {
	$_SESSION['errors'] = $errors;
	header('location:register_form.php');
	die();
}


move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);





$fp = fopen('users.php', 'a');
$str = $login." ". $password." ".$email." ".$_FILES['img']['name']."\n";
fwrite($fp, $str);
fclose($fp);
header('location:index.php');