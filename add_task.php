<?php 
   session_start();
   $action = $_POST['action'];
   if(empty($action)){
     echo json_encode (['success'=>false,'message'=>"your input is empty"]);
      die();
   }

 
   
   $fp = fopen('tasks.php', "a");
   $string = $_SESSION["user"]." ".$action."\n";
   fwrite($fp, $string);
   fclose($fp);
   
?>
