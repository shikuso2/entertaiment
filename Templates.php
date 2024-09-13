<?php 
	$user_language="En";
	if(isset($_COOKIE["lang"])){
		$user_language=strtoupper($_COOKIE["lang"]);
	}else if (isset($_GET['lang'])) {
		$user_language=strtoupper($_GET['lang']);
	}else{
		$user_language=strtoupper(substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2));
	}
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// IDIOMA ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function getUserLanguage() { 
		$idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
		return $idioma; 
	}
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// METAS ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function getMetas(){?>
		<meta charset="UTF-8">
		<link rel="icon" type="../../image/png" href="../../Imagenes/mini.png" />		
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">				
		<link rel="stylesheet" href="../../bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../../Estilos/Fuentes.css">
		<link rel="stylesheet" type="text/css" href="../../Estilos/Main.css">	
	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// SCRIPTS ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function getScripts(){?>
		<script src="../../jquery-3.4.1.min.js"></script>
		<script src="../../bootstrap.min.js"></script>			
	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// MENU ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function Menu($idioma){?>
		<nav id="content_menu" class="navbar navbar-expand-md " style="padding: .5rem 3% .5rem 6%;top: 0px;">
		  <a class="navbar-brand " href="../../">
		  	<span style="display: block;font-size: 38px;font-family: CORPOREA;text-shadow: 0 0 30px black;margin-top: -8px;">SHIKUSO</span>
			<span style="display: block; font-size: 22.5px;text-shadow: 0 0 30px black;-webkit-text-stroke: 0px black;/*font-weight: bold;*/margin-top: -20px;">entertaiment</span>
		  </a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16" style="color: white;">
			  <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
			</svg>
		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		  	<span class=""></span>
		  	<ul class="navbar-nav mr-auto" style="margin-left: 2%;">
		  		<li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-globe2" viewBox="0 0 16 16">
					  <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855-.143.268-.276.56-.395.872.705.157 1.472.257 2.282.287V1.077zM4.249 3.539c.142-.384.304-.744.481-1.078a6.7 6.7 0 0 1 .597-.933A7.01 7.01 0 0 0 3.051 3.05c.362.184.763.349 1.198.49zM3.509 7.5c.036-1.07.188-2.087.436-3.008a9.124 9.124 0 0 1-1.565-.667A6.964 6.964 0 0 0 1.018 7.5h2.49zm1.4-2.741a12.344 12.344 0 0 0-.4 2.741H7.5V5.091c-.91-.03-1.783-.145-2.591-.332zM8.5 5.09V7.5h2.99a12.342 12.342 0 0 0-.399-2.741c-.808.187-1.681.301-2.591.332zM4.51 8.5c.035.987.176 1.914.399 2.741A13.612 13.612 0 0 1 7.5 10.91V8.5H4.51zm3.99 0v2.409c.91.03 1.783.145 2.591.332.223-.827.364-1.754.4-2.741H8.5zm-3.282 3.696c.12.312.252.604.395.872.552 1.035 1.218 1.65 1.887 1.855V11.91c-.81.03-1.577.13-2.282.287zm.11 2.276a6.696 6.696 0 0 1-.598-.933 8.853 8.853 0 0 1-.481-1.079 8.38 8.38 0 0 0-1.198.49 7.01 7.01 0 0 0 2.276 1.522zm-1.383-2.964A13.36 13.36 0 0 1 3.508 8.5h-2.49a6.963 6.963 0 0 0 1.362 3.675c.47-.258.995-.482 1.565-.667zm6.728 2.964a7.009 7.009 0 0 0 2.275-1.521 8.376 8.376 0 0 0-1.197-.49 8.853 8.853 0 0 1-.481 1.078 6.688 6.688 0 0 1-.597.933zM8.5 11.909v3.014c.67-.204 1.335-.82 1.887-1.855.143-.268.276-.56.395-.872A12.63 12.63 0 0 0 8.5 11.91zm3.555-.401c.57.185 1.095.409 1.565.667A6.963 6.963 0 0 0 14.982 8.5h-2.49a13.36 13.36 0 0 1-.437 3.008zM14.982 7.5a6.963 6.963 0 0 0-1.362-3.675c-.47.258-.995.482-1.565.667.248.92.4 1.938.437 3.008h2.49zM11.27 2.461c.177.334.339.694.482 1.078a8.368 8.368 0 0 0 1.196-.49 7.01 7.01 0 0 0-2.275-1.52c.218.283.418.597.597.932zm-.488 1.343a7.765 7.765 0 0 0-.395-.872C9.835 1.897 9.17 1.282 8.5 1.077V4.09c.81-.03 1.577-.13 2.282-.287z"/>
					</svg>
					<!-- <img style="width: 30px;" src="<?php echo $raiz; ?>Imagenes/<?php echo $idioma; ?>.png"> -->
					<span><?php echo $idioma; ?></span>
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item"  onclick="selectlang('Es')" style="cursor:pointer;">Español</a>
		          <a class="dropdown-item"  onclick="selectlang('En')" style="cursor:pointer;">English</a>
		        </div>
		      </li>
		  	</ul>
		    <ul class="navbar-nav ">
		      
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Warcraft
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="../../Warcraft/DotaEditor">Dota Allstar Editor</a>
		          <a class="dropdown-item" href="../../Warcraft/Tooltips/skill">Tooltips Generator</a>
		          <a class="dropdown-item" href="../../Warcraft/Maps">Mapas</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Minecraft
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="#">Plugins</a>
		        </div>
		      </li>

		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Paladins
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="../../Paladins/Roulette">Roulette</a>
		          <a class="dropdown-item" href="../../Paladins/RandomTeam">Random Team</a>
		        </div>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link disabled" href="#">Contacto</a>
		      </li>

		    </ul>
		  </div>
		</nav>
		<style type="text/css">					
			.navbar{
				background: #0a1321;
				width: 100%;
			}
			@media screen and (min-width: 768px) {
				.navbar{
					background: rgba(0, 0, 0, 0.5);
				}
			}
			.nav-link{
			    color: #ffff;
			    font-size: 17px;
			}
			.nav-link:hover{
			    color: #007bff;
			}
			.dropdown-menu{
				background: rgba(0, 0, 0, 0.5);				
			}
			.dropdown-item{
				color: white;
			}
			.nav-item {
			    margin-right: 10px;
			}					
		</style>
                <script type="text/javascript">
			function selectlang(lang){
				var URLquery = window.location.search;
				if(URLquery!=""){
					if(URLquery.includes('lang=')){
						URLquery=window.location.href.replace("lang=Es","lang="+lang).replace("lang=En","lang="+lang);
					}else{
						URLquery=window.location.href+"&lang="+lang;
					}
				}else{
					URLquery=window.location.href+"?lang="+lang;
				}				
				//console.log(URLquery);
				document.cookie = "lang="+lang;
				location.href =URLquery;

			}
		</script>
	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// PIE DE PAGINA //////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function Pie(){ ?>
		<div id="piedepagina" style="background: rgb(0,0,0,0.6);color: white;width: 100%;padding: 15px 40px 10px 40px;bottom: 0px;position: relative;display: inline-block;">	
			<span style="font-size: 40px;font-family: CORPOREA;text-shadow: 0 0 30px black;display: block;">SHIKUSO</span>
			<span style="font-size: 25px;text-shadow: 0 0 30px black;-webkit-text-stroke: 0px black;margin-top: -25px;display: block;">entertaiment</span>
			<div class="enlaces">
				<div>
					<a href="Warcraft/DotaEditor">Dota AllStar Editor 2</a>
					<a href="Warcraft/Tooltips/skill">Tooltips Generator</a>
					<a href="Warcraft/Maps">Maps</a>
				</div>
				<div>
					<a href="mailto:shikusosks@gmail.com" target="_blank">Contact</a>
					<a href="../../#about" >About</a>
				</div>
				<div>
					<a href="https://discord.gg/DDbNnFqDXg" target="_blank"><img src="../../Imagenes/dsc.png" style="width: 18px;margin-right: 5px;">Discord</a>
					<a href="https://twitter.com/Shikuso3" target="_blank"><img src="../../Imagenes/tw.png" style="width: 18px;margin-right: 5px;">Twitter</a>
					<a href="https://www.instagram.com/shikuso3/" target="_blank"><img src="../../Imagenes/itg.png" style="width: 18px;margin-right: 5px;">Instagram</a>
				</div>
			</div>
			<h5 style="width: 100%;text-align: center;font-size: 12px;margin-top: 20px;">Designed and developed by: <a href="mailto:Jhon.atr@outlook.com">Jhon.atr@outlook.com</a>.</h5>
		</div>
		<style type="text/css">
			hr, .hrcolor {
				height: 1px;
				border: 0;
				background-color: red;
			}
			.enlaces{
				border-top: 2px solid #2d466a;
				/*flex-direction: row;
				justify-content: space-between;
				padding-right: 12%;*/
				display: grid;
				margin-top: 10px;
				
				color: #5b6daf;
				padding-top: 15px;
				grid-template-columns: repeat(3, 1fr);
				grid-gap: 10px;
			}
			.enlaces div a{
				display: table;
				text-decoration: none !important;
				margin-bottom: 10px;
			}
			.enlaces *{
				color: #729bb9;
			}
			@media screen and (max-width: 768px) {
				.enlaces{
					grid-template-columns: repeat(2, auto);
				}
			}
		</style>
		<span style="position: fixed;color: white; background-color: #023859;padding: 10px 15px 13px 15px;right: 20px;bottom: 20px; border-radius: 6px;border:3px solid white;display: none; cursor: pointer;" class="ir-arriba">🢁</span>
		<script type="text/javascript">
			$(document).ready(function(){ 
				$('.ir-arriba').click(function(){
					$('body, html').animate({
						scrollTop: '0px'
					}, 300);
				});	 
				$(window).scroll(function(){
					if( $(this).scrollTop() > 0 ){
						$('.ir-arriba').slideDown(0);
					} else {
						$('.ir-arriba').slideUp(0);
					}
				});	 
			});
		</script>
	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// COMENTARIOS ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function chatbox($idioma,$tema){ ?>
		<?php 
			if($idioma=="ES") echo '
					<span id="Reply" style="font-size: 24px;">Deja un comentario:</span>
					<span id="comen" style="font-size: 24px;display:none;">Responder un mensaje:</span>
					'; 
			else echo '
					<span id="Reply" style="font-size: 24px;">Comments:</span>
					<span id="comen" style="font-size: 24px;display:none;">Reply to a message:</span>
					'; 		
		?>
		<div  style="margin-bottom: 15px;">
			<textarea id="msj" style="width: 100%;border: 0px;padding: 2px 5px;resize: none;height: 80px;"></textarea>
			<input id="nick" type="text" style="width: 69%;border: 0px;padding: 2px 5px;" value="Anonymous">
			<?php 
			if($idioma=="ES") echo '
				<a id="btncomen" class="btn_comment" onclick="Comentar(this)" funcion="comentar">COMENTAR</a>
				<a id="resp" class="btn_comment" style="display:none;" onclick="Comentar(this)" funcion="responder" raiz="0">RESPONDER</a>
				';
			else echo '
				<a id="btncomen" class="btn_comment" onclick="Comentar(this)" funcion="comentar">COMMENT</a>
				<a id="resp" class="btn_comment" style="display:none;" onclick="Comentar(this)" funcion="responder" raiz="0">REPLY</a>
				';
			?>
		</div>
		<div id="chat" style="width: 100%;">
			<!-- ////////////////////////////////////////////////////////////////////////////////////// -->		
		</div>
		<script type="text/javascript">
			var tema = "<?php echo $tema; ?>";
			window.onload = CargarComentarios(tema);
			function CargarComentarios(theme){
				$.ajax({
			        type:"POST",
			        url:"../../chat.php",
			        data:{"funcion":"cargar","tema":""+theme},
			        success:function(r){  
			            $("#chat").html(r);
			        }
			    });
			}	
			function ActivarResponder(item){
		    	$('#Reply').css("display","none");
		    	$('#comen').css("display","inherit");

		    	$('#btncomen').css("display","none");
		    	$('#resp').css("display","inline-block");

		    	$("#resp").attr("raiz",""+$(item).attr('raiz'));

		    	$('html, body').animate({ scrollTop: $("#comen").offset().top }); 
		    }
		    function Comentar(item){ 
		    	if($("#nick").val().toUpperCase().includes("SHIKUSO")){
		    		alert("Invalid name: shikuso");
		    		$( "#nick" ).val("Anonymous");
		    	}else if($("#nick").val().trim()==""){
		    		$( "#nick" ).focus();
		    	}else if( $("#msj").val().trim()==""){
		    		$( "#msj" ).focus();
		    	}else{			    	
			    	$.ajax({
				        type:"POST",
				        url:"../../chat.php",
				        data:{"funcion":$(item).attr('funcion'),"tema":""+tema,"raiz":$(item).attr("raiz"),"nick":$("#nick").val(),"mensaje":$("#msj").val()},
				        success:function(r){ 
				        	$("#msj").val("");

				        	$('#Reply').css("display","inherit");
					    	$('#comen').css("display","none");

					    	$('#btncomen').css("display","inline-block");
					    	$('#resp').css("display","none"); 

					    	CargarComentarios(tema);
				        }
				    });	 
				}  
		    }
		</script>




	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// PAGINAS AMIGAS /////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function Paginasamigas($idioma){ ?>
		<h4><?php if($idioma=="ES") echo "Paginas amigas:"; else echo "Friends Webpages:"; ?></h4>
		<div class="row">
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="">
				<a href="http://d1stats.ru/" style="" target="_blank">
					<img src="../../Imagenes/d1stats.png" style="width: 100%;" >
					<p><?php if($idioma=="ES") echo "Pagina dedicada al proyecto DotA Allstars, donde el equipo de DracoL1ch se esmera con cada parche asimilar las características nuevas que brinda Dota2";
					else echo "Page dedicated to the DotA Allstars project, where the DracoL1ch team strives with each patch to assimilate the new features that Dota2 offers";?>.
					</p>
					<span><img src="http://d1stats.ru/favicon.ico" alt="">d1stats.ru</span>					
				</a>				
			</div>
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="">
				<a href="https://www.worldofeditors.net/" style="" target="_blank">
					<img src="../../Imagenes/woe.png" style="width: 100%;" >
					<p><?php if($idioma=="ES") echo "Esta es una comunidad en español especializada en el soporte de Warcraft III y su editor de Mundos, encontraras respuestas y tutoriales que te ayudaran con la creación y modificación de mapas para Warcraft III";
					else echo "This is a community in Spanish specialized in the support of Warcraft III and its WorldEdit, you will find answers and tutorials that will help you with the creation and modification of maps for Warcraft III";?>.
					</p>
					<span><img src="https://i.servimg.com/u/f73/18/43/73/24/bnetic10.png" alt="">www.worldofeditors.net</span>	
				</a>				
			</div>
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="" target="_blank">
				<a href="https://www.spigotmc.org/" style="">
					<img src="../../Imagenes/spigot.png" style="width: 100%;" >	
					<p><?php if($idioma=="ES") echo "SpigotMC.org es el hogar de la comunidad detrás de softwares para servidores de minecraft, sala de chat y wiki para brindar apoyo, así como alojamiento de proyectos para creadores de contenido"; 
					else echo "SpigotMC.org is home to the community behind minecraft server software, chat room and wiki to provide support, as well as project hosting for content creators"; ?>.
					</p>	
					<span><img src="https://www.spigotmc.org/favicon.ico" alt="">www.spigotmc.org</span>					
				</a>				
			</div>			
		</div>




	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// PAGINAS AMIGAS /////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////
	function Linkssugeridos($idioma){ ?>
		<h4><?php if($idioma=="ES") echo "Puede interesarte:"; else echo "May interest you:"; ?></h4>
		<div class="row" style="padding: 0px 5%;">
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="">
				<a href="../../Warcraft/DotaEditor" style="">
					<img src="../../Imagenes/DotaEditor/daenew.png" style="width: 100%;" >
					<p><?php if($idioma=="ES") echo "Nueva versión de DotA Allstars Editor";
					else echo "New version of DotA Allstars Editor";?>.
					</p>
					<span><img src="../../Imagenes/mini.png" style="width: 16px;height: 16px;">d1stats.ru</span>			
				</a>				
			</div>
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="">
				<a href="https://discord.gg/bXvT7axhxT" style="" target="_blank">
					<iframe src="https://discord.com/widget?id=329331938760327172&theme=dark" width="350" height="450" allowtransparency="true" 
						 frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts" style="max-width: 100%;max-height: 450px;"></iframe>
					<br>			
					<span><img src="Imagenes/dsc.png" style="width: 21px;margin-top: -3px;">Shikuso's Party</span>	
				</a>				
			</div>
			<div class="col-12 col-md-4 col-sm-6 linkpages" style="" target="_blank">
				<a href="https://www.youtube.com/channel/UCDGcal5RdWLE2B1dsFxsIWA" style="">
					<img src="../../Imagenes/woeads2.png" style="width: 100%;" >	
					<p><?php if($idioma=="ES") echo "Canal dedicado a tutoriales en español de Warcraft III y su editor de mundos. encuentra la ayuda que necesitas para tu proyecto y diviértete con los directos jugando mapas de la comunidad"; 
					else echo "Channel dedicated to tutorials in Spanish for Warcraft III and its worldEdit. find the help you need for your project and have fun with live shows playing community maps"; ?>.
					</p>	
					<span><img src="https://www.youtube.com/s/desktop/a4430432/img/favicon.ico" alt="">WorldOfEditors Oficial</span>					
				</a>				
			</div>			
		</div>




	<?php }
	//////////////////////////////////////////////////////////////////////////////////////////
	///////// COMENTARIOS ////////////////////////////////////////////////////////////////////
	//////////////////////////////////////////////////////////////////////////////////////////







?>