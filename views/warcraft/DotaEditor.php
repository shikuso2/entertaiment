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
			<h1 style="width: 100%;text-align: left;font-family: Brutal,sans-serif;">DotA Allstars Editor 2</h1>
			<div id="caruselpreview" class="carousel slide" data-ride="carousel">				
				<div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="../Imagenes/DotaEditor/01.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../Imagenes/DotaEditor/02.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../Imagenes/DotaEditor/03.png" class="d-block w-100" alt="...">
					</div>
					<div class="carousel-item ">
				      <img src="../Imagenes/DotaEditor/04.png" class="d-block w-100" alt="...">
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
			<img src="../Imagenes/DotaEditor/logo.png" style="max-height: 160px;margin: 20px;">
			<a href="https://www.mediafire.com/file/wn519g44qi96ci3/DotA_Allstars_Editor.exe/file" class="btn-descarga" style="width: 100%;">
				<img src="../Imagenes/Mediafire.png" style="max-width:40px;vertical-align: baseline;">
				<span><?php if($user_language=="ES") echo 'Descargar'; else echo 'Download'; ?></span>
			</a>
			<table style="width: 100%;margin-top: 15px;">
				<tr style="width: 100%;margin-top: 15px;">
					<td>Author: </td>
					<td style="text-align: right;">shikuso</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>Version: </td>
					<td style="text-align: right;">2.0.1</td>
				</tr>
				<tr>
					<td>Uploaded: </td>
					<td style="text-align: right;">08-2021</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>File size:</td>
					<td style="text-align: right;">283 KB</td>
				</tr>
				<tr style="width: 100%;margin-top: 15px;">
					<td>System compatibility: </td>
					<td style="text-align: right;">Windows</td>
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
		echo "Dota Allstar Editor es una herramienta que permite editar las opciones de Dota allstar de una manera facil con un interfaz grafica intuitiva.Con ayuda de esta aplicacion se evitaran cometer errores al momento de la configuracion.<br>DAE(Dota Allstar Editor) cuenta con el 99% de las opciones que brinda el archivo de Dracol1ch, las principales, el resto se iran agregando en futuras versiones.";
	}else{
		echo "Dota Allstar Editor is a tool that allows you to edit Dota allstar options in an easy way with an intuitive graphical interface. With the help of this application you will avoid making mistakes when configuring.<br>DAE (Dota Allstar Editor) has 99% of the options provided by the Dracol1ch's file, the main ones, the rest will be added in future versions.";
	}
	//echo $user_language;
	?></p>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// INSTRUCCIONES ////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->	
	<div class="row" style="width: 900px; max-width:90%;margin-top:40px;">
		<p style="text-align:left; padding: 0px 10px 0px 0px;" class="col-12 col-lg-6"><?php 
			if($user_language=="ES") {
				echo '<span style="font-size: 22px;">Instrucciones:</span><br>1. Abrir la aplicación.<br>1.1. Si la ruta por defecto no es la indicada deberá ubicar el archivo config.dota.ini en la carpeta de warcraft III.<br>2. Se cargaran las configuraciones personalizadas, para que pueda editarlo a su gusto.<br>3. Guardar, al guardar un sonido del sistema se reproducirá si todo va bien.<br>*Puede cerrar la aplicacion luego de guardar su configuración.';

			}else{
				echo '<span style="font-size: 22px;">Instructions:</span><br>1. Open the application.<br>1.1. If the default path is not the one indicated, you should locate the config.dota.ini file in the warcraft III folder.<br>2. Custom settings will be loaded, so you can edit it to your liking.<br>3. Save, when saving a system sound will be played if everything goes well.<br>*You can close the application after saving your settings.';
			}
		?></p>
		<img class="col-12 col-lg-6" style=" padding: 0px;" src="../Imagenes/DotaEditor/open.png">		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// IDIOMAS //////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="language" class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 22px;"><?php if($user_language=="ES") echo 'Traducciones'; else echo 'Translations'; ?>:</span>
		<p style="text-align:justify;"><?php 
			if($user_language=="ES") { 
				echo 'Puedes descargar traducciones para la aplicacion, pero los idiomas de ingles y español no necesitan descargar.'; 
			}else{
				echo 'You can download translations for the application, but the English and Spanish languages do not need to download.';
			}
		?></p>
		<img style="border-bottom: 1px solid white;max-width: 100%;margin-bottom: 10px;" src="../Imagenes/DotaEditor/lang.png"><br>
		<ul style="">
			<li>[ En ] English (</span><a href="">shikuso</a><span>)</li>
			<li>[ Es ] Español (</span><a href="../../Es.ini" download="Es.ini">shikuso</a><span>)</li>
		</ul>
		<p style="margin-top: 10px;text-align:justify;" >*<?php 
			if($user_language=="ES") { 
				echo 'Descarga cualquier opción  y traduce al idioma que desees, luego si deseas puedes enviármelo a "shikusosks@gmail.com" para compartirlo en esta sección.'; 
			}else{
				echo 'Download any option and translate to the language you want, then if you want you can send it to "shikusosks@gmail.com" to share it in this section.';
			}
		?></p>			
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// IDIOMAS //////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->

	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// LOGO /////////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="margin-top:40px;width: 90%;">
		<img src="../Imagenes/DotaEditor/ban.png" style="width: 100%;">
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// CHANGELOG ////////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 22px;"><?php if($user_language=="ES") echo 'Ultimos Cambios'; else echo 'Changelog'; ?>:</span>
		<p style="text-align:justify;"><?php 
			if($user_language=="ES") { 
				echo 'Toda la aplicación fue rehecha y replanteada para un mejor manejo de las funciones.'; 
			}else{
				echo 'The whole application was redone and rethought for a better handling of the functions.';
			}
		?></p>
		<ul style=""><?php 
			if($user_language=="ES") { 
				echo '
					<li>Interfaz nueva</li>
					<li>Manejo de los Hotkeys mejorado</li>
					<li>Soporte para múltiples idiomas</li>
					<li>Aplicación optimizada; reducido el peso y la carga de elementos</li>
				'; 
			}else{
				echo '
					<li>New interface</li>
					<li>Improved hotkey handling</li>
					<li>Support for multiple languages</li>
					<li>Optimized application; reduced weight and element load</li>
				';
			}
		?></ul>	
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// OTRAS VERSIONES //////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="" style="width: 900px; max-width:90%;margin-top:40px;text-align: left;">
		<span style="font-size: 22px;"><?php if($user_language=="ES") echo 'Otras Versiones'; else echo 'Other versions'; ?>:</span><br>
		<ul style="">
			<li><a target="_blank" href="http://www.mediafire.com/file/ipvjup6ahx55zws/Dota_AllStar_Editor_v1.8.exe/file">version 1.8</a> (2018-12-21)</li>
			<li><a target="_blank" href="https://www.mediafire.com/file/7hgdk8lk8qbhxnp/Dota_AllStar_Editor_v1.7.exe/file">version 1.7</a> (2018-12-07)</li>
			<li><a target="_blank" href="https://www.mediafire.com/file/7vv3q7eorbwhkgq/Dota_AllStar_Editor_v1.5.exe/file">version 1.5</a> (2018-08-20)</li>
			<li><a target="_blank" href="https://www.mediafire.com/file/i92rslz1yn8yzi3/DotaAllStarEditor.rar/file">version 0.9</a> (2018-01-27) - Obsolete</li>
		</ul>		
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- ///// COMENTARIOS //////////////////////////////////////////////////////////////////// -->
	<!-- ////////////////////////////////////////////////////////////////////////////////////// -->
	<div  style="width: 900px; max-width:90%;margin-top:40px;text-align: left;margin-bottom: 40px;">
		<?php chatbox($user_language,"1"); ?>
	</div>







	<style type="text/css">
		.row{
			max-width: 80%;
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
	</style>
</center>
<?php Pie(); ?>
</body>
</html>