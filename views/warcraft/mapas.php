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
<body style="max-width: 100%; ">
<?php
	Menu($user_language); 
?>
<!-- End Menu -->
<div style="max-width: 100%;min-height: calc(100vh - 267px);">

	<center class="" style="width:100%;padding-bottom: 50px;">
		<h1 style="padding: 20px 0px 10px 0px;">Algunos mapas alojados</h1>
                <a href="Maps/KillingChildren" class="tarjeta">
			<span class="row no-gutters" style="padding: 5px;">				
				<div class="col-4" style=";">
					<img src="http://drive.google.com/uc?export=view&id=1t_zt9q9-y8mMovQc1D_QORVo5XqOZrzf" style="width: 100%;">
				</div>
				<div class="col-8 descripcionmap">
					<h4>Killing Children</h4>
					<span class="autor">Author: <span>SHIKUSO</span></span>
					<p>Intenta sobrevivir robándole las almas a los indefensos niños que te miran con tiernos ojos mientras explotas sus cabezas.</p>
					<span class="tags">Content: <span>1-6, Hero Arena, Minigame</span></span>
					
				</div>

			</span>
		</a>
		<a href="Maps/HardcoreNinja" class="tarjeta">
			<span class="row no-gutters" style="padding: 5px;">				
				<div class="col-4" style=";">
					<img src="../../Imagenes/Mapas/HardcoreNinja/preview.png" style="width: 100%;">
				</div>
				<div class="col-8 descripcionmap">
					<h4>Hardcore Ninja</h4>
					<span class="autor">Author: <span>SHIKUSO</span></span>
					<p>Adaptation for warcraft III of a custom Dota2 mode. Use your reflexes to kill others and win the rounds.</p>
					<span class="tags">Content: <span>1v1-5v5, Hero Arena, Competitive</span></span>
					
				</div>

			</span>
		</a>
                



	</center>
	
	
	<style type="text/css">
		.tarjeta{
			text-decoration: none !important;
			width: 500px;
			max-width: 95%;
			border: 1px solid #1d4076;
			display: inline-block;
			margin: 2%;
			border-radius: 4px;
			transition: box-shadow .3s,border-color .3s;
		}
		.tarjeta:hover{
			border: 1px solid #0a1321;
			-webkit-box-shadow: 0px 0px 8px 3px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 8px 3px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 8px 3px rgba(0,0,0,0.75);
		}
		.tarjeta span{
			background:	#0a1321;
			color: white;
		}.tarjeta span div h4{
			margin-top: 5px;
		}
		.tarjeta span div p{
			font-size: 13px;
			margin: 0px;
			padding: 0px;
			width: 95%;
			text-align: justify;
		}
		.autor{
			margin: -31px 0px -22px 0px;
		}
		.autor span{
			font-weight: bold;
			color:#3e9cdc;
		}.tags span{
			color:#3e9cdc;font-size: 13px;
		}
		.descripcionmap{ 
			margin: 0px;
			text-align: left;
			padding-left: 10px !important;
			flex-direction: column;
			justify-content: space-between;
			display: flex;
		}
		



	</style>
</div>
<?php Pie(); ?>
</body>
</html>