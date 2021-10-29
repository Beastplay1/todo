<h1>Register</h1>

<form action="register.php" method="post" enctype="multipart/form-data"> 
   <span>Your Email: </span> <input type="email" name="email" id="email"><br><br>
  <span> Login: </span> <input type="text" name="login" id="login"><br><br>
  <span> Password: </span> <input type="text" name="password" id="password"><br><br>
  <span> Confirm Password: </span> <input type="text" name="passwordConf" id="passwordConf"><br><br>
  <span> Choose Photo: </span> <input type="file" name="img" class="img"><br><br> 
   <input type="submit" name="send" class="send" value="send"><br>
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

<style>
html{
       font-family: Georgia, 'Times New Roman', serif;
       font-weight: bold;
       
}
body{
       background: rgb(9,121,16);
       background: linear-gradient(90deg, rgba(9,121,16,1) 24%, rgba(92,5,207,1) 70%);
}

span{
       color: purple;
}
input:hover{
       background: yellow;
}
.img:hover{
       background: transparent;
}
.send{
       border-radius: 0%;
       box-shadow: none;

}

.send:hover,.send:focus{
       border: 3px solid purple;     
}
a{
       text-decoration: none;
}
</style>