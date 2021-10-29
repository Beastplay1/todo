<?php
    session_start();
  $task = $_POST['task'];
  $array = file("tasks.php");
  foreach($array as $key => $val){
	$array1 = explode(" ", $val);
	if ($array1[0] == $_SESSION['user'] && $array1[1] == $task) {
        unset($array[$key]);
    }
}

$fp = fopen("tasks.php", "w");
foreach ($array as $value) {
    fwrite($fp,$value);
}
fclose($fp);