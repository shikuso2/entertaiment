<!DOCTYPE html>
<html>
<head>
	<title>ToolTips</title>
	<?php
		include('Templates.php'); 
		getMetas(); 
		getScripts();
	?>
</head>
<body >
<?php
	Menu($user_language); 
?>
<!-- End Menu -->
<div style="max-width: 100%;min-height: calc(100vh - 100px);">
	<center class="centrodivp">
        <div style="position: fixed;right: 10px;">
			<a href="?lang=Es" style="width: 50px;display: <?php if ($user_language=="ES") echo "none"; else echo "inline-block"; ?>;"><img src="../../Imagenes/esp.png" style="width: 100%;"></a>
			<a href="?lang=En" style="width: 50px;display: <?php if ($user_language=="ES") echo "inline-block"; else echo "none"; ?>;"><img src="../../Imagenes/eng.png" style="width: 100%;"></a>
		</div>
		<h1 style="margin-bottom: 5px !important;font-size: 40px;font-family: arial;color: #39f;margin-top: 5px;"><?php if ($user_language=="ES") echo "Generador de ToolTips"; else echo "ToolTips Generator"; ?></h1>
		<div style="color: #1861E6FF;font-family: arial;">
			v.2 - Last Edition: June 30, 2020
		</div>
		<div style="font-size: 25px;">
					<a href="skill" style="text-decoration: none; <?php if ($this->getTooltips()=="skill") echo 'color: #09f;'; else echo 'color: #9A9C9E;'; ?>"><?php if($user_language=="ES") echo "Habilidades"; else echo "Abilitys"; ?></a> | 
					<a href="item" style="text-decoration: none; <?php if ($this->getTooltips()=="item") echo 'color: #09f;'; else echo 'color: #9A9C9E;'; ?>"><?php if($user_language=="ES") echo "Objetos"; else echo "Items"; ?></a> | 
					<a href="unit" style="text-decoration: none; <?php if ($this->getTooltips()=="unit") echo 'color: #09f;'; else echo 'color: #9A9C9E;'; ?>"><?php if($user_language=="ES") echo "Unidad"; else echo "Unit"; ?></a>
		</div>
		<?php 
			if ($this->getTooltips()=="skill") {
				require("views/warcraft/tools/tooltipsskill.php");
			}else if ($this->getTooltips()=="unit") {
				require("views/warcraft/tools/tooltipsunit.php");
			}else if ($this->getTooltips()=="item") {
				require("views/warcraft/tools/tooltipsitem.php");
			}
		?>
                <span style="font-family: arial;font-size: 20px;"><?php if($user_language=="ES") echo "Descargar"; else echo "Download"; ?> <a  href="http://www.mediafire.com/file/9jw1ku28lqx5ovn/ToolTips_by_Shikuso.rar/file" target="_blank">ToolTipsGenerator v2</a> offline <a  href="http://www.mediafire.com/file/9jw1ku28lqx5ovn/ToolTips_by_Shikuso.rar/file"  target="_blank"><?php if($user_language=="ES") echo "aqui"; else echo "here"; ?></a>.</span>
                <br><br>
		<p style="max-width: 900px;margin-bottom:50px;"><?php if($user_language=="ES") 
			echo "ToolTips, por shikuso, toma como referencia el estilo de la descripción de las habilidades de Dota2 con algunos cambios para que tenga una mejor presentación en warcraft. abarca los campos que se deben tener en consideración para hacer entender todo lo relacionado a la habilidad, objeto o unidad."; 
			else 
			echo "ToolTips, by shikuso, takes the style of the Dota2 skill description as a reference with some changes to give it a better presentation in warcraft. It covers the fields that must be taken into consideration in order to understand everything related to the skill, object or unit."; 
		?></p>                
	</center>
</div>
<?php Pie(); ?>
</body>
<style type="text/css">
	.ir-arriba{
		cursor: url('../../Imagenes/vuelo.png'),pointer !important;
	}
        textarea{
		overflow: hidden;
	}
	select{
		font-size: 13.333px;
	}
	.centrodivp span,.centrodivp label{
		/*font-size: 13.333px;*/
		line-height: 18px;
		margin: 0px;
	}
</style>
<script type="text/javascript">
	function autoresiser(item){
		var a = document.getElementById(item);
		a.style.height = 'auto';
		var hea=a.scrollHeight+100;
		a.style.height =a.scrollHeight+'px';
		a.style.padding = '5px';

	}
        $('#btncopy').click(function(e){
		var aux = document.createElement("input");
		aux.setAttribute("value",$('#wc3code').val());
  		document.body.appendChild(aux);
		aux.select();
		document.execCommand("copy");
		document.body.removeChild(aux);
	});
</script>
</html>