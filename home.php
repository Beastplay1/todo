<?php 

session_start();
if (!isset($_SESSION['user'])) {
	header('location:index.php');
	die();
}
echo '<span class="header-msg">'."Hello ".$_SESSION['user'].'!'.'</span>';
 ?>

<a href="logout.php">Log out</a><br><br>
<input type="text" id = "dolist">
<button id="add" >Add</button>
<p></p>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("#add").click(function(){
		let action = $("#dolist").val();
		
		$.ajax({
			url:"add_task.php",
			type:"post",
			data:{action},
			dataType:'json',
			success:function(d){
				
				if(d.success==false){
					
                  $("p").html(d.message);
				}
				else location.reload();
				
				
			}
		})
	})
	$(".task").click(function(){
    let task=$(this).prev().text();
	$.ajax({
			url:"delete.php",
			type:"post",
			data:{task},
			success:function(d){
				location.reload();
			}
		})


	})
})
</script>

<?php 
  $array = file("tasks.php");
  foreach($array as $val){
	$array1 = explode(" ", $val);
	if($array1[0] == $_SESSION['user']){
		echo '<span>'.$array1[1].'</span><button class="task">delete</button>'.'<br>';
	}
}

  
?>

<style>
	html{
		font-family: sans-serif;
		font-weight: bold;
	}
	body{
		background: rgb(92,5,207);
		background: linear-gradient(90deg, rgba(92,5,207,1) 30%, rgba(9,121,16,1) 75%);
	}
	a{
		text-decoration: none;
		border: 1px solid black;
		padding: 	0 5px;
		margin: 8px;
		color: red;
		background: yellow;
		font-weight: normal;
	}
	a:hover{
		color: #fff;
		background: blue;
	} 
	.header-msg{
		color: green;
		text-decoration: underline;
	}
</style>