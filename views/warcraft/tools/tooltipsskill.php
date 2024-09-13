<div style="display: grid;grid-template-columns: repeat(auto-fill,50%);padding: 40px;">
	<div class="div1">
		<table class="tabla1">
			<tr style="">
				<td colspan="2">
					<div style="color: white;display: flex;align-items: center;">			
						<label for="colorhabilidad" class="colorpicked" style="background:#458DDD;"></label><input id="colorhabilidad" type="color" value="#458DDD" style="display: none;"><span id="spanhabilidad"><?php if ($user_language=="ES") echo "Habilidad"; else echo "Ability"; ?></span><span>:&nbsp;</span>
						<select  id="Habilidad">
							<?php if($user_language=="ES"){ ?>
								<option value="Objetivo">Objetivo</option>
							  	<option value="Canalizador">Canalizador</option>
							  	<option value="Pasivo">Pasivo</option>
								<option value="Activo">Activo</option>
								<option value="Sin objetivo">Sin objetivo</option>
							<?php }else{ ?>
							 	<option value="Target">Target</option>
							  	<option value="Channeled">Channeled</option>
							  	<option value="Passive">Passive</option>
								<option value="Autocast">Autocast</option>
								<option value="No Target">No Target</option>
							<?php } ?>	
						</select>
						<div id="divobjetivo" style="">
							<label for="colorobjetivo" class="colorpicked" style="background:#458DDD;"></label><input id="colorobjetivo" type="color" value="#458DDD" style="display: none;"><span id="spanobjetivo"><?php if($user_language=="ES") echo "Objetivo"; else echo "Target"; ?></span><span>:&nbsp;</span>
							<select id="objetivo">
								<?php if($user_language=="ES"){ ?>
									<option value="Heroe">Heroe</option>
									<option value="Unidad">Unidad</option>
									<option value="Arbol">Arbol</option>
									<option value="Area">Area</option>
									<option value="Punto">Punto</option>
								<?php }else{ ?>
								 	<option value="Hero">Hero</option>
									<option value="Unit">Unit</option>
									<option value="Tree">Tree</option>
									<option value="Area">Area</option>
									<option value="Point">Point</option>
								<?php } ?>	
							</select>
						</div>
						
						<label for="colordamage" class="colorpicked" style="background:#458DDD;"></label><input id="colordamage" type="color" value="#458DDD" style="display: none;"><span id="spandamage"><?php if($user_language=="ES") echo "Tipo de Daño"; else echo "Damage type"; ?></span><span>:&nbsp;</span>
						<select id="tipodamage" >
							<?php if($user_language=="ES"){ ?>
								<option value="Magico">Magico</option>
								<option value="Fisico">Fisico</option>
								<option value="Puro">Puro</option>
								<option value="Ninguno">Ninguno</option>
							<?php }else{ ?>
								<option value="Magical">Magical</option>
								<option value="Physical">Physical</option>
								<option value="Pure">Pure</option>
								<option value="None">None</option>
							<?php } ?>
						</select>
					</div>
				</td>				
			</tr>
			<tr><td colspan="2"><hr class="separador"></td></tr>
			<tr>
				<td>
					<label for="colordescripcion" class="colorpicked" style="background:#ffffff;"></label><input id="colordescripcion" type="color" value="#ffffff" style="display: none;"><span>Descripcion:</span>
				</td>
				<td>
					<textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="descripcion"></textarea>
				</td>				
			</tr>
			<tr><td colspan="2"><hr class="separador"></td></tr>
			<tr>
				<td>
					<label for="coloratributo1" class="colorpicked" style="background:#ffcc00;"></label><input id="coloratributo1" type="color" value="#ffcc00" style="display: none;"><span>Atributos 1:</span>
				</td>
				<td>
					<input type="text" id="atributo1" style="width: 100%;">
					<div class="nivelattr" id="na1">
						<div>
							<span>N1:</span>
							<input type="text" class="inputcorto" id="n1a1">
						</div>
						<div>
							<span>N2:</span>
							<input type="text" class="inputcorto" id="n2a1">
						</div>
						<div>
							<span>N3:</span>
							<input type="text" class="inputcorto" id="n3a1">
						</div>
						<div>
							<span>N4:</span>
							<input type="text" class="inputcorto" id="n4a1">
						</div>						
					</div>

				</td>
			</tr>
		</table>
		<table class="tabla2">
			<tr>
				<td colspan="2">
					<center>
						<a id="btnwc3" style="width: 160px;">
							<input  type="submit" value="+ Atributos" id="masatributos" >
						</a>
						<a id="btnwc3" style="width: 160px;">
							<input type="submit" value="+ Niveles" id="masniveles">
						</a>
						<a id="btnwc3" style="width: 70px;">
							<select   id="nselect">
								<option value="--">--</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</a>
                                                <label for="colorselect" class="colorpicked" style="background:#ff8040;margin-left: 4px;vertical-align: middle;border-top: 2px solid #223160;border-left: 2px solid #223160;border-right: 2px solid #223160;border-bottom: 2px solid black;padding: 8px;display: inline-block;cursor: url('../../Imagenes/pointerwc.png'),pointer;"></label>
						<input id="colorselect" type="color" value="#ff8040" style="display: none;">
					</center>
					
				</td>
			</tr>
			<tr><td colspan="2"><hr style="background-color:transparent;margin: 10px 0px 15px 0px;"></td></tr>
			<tr>
				<td>
					<label for="colorcooldown" class="colorpicked" style="background:#02FF81;"></label><input id="colorcooldown" type="color" value="#02FF81" style="display: none;"><span>Cooldown:</span>
				</td>
				<td>
					<div class="nivelattr" id="cd">
						<div>
							<span>N1:</span>
							<input type="text" class="inputcorto" id="cd1">
						</div>
						<div>
							<span>N2:</span>
							<input type="text" class="inputcorto" id="cd2">
						</div>
						<div>
							<span>N3:</span>
							<input type="text" class="inputcorto" id="cd3">
						</div>
						<div>
							<span>N4:</span>
							<input type="text" class="inputcorto" id="cd4">
						</div>						
					</div>

				</td>
			</tr>
			<tr><td colspan="2"><hr class="separador"></td></tr>
			<tr>
				<td>
					<label for="colormana" class="colorpicked" style="background:#0296C8;"></label><input id="colormana" type="color" value="#0296C8" style="display: none;"><span>Costo de Mana:</span>
				</td>
				<td>
					<div class="nivelattr" id="mn">
						<div>
							<span>N1:</span>
							<input type="text" class="inputcorto"  id="mn1">
						</div>
						<div>
							<span>N2:</span>
							<input type="text" class="inputcorto" id="mn2">
						</div>
						<div>
							<span>N3:</span>
							<input type="text" class="inputcorto" id="mn3">
						</div>
						<div>
							<span>N4:</span>
							<input type="text" class="inputcorto" id="mn4">
						</div>						
					</div>

				</td>
			</tr>
		</table>		
	</div>
	<div>
		<div id="out" *contenteditable="true" style=""></div>
		<textarea id="wc3code" style="display: none;" sdisabled=""></textarea>
		<div id="btnwc3">
			<input type="submit" value="Preview Wc3" id="preview" >
		</div>
                <div id="btnwc3" style="width: 160px;">
			<input type="submit" value="Copy Tooltip" id="btncopy" >
		</div>
	</div>
</div>
<script type="text/javascript">
	//VARIABLES-----------------------------------------------------------------------------
	var num_niveles=4;
	var num_atributos=1;
	//PREVIEW-------------------------------------------------------------------------------
	$('#preview').click(function(e){
		if ($('#out').is(":visible")) {
			$('#out').css('display','none');	
			$('#wc3code').css('display','block');
			$('#preview').val('Preview html');
		}else{
			$('#wc3code').css('display','none');
			$('#out').css('display','inline-block');
			$('#preview').val('Preview Wc3');
		}
	});
	//CHANGEHABILIDAD-----------------------------------------------------------------------
	$('#Habilidad').change(function(e){
		if ($('#Habilidad').val()=="Sin objetivo" || $('#Habilidad').val()=="No Target") {
			$('#divobjetivo').css('display','none');
		}else{
			$('#divobjetivo').css('display','inline-block');
		}
			
	});	
	//COLORPICKER---------------------------------------------------------------------------
	$('input[type=color]').change(function(e){
		$('label[for='+this.id+']').css('background',$("#"+this.id).val());	
		LeerCodigo();	
	});	
	//ADDATRIBUTTE--------------------------------------------------------------------------
	$('#masatributos').click(function(e){
		num_atributos++;
		var GenCod='<tr><td colspan="2"><hr class="separador"></td></tr><tr><td><label for="coloratributo'+num_atributos+'" class="colorpicked" style="background:#ffcc00;"></label><input id="coloratributo'+num_atributos+'" type="color" value="#ffcc00" style="display: none;"><span>Atributos '+num_atributos+':</span></td><td><input type="text" id="atributo'+num_atributos+'" style="width: 100%;"><div class="nivelattr" id="na'+num_atributos+'">';
		for (var i = 1; i <= num_niveles; i++) {
			GenCod+='<div><span>N'+i+':</span><input type="text" class="inputcorto" id="n'+i+'a'+num_atributos+'"></div>';
		}
		GenCod+='</div></td></tr>';
		$('.tabla1 tr:last').after(GenCod);
		//refrescar change ...............	
		$('input[type=color]').change(function(e){
			$('label[for='+this.id+']').css('background',$("#"+this.id).val());	
			LeerCodigo();	
		});	
		$('input').on('keyup',function(e){
			LeerCodigo();
		});
	});
	//ADDNIVEL-----------------------------------------------------------------------------
	$('#masniveles').click(function(e){
		num_niveles++;
		var GenCod='';
		for (var a = 1; a <= num_atributos; a++) {
			GenCod='<div><span>N'+num_niveles+': </span><input type="text" class="inputcorto" id="n'+num_niveles+'a'+a+'"></div>';		
			$('#na'+a+' div:last').after(GenCod);
		}
                //Select ...................
		GenCod='<option value="'+num_niveles+'">'+num_niveles+'</option>';		
		$('#nselect option:last').after(GenCod);
		//Cooldown ...............
		GenCod='<div><span>N'+num_niveles+': </span><input type="text" class="inputcorto" id="cd'+num_niveles+'"></div>';		
		$('#cd div:last').after(GenCod);
		//Mana ...................
		GenCod='<div><span>N'+num_niveles+': </span><input type="text" class="inputcorto" id="mn'+num_niveles+'"></div>';		
		$('#mn div:last').after(GenCod);

		
		//refrescar change ...............		
		$('input').on('keyup',function(e){
			LeerCodigo();
		});
	});
	
	//LEERCODIGO---------------------------------------------------------------------------	
	$('select').change(function(e){
		LeerCodigo();
	});
	$('input,textarea').on('keyup',function(e){
		LeerCodigo();
	});
	$('input').click(function(e){
		LeerCodigo();
	});
	function LeerCodigo(){
		var preview="";
		var wc3code="";
		//HABILIDAD///////////////////////////
		preview+="<span style='color:"+$('#colorhabilidad').val()+";'>"+$('#spanhabilidad').html()+": </span>"+$('#Habilidad').val()+"<br>";
		wc3code+="|cff"+$('#colorhabilidad').val().replace('#','')+$('#spanhabilidad').html()+":|r "+$('#Habilidad').val()+"|n";
		//Objetivo///////////////////////////
		if ($('#divobjetivo').is(":visible")) {
			preview+="<span style='color:"+$('#colorobjetivo').val()+";'>"+$('#spanobjetivo').html()+": </span>"+$('#objetivo').val()+"<br>";
			wc3code+="|cff"+$('#colorobjetivo').val().replace('#','')+$('#spanobjetivo').html()+":|r "+$('#objetivo').val()+"|n";			
		}
		//TIPODEDAÑO///////////////////////////
		if ($('#tipodamage').val()!="Ninguno" && $('#tipodamage').val()!="None" ) {
			preview+="<span style='color:"+$('#colordamage').val()+";'>"+$('#spandamage').html()+": </span>"+$('#tipodamage').val()+"<br>";
			wc3code+="|cff"+$('#colordamage').val().replace('#','')+$('#spandamage').html()+":|r "+$('#tipodamage').val()+"|n";
		}
		preview+="<br>";
				wc3code+="|n";
		//DESCRIPCION///////////////////////////
		if($('#descripcion').val()!=""){
		preview+="<p style='color:"+$('#colordescripcion').val()+";'>"+$('#descripcion').val()+"</p><br>";
		wc3code+="|cff"+$('#colordescripcion').val().replace('#','')+$('#descripcion').val()+"|r|n|n";
		}
		//ATRIBUTOS/////////////////////////////
		for (var i = 1; i <= num_atributos; i++) {
			if($('#atributo'+i).val()!=""){
				preview+="<span style='color:"+$('#coloratributo'+i).val()+";'>"+$('#atributo'+i).val()+"</span>";
				wc3code+="|cff"+$('#coloratributo'+i).val().replace('#','')+$('#atributo'+i).val()+"|r";
				var inina=0;
				for (var n = 1; n <= num_niveles; n++) {
					if ($('#n'+n+'a'+i).val()!="") {
						if (inina>0) {
							preview+=" / ";
							wc3code+=" / ";
						}else{
							preview+=": ";
							wc3code+=": ";
						}
						if (n==$('#nselect').val()) {
							preview+="<span style='color:"+$('#colorselect').val()+";'>"+$('#n'+n+'a'+i).val()+"</span>";
							wc3code+="|cff"+$('#colorselect').val().replace('#','')+$('#n'+n+'a'+i).val()+"|r";
						} else {
							preview+=$('#n'+n+'a'+i).val();
							wc3code+=$('#n'+n+'a'+i).val();
						}
						inina++;
					}
				}
				preview+="<br>";
				wc3code+="|n";				
			}
		}	
		preview+="<br>";
		wc3code+="|n";	
		//COOLDOWN/////////////////////////////
		var salto=false;
		var inicd=0;
		for (var c = 1; c <= num_niveles; c++) {
			if ($('#cd'+c).val()!="") {
				if (inicd>0) {
					preview+=" / ";
					wc3code+=" / ";
				}else{
					preview+="<span style='color:"+$('#colorcooldown').val()+";'>CD: </span>";
					wc3code+="|cff"+$('#colorcooldown').val().replace('#','')+"CD:"+"|r ";
				}
				if (c==$('#nselect').val()) {
					preview+="<span style='color:"+$('#colorselect').val()+";'>"+$('#cd'+c).val()+"</span>";
					wc3code+="|cff"+$('#colorselect').val().replace('#','')+$('#cd'+c).val()+"|r";
				} else {
					preview+=$('#cd'+c).val();
					wc3code+=$('#cd'+c).val();
				}
				inicd++;
				salto=true;
			}
		}
		
		//MANA/////////////////////////////////
		if (salto) {					
			preview+="&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
			wc3code+="       ";
		}
		var inimn=0;
		for (var m = 1; m <= num_niveles; m++) {
			if ($('#mn'+m).val()!="") {
				if (inimn>0) {
					preview+=" / ";
					wc3code+=" / ";
				}else{
					preview+="<span style='color:"+$('#colormana').val()+";'>MC: </span>";
					wc3code+="|cff"+$('#colormana').val().replace('#','')+"MC:"+"|r ";
				}
				if (m==$('#nselect').val()) {
					preview+="<span style='color:"+$('#colorselect').val()+";'>"+$('#mn'+m).val()+"</span>";
					wc3code+="|cff"+$('#colorselect').val().replace('#','')+$('#mn'+m).val()+"|r";
				} else {
					preview+=$('#mn'+m).val();
					wc3code+=$('#mn'+m).val();
				}
				inimn++;
			}
		}
		
		$("#out").html(preview);	
		$("#wc3code").val(wc3code);
                autoresiser("wc3code");
	}
        $('textarea').on('keyup',function(e){
		autoresiser(this.id);
	});

</script>
<style type="text/css">
	*{
		font-family: arial;
		color: white;
	}
	.div1 *{
		/*border:1px solid green;*/
	}
	table {
		border-collapse: collapse;
		width: 90%;
	}
	.tabla1 tr{
		width: 100%;	
		display: table-row;
	}
	.tabla1 tr td {
		display: table-cell;
		width: 30%;
	}
	.tabla1 tr td:nth-child(2),.tabla2 tr td:nth-child(2) {	
		width: 70%;	
		max-width: 70%;
	}
	select{
		margin-right: 10px;
	}
	select, input, textarea,option{
		color: black;
		padding:5px;
		border: 1.8px solid black;
		border-radius: 4px;
	}
	.separador{
		margin: 10px 0px 10px 0px;
		background-color:#5C84D8 ;
	}
	.inputcorto{
		width: 62px;
	}

	.nivelattr{
		display: grid;
		grid-template-columns: repeat(auto-fill,90px); 
		padding-top: 10px;
		grid-column-gap: 18px;
	}
	.nivelattr div{
		margin-bottom: 6px;
		display: flex;
	}
	/*.nivelattr div span{
		line-height: 18px;
		height: 100%;
		border: 1px solid green;
		display:block;
	}
	.nivelattr *{
		border: 1px solid green;
	}*/

	.colorpicked{
		width: 15px;
		height: 15px;
		background: green;
		display: inline-block;
		margin-right: 7px !important;
		cursor: pointer;
	}










	#out{
		background-color: #515B8F;
		border-radius: 6px;
		border: 3px solid #FECA2E;
		width: 100%;
		max-width: 500px;
		min-width: 300px;
		min-height: 100px;
		text-align: left;
		padding: 5px;
		padding-left: 7px;
		color: white;
		display: block;
		cursor: url('../../Imagenes/cursorwc.png'),default;

	}
	#wc3code{
		border-radius: 6px; 
		border: 3px solid rgb(254, 202, 46); 
		min-width: 300px; 
		max-width: 500px;
		padding: 5px 5px 5px 7px; 
		width: 100%; 
		resize: none; 
		min-height: 100px; 
		overflow: hidden; 
		min-height: 80px; 
		display: block;
	}
	#btnwc3{
		border: 4.2px solid #B58D17;
		border-radius: 6px;
		width: 260px;
		background: #223160;
		margin-top: 30px;
		padding: 1px;
		display: inline-block;
		cursor: url('../../Imagenes/pointerwc.png'),pointer;
	}
	#btnwc3 input,#btnwc3 select{
		background:  #223160;
		color: #FECA2E;
		width: 100%;
		border-top: 2px solid white;
		border-left: 2px solid white;
		border-right: 2px solid white;
		border-bottom: 2px solid black;
		font-size: 17px;
		padding: 5px;
		cursor: url('../../Imagenes/pointerwc.png'),pointer;
	}
	#btnwc3 select option{
		color: #FECA2E;
		cursor: url('../../Imagenes/pointerwc.png'),pointer;
		cursor: url('../../Imagenes/cursorwc.png'),default;
	}
	
</style>
<!-- <span style="font-family: arial;font-size: 20px;">Descargar <a href="http://shikusoentertaiment.atwebpages.com/download/TooltipGenerador/Habilidades" download="TooltipGenerador-Habilidades.html">TooltipGenerador-Habilidades v0.9</a> offline <a href="http://shikusoentertaiment.atwebpages.com/download/TooltipGenerador/Habilidades" download="TooltipGenerador-Habilidades.html">aqui</a>.</span>
 -->