<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Error</title>
    <?php
		include('Templates.php'); 
		getMetas(); 
		getScripts();
	?>	
</head>
<body>
<?php 
	Menu($user_language); 	
?>
<center style="max-width: 100%;min-height: calc(100vh - 267px);padding-top: 20px;">


	<h1 style=""><?php if($user_language=="ES") echo "Ups!!"; else echo "Oops!!"; ?></h1>
	<img src="../../Imagenes/oops.png" style="width: 250px;margin: 15px 0px;">
	<h4><?php if($user_language=="ES") echo "Parece que lo que estas buscando fue movido a otra sección o fue eliminado."; else echo "It seems that what you are looking for was moved to another section or was deleted."; ?></h4>


	<div class="" style="width: 1300px; max-width:90%;margin-top:40px;display: block;text-align: left;margin-bottom: 40px;">
		<?php Linkssugeridos($user_language); ?>			
	</div>
	<div class="" style="width: 1300px; max-width:90%;margin-top:40px;display: block;text-align: left;margin-bottom: 40px;">
		<?php Paginasamigas($user_language); ?>			
	</div>
	



</center>
<?php Pie(); ?>
</body>
</html>