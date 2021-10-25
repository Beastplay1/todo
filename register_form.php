<h1>Register</h1>

<form action="register.php" method="post" enctype="multipart/form-data"> 
   Your Email: <input type="email" name="email" id="email"><br><br>
   Login: <input type="text" name="login" id="login"><br><br>
   Password: <input type="text" name="password" id="password"><br><br>
   Confirm Password: <input type="text" name="passwordConf" id="passwordConf"><br><br>
   Choose Photo: <input type="file" name="img" id="img"><br><br> 
   <input type="submit" name="send" value="send"><br>
</form>
<p>If you're already signed , then click <a href="index.php">here</a>.</p>
<?php 

session_start();
//print_r($_SESSION['errors']);

if (isset($_SESSION['errors']['login'])) {
       echo $_SESSION['errors']['login'];
    }
if (isset($_SESSION['errors']['password'])) {
       echo $_SESSION['errors']['password'];
    }
if (isset($_SESSION['errors']['email'])) {
       echo $_SESSION['errors']['email'];
}
if (isset($_SESSION['errors']['passwordConf'])) {
       echo $_SESSION['errors']['passwordConf'];
}
if (isset($_SESSION['errors']['match'])) {
       echo $_SESSION['errors']['match'];
}
if (isset($_SESSION['errors']['email1'])) {
       echo $_SESSION['errors']['email1'];
}


//     if (trim($data['email']) == '') {
//         $errors[] = 'Enter your Email!';
//     }
//     if ($data['password'] == '') {
//         $errors[] = 'Enter your Password!';
//     }
//     if ($data['passwordConf'] == '') {
//         $errors[] = 'Confirm your Password!';
//     }
//     if ($data['password'] !== $data['passwordConf']) {
//         $errors[] = 'Passwords not match!';
//     }

 ?>
