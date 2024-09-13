<!DOCTYPE html>
<html>
<head>
	<title>Shikuso Entertaiment</title>
	<?php
		include('Templates.php'); 
		getMetas(); 
		getScripts();
		$versioncurrent="2-0-1";
	?>
</head>
<body style="max-width: 100%; ">
<?php
	Menu($user_language); 
?>
<center style="max-width: 100%;min-height: calc(100vh - 267px);padding-top: 20px;">
	<div>
	<?php if(isset($_GET['app']) && $_GET['app']=="dae"){ //echo $_GET['v']; ?>
		<div class="row cartel" style="">
			<a href="../../Warcraft/DotaEditor" class="col-12 col-md-5 order-md-1 order-2" style="padding: 5%;display: inline-block;">
				<img  src="../../Imagenes/DotaEditor/logo.png" style="width: 100%;">
			</a>
			
			<div class="col-12 col-md-7 order-md-2 order-1" style="padding: 4% 4% 4% 1.5%;display: inline-block;">
				<h3 style=""><?php 
					if($user_language=="ES") echo "La versión "; else echo "The version ";
					echo str_replace('-', '.', $_GET['v']);
					if($_GET['v']==$versioncurrent){
						if($user_language=="ES") echo " es la mas actual"; else echo " is the most current";
					}else{
						if($user_language=="ES") echo " esta desactualizada"; else echo "is outdated";
					}
				?></h3>
				<span class="msgbox" > <?php 
				if($_GET['v']==$versioncurrent){
					if($user_language=="ES") echo "ACTUALIZADA"; else echo "UPDATED";
				} else{
					if($user_language=="ES") echo "DESACTUALIZADA"; else echo "OUTDATED";
				}
				?></span>
				<?php if($_GET['v']==$versioncurrent){ ?>
					<p style="text-align: justify;"><?php if($user_language=="ES") echo "Gracias por mantenerte al día con el proyecto, puedes enviar alguna sugerencia o reportar algún error a \"shikusosks@gmail.com\"; o escribir un comentario en la pagina de <a href='../../Warcraft/DotaEditor'>Dota AllStars Editor</a>."; else echo "Thank you for keeping up to date with the project, you can send a suggestion or report an error to \"shikusosks@gmail.com\"; or write a comment on the <a href='../../Warcraft/DotaEditor'>Dota AllStars Editor</a> page."; ?></p>
					
				<?php }else { ?>
					<table style="width: 70%;margin-bottom: 15px;">						
						<tr style="width: 100%;margin-top: 15px;">
							<td>Current version: </td>
							<td style="text-align: right;">2.0.1</td>
						</tr>
						<tr>
							<td>Uploaded: </td>
							<td style="text-align: right;">08-23-2021</td>
						</tr>
						<tr style="width: 100%;margin-top: 15px;">
							<td>File size:</td>
							<td style="text-align: right;">226 KB</td>
						</tr>
					</table>
					<a href="../../Warcraft/DotaEditor" class="btn-descarga" style="width: 70%;padding: 1px 20px;">
						<img src="../Imagenes/Mediafire.png" style="max-width:40px;vertical-align: baseline;">
						<span><?php if($user_language=="ES") echo 'Descargar'; else echo 'Download'; ?></span>
					</a>
				<?php }?>
			</div>
		</div>


	<?php } if(isset($_GET['app']) && $_GET['app']=="dae"){ //echo $_GET['app']; ?>


			 
	<?php } ?>
	</div>
	<div class="" style="width: 1300px; max-width:90%;margin-top:40px;display: block;text-align: left;margin-bottom: 40px;">
		<?php Linkssugeridos($user_language); ?>			
	</div>
	<div class="" style="width: 1300px; max-width:90%;margin-top:40px;display: block;text-align: left;margin-bottom: 40px;">
		<?php Paginasamigas($user_language); ?>			
	</div>
	<style type="text/css">
		.cartel{
			border-radius: 4px;
			border:1.5px solid #0a1321;
			max-width: 90%;
			width: 700px;
			-webkit-box-shadow: 0px 0px 41px 7px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 41px 7px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 41px 7px rgba(0,0,0,0.75);
			margin-top: 25px;
		}
		.cartel div h3{
			font-size: 19px;
		}
		.msgbox{
			margin: 10px 0px;
			font-size: 22px;
			padding: 3px 20px;
			display: inline-block;
			<?php if($_GET['v']==$versioncurrent)
				echo "border: 1.5px solid #215a20;background: #58ca56;color: #0d460c;";
			else
				echo "border: 1.5px solid #791e1e;background: #e06f6f;color: #610808;";
			?>			
		}
	</style>
</center>
<?php Pie(); ?>
</body>
</html>