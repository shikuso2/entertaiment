<!DOCTYPE html>
<html>
<head>
	<title>Paladins Roulette</title>
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
	<div class="" style="display: flex;">
		<div  id="slideshow" style="width: 100%;position: relative;height: 100vh;display: inline-block;">
			
			<div style="width: 100%;bottom: 0px;text-align: left;background: linear-gradient(to right, rgba(23,149,197, 0.5), rgba(0,0,0,0));">
				<!-- <h3>Picks:</h3> -->
				<div id="pickeos" style="display: flex;overflow-x: auto;width: 96.8%;" class="champbox">
					
				</div>
			</div>

			<div style="width: 100%;position: absolute;bottom: 0px;text-align: left;background: linear-gradient(to right, rgba(152, 54, 72, 0.5), rgba(0,0,0,0));">
				<!-- <h3>Bans:</h3> -->
				<div id="Baneos" style="display: flex;overflow-x: auto;" class="champbox"></div>
			</div>
			<div style="display: none;">
				<!-- <h3>Banco:</h3> -->
				<div id="banco" style="display: flex;"></div>
			</div>

			<?php 
				$orden=0;
				$campeones = [
					"Androxus" => "../../Imagenes/Paladins/camp/Androxus.png@Flank", 
					"Ash" => "../../Imagenes/Paladins/camp/Ash.png@Frontline", 
					"Atlas" => "../../Imagenes/Paladins/camp/Atlas.png@Frontline", 
                    "Azaan" => "../../Imagenes/Paladins/camp/Azaan.png@Frontline",
					"Barik" => "../../Imagenes/Paladins/camp/Barik.png@Frontline",
                    "Betty" => "../../Imagenes/Paladins/camp/Betty.png@Damage", 
					"Bomb King" => "../../Imagenes/Paladins/camp/BombKing.png@Damage",
					"Buck" => "../../Imagenes/Paladins/camp/Buck.png@Flank",
                                        "Caspian" => "https://i.ibb.co/Y7CydRJ/Caspian.png@Flank",
					"Cassie" => "../../Imagenes/Paladins/camp/Cassie.png@Damage",
					"Corvus" => "../../Imagenes/Paladins/camp/Corvus.png@Support",
					"Dredge" => "../../Imagenes/Paladins/camp/Dredge.png@Damage",
					"Drogos" => "../../Imagenes/Paladins/camp/Drogos.png@Damage",
					"Evie" => "../../Imagenes/Paladins/camp/Evie.png@Flank", 
					"Fernando" => "../../Imagenes/Paladins/camp/Fernando.png@Frontline",
					"Furia" => "../../Imagenes/Paladins/camp/Furia.png@Support",
					"Grohk" => "../../Imagenes/Paladins/camp/Grohk.png@Support",
					"Grover" => "../../Imagenes/Paladins/camp/Grover.png@Support",
					"Imani" => "../../Imagenes/Paladins/camp/Imani.png@Damage",
					"Inara" => "../../Imagenes/Paladins/camp/Inara.png@Frontline",
					"Io" => "../../Imagenes/Paladins/camp/Io.png@Support", 
					"Jenos" => "../../Imagenes/Paladins/camp/Jenos.png@Support",
                                        "Kasumi" => "https://i.ibb.co/bsL7gvX/Kasumi.png@Damage",
					"Khan" => "../../Imagenes/Paladins/camp/Khan.png@Frontline",
					"Kinessa" => "../../Imagenes/Paladins/camp/Kinessa.png@Damage",
					"Koga" => "../../Imagenes/Paladins/camp/Koga.png@Flank",
					"Lex" => "../../Imagenes/Paladins/camp/Lex.png@Flank",
					"Lian" => "../../Imagenes/Paladins/camp/Lian.png@Damage",
					"Lillith" => "../../Imagenes/Paladins/camp/Lillith.png@Support",
					"Maeve" => "../../Imagenes/Paladins/camp/Maeve.png@Flank", 
					"Makoa" => "../../Imagenes/Paladins/camp/Makoa.png@Frontline",
					"Mal'Damba" => "../../Imagenes/Paladins/camp/MalDamba.png@Support",
					"Moji" => "../../Imagenes/Paladins/camp/Moji.png@Flank",
					"Octavia" => "../../Imagenes/Paladins/camp/Octavia.png@Damage",
					"Pip" => "../../Imagenes/Paladins/camp/Pip.png@Support",
					"Raum" => "../../Imagenes/Paladins/camp/Raum.png@Frontline",
					"Rei" => "../../Imagenes/Paladins/camp/Rei.png@Support", 
					"Ruckus" => "../../Imagenes/Paladins/camp/Ruckus.png@Frontline",
					"Saati" => "../../Imagenes/Paladins/camp/Saati.png@Damage",
					"Seris" => "../../Imagenes/Paladins/camp/Seris.png@Support",
					"Sha Lin" => "../../Imagenes/Paladins/camp/ShaLin.png@Damage",
					"Skye" => "../../Imagenes/Paladins/camp/Skye.png@Flank",
					"Strix" => "../../Imagenes/Paladins/camp/Strix.png@Damage",
					"Talus" => "../../Imagenes/Paladins/camp/Talus.png@Flank",
					"Terminus" => "../../Imagenes/Paladins/camp/Terminus.png@Frontline",
					"Tiberius" => "../../Imagenes/Paladins/camp/Tiberius.png@Damage",
					"Torvald" => "../../Imagenes/Paladins/camp/Torvald.png@Frontline",
					"Tyra" => "../../Imagenes/Paladins/camp/Tyra.png@Damage",
					"Vatu" => "../../Imagenes/Paladins/camp/Vatu.png@Flank",
                    "Vii" => "../../Imagenes/Paladins/camp/Vii.png@Flank",
					"Viktor" => "../../Imagenes/Paladins/camp/Viktor.png@Damage", 
					"Vivian" => "../../Imagenes/Paladins/camp/Vivian.png@Damage",
					"Vora" => "../../Imagenes/Paladins/camp/Vora.png@Flank",
					"Willo" => "../../Imagenes/Paladins/camp/Willo.png@Damage",
					"Yagorath" => "../../Imagenes/Paladins/camp/Yagorath.png@Frontline",
					"Ying" => "../../Imagenes/Paladins/camp/Ying.png@Support",
					"Zhin" => "../../Imagenes/Paladins/camp/Zhin.png@Flank",
				];
			 ?>
			<span id="girar" onclick="Iniciar(this)" class="new-trade" style="display: inline-block;left:calc(50% - 67.5px);top: calc(39% - 90px);">SPIN (<?php echo count($campeones); ?>)</span>
			<span id="seleccionar" onclick="pickear(this)" class="new-trade" style="top: calc(39% - 33px);">SELECT</span>
			<span id="eliminar" onclick="banear(this)" class="new-trade" style=" top: calc(39% + 153px);background: transparent linear-gradient(180deg,#a93f3f,#520000) 0% 0% no-repeat padding-box;border: 1px solid #f00;">BAN</span>		



			<center id="contruleta" style="width: 100%;position: absolute;top: 39%;overflow-x: hidden;">


			<!-- <div id="slider1" style="width: 100%;position: absolute;top: 39%;display: flex;overflow-x: hidden;padding: 12px 0px;"> -->

			<div id="slider1" style="width: 100%;display: flex;overflow-x: hidden;padding: 12px 0px;">
			<?php 								
				while ($campeon = current($campeones))  { $orden++;?>
					<div class="champ <?php echo explode("@", $campeon)[1]; ?>" orden="<?php echo $orden; ?>">
						<span>
							<img src="<?php echo explode("@", $campeon)[0]; ?>">
							<label><?php echo key($campeones); ?></label>							
						</span>											
					</div>
				<?php next($campeones);}
			?>
			</div>


			</center>




			<input id="optionsfocus" type="checkbox" onchange="ocultaroptions(this)" style="display: none;" >
			<label for="optionsfocus" style="position: absolute;cursor: pointer;top: 7px;right: 5px;">
				<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
  					<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
				</svg>
			</label>
			<label class=""  style="position: absolute;cursor: pointer;top: 50px;right: 5px;" data-toggle="modal" data-target="#ModalInfo">
				<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
		  			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
				</svg>
			</label>

		</div>
		<div id="slidemenu" style="width: 20%;border-left: 1px solid white;padding: 10px 10px;text-align: left;height: 100vh;display: none/*inline-block*/;">
			<h4 style="margin-bottom: 18%;margin-top: 2px;">
				<img style="width: 100%;" src="https://webcdn.hirezstudios.com/web/bounty/paladins_logo.png">
				<br>
				<span style="width: 100%;text-align: center;display: block;font-size: 2vw;margin-top: -9px;font-weight: bold;font-family: fantasy;color: #b1f3ff;-webkit-text-stroke: 1.5px #03627d;background: radial-gradient(ellipse farthest-corner, #83f1f1, #00fff3a6 10%, transparent 50%);">ROULETTE</span>
			</h4>
			<div class="cajamenuad advancedmenu" style="overflow-y:scroll;max-height: calc(100% - 165px);">
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="menufocus" type="checkbox" onchange="ocultarmenu(this)" checked style="display: none;">
				<label for="menufocus">
					<svg id="menuon" style="margin-top: -5px;" display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="menuoff" style="margin-top: -5px;"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Show menu</span>
				</label>
				<br>
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<label for="optionsfocus">
					<svg id="optionson" style="margin-top: -5px;"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="optionsoff" style="margin-top: -5px;" display="none"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Show Options</span>
				</label>
				<br>
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="cromaback" type="checkbox" onchange="alternarcroma(this)"  style="display: none;">
				<label for="cromaback">
					<svg id="cromaoff" style="margin-top: -5px;" display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="cromaon" style="margin-top: -5px;"  xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Chroma Background</span>
				</label>
				<hr class="hrlateral" style="">
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="Orden" type="checkbox" onchange="alternarOrden(this)" checked style="display: none;">
				<label for="Orden">
					<svg id="Ordenoff" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="Ordenon" style="margin-top: -5px;"  display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>A-Z</span>
				</label>
				<hr class="hrlateral" style="">
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="Damage" type="checkbox" onchange="Filtrarrol(this)" checked style="display: none;">
				<label for="Damage">
					<svg id="Damageon" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="Damageoff" style="margin-top: -5px;"  display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Damage</span>
				</label><br>
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="Frontline" type="checkbox" onchange="Filtrarrol(this)" checked style="display: none;">
				<label for="Frontline">
					<svg id="Frontlineon" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="Frontlineoff" style="margin-top: -5px;"  display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Frontline</span>
				</label><br>
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="Flank" type="checkbox" onchange="Filtrarrol(this)" checked style="display: none;">
				<label for="Flank">
					<svg id="Flankon" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="Flankoff" style="margin-top: -5px;"  display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Flank</span>
				</label><br>
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				<input id="Support" type="checkbox" onchange="Filtrarrol(this)" checked style="display: none;">
				<label for="Support">
					<svg id="Supporton" style="margin-top: -5px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-on" viewBox="0 0 16 16">
					  <path d="M5 3a5 5 0 0 0 0 10h6a5 5 0 0 0 0-10H5zm6 9a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"/>
					</svg>				
					<svg id="Supportoff" style="margin-top: -5px;"  display="none" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-toggle-off" viewBox="0 0 16 16">
					  <path d="M11 4a4 4 0 0 1 0 8H8a4.992 4.992 0 0 0 2-4 4.992 4.992 0 0 0-2-4h3zm-6 8a4 4 0 1 1 0-8 4 4 0 0 1 0 8zM0 8a5 5 0 0 0 5 5h6a5 5 0 0 0 0-10H5a5 5 0 0 0-5 5z"/>
					</svg>
					<span>Support</span>
				</label><br>
				<hr class="hrlateral" style="">
				
				<!-- /////////////////////////////////////////////////////////////////////////////////////////////// -->
				
				

			</div>

		</div>

		
	</div>

	<div id="ModalInfo" class="modal" tabindex="-1">
	  	<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" style="max-width: 50%;">
	    	<div class="modal-content" style="background: #02313f;">
	      		<div class="modal-header" style="display: none;">
	        		<h5 class="modal-title">Modal title</h5>
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          			<span aria-hidden="true">&times;</span>
	        		</button>
	      		</div>
	      		<div class="modal-body">
	      			<svg style="position: absolute;left: 5px;top: 5px;" xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
						<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
					</svg>
	      			<div style="margin-bottom: 20px;">	      				
	      				<a target="_blank" class="logosp"  style="background: radial-gradient(ellipse farthest-corner, #007bff, #007bff 20%, transparent 60%);">
							<img style="width: 100%;" src="https://webcdn.hirezstudios.com/web/bounty/paladins_logo.png">
							<br>
							<span style="">ROULETTE</span>
							
	      				</a>
	      				<a target="_blank" class="logosp" href="../../Paladins/RandomTeam" >
	      					<img style="width: 100%;" src="https://webcdn.hirezstudios.com/web/bounty/paladins_logo.png">
							<br>
							<span style="">RANDOM TEAM</span>
	      				</a>
	      			</div>
	        		<div class="row" style="padding: 10px 20px 12px;">
						<div class="col-3" style="padding-right: 0px;padding-left: 0px;">							
					    	<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					      		<a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true"><?php if($user_language=="ES") echo "Novedades"; else echo "What's new?"; ?></a>
					      		<a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false"><?php if($user_language=="ES") echo "Como usar"; else echo "How to use"; ?></a>
					      		<a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false"><?php if($user_language=="ES") echo "Opciones"; else echo "Options"; ?></a>					      
					    	</div>
					  	</div>
					  	<div class="col-9" style="padding-left: 0px;border: 2px solid #00719d;border-top-right-radius: 7px;border-bottom-right-radius: 7px;border-bottom-left-radius: 7px;height: 225px;text-align: left;padding: 10px 10px 10px 15px;">
					    	<div class="tab-content" id="v-pills-tabContent" style="height: 100%;">
					    		<div class="tab-pane fade show active advancedmenu" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" style="overflow-y: auto;height: 100%;">
					    			<span style="color: #21f3e9;">[ <?php echo date("j");?> <?php echo date("M");?> <?php echo date("Y");?> ]</span>
									<br>
						            <span>- <?php if($user_language=="ES") echo "Agregado los últimos campeones que llegaron al reino"; else echo "Added the last champions to come to the kingdom"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ 9 May 2022 ]</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Arreglado el mal funcionamiento de la ruleta cuando quedaban pocos campeones"; else echo "Fixed roulette not working properly when there were few champions left"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "varias mejoras internas con los procesos"; else echo "several internal improvements with the processes"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se mejoro los contenedores para que no se vean iconos sobresalientes"; else echo "Containers have been improved so that outstanding icons are not seen"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se agrego una vista a las descripciones de las opciones y otros botones"; else echo "Added a view to the descriptions of the options and other buttons"; ?>.</span>
					      		</div>
					      		<div class="tab-pane fade advancedmenu" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="overflow-y: auto;height: 100%;padding-right:10px ;">
					      			<span style="color: #21f3e9;">[ SPIN ]</span>
									<br>
						            <span><?php if($user_language=="ES") echo "Haz girar la lista de campeones hasta que se detenga en uno aleatorio"; else echo "Spin the list of champions until it stops at a random one"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ SELECT ]</span>
									<br>
									<span><?php if($user_language=="ES") echo "Puedes seleccionar al campeón afortunado para guardarlo en un grupo aceptable y quitarlo de la ruleta"; else echo "You can select the lucky champion to save it in an acceptable group and remove it from the roulette"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ BAN ]</span>
									<br>
									<span><?php if($user_language=="ES") echo "Puedes seleccionar al campeón afortunado para guardarlo en un grupo no deseado y quitarlo de la ruleta"; else echo "You can select the lucky champion to save them in an unwanted group and remove them from the roulette"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ OPTIONS ] </span>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
					  					<path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
									</svg>
									<br>
									<span><?php if($user_language=="ES") echo "Configura algunas características de la ruleta para una experiencia objetiva"; else echo "Configure some roulette features for an objective experience"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ INFO ] </span>
									<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
							  			<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
									</svg>
									<br>
									<span><?php if($user_language=="ES") echo "Muestra un cuadro de dialogo con información de Paladins Roulette"; else echo "Shows a dialog box with information about Paladins Roulette"; ?>.</span>
									<br>

					      		</div>
					      		<div class="tab-pane fade advancedmenu" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" style="overflow-y: auto;height: 100%;padding-right:10px ;">
					      			<span style="color: #21f3e9;">[ Show menu ]</span>
						            <span><?php if($user_language=="ES") echo "Alterna la visibilidad de la cabecera"; else echo "Toggles header visibility"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Show options ]</span>
						            <span><?php if($user_language=="ES") echo "Alterna la visibilidad de la barra lateral de opciones"; else echo "Toggles the visibility of the options sidebar"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Chroma Background ]</span>
						            <span><?php if($user_language=="ES") echo "Cambia el fondo de la pagina por una pantalla verde"; else echo "Change the background of the page to a green screen"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ A-Z ]</span>
						            <span><?php if($user_language=="ES") echo "Ordena los campeones alfabéticamente"; else echo "Sort the champions alphabetically"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Damage ]</span>
						            <span><?php if($user_language=="ES") echo "Permite que los campeones de daño estén en la ruleta"; else echo "Allows damage champions to be on the Roulette"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Frontline ]</span>
						            <span><?php if($user_language=="ES") echo "Permite que los campeones de primera línea estén en la ruleta"; else echo "Allow frontline champions to be on the Roulette"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Flank ]</span>
						            <span><?php if($user_language=="ES") echo "Permite que los campeones de flanco estén en la ruleta"; else echo "Allow flank champions to be on the Roulette"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ Support ]</span>
						            <span><?php if($user_language=="ES") echo "Permite que los campeones de soporte estén en la ruleta"; else echo "Allow support champions to be on the Roulette"; ?>.</span>
									<br>


					      		</div>
					    	</div>
					  	</div>
					</div>
	      		</div>
	      		<div class="modal-footer" style="background: #00719d;border-top: 0px;">
	      			<span class="mr-auto" style="font-size: 13px;">@shikuso entertaiment</span>
	      			<button type="button" class="btn btn-primary" onclick="ModalLeido()"><?php if($user_language=="ES") echo "No volver a mostrar"; else echo "Don't show again"; ?></button>
	        		<button type="button" class="btn btn-secondary" data-dismiss="modal" style="background: #054254;border:0px;"><?php if($user_language=="ES") echo "Cerrar"; else echo "Close"; ?></button>
	        		
	      		</div>
	    	</div>
	  	</div>
	</div>
	<style type="text/css">
		.logosp{
			width: 200px;
			display: inline-block;
			text-decoration: none !important;
			margin: 0px 10px;
		}		
		.logosp span{
			width: 100%;
			text-align: center;
			display: block;
			font-size: 1.6vw;
			margin-top: -9px;
			font-weight: bold;
			font-family: fantasy;
			color: #b1f3ff;
			-webkit-text-stroke: 1px #03627d;
			background: radial-gradient(ellipse farthest-corner, #83f1f1, #00fff3a6 10%, transparent 50%);
		}
		.logosp:hover{
			background: radial-gradient(ellipse farthest-corner, #007bff, #007bff 20%, transparent 60%);
		}
		.nav-link{
			border: 2px solid #00719d00;
			border-right: 0px;
			border-top-right-radius: 0px;
			border-bottom-right-radius: 0px;
		}
		.nav-pills .nav-link.active, .nav-pills .show>.nav-link {
		    color: #fff;
		    background-color: #02313f;
		    border: 2px solid #00719d;
		    border-right: 0px;
		    border-top-right-radius: 0px;
			border-bottom-right-radius: 0px;
			border-top-left-radius: 7px;
			border-bottom-left-radius: 7px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function() {
			//document.cookie = "ModalLeido1=false; max-age=0";
			<?php 
				//$_COOKIE['ModalLeido1']=false;
				if (isset($_COOKIE['ModalLeido1'])) {
					if ($_COOKIE['ModalLeido1']==false) {
						echo "$('#ModalInfo').modal('toggle');";
					}
				}else{ 
					echo "$('#ModalInfo').modal('toggle');";
				}
			?>		    
		});
		function ModalLeido(){
			document.cookie = "ModalLeido1= true; expires=True, 19 Jan 2038 04:14:07 GMT";
			$('#ModalInfo').modal('toggle');
			//console.log(document.cookie);
		}

	</script>












	<style type="text/css">
		body{
			/*background: #1f3240 !important;*/
			background-image: url('https://i.ibb.co/6b6X8CS/Fondo.png');
		  	background-repeat: no-repeat;
		  	background-attachment: fixed;  
  			background-size: cover;
		}
		.hrlateral{
			margin-top: 5px;
    		margin-bottom: 15px;
    		max-width: 90%;
    		color: white;
    		background: white;
		}
		#slidemenu{
			background-color: rgba(26,45,59,0.8);
		}
		center div{
			/*border: 1px solid white;*/
			
		}
		.champ{
			min-width: 130px;
    		width: 130px;
    		padding: 10px 10px 4px 10px;
		}
		
		.champ span{
			max-width: 100%;
			display: inline-block;
			border: 1px solid #21f3e9;
			border-radius: 3px;
			position: relative;
			overflow: hidden;
		}
		.champ span label{
			position: absolute;
    		left: 3px;
    		bottom: 0px;
    		margin: 0px;
    		font-size: 15px;
    		font-weight: bold;
    		text-shadow: 0 0 3px #000, 0 0 6px #000, 0 0 9px #000, 0 0 12px #000000, 0 0 15px #000000, 0 0 18px #000000, 0 0 21px #000000, 0 0 24px #000000;
		}
		.champ span img{
			width: 100%;
		}
		.activo{
			-webkit-box-shadow: 0px 0px 12px 1px rgba(18,149,199,1);
			-moz-box-shadow: 0px 0px 12px 1px rgba(18,149,199,1);
			box-shadow: 0px 0px 12px 1px rgba(18,149,199,1);
			background: rgba(20, 39, 67, 0.7);
		}
		.baneado,.picked{
			min-width: 130px;
    		width: 130px;
    		padding: 10px 10px 4px 10px;
		}
		.baneado span,.picked span{
			max-width: 100%;
			display: inline-block;
			/*border: 1px solid #21f3e9;*/
			border-radius: 3px;
			position: relative;
			overflow: hidden;
		}
		.baneado span img,.picked span img{
			width: 100%;
		}
		.baneado span label,.picked span label{
			position: absolute;
    		left: 3px;
    		bottom: 0px;
    		margin: 0px;
    		font-size: 15px;
    		font-weight: bold;
    		text-shadow: 0 0 3px #000, 0 0 6px #000, 0 0 9px #000, 0 0 12px #000000, 0 0 15px #000000, 0 0 18px #000000, 0 0 21px #000000, 0 0 24px #000000;
		}
		/*////BOUNTY.PALADINS.COM <a> CSS*/
		.new-trade {
		    -webkit-box-align: center;
		    align-items: center;
		    background: transparent linear-gradient(180deg,#195766,#123e48) 0% 0% no-repeat padding-box;
		    border: 1px solid #0ff;
		    display: none;
		    -webkit-box-pack: center;
		    justify-content: center;
		    padding: .3rem 0px;
		    text-align: center;
		    width: 135px;
		    cursor: pointer;
		    position: absolute;

		}
		/*///////////////////////////*/
		.champbox::-webkit-scrollbar{
			height: 11px;
		}
		.champbox::-webkit-scrollbar-thumb {
		    background: #6187c1;
		    border-radius: 7px;
		}
		.champbox::-webkit-scrollbar-track {
		    background: rgba(0, 0, 0, 0.30);
		    border-radius: 2px;
		}
		/*///////////////////////////*/
		.cajamenuad.advancedmenu{
			background: #04011a38;
			padding: 10px 0px 10px 10px;

		}
		.advancedmenu::-webkit-scrollbar{
			width: 7px;
		}
		.advancedmenu::-webkit-scrollbar-thumb {
		    background: #024246;
		    border-radius: 7px;
		}
		.advancedmenu::-webkit-scrollbar-track {
		    background: rgba(0, 0, 0, 0.30);
		    border-radius: 2px;
		}

	</style>
</center>
<?php Pie(); ?>
</body>
<script type="text/javascript">
	const TotalCampeonesnum = <?php echo count($campeones); ?>; //51;
	let inicial=1;
	// POSICION BOTON GIRAR ///////////////////////////////////////////////////////////////////////////////////////////////
	let tamano = Math.round((($("#slider1").innerWidth() /	2) /130)-0.5);
	$("#girar").css("left",(tamano*130)-2+"px");
	// OCULTAR MENU INICIAL ///////////////////////////////////////////////////////////////////////////////////////////////
	$('#content_menu').hide(0);
	$('#piedepagina').hide(0);
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// OCULTAR OPCIONES ///////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function ocultaroptions(item){
		if($(item).is(':checked') ){
			$('#slidemenu').show("slow");
			$('#slideshow').animate({ "width": "80%" }, "slow" );
			$('#optionsoff').attr("display","none");
			$('#optionson').attr("display","inherit");			
		}else{
			$('#slidemenu').hide("slow");
			$('#slideshow').animate({ "width": "100%" }, "slow" );
			$('#optionsoff').attr("display","inherit");
			$('#optionson').attr("display","none");			
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// OCULTAR MENU ///////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function ocultarmenu(item){
		if($(item).is(':checked') ){
			$('#content_menu').hide("slow");
			$('#piedepagina').hide("slow");
			$('#menuon').attr("display","none");
			$('#menuoff').attr("display","inherit");
		}else{
			$('#content_menu').show("slow");
			$('#piedepagina').show("slow");
			$('#menuon').attr("display","inherit");
			$('#menuoff').attr("display","none");
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// ACTIVAR CHROMAKEY //////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function alternarcroma(item){
		if($(item).is(':checked') ){
			$('#slideshow').css("background","#00ff08");
			$('#cromaon').attr("display","none");
			$('#cromaoff').attr("display","inherit");
		}else{
			$('#slideshow').css("background","rgba(0,0,0,0)");
			$('#cromaon').attr("display","inherit");
			$('#cromaoff').attr("display","none");
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// ACTUALIZAR NUMERO DE CAMPEONES /////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function Updatecountchamp(){
		var cantch = $('.champ');
		$('#girar').html("SPIN ("+cantch.length+")");
	}
	function Updatewidth(){
		var cantch = $('.champ');
		var tmpx =130*cantch.length
		$("#slider1").css("width",tmpx+"px");

	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// REPARAR MOUSE //////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	const container = document.getElementById("pickeos");
  	container.addEventListener("wheel", function (e) {
	    if (e.deltaY > 0) {
	      container.scrollLeft += 100;
	      e.preventDefault();
	    }
	    else {
	      container.scrollLeft -= 100;
	      e.preventDefault();
	    }
	  });  	
  	const container2 = document.getElementById("Baneos");
  	container2.addEventListener("wheel", function (e) {
	    if (e.deltaY > 0) {
	      container2.scrollLeft += 100;
	      e.preventDefault();
	    }
	    else {
	      container2.scrollLeft -= 100;
	      e.preventDefault();
	    }
	  });
  	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// GIRAR RULETA ///////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	const slider= document.querySelector('#slider1');

	var ind = parseInt(1);
	var time =0;
	var velo =0;
	var max =0;
	function Iniciar(item){
		var ndc = $('.champ');
		if (ndc.length>1) {		
			$("#seleccionar").css("display","none");
			$("#eliminar").css("display","none");
			$("#girar").css("display","none");
			let campeon = document.querySelector(".activo");
			$(campeon).removeClass("activo");
			ind = parseInt(1);
			time =0;		
			velo =0;
			max =Math.round(Math.random() * (350 - 90) + 90);
			console.log(max);

			let forind=Math.round(Math.random() * ((TotalCampeonesnum+1) - 0) + 0);
			console.log(forind);
			for (var i = 0; i <= forind; i++) {
				let todosloscampeones = document.querySelectorAll(".champ");
				let primercampeon = document.querySelectorAll(".champ")[0];
				let ultimocampeon = todosloscampeones[todosloscampeones.length - 1];
				$(primercampeon).insertAfter($(ultimocampeon));
			}
			showSlides();
		}
	}	
	function showSlides(){
		let todosloscampeones = document.querySelectorAll(".champ");
		let primercampeon = document.querySelectorAll(".champ")[0];
		let ultimocampeon = todosloscampeones[todosloscampeones.length - 1];		

		if(parseInt($(primercampeon).css("marginLeft").replace('px', ''))>= -120){
			$(primercampeon).css("margin-left", parseInt(ind));
			ind = ind - Math.round(Math.random() * (15 - 10) + 10); //10
		}else{
			ind = 0;
			$(primercampeon).css("margin-left", parseInt(ind));
			$(primercampeon).insertAfter($(ultimocampeon));
		}

		if(time<max){
			time=time+(Math.random()-0.1 );
			if (time>max*0.5) velo =  Math.round(Math.random() * (3 - 0) + 0);
			if (time>max*0.6) velo = Math.round(Math.random() * (7 - 0) + 0);
			if (time>max*0.7) velo = Math.round(Math.random() * (10 - 1) + 1);
			if (time>max*0.8) velo = Math.round(Math.random() * (13 - 7) + 7);
			if (time>max*0.9) velo = Math.round(Math.random() * (16 - 13) + 13);
			
			setTimeout(showSlides, velo);
		}else{
			$(primercampeon).css("margin-left", "0px");
			$(primercampeon).insertAfter($(ultimocampeon));

			inicial = parseInt($(document.querySelectorAll(".champ")[0]).attr("orden"));
			//$(document.querySelectorAll(".champ")[4]).addClass( "activo" );
			/////////////////////////////////////
			//panelIzquierda.clientWidth
			let tamano=0;
			let tamgran= $("#contruleta").innerWidth();
			let tammin= $("#slider1").innerWidth();
			if(tamgran>tammin){
				tamano = Math.round((($("#slider1").innerWidth() /	2) /130)-0.5);
			}else{
				tamano = Math.round((($("#contruleta").innerWidth() /	2) /130)-0.5);
			}	
			console.log("select: "+tamano);
			$(document.querySelectorAll(".champ")[tamano]).addClass( "activo" );

			$("#girar").css("display","inline-block");
			//$("#girar").css("left",(tamano*130)-2+"px");
			$("#seleccionar").css("display","inline-block");
			//$("#seleccionar").css("left",(tamano*130)-2+"px");
			$("#eliminar").css("display","inline-block");
			//$("#eliminar").css("left",(tamano*130)-2+"px");

			if(tamgran>tammin){

				$("#girar").css("left",(((tamgran-tammin)/2)+(tamano*130)-2)+"px");
				$("#seleccionar").css("left",(((tamgran-tammin)/2)+(tamano*130)-2)+"px");
				$("#eliminar").css("left",(((tamgran-tammin)/2)+(tamano*130)-2)+"px");
			}else{
				$("#girar").css("left",(tamano*130)-2+"px");
				$("#seleccionar").css("left",(tamano*130)-2+"px");
				$("#eliminar").css("left",(tamano*130)-2+"px");
			}

			/////////////////////////////////////
		}
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// BANEAR /////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function banear(item){
		$("#seleccionar").css("display","none");
		$("#eliminar").css("display","none");
		let campeon = document.querySelector(".activo");
		
		$(campeon).removeClass("activo");
		$(campeon).removeClass("champ");

		$(campeon).removeClass("Flank");
		$(campeon).removeClass("Frontline");
		$(campeon).removeClass("Damage");
		$(campeon).removeClass("Support");

		$(campeon).addClass( "baneado" );
		$(campeon).appendTo('#Baneos');
		Updatecountchamp();
		Updatewidth();

	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// PICKEAR ////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function pickear(item){
		$("#seleccionar").css("display","none");
		$("#eliminar").css("display","none");
		let campeon = document.querySelector(".activo");
		
		$(campeon).removeClass("activo");
		$(campeon).removeClass("champ");

		$(campeon).removeClass("Flank");
		$(campeon).removeClass("Frontline");
		$(campeon).removeClass("Damage");
		$(campeon).removeClass("Support");

		$(campeon).addClass( "picked" );
		$(campeon).appendTo('#pickeos');
		Updatecountchamp();
		Updatewidth();
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// FILTAR ROL /////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function Filtrarrol(item){
		let rol = $(item).attr("id");

		if($(item).is(':checked') ){
			$('#'+rol+'on').attr("display","inherit");
			$('#'+rol+'off').attr("display","none");
		}else{
			$('#'+rol+'on').attr("display","none");
			$('#'+rol+'off').attr("display","inherit");
		}
		if($(item).is(':checked') ){
			$("."+rol).each(function(){
				$(this).addClass("champ");
        	    $(this).appendTo('#slider1');        	    
        	});
        	Ordenar(false);
		}else{
			$("."+rol).each(function(){
				if($(this).hasClass("activo")){
        	    	$("#seleccionar").css("display","none");
					$("#eliminar").css("display","none");
        	    }
			 	$(this).removeClass("activo");
				$(this).removeClass("champ");
        	    $(this).appendTo('#banco'); 
        	});
		}
		Updatecountchamp();
		Updatewidth();
	}
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	// ORDENAR ////////////////////////////////////////////////////////////////////////////////////////////////////////////
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	function alternarOrden(item){
		$("#seleccionar").css("display","none");
		$("#eliminar").css("display","none");
		if($(item).is(':checked')==false){
			$('#Ordenon').attr("display","inherit");
			$('#Ordenoff').attr("display","none");
			inicial = parseInt($(document.querySelectorAll(".champ")[0]).attr("orden"));
			Ordenar(true);
		}else{
			$('#Ordenon').attr("display","none");
			$('#Ordenoff').attr("display","inherit");
			Ordenar(false);
		}
		Updatecountchamp();
	}	
	function Ordenar(azar){
		//let inicial = parseInt($(primero).attr("orden"));
		//alert(inicial);
		if(azar){
			const valores = [];

			var newcolect = document.getElementsByClassName("champ");
			
			for(i=0;i<newcolect.length;i++){
				$(newcolect[i]).removeClass("activo");
				valores.push($(newcolect[i]).attr('orden'));
				//console.log($(newcolect[i]).attr('orden'));
			}
			console.log(valores);

			valores.sort(function() { return Math.random() - 0.5 });
			console.log(valores);

			for(i=0;i<valores.length;i++){
				//valores.push($(newcolect[i]).attr('orden'));
				$(".champ[orden='"+valores[i]+"']").appendTo('#slider1');
			}
					/*
		    newcolect.forEach(function(){
		        $(this).appendTo('#slider1');
		    });
					*/
		}else{
			for (var i = 1; i <= TotalCampeonesnum; i++){
				$(".champ[orden='"+inicial+"']").appendTo('#slider1');
				if(inicial>=TotalCampeonesnum)
					inicial=1;
				else
					inicial++;
			}
		}
		
	}
</script>
</html>