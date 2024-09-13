<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shikuso Entertaiment</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="ini()" style="background-color: #142743;">
<!-- End Menu -->
<div style="max-width: 100%;">
	<style type="text/css">
		h1 {
		    font-size: 55px;
		    font-family: arial;
		    color: #39f;
		    margin-top: 15px;
		}
		*{
			color: white;
		}
		hr, .hrcolor {
		   height: 1px;
		   border: 0;
		   /*color: #5C84D8;*/
		   background-color: #5C84D8 !important;
		   margin: 10px 0px 10px 0px;
		}
		input,textarea,select,option{
			color: black !important;
		}
	</style>
	<center>
		<h1 style="margin-bottom: 5px !important;">Generador de ToolTips</h1>
		<span class="divnotas" style="color: #1861E6FF;font-family: arial;font-size: 22px;">
			By: Shikuso - [10 de noviembre 2019]
		</span>		
		<br><br>
		<script type="text/javascript">
			var controlador=false;
			/////Valores iniciales controladores//
			var habcount= 4;
///////////////////////////////////////////////////////////////////////////////
/////////////////LEER//////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
			function editH(){

				var CODEWC3="";
				var texto="<br>";
				
				//Rango
				texto=texto+"<span style='color: #E490F5'>Rango: </span>"+document.getElementById("ran").value+"<br>";
				CODEWC3=CODEWC3+"|n|cffE490F5Rango: |r"+document.getElementById("ran").value;
				//Rango
				if (document.getElementById("atr").value!="Ninguno") {
					texto=texto+"<span style='color: #E490F5'>Atributo: </span><span style='color: #";
					CODEWC3=CODEWC3+"|n|cffE490F5Atributo: |r|cff";
					if (document.getElementById("atr").value=="Fuerza") {
						texto=texto+"F75766";
						CODEWC3=CODEWC3+"F75766";
					}else if(document.getElementById("atr").value=="Agilidad") {
						texto=texto+"15AF02";
						CODEWC3=CODEWC3+"15AF02";
					}else if(document.getElementById("atr").value=="Inteligencia") {
						texto=texto+"1F70FF";
						CODEWC3=CODEWC3+"1F70FF";
					}
					
					texto=texto+"'> "+document.getElementById("atr").value+"</span><br>";
					CODEWC3=CODEWC3+document.getElementById("atr").value+"|r";
				}
				//Rango
				if (document.getElementById("clas").value!="Ninguno") {
					texto=texto+"<span style='color: #E490F5'>Clase: </span>"+document.getElementById("clas").value+"<br>";
					CODEWC3=CODEWC3+"|n|cffE490F5Clase: |r"+document.getElementById("clas").value;
				}
				//Habilidades
				if (document.getElementById("nombre1").value!=""){
					texto=texto+"<br>";
					CODEWC3=CODEWC3+"|n";
				}

				for (var i = 1; i <=habcount ; i++) {
					var habname="nombre"+i;
					var habdeta="detalle"+i;
					if (document.getElementById(habname).value!="") {
						//obtener nombre
						texto=texto+"<br><span style='color: #FFF000;'>"+document.getElementById(habname).value+": </span>";
						CODEWC3=CODEWC3+"|n|cFFFFF000"+document.getElementById(habname).value+": |r";	
						//obtener detalle
						texto=texto+"<span style='color: #fffff'>"+document.getElementById(habdeta).value+".</span>";
						var var2=document.getElementById(habdeta).value.replace(/[^\x20-\x7E]/gmi," ");
						CODEWC3=CODEWC3+""+var2+".";

					}				
				}
				//DESCRIPCION
				if (document.getElementById("Descripcion").value!="") {
					texto=texto+"<br><br><span style='color: #4AADE5'>"+document.getElementById("Descripcion").value+"</span><br>";
					var var2=document.getElementById("Descripcion").value.replace(/[^\x20-\x7E]/gmi," ");
					CODEWC3=CODEWC3+"|n|n|cFF4AADE5"+var2+"|r|n";
				}
				///////////////////////////////

				document.getElementById("out").innerHTML=texto;
				document.getElementById("wc3code").value=CODEWC3;
				///////////////////////////////////
				var a = document.getElementById("wc3code");
				a.style.height = 'auto';
				a.style.height =a.scrollHeight+'px';
				///////////////////////////////////
			}
			function ini(){
				if (controlador==false) {
					setInterval("editH()",100);
					controlador=true;
				}

			}
			function sinob(){
				var d=document.getElementById("hab").value;
				if(d=="Sin-objetivo"){
					document.getElementById("obj").style.display="none";
				}else{
					document.getElementById("obj").style.display="block";
				}
				//alert(d);
			}
			
		</script>
		<div style="font-family: arial;">
			<center>
				<div style="font-size: 25px;">
					<a href="TooltipGenerador-Habilidades.html" style="text-decoration: none;color: #9A9C9E;"  >Habilidades</a> | 
					<a href="TooltipGenerador-Objetos.html" style="text-decoration: none;color: #9A9C9E;" >Objetos</a> | 
					<a href="TooltipGenerador-Unidades.html" style="text-decoration: none;color: #09f;"  >Unidad</a>
				</div>
			</center>
			<br>
			<center>
				<div id="skills" dfhidden style="overflow: hidden;max-width: 1100px;width: 90%;min-width: 360px;">
					<div style="float: left;width: 100%;border-right: 1px solid black;padding: 15px;max-width: 499px;">
						<table style="width: 100%;" id="TABLA">
							<tr>
								<td style="padding-bottom: 5px;">Rango:</td>
								<td style="padding-bottom: 5px;">
									<select onchange="sinob()" id="ran">
										<option value="Cuerpo a cuerpo">Cuerpo a cuerpo</option>
										<option value="A Distancia">A Distancia</option>
									</select>
								</td>
							</tr>
							<tr >
								<td style="padding-bottom: 5px;">Atributo:</td>
								<td style="padding-bottom: 5px;">
									<select onchange="sinob()" id="atr">
										<option value="Ninguno">Ninguno</option>
										<option value="Fuerza">Fuerza</option>
										<option value="Agilidad">Agilidad</option>
										<option value="Inteligencia">Inteligencia</option>
									</select>
								</td>
							</tr>
							<tr >
								<td style="padding-bottom: 5px;">Clase:</td>
								<td style="padding-bottom: 5px;">
									<select onchange="sinob()" id="clas">
										<option value="Ninguno">Ninguno</option>
										<option value="Tank">Tank</option>
										<option value="Support">Support</option>
										<option value="Damage">Damage</option>
										<option value="Deserter">Deserter</option>
									</select>
								</td>
							</tr>
														
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Habilidad 1:</td>
								<td style="width: 65%;">
									<table style="width: 100%;">
										<tr>
											<tr>
												<td>Nombre:</td>
												<td><input type="text" id="nombre1" style="margin-bottom: 5px;margin-top: 3px; width: 99%;" title="Atributo"></td>
											</tr>
											<tr>
												<td>Detalles:</td>
												<td style="width: 100%;"><textarea type="text" id="detalle1"  style="width: 99%;height: 40px;resize: none;"></textarea></td>
											</tr>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Habilidad 2:</td>
								<td style="width: 65%;">
									<table style="width: 100%;">
										<tr>
											<tr>
												<td>Nombre:</td>
												<td><input type="text" id="nombre2" style="margin-bottom: 5px;margin-top: 3px; width: 99%;" title="Atributo"></td>
											</tr>
											<tr>
												<td>Detalles:</td>
												<td style="width: 100%;"><textarea type="text" id="detalle2"  style="width: 99%;height: 40px;resize: none;"></textarea></td>
											</tr>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Habilidad 3:</td>
								<td style="width: 65%;">
									<table style="width: 100%;">
										<tr>
											<tr>
												<td>Nombre:</td>
												<td><input type="text" id="nombre3" style="margin-bottom: 5px;margin-top: 3px; width: 99%;" title="Atributo"></td>
											</tr>
											<tr>
												<td>Detalles:</td>
												<td style="width: 100%;"><textarea type="text" id="detalle3"  style="width: 99%;height: 40px;resize: none;"></textarea></td>
											</tr>
										</tr>
									</table>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Habilidad 4:</td>
								<td style="width: 65%;">
									<table style="width: 100%;">
										<tr>
											<tr>
												<td>Nombre:</td>
												<td><input type="text" id="nombre4" style="margin-bottom: 5px;margin-top: 3px; width: 99%;" title="Atributo"></td>
											</tr>
											<tr>
												<td>Detalles:</td>
												<td style="width: 100%;"><textarea type="text" id="detalle4"  style="width: 99%;height: 40px;resize: none;"></textarea></td>
											</tr>
										</tr>
									</table>
								</td>
							</tr>	
							<tr>
								<td colspan="2">
								<center>
									<input type="submit" style="width: 100%;margin-top: 5px;margin-bottom: 5px; padding: 2px;" title="Añadir nivel" value="Mas Habilidades" onclick="Maslvl(2)">
								</center>
								</td>
							</tr>						
							
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Descripcion:</td>
								<td style="width: 68%;">
									<textarea type="text" id="Descripcion"  style="width: 98%;height: 66px;resize: none;"></textarea>
								</td>
							</tr>		
						</table>				
					</div>					
					<div style="width: 100%;float: left;padding: 15px;max-width: 499px;">
						<div style="border: 1px solid black;border-radius: 6px;">
							<div id="out" *contenteditable="true" style="background-color: #515B8F;border-radius: 6px;border: 3px solid #FECA2E;max-width: 500px;min-width: 300px;text-align: left;padding: 5px;padding-left: 7px;color: white;cursor: url('../../Imagenes/cursorwc.png'),default;">
							</div>
							<textarea id="wc3code" hidden style="border-radius: 6px;border: 3px solid #FECA2E;min-width: 300px;padding: 5px;padding-left: 7px;width: 100%;resize: none;min-height: 70px;overflow: hidden;" sdisabled></textarea>
						</div>
						<br>
						<script type="text/javascript">
							function botones(fun){
								if (fun=="wc3") {
									document.getElementById('btnw').style.display='none';
									document.getElementById('btnh').style.display='block';
									document.getElementById('wc3code').style.display='block';
									document.getElementById('out').style.display='none';
								}else if (fun=="html") {
									document.getElementById('btnw').style.display='block';
									document.getElementById('btnh').style.display='none';
									document.getElementById('wc3code').style.display='none';
									document.getElementById('out').style.display='block';
								}

							}
						</script>
						<center>
							<div class="botonwc3" id="btnw"><div><input type="submit"  value="Mostrar cadena Wc3" style="padding: 5px;" onclick="botones('wc3')"></div></div>
							<div class="botonwc3" id="btnh" hidden><div><input type="submit" value="Mostrar Vista previa html" style="padding: 5px;"  onclick="botones('html')"></div></div>
						</center>
					</div>
				</div>
			</center>
			<br><br><hr>
			<style type="text/css">
				.botonwc3{
					border:1px solid #B58D17;
					border-radius: 6px;
					width: 260px;
				}
				.botonwc3 div{
					border: 3px solid #FECA2E;
					border-top: 3px solid #FFE082;
					border-radius: 6px;
					background-color: #223160;
					padding: 2px;
				}
				.botonwc3 input{
					background-color: #223160;
					color: #FECA2E !important;
					width: 100%;
					border-top: 2px solid white;
					border-left: 2px solid white;
					border-right: 2px solid white;
					border-bottom: 2px solid black;
					font-family: arial;
					font-size: 17px;
					cursor: url('../../Imagenes/pointerwc.png'),pointer;
				}
				.ir-arriba{
					cursor: url('../../Imagenes/vuelo.png'),pointer !important;
				}
			</style>
			



			
		</div>		
		<br><br>	
	</center>
</div>
<!-- Pie -->
<center>
	<span style="font-family: arial;font-size: 19px;">Esta version de la aplicacion puede estar dispuesta a dar fallos minimos</span>	<br>
	<span style="font-family: arial;font-size: 19px;">Obten la ultima version o utiliza la aplicacion online <a href="http://shikusoentertaiment.atwebpages.com/Warcraft/Tooltips/skill" target="_blank">Aqui</a>.</span><br><br>
	<span style="font-family: arial;font-size: 19px;">Tooltips Generador @ <a href="http://shikusoentertaiment.atwebpages.com" target="_blank">Shikuso Entertaiment</a> - 2019</span>

</center>
<br><br>


<!-- FIN Pie -->
</body>
</html>
