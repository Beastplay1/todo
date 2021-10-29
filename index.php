<h1>Login</h1>
<form action="login.php" method="post"> 
 	<input type="text" name="login"><br><br>
 	<input type="text" name="password"><br><br>
 	<input type="submit" name="send" value="send"><br>
	 remember<input type="checkbox" name="rem">
</form>
<p>If you're not signed , please click <a href="register_form.php">here</a>.</p>


<?php 

session_start();
if(isset($_COOKIE['user'])){
	$_SESSION['user']=$_COOKIE['user'];
	header('location:home.php');
	die;


}

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}

// setcookie('user','barev',time()+3600,"/");
// echo $_COOKIE['user'];
