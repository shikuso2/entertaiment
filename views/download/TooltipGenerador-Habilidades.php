<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shikuso Entertaiment</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body onload="ini()" style="background-color: #142743;">

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
			var atrcount= 2;
			var lvlcount=4;
			///////AGREGAR MAS/////////////////////////////////////////////
			function Maslvl(op){
				
				var NewMana="";
				var NewCD="";
				var DATODESCRIPCION=document.getElementById("in").value;
				var Atributos = [""];				
				for(var A=1;A<=atrcount;A++){
					var VALORES =[];
					var nombregenatr="nombre"+A+"";
					VALORES.push(""+document.getElementById(nombregenatr).value);
					for(var V=1;V <=lvlcount;V++ ){
						var namegenlvl="val"+A+"n"+V+"";
						console.log(namegenlvl);
						VALORES.push(""+document.getElementById(namegenlvl).value);
					}
					VALORES.push("");
					Atributos.push(VALORES);
				}
				if (op==2) {
					var extraatr=[];
					extraatr.push("");					
					for(var V=1;V <=lvlcount;V++ ){
						extraatr.push("");
					}
					Atributos.push(extraatr);
					atrcount++;
				}else{
					lvlcount++;
				}
				
				//OBTENER OPCIONES
				var codeop=document.getElementById("opciones").innerHTML;
				var Shab=document.getElementById("hab").value;
				var Sobjs=document.getElementById("objs").value;
				var Sdamage=document.getElementById("damage").value;
				//var codeniv=document.getElementById("niveles").innerHTML;
				//OBTENER NIVEL ACTIVO
				var codeniv="";
				var heckvar=0;
				for (var i = 1; i <=lvlcount-1; i++) {
					var gencheckvarname="ckmn"+i+"";
					if (document.getElementById(gencheckvarname).checked==true){
						heckvar=i;						
					}
				}
				//OBTENER COOLDOWN VALUES
				var CDvals =[""];
				for (var i = 1; i <=lvlcount-1; i++) {
					var CDvalsname="cd"+i+"";
					CDvals.push(document.getElementById(CDvalsname).value);
				}
				CDvals.push("");
				//OBTENER MANA VALUES
				var MANvals =[""];
				for (var i = 1; i <=lvlcount-1; i++) {
					var MANvalsname="mana"+i+"";
					MANvals.push(document.getElementById(MANvalsname).value);
				}
				MANvals.push("");
				/////////////
				//REESCRIBIR CODIGO

				var NewATR="<tr id='opciones'></tr><tr><td colspan='2'><hr></td></tr><tr style='width: 100%;'><td>Descripcion:</td><td style='width: 68%;'><textarea type='text' id='in'  style='width: 98%;height: 66px;resize: none;'>"+DATODESCRIPCION+"</textarea></td></tr>";
				
				for (var i = 1; i <=atrcount; i++) {
					NewATR=NewATR+"<tr><td colspan='2'><hr></td></tr><tr style='width: 100%;'><td>Atributos "+i+":</td><td style='width: 65%;'>					<input type='text' id='nombre"+i+"' style='margin-bottom: 5px;margin-top: 3px; width: 98%;' title='Atributo' value='"+Atributos[i][0]+"' ><br><div style='overflow: hidden;'>";
					//alert(Atributos[i][0]);
					for (var X = 1; X <=lvlcount; X++) {
						NewATR=NewATR+"<div style='float: left;padding: 4px;'>N"+X+": <input type='text' style='width: 40px;' id='val"+i+"n"+X+"' title='Valor nivel "+X+"' value='"+Atributos[i][X]+"'></div>";					
					}	
					NewATR=NewATR+"</div></td></tr>";				
				}
				NewATR=NewATR+"<tr><td colspan='2'><center><input type='submit' style='width: 100%;margin-top: 5px;margin-bottom: 5px; padding: 2px;'' title='Añadir un Atributo' value='Mas Atributos' onclick='Maslvl(2)'></center></td></tr><tr><td>Cooldown:</td><td id='TDCD'></td></tr><tr><td colspan='2'><hr></td></tr><tr><td>Costo de mana:</td><td id='TDMANA'></td></tr><tr><td colspan='2'><hr></td></tr><tr style='background-color: #24416b;' ><td style='padding-top: 15px;padding-bottom: 15px;'>Nivel activo:</td><td style='padding-top: 15px;padding-bottom: 15px;' id='niveles'></td></tr>";
				document.getElementById("TABLA").innerHTML=NewATR;

				//COOLDOWN
				for (var i = 1; i <=lvlcount; i++) {
					NewCD=NewCD+"<div style='float: left;padding: 4px;'>N"+i+": <input type='text' style='width: 30px;' id='cd"+i+"' title='Cooldown nivel "+i+"' value='"+CDvals[i]+"'></div>";					
				}
				//NewCD=NewCD+"<div style='float: left;padding: 4px;''><input type='submit' style='width: 20px;' title='Agregar nivel' value='+' onclick='Maslvl()'></div>";
				//MANA
				for (var i = 1; i <=lvlcount; i++) {
					NewMana=NewMana+"<div style='float: left;padding: 4px;'>N"+i+": <input type='text' style='width: 30px;' id='mana"+i+"' title='Mana nivel "+i+"' value='"+MANvals[i]+"'></div>";					
				}
				//NewMana=NewMana+"<div style='float: left;padding: 4px;''><input type='submit' style='width: 20px;' title='Agregar nivel' value='+' onclick='Maslvl()'></div>";				
				//Activ nivel
				for (var i = 1; i <=lvlcount; i++) {
					codeniv=codeniv+"<div style='float: left;padding: 4px;'>N"+i+": <input type='radio' id='ckmn"+i+"' title='Resalta el nivel "+i+"' name='l'";
					if (i==heckvar) {
						codeniv=codeniv+" checked ";
					}
					codeniv=codeniv+"></div>";					
				}
				codeniv=codeniv+"<div style='float: left;padding: 4px;'><input type='submit' style='width: 20px;' title='Añadir nivel' value='+' onclick='Maslvl()'></div>";

				
				document.getElementById("TDCD").innerHTML=NewCD;
				document.getElementById("TDMANA").innerHTML=NewMana;
				document.getElementById("opciones").innerHTML=codeop;
				document.getElementById("niveles").innerHTML=codeniv;
				//Establecer OPCIONES
				document.getElementById("hab").value=Shab;
				document.getElementById("objs").value=Sobjs;
				document.getElementById("damage").value=Sdamage;
			}
///////////////////////////////////////////////////////////////////////////////
/////////////////LEER//////////////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////
			function editH(){
				var CODEWC3="";
				var texto="<br>";
				//OPCIONES/////
				//Habilidad
				var habo=(document.getElementById("hab").value).replace("-"," ");
				texto=texto+"<span style='color: #458DDD'>Habilidad: </span>"+habo+"<br>";				
				CODEWC3=CODEWC3+"|n|cff458DDDHabilidad: |r"+habo;
				//Objetivo
				if (document.getElementById("obj").style.display!="none") {
					texto=texto+"<span style='color: #458DDD'>Objetivo: </span>"+document.getElementById("objs").value+"<br>";
					CODEWC3=CODEWC3+"|n|cff458DDDObjetivo: |r"+document.getElementById("objs").value;
				}
				//Objetivo
				if (document.getElementById("damage").value!="Ninguno") {
					
					texto=texto+"<span style='color: #458DDD'>Tipo de Daño: </span>"+document.getElementById("damage").value+"<br>";
					CODEWC3=CODEWC3+"|n|cff458DDDTipo de Daño: |r"+document.getElementById("damage").value;
				}
				//DESCRIPCION
				if (document.getElementById("in").value!="") {
					texto=texto+"<br>"+document.getElementById("in").value+"<br>";
					var var2=document.getElementById("in").value.replace(/[^\x20-\x7E]/gmi," ");
					CODEWC3=CODEWC3+"|n|n"+var2+"|n";
				}
				//ATRIBUTOS				
				for (var i = 1; i <=atrcount ; i++) {
					var atrname="nombre"+i;
					var valorini=false;
					if (document.getElementById(atrname).value!="") {
						texto=texto+"<br><span style='color: #ffcc00;'>"+document.getElementById(atrname).value+":</span> ";
						CODEWC3=CODEWC3+"|n|cffffcc00"+document.getElementById(atrname).value+": |r";
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
										texto=texto+document.getElementById(LvlValor).value;
										CODEWC3=CODEWC3+document.getElementById(LvlValor).value;
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
					}					
				}
				texto=texto+"<br>";
				CODEWC3=CODEWC3+"|n";
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
						var gencdcheck="ckmn"+i+"";
						if (cdini2==false) {
							if (document.getElementById(gencdcheck).checked==true){
								texto=texto+"<span style='color: #02FF81;'>"+document.getElementById(cooln).value+"</span>";
								CODEWC3=CODEWC3+"|cFF02FF81"+document.getElementById(cooln).value+"|r";
							}else{
								texto=texto+document.getElementById(cooln).value;
								CODEWC3=CODEWC3+document.getElementById(cooln).value;
							}
							cdini2=true;
						}else{
							if (document.getElementById(gencdcheck).checked==true){
								texto=texto+" / <span style='color: #02FF81;'>"+document.getElementById(cooln).value+"</span>";
								CODEWC3=CODEWC3+" / |cFF02FF81"+document.getElementById(cooln).value+"|r";
							}else{
								texto=texto+" / "+document.getElementById(cooln).value;
								CODEWC3=CODEWC3+" / "+document.getElementById(cooln).value;
							}
						}
					}
					
				}
				//MANA
				if (salto) {					
					texto=texto+"<br>";
					CODEWC3=CODEWC3+"|n";
				} else{
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
						var genmancheck="ckmn"+i+"";
						if (manaini2==false) {
							if (document.getElementById(genmancheck).checked==true){
								texto=texto+"<span style='color: #02FF81;'>"+document.getElementById(Manan).value+"</span>";
								CODEWC3=CODEWC3+"|cFF02FF81"+document.getElementById(Manan).value+"|r";
							}else{
								texto=texto+document.getElementById(Manan).value;
								CODEWC3=CODEWC3+document.getElementById(Manan).value;
							}
							manaini2=true;
						}else{
							if (document.getElementById(genmancheck).checked==true){
								texto=texto+" / <span style='color: #02FF81;'>"+document.getElementById(Manan).value+"</span>";
								CODEWC3=CODEWC3+" / |cFF02FF81"+document.getElementById(Manan).value+"|r";
							}else{
								texto=texto+" / "+document.getElementById(Manan).value;
								CODEWC3=CODEWC3+" / "+document.getElementById(Manan).value;
							}
						}

					}
				}

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
					//alert("s");

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
					<a href="TooltipGenerador-Habilidades.html" style="text-decoration: none;color: #09f;"  >Habilidades</a> | 
					<a href="TooltipGenerador-Objetos.html" style="text-decoration: none;color: #9A9C9E;" >Objetos</a> | 
					<a href="TooltipGenerador-Unidades.html" style="text-decoration: none;color: #9A9C9E;"  >Unidad</a>
				</div>
			</center>
			<br>
			<center>
				<div id="skills" dfhidden style="overflow: hidden;max-width: 1100px;width: 90%;min-width: 360px;">
					<div style="float: left;width: 100%;border-right: 1px solid black;padding: 15px;width: 500px; max-width: 95%;">
						<table style="width: 100%;" id="TABLA">
							<tr id="opciones">
								<td colspan="2">
									<center>
									<div style="overflow: hidden;width: 82%;">
										
											<div style="float: left;margin: 8px;">
												Habilidad: <select onchange="sinob()" id="hab">
												  <option value="Objetivo">Objetivo</option>
												  <option value="Canalizador">Canalizador</option>
												  <option value="Pasivo">Pasivo</option>
												  <option value="Activo">Activo</option>
												  <option value="Sin-objetivo">Sin objetivo</option>
												</select>
											</div>
											<div id="obj" style="float: left;margin: 8px;">
												Objetivo: <select id="objs">
												  <option value="Heroe">Heroe</option>
												  <option value="Unidad">Unidad</option>
												  <option value="Arbol">Arbol</option>
												  <option value="Area">Area</option>
												  <option value="Punto">Punto</option>
												</select>
											</div>
											<div style="float: left;margin: 8px;">
												Tipo de Daño: <select id="damage">
												  <option value="Magico">Magico</option>
												  <option value="Fisico">Fisico</option>
												  <option value="Ninguno">Ninguno</option>
												</select>
											</div>
										
									</div>
									</center>
								</td>
							</tr>
							<tr><td colspan="2"><hr></td></tr>
							<tr style="width: 100%;">
								<td>Descripcion:</td>
								<td style="width: 68%;">
									<textarea type="text" id="in"  style="width: 98%;height: 66px;resize: none;"></textarea>
								</td>
							</tr>
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
							<tr style="background: #24416b;" >
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


					<div style="width: 100%;float: left;padding: 15px;max-width: 498px;">
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
						<center >
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