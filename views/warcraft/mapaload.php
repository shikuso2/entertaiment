<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shikuso Entertaiment</title>
	<link rel="icon" type="../image/png" href="../../Imagenes/mini.png" />
	<link rel="stylesheet" type="text/css" href="../../Estilos/Main.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../Estilos/Fuentes.css">
	<script src="../../jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
	include('menu.php');
?>
<!-- End Menu -->
	<div style="max-width: 100%;">
	<?php //echo "".$this->getmapa();?>
		<div style="width: 100%;">
			<div style="width: 100%;display: inline-block;">
				<img src="../../Imagenes/Mapas/hnban.jpg" style="width: 100%;">
				<div style="position: relative;bottom: 170px;">
					<center>
						<div style="background: #00000072; padding: 13px 3px 13px 3px; display: inline-block; border-radius: 7px;">
							<a href="#acerca" class="icons-options"><img src="../../Imagenes/Icons/acerca.png"></a>
							<a href="#screens" class="icons-options"><img src="../../Imagenes/Icons/imagenes.png"></a>
							<a href="#detalles" class="icons-options"><img src="../../Imagenes/Icons/detalles.png"></a>
							<a href="#descargas" class="icons-options"><img src="../../Imagenes/Icons/descargar.png"></a>	
							<a href="#cambios" class="icons-options"><img src="../../Imagenes/Icons/cambios.png"></a>		
						</div>			
					</center>
					
				</div>
						
			</div>		
		</div>

		<div style="color: #FFFF;font-family: arial;margin-top: -70px;">
			<center>
				<a name="acerca"></a><H1 style="-webkit-text-stroke: 2px black;font-size: 67px;font-family: CORPOREA;">Hardcore Ninja</H1>
				<p style="max-width: 95%;width: 1000px;font-size: 20px;" ALIGN="justify">
					Tal vez lo conoscas, tal vez no, Hardcore ninja es un modo personalizado del juego de valve "Dota2", hecho por la comunidad para la comunidad, Muy popular entre los buscadores de novedades participes de Dota.
					Esta es una recreacion del juego bajo el motor de warcraft III, encontraras una gran semejanza en tanto a la jugabilidad de la vercion original.<br><br>
					<span style="color: #b70000;">Como se juega?</span><br>
					Se podria decir que es un Heroe arena, por tanto lo unico que debes hacer es utilizar tus habilidades y tus reflejos para acabar con el equipo contrario.
				</p>
				
			</center>
			<center>
				<hr style="max-width: 90%;width: 1200px;">
				<a name="screens"></a><H1>Vistas previas</H1>
				<img src="../../Imagenes/Mapas/2.jpg" style="width: 1000px;max-width: 90%;">
			</center>
			<center>
				<hr style="max-width: 90%;width: 1200px;">
				<a name="detalles"></a><H1 style="color: #6495ed;">Detalles Tecnicos</H1>
				<p style="max-width: 95%;width: 1000px;font-size: 19px;text-align: left;">
					-Ultima version: <span style="color: #19E55CFF">Beta 0.7.0</span> - 04/02/2020.<br>
					-Apariencia del Dota2.<br>
					-No tienes amigos o internet?, alegrate! esta vercion trae una IA simple pero cumple con todo lo necesario para disfrutar el juego.<br>
					-Si algun jugador se desconecta, la computadora tomara control de su unidad.<br>
					-No te gusta el diseño de Juggernaut de Dota2?, descuida podras utilizar el comando "-wc3" para tener el modelo alternativo de warcraft III.
				</p>				
			</center>
			
			
			<center>
				<hr style="max-width: 90%;width: 1200px;">
				<a name="descargas"></a><H1>Descarga</H1>
				<div style="background: #0090C6;width: 300px;border-radius: 3px;margin: 15px 0px 15px 0px;">
					<a style="width: 100%;height: 100%;display: inline-block;text-decoration: none;padding: 10px;color: white;font-family: arial;font-size: 30px;" target="_blank" href="https://www.epicwar.com/maps/302755/">DOWNLOAD v0.7.0</a>
				</div>
				
			</center>
			<center>
				<hr style="max-width: 90%;width: 1200px;">
				<a name="cambios"></a><H1 style="color: #b70000;">Cambios de la version</H1>
				<p style="max-width: 95%;width: 1000px;font-size: 19px;text-align: left;">
					-Se agrego una seccion de opciones.<br>
					-Se agrego un comando para volver al modelo de Juggernaut "-d2".<br>
					-Se agrego una habilidad para acceder rapidamente al Refresher Orb.<br>
					-Se agrego el mapa Forest (se seleccionara al azar o podra cambiar el mapa con "-map").<br>
					-Se agrego Quelling Blade a los heroes como en el mod original de Dota2.<br>
					-Los Items ya no se pueden soltar.<br>
					-Añadido un Top player para cada ronda.<br>
					-Se colocaron colores en la Tabla multiple para que los jugadores identifique su team.<br>
					-Se agrego una manera de saber cuantos jugadores estan vivos en cada ronda sin la necesidad de tener la tabla maximizada.<br>
					-Se agrego un reloj que muestra el tiempo que duro el juego.<br>
					-Se elimino el sonido del click.<br>
					-Las Tooltips se mejoraron.<br>
					-El tiempo de los  killstreaks fue reducido.<br>
					-La vida de los heroes fue reducida a 1.
				</p>				
			</center>

			
			
			
		</div>
		



		



		

		
		
		

	</div>
<!-- Pie -->
<?php 
	require_once('pie.php');
?>
<!-- FIN Pie -->
</body>
</html>
<style type="text/css">
		.icons-options{
			margin:0px 10px 0px 10px;
		}
		.icons-options img{
			width: 50px;
			height: 50px;
		}
		hr, .hrcolor {
		   height: 1px;
		   border: 0;
		   /*color: #5C84D8;*/
		   background-color: #5C84D8;
		   margin: 20px 0px 20px 0px;

		}		
</style>



