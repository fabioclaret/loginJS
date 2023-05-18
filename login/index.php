<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

<div class = "container">

	<?php
	session_start();
	if(!isset($_SESSION['nome'])){
		header("location:login.php");
	}else{
		?>
		<p class="text-danger"><?php echo"Bem vindo ".$_SESSION['nome'];?> </p>
	<?php	
	}
	?>
</div>