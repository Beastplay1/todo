<h1>Register</h1>

<form action="register_form.php" method="post" enctype="multipart/form-data"> 
   Your Email: <input type="email" name="email" id="email"><br><br>
   Login: <input type="text" name="login" id="login"><br><br>
   Password: <input type="text" name="password" id="password"><br><br>
   Confirm Password: <input type="text" name="passwordConf" id="passwordConf"><br><br>
   Choose Photo: <input type="file" name="img" id="img"><br><br> 
   <input type="submit" name="send" value="send"><br>
</form>
<p>If you're already signed , then click <a href="index.php">here</a>.</p>

<?php 

$data = $_POST;

$img = scandir('img');
foreach($img as $file) {
    if ($file != '.' && $file != '..') {
        echo '<img src="img/'.$file.'" width="150" height="100" />';

    }
}


if (isset($data['send'])) {
    $errors = array();

    if (trim($data['login']) == '') {
        $errors[] = 'Enter your Login!';
    }
    if (trim($data['email']) == '') {
        $errors[] = 'Enter your Email!';
    }
    if ($data['password'] == '') {
        $errors[] = 'Enter your Password!';
    }
    if ($data['passwordConf'] == '') {
        $errors[] = 'Confirm your Password!';
    }
    if ($data['password'] !== $data['passwordConf']) {
        $errors[] = 'Passwords not match!';
    }
    if (!is_file('img/'.$_FILES['img']['name'] )) {
        move_uploaded_file($_FILES['img']['tmp_name'], 'img/'.$_FILES['img']['name']);
    }


    if (empty($errors)) {
        echo "<div style='color: green;'>You have successfully registered! You can <a href='index.php'>log in</a>.</div>";

        file_put_contents('users.php', [$data['email']." ", $data['login']." ", $data['password']." "]);
    }
    else { 
        echo '<div style = "color: red;">'. array_shift($errors). '</div>'; 
    } 


}


// $user = $data['login'];




?>
