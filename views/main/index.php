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
<?php Menu($user_language); ?>
<!-- End Menu -->
<div style="/*margin-top: 100px;*/max-width: 100%;">
	<div style="text-align: center;width: 100%;background: #0a1321;padding-bottom: 15px;">
		<div id="carouselbanners" class="carousel slide" data-ride="carousel" data-interval="3500" style="width: 1300px;margin: 0px auto;max-width: 100%;">
			<ol class="carousel-indicators">
			    <li data-target="#carouselbanners" data-slide-to="0" class="active"></li>
			    <li data-target="#carouselbanners" data-slide-to="1"></li>
                            <li data-target="#carouselbanners" data-slide-to="2"></li>
			</ol>
	        <div class="carousel-inner">  
	            <div class="carousel-item active" >
	            	<a class="d-block w-100" href="Warcraft/Maps/KillingChildren" style="position: relative;">
	            		<img class="w-100" src="https://i.ibb.co/QD2wJ3m/ban.png" alt="Second slide">
	            		<span style="position: absolute;bottom: 30px;right: 30px;/*border-bottom: 2px solid rgb(0, 75, 185);*/color: white; font-size: 50px;font-family:Ducados, sans-serif;">Killing Children</span>
	            	</a>                
	            </div>
                    <div class="carousel-item" >
	            	<a class="d-block w-100" href="Warcraft/Maps/HardcoreNinja" style="position: relative;">
	            		<img class="w-100" src="Imagenes/ban.jpg" alt="Second slide">
	            		<span style="position: absolute;bottom: 30px;right: 30px;/*border-bottom: 2px solid rgb(0, 75, 185);*/color: white; font-size: 50px;font-family:Ducados, sans-serif;">Hardcore Ninja</span>
	            	</a>                
	            </div>
	            <div class="carousel-item" >
	            	<a class="d-block w-100" href="Warcraft/DotaEditor" style="position: relative;">
	            		<img class="w-100" src="Imagenes/DotaEditor/ban.png" alt="Second slide">
	            		<span style="position: absolute;bottom: 30px;right: 30px;/*border-bottom: 2px solid rgb(0, 75, 185);*/color: white; font-size: 50px;font-family:Ducados, sans-serif;">Dota Allstars Editor</span>
	            	</a>                
	            </div>
	        </div>
	        <a class="carousel-control-prev" href="#carouselbanners" role="button" data-slide="prev" style="width: 7%;opacity: 1;">
	                    <span class="carousel-control-prev-icon" aria-hidden="true" style="opacity: 1;"></span>
	                    <span class="sr-only">Previous</span>
	        </a>
	        <a class="carousel-control-next" href="#carouselbanners" role="button" data-slide="next" style="width: 7%;opacity: 1;">
	                    <span class="carousel-control-next-icon" aria-hidden="true" style="opacity: 1;"></span>
	                    <span class="sr-only">Next</span>
	        </a>
	    </div>
    </div>
    <center style="max-width: 100%;background: #0a1321;padding-bottom: 40px;">
		<center class="" style="width: 1300px; max-width:90%;display: block;text-align: left;">
			<?php Linkssugeridos($user_language); ?>			
		</center>
	</center>





	<div class="marco2" id="about">
		<div class="desc2" style="">
			<h1>Acerca de Shikuso Entertaiment</h1>
			<hr style="color: yellow;">
			<?php if($user_language=="ES") { 
				echo'<p>Shikuso Entertaiment es una Web donde publico mis proyectos como aficionado para el uso de todos, si tienes algún aporte a los trabajos actuales o para nuevos proyectos puedes contactarnos aquí para que seas considerado un miembro de shikuso entertaiment.</p><br><p>Ningún trabajo posteado en esta web esta a la venta, si vez alguno en webs diferentes cobrando por el uso de estos, haga el favor de comunicárnoslo por correo.Los links de descarga pueden llegar a usar un acortador de vínculos para generar un pequeño ingreso y mantener el soporte a los proyectos activos.</p><br><p>Los trabajos presentados pueden usar recursos de terceros alejados a shikuso entertaiment, si es el caso los créditos estarán puestos en la aplicación misma o en la pagina de cada uno de estas.</p>';
			}else{
				echo '<p>Shikuso Entertaiment is a website where I publish my projects as an amateur for the use of all, if you have any contribution to current work or for new projects you can contact us here so that you can be considered a member of shikuso entertaiment.</p><p> No work posted on this website is for sale,If you see any on different websites charging for the use of these, please let us know by mail.Download links can use a link shortener to generate a small income and maintain support for active projects.</p><p>The works presented can use third-party resources far from shikuso entertaiment, if it is the case the credits will be placed in the application itself or in the page of each of these.</p>';
			}?>
		</div>
	</div>	
	<center style="max-width: 100%;">
		<center class="" style="width: 1300px; max-width:90%;margin-top:40px;display: block;text-align: left;margin-bottom: 40px;">
			<?php Paginasamigas($user_language); ?>			
		</center>
	</center>

	<style type="text/css">
		.marco2{
			background: url(Imagenes/Red.png) no-repeat fixed center;
		}
		.desc2{
			background-color: rgba(2,12,48,0.9);
			color: white;
			padding: 30px;
			font-family: arial;
			text-align: left;			
		}
		hr, .hrcolor {
		   height: 1px;
		   border: 0;
		   /*color: #5C84D8;*/
		   background-color: #5C84D8;
		   margin: 20px 0px 20px 0px;
		}
		@media screen and (min-width: 768px){
			.desc2{
				padding: 30px 20%;
			}
		}
	</style>








</div>
<!-- Pie -->
<?php Pie(); ?>
</body>
</html>