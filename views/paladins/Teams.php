<!DOCTYPE html>
<html>
<head>
	<title>Team Random</title>
	<?php
		include('Templates.php'); 
		getMetas(); 
		getScripts();
	?>	
</head>
<body style="">
<?php 
	Menu($user_language); 	
?>
<center style="max-width: 100%;min-height: calc(100vh - 282px);">	
	<div class="cuerpoentero" style=" background-color: rgba(26,45,59,0.8);color: #ffffff;padding-top: 15px;padding-bottom: 15px;border-radius: 4px;position: relative;margin: 15px 0px;">
		<div class="input-group mb-3" style="max-width: 170px;display: inline-flex;">
			<div class="input-group-prepend">
				<label class="input-group-text" for="equiposize" style="background: transparent linear-gradient(180deg,#195766,#123e48) 0% 0% no-repeat padding-box;color: white;border: 1px solid #00ffff;"><?php if($user_language=="ES") echo "Equipo"; else echo "Team"; ?></label>
		  	</div>
		  	<select class="custom-select" id="equiposize" style="border: 1px solid #00ffff;border-left: 0px;">
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5" selected>5</option>
		  	</select>
		</div>
        <div class="input-group " style="max-width: 170px;display: inline-flex;margin-bottom: 9px !important;width: auto;">
			<div class="input-group-prepend">
				<label class="input-group-text"  for="ar" style="background: transparent linear-gradient(180deg,#195766,#123e48) 0% 0% no-repeat padding-box;color: white;border: 1px solid #00ffff;">AR</label>
			</div>
			<div class="input-group-prepend" for="ar">
				<div class="input-group-text" style="border: 1px solid #00ffff;border-left: 0px;border-bottom-right-radius: 0.25rem;border-top-right-radius: 0.25rem;">
				    <input id="ar" type="checkbox" aria-label="Checkbox for following text input">
				</div>
			</div>
		</div>  
		<div class="input-group mb-3" style="max-width: 170px;display: inline-flex;">
			<div class="input-group-prepend">
				<label class="input-group-text" for="damage"><?php if($user_language=="ES") echo "Daño"; else echo "Damage"; ?></label>
		  	</div>
		  	<select class="custom-select" id="damage">
			    <option value="0" >0</option>
			    <option value="1" selected>1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
		  	</select>
		</div>
		<div class="input-group mb-3" style="max-width: 170px;display: inline-flex;">
			<div class="input-group-prepend">
				<label class="input-group-text" for="frontline"><?php if($user_language=="ES") echo "Primera linea"; else echo "Frontline"; ?></label>
		  	</div>
		  	<select class="custom-select" id="frontline">
			    <option value="0" >0</option>
			    <option value="1" >1</option>
			    <option value="2" selected>2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
		  	</select>
		</div>
		<div class="input-group mb-3" style="max-width: 170px;display: inline-flex;">
			<div class="input-group-prepend">
				<label class="input-group-text" for="flank"><?php if($user_language=="ES") echo "Flanco"; else echo "Flank"; ?></label>
		  	</div>
		  	<select class="custom-select" id="flank">
			    <option value="0" >0</option>
			    <option value="1" selected>1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
		  	</select>
		</div>
		<div class="input-group mb-3" style="max-width: 170px;display: inline-flex;">
			<div class="input-group-prepend">
				<label class="input-group-text" for="support"><?php if($user_language=="ES") echo "Soporte"; else echo "Support"; ?></label>
		  	</div>
		  	<select class="custom-select" id="support">
			    <option value="0" >0</option>
			    <option value="1" selected>1</option>
			    <option value="2">2</option>
			    <option value="3">3</option>
			    <option value="4">4</option>
			    <option value="5">5</option>
		  	</select>
		</div>
			<svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16" style="margin-left: 5px;cursor: pointer;" data-toggle="modal" data-target="#ModalInfo">
				<path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
			</svg>
		
		<hr style="margin-top: 0px;max-width: 90%;">
		<a class="new-trade" onclick="Team()" style="text-decoration: none;margin-bottom: 12px;" ><?php if($user_language=="ES") echo "VOLVER A ELEGIR"; else echo "RE-PICK"; ?></a>
		<div id="equipo">

			<!--//////////////////////////////////// GENERADO //////////////////////////////////////// -->
			<?php 
				$identificador=1;
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

				while ($campeon = current($campeones))  { ?>

					<span id="camp<?php echo $identificador; ?>" class="champ <?php echo explode("@", $campeon)[1]; ?> desactive" rol="<?php echo explode("@", $campeon)[1]; ?>" img="<?php echo explode("@", $campeon)[0]; ?>">
						<img src="<?php echo explode("@", $campeon)[0]; ?>">
						<center>
							<a class="a-btn" onclick="Cambiar(this)" rol="<?php echo explode("@", $campeon)[1]; ?>" posi="0" ident="camp<?php echo $identificador; ?>"><?php if($user_language=="ES") echo "CAMBIAR"; else echo "CHANGE"; ?></a>
						</center>
						<label><?php echo key($campeones); ?></label>
					</span>
				<?php $identificador++; next($campeones);}

			?>
			<style type="text/css">
				.champ.desactive{
					display: none;
				}
				.champ.active{
					display: inline-block;
				}				
			</style>


			
		</div>
		<hr style="margin: 15px 0px;max-width: 90%;">
		<div class="novedadesclass" style="">
			<h4 style="width: 100%;text-align: left;background: linear-gradient(to right, rgba(23,149,197, 0.5), rgba(0,0,0,0));padding: 2px 5px;"><?php if($user_language=="ES") echo "Novedades"; else echo "What's new?"; ?></h4>
                        <span style="color: #21f3e9;">[ <?php echo date("j");?> <?php echo date("M");?> <?php echo date("Y");?> ]</span>
			<br>
            <span>- <?php if($user_language=="ES") echo "Agregado los últimos campeones que llegaron al reino"; else echo "Added the last champions to come to the kingdom"; ?>.</span>
			<br>
			<span style="color: #21f3e9;">[ 5 Sep 2022 ]</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Se cambio el método de seleccionar los campeones para mejorar la carga de imágenes"; else echo "Changed the method of selecting champions to improve image loading"; ?>.</span>
			<br>
			<span style="color: #21f3e9;">[ 13 May 2022 ]</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Se ajusto la herramienta, ahora no es necesario completar el numero del equipo"; else echo "The tool was adjusted, now it is not necessary to fill in the team number"; ?>.</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Se agrego una vista a las descripciones de las opciones y otros botones"; else echo "Added a view to the descriptions of the options and other buttons"; ?>.</span>
			<br>
			<span style="color: #21f3e9;">[ 6 Oct 2021 ]</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Añadida opción para controlar el tamaño del equipo"; else echo "Added option to control team size"; ?>.</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Se mejoro el diseño para un mejor manejo en dispositivos móviles"; else echo "The design was improved for better handling on mobile devices"; ?>.</span>
			<br>
			<span>- <?php if($user_language=="ES") echo "Mejorada alertas en algunas excepciones controladas"; else echo "Improved alerts on some handled exceptions"; ?>.</span>
			<br>

		</div>
		<br>
	</div>

	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
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
							<span style="">RANDOM TEAM</span>
							
	      				</a>
	      				<a target="_blank" class="logosp" href="../../Paladins/Roulette" >
	      					<img style="width: 100%;" src="https://webcdn.hirezstudios.com/web/bounty/paladins_logo.png">
							<br>
							<span style="">ROULETTE</span>
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
									<span style="color: #21f3e9;">[ 5 Sep 2022 ]</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se cambio el método de seleccionar los campeones para mejorar la carga de imágenes"; else echo "Changed the method of selecting champions to improve image loading"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ 13 May 2022 ]</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se ajusto la herramienta, ahora no es necesario completar el numero del equipo"; else echo "The tool was adjusted, now it is not necessary to fill in the team number"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se agrego una vista a las descripciones de las opciones y otros botones"; else echo "Added a view to the descriptions of the options and other buttons"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ 6 Oct 2021 ]</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Añadida opción para controlar el tamaño del equipo"; else echo "Added option to control team size"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Se mejoro el diseño para un mejor manejo en dispositivos móviles"; else echo "The design was improved for better handling on mobile devices"; ?>.</span>
									<br>
									<span>- <?php if($user_language=="ES") echo "Mejorada alertas en algunas excepciones controladas"; else echo "Improved alerts on some handled exceptions"; ?>.</span>
									<br>
					      		</div>
					      		<div class="tab-pane fade advancedmenu" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" style="overflow-y: auto;height: 100%;padding-right:10px ;">
					      			<span><?php if($user_language=="ES") echo "Escoge el numero de jugadores en el equipo, y luego si deseas puedes configurar la composición, por defecto se usara el meta mas común de dos primera linea"; else echo "Choose the number of players in the team, and then if you wish you can configure the composition, by default the most common meta of two frontlines will be used"; ?>.</span>
					      			<br>
					      			<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "VOLVER A ELEGIR"; else echo "RE-PICK"; ?> ]</span>
									<br>
						            <span><?php if($user_language=="ES") echo "Vuelve a seleccionar un grupo de campeones al azar"; else echo "Reselect a group of random champions"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "CAMBIAR"; else echo "CHANGE"; ?> ]</span>
									<br>
									<span><?php if($user_language=="ES") echo "Cambia el campeón por otro de la misma clase al azar"; else echo "Change the champion for another of the same class randomly"; ?>.</span>
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
					      			<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "EQUIPO"; else echo "TEAM"; ?> ]</span>
						            <span><?php if($user_language=="ES") echo "Escoge el tamaño del equipo que deseas para la composición"; else echo "Choose the size of the team you want for the composition"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ AR ]</span>
									<span>All Random.</span>
									<br>
						            <span><?php if($user_language=="ES") echo "Si esta activada el equipo usara como mínimo la cantidad del role que especifiques"; else echo "If it is activated, the team will use at least the amount of the role you specify"; ?>.</span>
									<br>
									<img src="../../Imagenes/Paladins/ej1.png" style="width: 100%;">
									<br>
									<span><?php if($user_language=="ES") echo "Si esta desactivada el equipo usara como máximo la cantidad del role que especifiques"; else echo "If it is deactivated, the team will use at most the amount of the role you specify."; ?>.</span>
									<br>
									<img src="../../Imagenes/Paladins/ej2.png" style="width: 100%;">
									<br>
									<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "DAÑO"; else echo "DAMAGE"; ?> ]</span>
						            <span><?php if($user_language=="ES") echo "Ajusta la cantidad de campeones de daño en la composición"; else echo "Adjust the amount of damage champions in the composition"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "PRIMERA LINEA"; else echo "FRONTLINE"; ?> ]</span>
						            <span><?php if($user_language=="ES") echo "Ajusta la cantidad de campeones de primera linea en la composición"; else echo "Adjust the amount of frontline champions in the composition"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "FLANCO"; else echo "FLANK"; ?> ]</span>
						            <span><?php if($user_language=="ES") echo "Ajusta la cantidad de campeones de flanco en la composición"; else echo "Adjust the amount of flank champions in the composition"; ?>.</span>
									<br>
									<span style="color: #21f3e9;">[ <?php if($user_language=="ES") echo "SOPORTE"; else echo "SUPPORT"; ?> ]</span>
						            <span><?php if($user_language=="ES") echo "Ajusta la cantidad de campeones de soporte en la composición"; else echo "Adjust the amount of support champions in the composition"; ?>.</span>
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
	<script type="text/javascript">
		$(document).ready(function() {
			document.cookie = "ModalTeam1=false; max-age=0";
			<?php 
				//$_COOKIE['ModalLeido1']=false;
				if (isset($_COOKIE['ModalTeam2'])) {
					if ($_COOKIE['ModalTeam2']==false) {
						echo "$('#ModalInfo').modal('toggle');";
					}
				}else{ 
					echo "$('#ModalInfo').modal('toggle');";
				}
			?>		    
		});
		function ModalLeido(){
			document.cookie = "ModalTeam2= true; expires=True, 19 Jan 2038 04:14:07 GMT";
			$('#ModalInfo').modal('toggle');
			//console.log(document.cookie);
		}
	</script>
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->
	<!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// -->


	<style type="text/css">
		body {
		  	background-image: url('https://i.ibb.co/6b6X8CS/Fondo.png');
		  	background-repeat: no-repeat;
		  	background-attachment: fixed;  
  			background-size: cover;
		}
		select{
			font-weight: bold !important;		
		}
		.new-trade {
		    -webkit-box-align: center;
		    align-items: center;
		    background: transparent linear-gradient(180deg,#195766,#123e48) 0% 0% no-repeat padding-box;
		    border: 1px solid #0ff;
		    -webkit-box-pack: center;
		    justify-content: center;
		    padding: .3rem 0px;
		    text-align: center;
		    width: 165px;
		    cursor: pointer;
		    color: white;
		    display: inline-block;
		}
		.new-trade:hover{
			color: cyan !important;
		}
		.champ{
			max-width: 165px;
			display: inline-block;
			margin: 5px;
			border: 1px solid #21f3e9;
			border-radius: 3px;
			position: relative;
			overflow: hidden;
		}
		.champ img{
			width: 100%;
			border-radius: 3px;
		}
		.champ center{
			position: absolute;
			display: none;
			width: 100%;
			left: 0px;
			bottom: 15%;
			z-index: 2;
		}
		.champ center a{
			-webkit-box-align: center;
		    align-items: center;
		    background: transparent linear-gradient(180deg,#195766,#123e48) 0% 0% no-repeat padding-box;
		    border: 1px solid #0ff;
		    -webkit-box-pack: center;
		    justify-content: center;
		    padding: .3rem 0px;
		    text-align: center;
		    width: 80%;
		    cursor: pointer;
		    color: white;
		    display: inline-block;
		}
		.champ label{
			position: absolute;
    		left: 3px;
    		bottom: 0px;
    		margin: 0px;
    		font-size: 18px;
    		text-shadow: 0 0 3px #000, 0 0 6px #000, 0 0 9px #000, 0 0 12px #000000, 0 0 15px #000000, 0 0 18px #000000, 0 0 21px #000000, 0 0 24px #000000;
		}
		.champ:hover{
			border: 1px solid white;
		}
		.champ:hover center{
			display: inline-block;			
		}
		.a-btn{
			text-decoration: none !important;
		}
		.a-btn:hover{
			color: cyan !important;
		}
		.cuerpoentero{
			max-width: 90%;
		}
		.novedadesclass{
			text-align: left;
			width: 80%;
		}
		@media (max-width: 600px) { 
			.cuerpoentero{
				max-width: 100%;
			}
			.input-group:first-child{
				max-width: 95.5% !important;

			}
			.novedadesclass{
				width: 90%;
			}
		}
	</style>
</center>
<center id="alerta" style="display: none;position: fixed;width: 100%;z-index: 5;top: calc(100vh - 80px);">
		<div  class="alert alert-danger" role="alert" style="max-width: 95%;width: 600px;">
  		<?php if($user_language=="ES") echo 'Los equipos deben ser conformados exactamente por <a class="alert-link">cinco</a> campeones. '; else echo 'Teams must be made up of exactly <a class="alert-link">cinco</a> champions.'; ?>
	  		<button type="button" class="close cerrar-alert" >
		    	<span >&times;</span>
		  	</button>
		</div>
</center>
<?php Pie(); ?>
</body>
<script type="text/javascript">
	const numtext =[
		"",
		"<?php if($user_language=="ES") echo "uno"; else echo "one"; ?>",
		"<?php if($user_language=="ES") echo "dos"; else echo "two"; ?>",
		"<?php if($user_language=="ES") echo "tres"; else echo "three"; ?>",
		"<?php if($user_language=="ES") echo "cuatro"; else echo "four"; ?>",
		"<?php if($user_language=="ES") echo "cinco"; else echo "five"; ?>",
	];
	const AllChamp = document.getElementsByClassName("champ");	
	let Champsclone = [];
	function Team(){
		$('#alerta').fadeOut(0);
		SizeTeam=parseInt($('#equiposize').val());
		//console.log(parseInt($('#frontline').val())+parseInt($('#damage').val())+parseInt($('#flank').val())+parseInt($('#support').val()))
		
		if(parseInt($('#frontline').val())+parseInt($('#damage').val())+parseInt($('#flank').val())+parseInt($('#support').val())<=SizeTeam){
			
			Champsclone = [];
			for (var ord = 0 ; ord <= AllChamp.length-1; ord++) {				
			    Champsclone.push(""+AllChamp[ord].id+"@"+$(AllChamp[ord]).attr("rol"));
			}
			let equipo = [];
			for (let i = 1; i <= parseInt($('#frontline').val()); i++) {
				equipo.push("Frontline");
			}
			for (let i = 1; i <= parseInt($('#damage').val()); i++) {
				equipo.push("Damage");
			}
			for (let i = 1; i <= parseInt($('#flank').val()); i++) {
				equipo.push("Flank");
			}
			for (let i = 1; i <= parseInt($('#support').val()); i++) {
				equipo.push("Support");
			}

            if(equipo.length<SizeTeam){
				let equipoextra = ["Frontline","Damage","Flank","Support"];

				let restante =  parseInt(SizeTeam-equipo.length);
				while (restante > 0) {
					if($('#ar').is(':checked')){						
						equipoextra.sort(function() { return Math.random() - 0.5 });
						equipo.push(""+equipoextra[0]);
						restante--;
					}else{
						equipoextra.sort(function() { return Math.random() - 0.5 });
						if(equipoextra[0]=="Frontline" && parseInt($('#frontline').val())==0){ 
							equipo.push(""+equipoextra[0]);
							restante--;	
						}
						if(equipoextra[0]=="Damage" && parseInt($('#damage').val())==0) { 
							equipo.push(""+equipoextra[0]);
							restante--;	
						}
						if(equipoextra[0]=="Flank" && parseInt($('#flank').val())==0){  
							equipo.push(""+equipoextra[0]);
							restante--;	
						}
						if(equipoextra[0]=="Support" && parseInt($('#support').val())==0){  
							equipo.push(""+equipoextra[0]);
							restante--;	
						}
					}								  	
				}
			}           
                        
			equipo.sort(function() { return Math.random() - 0.5 });

			for (let i = 0; i <= SizeTeam-1; i++) {

				Champsclone.sort(function() { return Math.random() - 0.5 });

				let posorol= [];
				
				Champsclone.forEach( function(valor, indice, array) {
					if(valor.split("@")[1]==equipo[i])
				    	posorol.push(valor+"@"+indice);
				});

				posorol.sort(function() { return Math.random() - 0.5 });
				equipo[i]=posorol[0];
				Champsclone.splice(posorol[0].split("@")[2], 1);
			}

			for (var i = 0; i <= AllChamp.length-1; i++) {
				AllChamp[i].classList.replace("active","desactive");	
				$(AllChamp[i]).attr("posi","0");			
			}
			for (let i = 0; i <= SizeTeam-1; i++) {				
				let campselect=document.getElementById(equipo[i].split("@")[0]);
				campselect.classList.replace("desactive","active");
				let posic=i;
				$(campselect).attr("posi",posic+1);
			}

			for (let i = 1; i <= SizeTeam; i++) {				
				let el = document.querySelector(".champ.active[posi='"+i+"']");
				let conten = document.getElementById("equipo");
				conten.appendChild(el);
			}

		}else{	
			$('.alert-link').html(numtext[SizeTeam]);		
			$('#alerta').fadeIn();
		}
	}

	Team();

	function Cambiar(item){
		Champsclone.sort(function() { return Math.random() - 0.5 });
		let posorol= [];				
		
		Champsclone.forEach( function(valor, indice, array) {
			if(valor.split("@")[1]==$(item).attr("rol"))
				posorol.push(valor+"@"+indice);
		});

		posorol.sort(function() { return Math.random() - 0.5 });
			
		let campselect=document.getElementById($(item).attr("ident"));
		campselect.classList.replace("active","desactive");		

		let newchamp=document.getElementById(posorol[0].split("@")[0]);
		newchamp.classList.replace("desactive","active");

		$(newchamp).attr("posi",$(campselect).attr("posi"));
		$(campselect).attr("posi","0");

		for (let i = 1; i <= SizeTeam; i++) {				
			let el = document.querySelector(".champ.active[posi='"+i+"']");
			let conten = document.getElementById("equipo");
			conten.appendChild(el);
		}

		//console.log(posorol[0])
		Champsclone.splice(posorol[0].split("@")[2], 1);
	}
	$(".cerrar-alert").click(function(event) {
		$('#alerta').fadeOut( );
	});



</script>
</html>