<!DOCTYPE html>
<html>
<head>
	<title>Killing Children</title>
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
	<div class="row" >
		<div class="col-12 col-lg-7 order-lg-1 order-2" style="padding: 10px 0px;">
			<h1 style="width: 100%;text-align: left;font-family: Brutal,sans-serif;">Killing Children</h1>
			<div id="caruselpreview" class="carousel slide previewimg" data-ride="carousel">				
				<div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="https://i.ibb.co/9HV2DP6/00.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="http://drive.google.com/uc?export=view&id=1bU_vfDZmV3tFrXLrNHxJv1s8zHl6OGYN" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="http://drive.google.com/uc?export=view&id=1PygRzX7ESPSX58GdEzbv3plTVOwbupO7" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="http://drive.google.com/uc?export=view&id=1XDI2D-U-zcEmYlugcdY0ijZc0RmH2D-7" class="d-block w-100" alt="...">
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
			<img src="http://drive.google.com/uc?export=view&id=1t_zt9q9-y8mMovQc1D_QORVo5XqOZrzf" style="max-height: 160px;margin: 20px;">
			<a href="https://www.mediafire.com/file/8lkuohbtpukm8qc/Killing_Children_v3.0_AI.w3x/file" class="btn-descarga" style="width: 100%;" target="_blank">
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
					<td style="text-align: right;">3.00.0</td>
				</tr>
				<tr>
					<td>Uploaded: </td>
					<td style="text-align: right;">10-2022</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>File size:</td>
					<td style="text-align: right;">1.75 MB</td>
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
	<p id="description" style="width: 900px; max-width:90%;text-align:justify;margin-top: 20px;"><?php
	if($user_language=="ES") {
		echo 'Intenta sobrevivir robándole las almas a los indefensos niños que te miran con tiernos ojos mientras explotas sus cabezas.';
	}else{
		echo "Try to survive by stealing the souls of defenseless children who look at you with tender eyes while you explode their heads.";
	}
	//echo $user_language;
	?></p>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// INSTRUCCIONES ////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->	
	<div class="row" style="width: 900px; max-width:90%;margin-top:40px;">
		<p style="text-align:left; padding: 0px 10px 0px 0px;" class="col-12 col-lg-6"><?php 
			if($user_language=="ES") {
				echo '<span style="font-size: 24px;">Como se juega?</span><br>Consigue mas puntos que los demás jugadores en partidas cortas o largas, en el pequeño mapa caerán aleatoriamente unos misiles que aturdirán a los jugadores, cada cierto tiempo se generara una bestia que intentara matarlos.<br><br>- Selecciona una habilidad disponible y úsala con sabiduría.<br>- Mata a los niños y esquiva los misiles que caen en el mapa.<br>- Usa los "cohetes" para matar a un jugador débil y revivir recuperando algunos puntos.<br>- Se el primero en obtener los puntos establecidos para ganar.<br>';

			}else{
				echo '<span style="font-size: 24px;">How to play?</span><br>Get more points than the other players in short or long games, missiles will randomly fall on the small map that will stun the players, every so often a beast will be generated that will try to kill them.<br><br>- Select an available skill and use it wisely.<br>- Kill the children and dodge the missiles that fall on the map.<br>- Use the "rockets" to kill a weak player and revive by recovering some points.<br>- Be the first to get the set points to win.<br>';
			}
		?></p>
		<img class="col-12 col-lg-6 previewimg"  src="https://i.ibb.co/QHhhq6w/how.png">		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// Detalles Técnicos //////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="row" style="width: 900px; max-width:90%;margin-top:40px;">
	<center style="width: 100%;">
	<iframe width="560" height="315" src="https://www.youtube.com/embed/1R0Y3Ss7OJQ?controls=0&amp;start=10" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
	</center>
				
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// LOGO /////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="margin-top:40px;width: 90%;">
		<img src="https://i.ibb.co/QD2wJ3m/ban.png" style="width: 100%;">
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// CHANGELOG ////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 24px;"><?php if($user_language=="ES") echo 'Ultimos Cambios'; else echo 'Changelog'; ?>:</span>
		<p style="text-align:justify;"><?php 
			if($user_language=="ES") { 
				echo 'Se corrigieron y mejoraron aspectos del mapa que no eran muy agradables a la vista.'; 
			}else{
				echo 'Fixed and improved aspects of the map that were not very pleasing to the eye.';
			}
		?></p>
		<ul style=""><?php 
			if($user_language=="ES") { 
				echo '
					<li>Se agrego la posibilidad de escoger un héroe al azar.</li>
					<li>Se arreglo un bug que generaba items en el suelo.</li>
					<li>Se modificaron los sistemas de muertes.</li>
					<li>Se desvinculo los slots de los jugadores con las habilidades.</li>
					<li>Se agrego una taberna para escoger tu habilidad.</li>
					<li>Nueva habilidad: Steal Life.</li>
					<li>Agregada la opcion para reiniciar la partida.</li>
					<li>Añadido un efecto que muestra cuando el niño desaparecerá.</li>
				'; 
			}else{
				echo '
					<li>Added the ability to choose a random hero.</li>
					<li>Fixed a bug that spawned items on the ground.</li>
					<li>Changed death systems.</li>
					<li>The slots of the players with the skills were unlinked.</li>
					<li>Added a tavern to choose your skill.</li>
					<li>New Ability: Steal Life.</li>
					<li>Added option to restart the game.</li>
					<li>Added an effect that shows when the child will disappear.</li>
				';
			}
		?></ul>	
		<a style="color:#007bff;cursor: pointer;" onclick="altChang(this)">All Changelog</a>
		<div style="background: #041f48;padding: 15px;display: none;margin-top: 10px;" id="allchang">
			<a href="#v1">v 2.8 - [ 01-13-2019 ]</a>
			<ul>
				<li>changes that improve gameplay.</li>
				<li>Known bugs fixed.</li>
			</ul>			
		</div>

	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// OTRAS VERSIONES //////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 24px;"><?php if($user_language=="ES") echo 'Otras Versiones'; else echo 'Other versions'; ?>:</span><br>
		<ul >
			<li id="v28"><a target="_blank" href="https://www.epicwar.com/maps/download/288748/6d95babb4a71414e2fc89c260a78c6d08dd858f90a15b38af27f7bd8c302c30b634c4d11/Killing%20Children%20v2.8.w3x">v 2.8</a> (2019-01-13)</li>
			<li><a target="_blank" href="https://www.epicwar.com/maps/download/252692/ed7f36d4d9f34754c8b801b7d8033eaefaa282dd578ccb4a8b13a91fdf1d3aa4634c4fcc/Killing%20Children%20v2.0.w3x">v 2.0</a> (2015-04-09)</li>
		</ul>		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// COMENTARIOS //////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div  style="width: 900px; max-width:90%;margin-top:40px;text-align: left;margin-bottom: 40px;">
		<?php chatbox($user_language,"3"); ?>
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