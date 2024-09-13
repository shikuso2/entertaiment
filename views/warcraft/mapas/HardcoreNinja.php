<!DOCTYPE html>
<html>
<head>
	<title>Shikuso Entertaiment</title>
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
<center style="max-width: 100%;">
	<div class="row" style="">
		<div class="col-12 col-lg-7 order-lg-1 order-2" style="padding: 10px 0px;">
			<h1 style="width: 100%;text-align: left;font-family: Brutal,sans-serif;">Hardcore Ninja</h1>
			<div id="caruselpreview" class="carousel slide previewimg" data-ride="carousel">				
				<div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="../../Imagenes/Mapas/HardcoreNinja/01.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../../Imagenes/Mapas/HardcoreNinja/02.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../../Imagenes/Mapas/HardcoreNinja/03.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../../Imagenes/Mapas/HardcoreNinja/04.png" class="d-block w-100" alt="...">
					</div>
				</div>
			</div>
			<div style="display: inline-block;margin-top: 10px;position: relative;width: 100%;">
				<a class="" href="#caruselpreview" role="button" data-slide="prev" style="position: absolute;left: 10%;top: 0px;width: 15%;">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<ol class="carousel-indicators2" style="list-style: none;line-height: 18.7px;">
				    <li data-target="#caruselpreview" data-slide-to="0"></li>
				    <li data-target="#caruselpreview" data-slide-to="1"></li>
				    <li data-target="#caruselpreview" data-slide-to="2"></li>
				    <li data-target="#caruselpreview" data-slide-to="3"></li>
				</ol>
				<a class="" href="#caruselpreview" role="button" data-slide="next" style="position: absolute;right: 10%;top: 0px;width: 15%;">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>				
			</div>
		</div>
		<center class="col-12 col-lg-5 order-lg-2 order-1" style="padding: 5%;">
			<img src="../../Imagenes/Mapas/HardcoreNinja/preview.png" style="max-height: 160px;margin: 20px;">
			<a href="https://www.mediafire.com/file/4eko5audbeftseo/H%2Ardc%2Ar%2A_Ninja_v1.01.w3x/file" class="btn-descarga" style="width: 100%;" target="_blank">
				<img src="../../Imagenes/Mediafire.png" style="max-width:40px;vertical-align: baseline;">
				<span><?php if($user_language=="ES") echo 'Descargar'; else echo 'Download'; ?></span>
			</a>
			<table style="width: 100%;margin-top: 15px;">
				<tr style="width: 100%;margin-top: 15px;">
					<td>Author: </td>
					<td style="text-align: right;">shikuso</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>Version: </td>
					<td style="text-align: right;">1.01.0</td>
				</tr>
				<tr>
					<td>Uploaded: </td>
					<td style="text-align: right;">12-12-2021</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>File size:</td>
					<td style="text-align: right;">9.46 MB</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>System compatibility: </td>
					<td style="text-align: right;">Warcraft III</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td colspan="2">						
						
					</td>
				</tr>
			</table>
		</center>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// DESCRIPCION //////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<p id="description" style="width: 900px; max-width:90%;text-align:justify;margin-top: 40px;"><?php
	if($user_language=="ES") {
		echo 'Tal vez lo conozcas, tal vez no, Hardcore ninja es un modo personalizado del juego de valve "Dota2", hecho por la comunidad para la comunidad, Muy popular entre los buscadores de novedades participes de Dota. Esta es una recreación del juego bajo el motor de warcraft III, encontraras una gran semejanza en tanto a la jugabilidad de la versión original.';
	}else{
		echo "Maybe you know it, maybe you don't, Hardcore ninja is a custom mode of the valve game 'Dota2', made by the community for the community, very popular with Dota participating novelty seekers. This is a recreation of the game under the engine of warcraft III, you will find a great similarity in both the gameplay of the original version.";
	}
	//echo $user_language;
	?></p>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// INSTRUCCIONES ////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->	
	<div class="row" style="width: 900px; max-width:90%;margin-top:40px;">
		<p style="text-align:left; padding: 0px 10px 0px 0px;" class="col-12 col-lg-6"><?php 
			if($user_language=="ES") {
				echo '<span style="font-size: 24px;">Como se juega?</span><br>Se podría decir que es un Hero arena, por tanto lo único que debes hacer es utilizar tus habilidades y tus reflejos para acabar con el equipo contrario.<br><br>- Gana la ronda al acabar con todos los jugadores del equipo contrario.<br>- Gana la mayoría de las 15 rondas para obtener la victoria.<br>';

			}else{
				echo '<span style="font-size: 24px;">How to play?</span><br>It could be said that it is an Hero arena, so all you have to do is use your skills and your reflexes to finish off the opposing team.<br><br>- Win the round by killing all the players on the opposing team.<br>- Win most of the 15 rounds to be victorious.<br>';
			}
		?></p>
		<img class="col-12 col-lg-6 previewimg" style="" src="../../Imagenes/Mapas/HardcoreNinja/how.png">		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// Detalles Técnicos //////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="row" style="width: 900px; max-width:90%;margin-top:40px;">
		<img class="col-12 col-lg-6 order-lg-1 order-2 previewimg" style="" src="../../Imagenes/Mapas/HardcoreNinja/detail.png">
		<p style="text-align:justify; padding: 0px 10px 0px 2%;" class="col-12 col-lg-6 order-lg-2 order-1"><?php 
			if($user_language=="ES") {
				echo '<span style="font-size: 24px;">Detalles Técnicos</span>
				<br>- Ultima versión: 1.0.0 - 17/08/2021.
				<br>- Apariencia del Dota2.
				<br>- No tienes amigos o internet?, alégrate! esta versión trae una IA simple pero cumple con todo lo necesario para disfrutar el juego.
				<br>- Si algún jugador se desconecta, la computadora tomara control de su unidad.
				<br>- No te gusta el diseño de Juggernaut de Dota2?, descuida podrás utilizar el comando "-wc3" para tener el modelo alternativo de warcraft III.<br>';
			}else{
				echo '<span style="font-size: 24px;">Technical details</span>
				<br>- Last version: 1.0.0 - 17/08/2021.
				<br>- Appearance of the Dota2.
				<br>- You don'; echo "'t have friends or internet ?, rejoice! This version brings a simple AI but meets everything you need to enjoy the game.
				<br>- If any player disconnects, the computer will take control of their unit.
				<br>- Don't you like the Juggernaut design from Dota2? don't worry you can use the command "; echo '"-wc3" to have the alternative model of warcraft III.<br>';
			}
		?></p>
				
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// LOGO /////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="margin-top:40px;width: 90%;">
		<img src="../../Imagenes/Mapas/HardcoreNinja/ban.png" style="width: 100%;">
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// CHANGELOG ////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 24px;"><?php if($user_language=="ES") echo 'Ultimos Cambios'; else echo 'Changelog'; ?>:</span>
		<p style="text-align:justify;"><?php 
			if($user_language=="ES") { 
				echo 'Se corrigieron y mejoraron aspectos del mapa que no funcionaban como deberían.'; 
			}else{
				echo 'Fixed and improved aspects of the map that did not work as they should.';
			}
		?></p>
		<ul style=""><?php 
			if($user_language=="ES") { 
				echo '
					<li>Se agregó el estilo de warcraft clasico [-classic].</li>
					<li>Se corrigieron los sonidos de las habilidades.</li>
					<li>Se modificaron algunos iconos.</li>
					<li>Se agregaron efectos a algunas acciones, como MVP.</li>
					<li>Se agregó una interfaz de héroes aliados.</li>
					<li>Añadido comando [-ui] para ocultar iconos aliados.</li>
					<li>Se mejoro la calidad de las texturas del terreno.</li>
					<li>Se realizo una pequeña mejora en la IA.</li>
					<li>[ Deflect ] duracion reducida de 1s a 0.7s.</li>
					<li>[ Deflect ] Enfriamiento reducido de 3s a 2s.</li>
					<li>[ Blink ] Rango reducido de 800 a 500.</li>
				'; 
			}else{
				echo '
					<li>Added the warcraft classic style [-classic].</li>
					<li>Fixed skill sounds.</li>
					<li>Some icons were modified.</li>
					<li>Effects were added to some actions, like MVP.</li>
					<li>Added an allied hero interface.</li>
					<li>Added command [-ui] to hide allied icons.</li>
					<li>The quality of terrain textures has been improved.</li>
					<li>Made a small improvement to the AI.</li>
					<li>[ Deflect ] Duration reduced from 1s to 0.7s.</li>
					<li>[ Deflect ] Cooldown reduced from 3s to 2s.</li>
					<li>[ Blink ] Range reduced from 800 to 500.</li>
				';
			}
		?></ul>	
		<a style="color:#007bff;cursor: pointer;" onclick="altChang(this)">All Changelog</a>
		<div style="background: #041f48;padding: 15px;display: none;margin-top: 10px;" id="allchang">
			<a href="#v1">v 1.0.0 - [ 08-13-2021 ]</a>
			<ul>
				<li>Changes in interface details.</li>
				<li>Added a Top player for each round.</li>
				<li>Added a clock that shows how long the game lasted.</li>
				<li>The click sound was eliminated.</li>
			</ul>
			
		</div>

	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// OTRAS VERSIONES //////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 24px;"><?php if($user_language=="ES") echo 'Otras Versiones'; else echo 'Other versions'; ?>:</span><br>
		<ul style="">
			<li id="v1"><a target="_blank" href="https://www.mediafire.com/file/qbnn51ma5vd8q0t/H%2Ardc%2Ar%2A_Ninja_v1.0.w3x/file">v 1.0.0</a> (2021-08-13)</li>
			<li><a target="_blank" href="https://www.epicwar.com/maps/302755/">Beta 0.7.0</a> (2020-03-04)</li>
			<li><a target="_blank" href="https://drive.google.com/file/d/1wsm9Mh0jIRXqnEBrxziqxxfG7AH6YfuL/view?usp=sharing">Beta 0.6.8</a> (2019-11-10)</li>
		</ul>		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// COMENTARIOS //////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div  style="width: 900px; max-width:90%;margin-top:40px;text-align: left;margin-bottom: 40px;">
		<?php chatbox($user_language,"2"); ?>
	</div>







	<style type="text/css">
		.row{
			max-width: 86%;
		}		
		.row div{
			/*border: 1px solid green;*/
			color: white;
		}
		table *{
			color: white;
		}
		.carousel-indicators2 li{
			width: 10px;
			height: 10px;
			border-radius: 50%;
			cursor: pointer;
			margin: 0px 5px;
			background-color: #8a8a8a;
			display: inline-flex;						
		}
		ul{
			margin-left: 50px;
		}
		.previewimg{
			padding: 0px;
			border: 1px solid black;
			-webkit-box-shadow: 0px 0px 17px -4px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 17px -4px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 17px -4px rgba(0,0,0,0.75);
		}

	</style>
</center>
<?php Pie(); ?>
</body>
<script type="text/javascript">
	function altChang(item){
		$('#allchang').slideToggle();
	}
</script>
</html>