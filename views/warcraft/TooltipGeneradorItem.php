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
<body onload="ini()" style="">
<?php
	include('menu.php');
?>
<!-- End Menu -->
<div style="max-width: 100%;padding-top: 110px;">
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
		<h1>Generador de ToolTips</h1>
		<div class="divnotas" style="color: #1861E6FF;font-family: arial;">
			Ultima Edicion: 10 de noviembre 2019
		</div>		
		<br>
		<script type="text/javascript">
			var controlador=false;
			/////Valores iniciales controladores//
			var atrcount= 2;
			var lvlcount=4;	
///////////////////////////////////////////////////////////////////////////////
/////////////////LEER//////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
			function editH(){

				var CODEWC3="";
				var texto="<br>";
				
				//ATRIBUTOS				
				for (var i = 1; i <=atrcount ; i++) {
					var atrname="nombre"+i;
					var valorini=false;
					if (document.getElementById(atrname).value!="") {
						
						for (var x = 1; x<=lvlcount; x++) {
							var LvlValor="val"+i+"n"+x;							
							if (document.getElementById(LvlValor).value!="") {
								var genlvlcheck="ckmn"+x+"";
								if (valorini==false) {									
									//alert(genlvlcheck);
									if (document.getElementById(genlvlcheck).checked==true){
										texto=texto+"<span style='color: #02FF81;'>"+document.getElementById(LvlValor).value+"</span>";
										CODEWC3=CODEWC3+"|cFF02FF81"+document.getElementById(LvlValor).value+"|r";								
									}else{
										texto=texto+"+"+document.getElementById(LvlValor).value;
										CODEWC3=CODEWC3+"+"+document.getElementById(LvlValor).value;
									}	
									valorini=true;
								}else{
									if (document.getElementById(genlvlcheck).checked==true){
										texto=texto+" / <span style='color: #02FF81;'>"+document.getElementById(LvlValor).value+"</span>";
										CODEWC3=CODEWC3+" / |cFF02FF81"+document.getElementById(LvlValor).value+"|r";
									}else{
										texto=texto+" / "+document.getElementById(LvlValor).value;
										CODEWC3=CODEWC3+" / "+document.getElementById(LvlValor).value;
									}	
									//texto=texto+" / "+document.getElementById(LvlValor).value;
									
								}

							}
						}
						///
						texto=texto+" <span style='color: #73C9FD;'>"+document.getElementById(atrname).value+".</span><br>";				
						CODEWC3=CODEWC3+" |cFF73C9FD"+document.getElementById(atrname).value+".|r|n";
						////
					}					
				}
				/*
				texto=texto+"<br>";
				CODEWC3=CODEWC3+"|n";
				*/
				
				var salto=true;
				//COOLDOWN
				var cdini1=false;
				var cdini2=false;
				for (var i = 1; i<=lvlcount; i++) {
					var cooln="cd"+i;
					if (document.getElementById(cooln).value!="") {
						salto=false;
						if(cdini1==false){
							texto=texto+"<br>CD: ";
							CODEWC3=CODEWC3+"|nCD: ";
							cdini1=true;
						}
						if (cdini2==false) {
							texto=texto+document.getElementById(cooln).value;
							CODEWC3=CODEWC3+document.getElementById(cooln).value;
							cdini2=true;
						}else{
							texto=texto+" / "+document.getElementById(cooln).value;
							CODEWC3=CODEWC3+" / "+document.getElementById(cooln).value;
						}
					}
					
				}
				//MANA
				var manalleno=false;
				for (var i = 1; i<=lvlcount; i++) {
					var Mananu="mana"+i;
					if (document.getElementById(Mananu).value!="") {
						manalleno=true;
					}
				}
				if(!manalleno){
						texto=texto+"<br>";
						CODEWC3=CODEWC3+"|n";				
				}
								
				if (salto) {
						texto=texto+"<br>";
						CODEWC3=CODEWC3+"|n";	
				}else{
					texto=texto+"&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
					CODEWC3=CODEWC3+"       ";
				}
				
				var manaini1=false;
				var manaini2=false;
				for (var i = 1; i<=lvlcount; i++) {
					var Manan="mana"+i;
					if (document.getElementById(Manan).value!="") {
						if(manaini1==false){
							texto=texto+"<span style='color: #0296C8'>MC:</span> ";
							CODEWC3=CODEWC3+"|cFF0296C8MC:|r ";
							manaini1=true;
						}
						if (manaini2==false) {
							texto=texto+document.getElementById(Manan).value;
							CODEWC3=CODEWC3+document.getElementById(Manan).value;
							manaini2=true;
						}else{
							texto=texto+" / "+document.getElementById(Manan).value;
							CODEWC3=CODEWC3+" / "+document.getElementById(Manan).value;
						}

					}
				}

				if(manalleno){
						texto=texto+"<br>";
						CODEWC3=CODEWC3+"|n";				
				}
				//Activa
				if (document.getElementById("Activa").value!="") {
					texto=texto+"<br><span style='color: #62D147'>Activa:</span> "+document.getElementById("Activa").value+"<br>";
					var var2=document.getElementById("Activa").value.replace(/[^\x20-\x7E]/gmi," ");
					CODEWC3=CODEWC3+"|n|cFF62D147Activa: |r"+var2+"|n";
				}
				//Pasiva
				if (document.getElementById("Pasiva").value!="") {
					texto=texto+"<br><span style='color: #62D147'>Pasiva:</span> "+document.getElementById("Pasiva").value+"<br>";
					var var2=document.getElementById("Pasiva").value.replace(/[^\x20-\x7E]/gmi," ");
					CODEWC3=CODEWC3+"|n|cFF62D147Activa: |r"+var2+"|n";
				}
				//DESCRIPCION
				if (document.getElementById("Descripcion").value!="") {
					texto=texto+"<br><span style='color: #E786F2'>"+document.getElementById("Descripcion").value+"</span><br>";
					var var2=document.getElementById("Descripcion").value.replace(/[^\x20-\x7E]/gmi," ");
					CODEWC3=CODEWC3+"|n|cFFE786F2"+var2+"|r|n";
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
					<a href="skill" style="text-decoration: none;color: #9A9C9E;">Habilidades</a> | 
					<a href="item" style="text-decoration: none;color: #09f;"  >Objetos</a> | 
					<a href="unit" style="text-decoration: none;color: #9A9C9E;"  >Unidad</a>
				</div>
			</center>
			<br>
			<center>
				<div id="skills" dfhidden style="overflow: hidden;max-width: 1000px;width: 65%;min-width: 360px;">
					<div style="float: left;width: 100%;border-right: 1px solid black;padding: 15px;max-width: 499px;">
						<table style="width: 100%;" id="TABLA">
														
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Atributos 1:</td>
								<td style="width: 65%;">
									<input type="text" id="nombre1" style="margin-bottom: 5px;margin-top: 3px; width: 98%;" title="Atributo">
									<br>
									<div style="overflow: hidden;">
										<div style="float: left;padding: 4px;">
											N1: <input type="text" style="width: 40px;" id="val1n1" title="Valor nivel 1">
										</div>
										<div style="float: left;padding: 4px;">
											N2: <input type="text" style="width: 40px;" id="val1n2" title="Valor nivel 2">
										</div>
										<div style="float: left;padding: 4px;">
											N3: <input type="text" style="width: 40px;" id="val1n3" title="Valor nivel 3">
										</div>
										<div style="float: left;padding: 4px;">
											N4: <input type="text" style="width: 40px;" id="val1n4" title="Valor nivel 4">
										</div>
									</div>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Atributos 2:</td>
								<td style="width: 65%;">
									<input type="text" id="nombre2" style="margin-bottom: 5px;margin-top: 3px; width: 98%;" title="Atributo">
									<br>
									<div style="overflow: hidden;">
										<div style="float: left;padding: 4px;">
											N1: <input type="text" style="width: 40px;" id="val2n1" title="Valor nivel 1">
										</div>
										<div style="float: left;padding: 4px;">
											N2: <input type="text" style="width: 40px;" id="val2n2" title="Valor nivel 2">
										</div>
										<div style="float: left;padding: 4px;">
											N3: <input type="text" style="width: 40px;" id="val2n3" title="Valor nivel 3">
										</div>
										<div style="float: left;padding: 4px;">
											N4: <input type="text" style="width: 40px;" id="val2n4" title="Valor nivel 4">
										</div>
									</div>
								</td>
							</tr>	
							<tr>
								<td colspan="2">
								<center>
									<input type="submit" style="width: 100%;margin-top: 5px;margin-bottom: 5px; padding: 2px;" title="Añadir nivel" value="Mas Atributos" onclick="Maslvl(2)">
								</center>
								</td>
							</tr>
							<tr>
								<td>Cooldown:</td>
								<td id="TDCD">
									<div style="float: left;padding: 4px;">
										N1: <input type="text" style="width: 30px;" id="cd1" title="Cooldown nivel 1">
									</div>
									<div style="float: left;padding: 4px;">
										N2: <input type="text" style="width: 30px;" id="cd2" title="Cooldown nivel 2">
									</div>
									<div style="float: left;padding: 4px;">
										N3: <input type="text" style="width: 30px;" id="cd3" title="Cooldown nivel 3">
									</div>
									<div style="float: left;padding: 4px;">
										N4: <input type="text" style="width: 30px;" id="cd4" title="Cooldown nivel 4">
									</div>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr>
								<td>Costo de mana:</td>
								<td id="TDMANA">
									<div style="float: left;padding: 4px;">
										N1: <input type="text" style="width: 30px;" id="mana1" title="Mana nivel 1">
									</div>
									<div style="float: left;padding: 4px;">
										N2: <input type="text" style="width: 30px;" id="mana2" title="Mana nivel 2">
									</div>
									<div style="float: left;padding: 4px;">
										N3: <input type="text" style="width: 30px;" id="mana3" title="Mana nivel 3">
									</div>
									<div style="float: left;padding: 4px;">
										N4: <input type="text" style="width: 30px;" id="mana4" title="Mana nivel 4">
									</div>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<!--///////////////-->
							<tr style="width: 100%;">
								<td>Activa:</td>
								<td style="width: 68%;">
									<textarea type="text" id="Activa"  style="width: 98%;height: 66px;resize: none;"></textarea>
								</td>
							</tr>
							<tr style="width: 100%;">
								<td>Pasiva:</td>
								<td style="width: 68%;">
									<textarea type="text" id="Pasiva"  style="width: 98%;height: 66px;resize: none;"></textarea>
								</td>
							</tr>
							<!--///////////////-->
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Descripcion:</td>
								<td style="width: 68%;">
									<textarea type="text" id="Descripcion"  style="width: 98%;height: 66px;resize: none;"></textarea>
								</td>
							</tr>
							<!--///////////////-->
							<tr><td colspan="2"><hr></td></tr>
							<tr style="background-color: #24416b;" >
								<td style="padding-top: 15px;padding-bottom: 15px;">Nivel activo:</td>
								<td style="padding-top: 15px;padding-bottom: 15px;" id="niveles">
									<div style="float: left;padding: 4px;">
										N1: <input type="radio" id="ckmn1" title="Resalta el nivel 1" name="l">
									</div>
									<div style="float: left;padding: 4px;">
										N2: <input type="radio" id="ckmn2" title="Resalta el nivel 2" name="l">
									</div>
									<div style="float: left;padding: 4px;">
										N3: <input type="radio" id="ckmn3" title="Resalta el nivel 3" name="l">
									</div>
									<div style="float: left;padding: 4px;">
										N4: <input type="radio" id="ckmn4" title="Resalta el nivel 4" name="l">
									</div>
									<div style="float: left;padding: 4px;">
										<input type="submit" style="width: 20px;" title="Añadir nivel" value="+" onclick="Maslvl()">
									</div>
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
							<div class="botonwc3" id="btnw"><div><input type="submit"  value="Mostrar cadena Wc3" style="padding: 5px;cursor: url('../../Imagenes/pointerwc.png'),pointer;" onclick="botones('wc3')"></div></div>
							<div class="botonwc3" id="btnh" hidden><div><input type="submit" value="Mostrar Vista previa html" style="padding: 5px;cursor: url('../../Imagenes/pointerwc.png'),pointer;"  onclick="botones('html')"></div></div>
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
				}
				.ir-arriba{
					cursor: url('../../Imagenes/vuelo.png'),pointer !important;
				}
			</style>
			



			
		</div>
		<br>
		<span style="font-family: arial;font-size: 20px;">Descargar <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Objetos" download="TooltipGenerador-Objetos.html">TooltipGenerador-Objetos v0.7</a> offline <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Objetos" download="TooltipGenerador-Objetos.html">aqui</a>.</span>
	</center>
	<br><br>	
</div>
<!-- Pie -->
<?php 
	require_once('pie.php');
?>
<!-- FIN Pie -->
</body>
</html>

