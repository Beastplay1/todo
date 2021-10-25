<h1>Login</h1>
<form action="login.php" method="post"> 
 	<input type="text" name="login"><br><br>
 	<input type="text" name="password"><br><br>
 	<input type="submit" name="send" value="send"><br>
</form>
<p>If you're not signed , please click <a href="register_form.php">here</a>.</p>


<?php 

session_start();

if (isset($_SESSION['error'])) {
    echo $_SESSION['error'];
}
