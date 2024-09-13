<div style="display: grid;grid-template-columns: repeat(auto-fill,50%);padding: 40px;">
	<div class="div1">
		<table class="tabla1">
			<tr style="">
				<td colspan="2">
					<div style="color: white;display: flex;align-items: center;">
						<label for="colorrango" class="colorpicked" style="background:#E490F5;"></label><input id="colorrango" type="color" value="#E490F5" style="display: none;"><span> Rango: </span>
						<select  id="rango">
							<option value="Cuerpo a cuerpo">Cuerpo a cuerpo</option>
						  	<option value="A Distancia">A Distancia</option>
						</select>
						<div id="divobjetivo" style="">
							<label for="coloratributo" class="colorpicked" style="background:#E490F5;"></label><input id="coloratributo" type="color" value="#E490F5" style="display: none;"><span> Atributo: </span>
							<select id="atributo">
								<option value="Ninguno">Ninguno</option>
								<option value="Fuerza">Fuerza</option>
								<option value="Agilidad">Agilidad</option>
								<option value="Inteligencia">Inteligencia</option>
							</select>
						</div>
					</div>
				</td>				
			</tr>
			<tr><td colspan="2"><hr class="separador"></td></tr>
			<tr>
				<td>
					<label for="colordescripcion" class="colorpicked" style="background:#4AADE5;"></label><input id="colordescripcion" type="color" value="#4AADE5" style="display: none;"><span>Descripcion:</span>
				</td>
				<td>
					<textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="descripcion"></textarea>
				</td>				
			</tr>
			<tr><td colspan="2"><hr class="separador"></td></tr>
			<tr>
				<td>
					<label for="colorhabilidad1" class="colorpicked" style="background:#ffcc00;"></label><input id="colorhabilidad1" type="color" value="#ffcc00" style="display: none;"><span>Habilidad 1:</span>
				</td>
				<td>
					<div style="display: flex;">
						<span style="margin-right: 2px;">Nombre:</span><input type="text" id="habilidad1" style="width: 100%;">
					</div>
					<div style="display: flex;">
						<span>Detalles:</span><textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="habilidadd1"></textarea>						
					</div>							
				</td>
			</tr>
		</table>
		<table class="tabla2">
			<tr>
				<td colspan="2">
					<center>
						<a id="btnwc3" style="width: 160px;">
							<input  type="submit" value="+ Habilidades" id="masatributos" >
						</a>
						<a id="btnwc3" style="width: 180px;">
							<label for="ckdetalend"><img src="../../Imagenes/ck.png"> Detalles al final</label>
							<input type="checkbox" id="ckdetalend" style="display: none;">
						</a>
					</center>
					
				</td>
			</tr>			
		</table>		
	</div>
	<div>
		<div id="out" *contenteditable="true" style=""></div>
		<textarea id="wc3code" style="display: none;" sdisabled=""></textarea>
		<div id="btnwc3">
			<input type="submit" value="Mostrar cadena Wc3" id="preview" >
		</div>
                <div id="btnwc3" style="width: 160px;">
			<input type="submit" value="Copiar Tooltip" id="btncopy" >
		</div>
	</div>
</div>
<script type="text/javascript">
	//VARIABLES-----------------------------------------------------------------------------	
	var num_atributos=1;
	//PREVIEW-------------------------------------------------------------------------------
	$('#preview').click(function(e){
		if ($('#out').is(":visible")) {
			$('#out').css('display','none');	
			$('#wc3code').css('display','block');
			$('#preview').val('Mostrar preview html');
		}else{
			$('#wc3code').css('display','none');
			$('#out').css('display','inline-block');
			$('#preview').val('Mostrar cadena Wc3');
		}
	});
	$('input[type=checkbox]').change(function(e){
		if($(this).is(':checked')) {
			$('label[for='+this.id+'] img').attr("src","../../Imagenes/ckd.png");
		}else{
			$('label[for='+this.id+'] img').attr("src","../../Imagenes/ck.png");
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
		var GenCod='<tr><td colspan="2"><hr class="separador"></td></tr><tr><td><label for="colorhabilidad'+num_atributos+'" class="colorpicked" style="background:#ffcc00;"></label><input id="colorhabilidad'+num_atributos+'" type="color" value="#ffcc00" style="display: none;"><span>Habilidad '+num_atributos+':</span></td><td><div style="display: flex;"><span style="margin-right: 2px;">Nombre:</span><input type="text" id="habilidad'+num_atributos+'" style="width: 100%;"></div><div style="display: flex;"><span>Detalles:</span><textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="habilidadd'+num_atributos+'"></textarea></div></td></tr>';		
		$('.tabla1 tr:last').after(GenCod);
		//refrescar change ...............	
		$('input[type=color]').change(function(e){
			$('label[for='+this.id+']').css('background',$("#"+this.id).val());	
			LeerCodigo();	
		});	
		$('input,textarea').on('keyup',function(e){
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
		var preview=""; var previewdtal="";
		var wc3code=""; var wc3codedtal="";
		//************************************************************************************
		//RANGO///////////////////////////
		previewdtal+="<span style='color:"+$('#colorrango').val()+";'>Rango: </span>"+$('#rango').val()+"<br>";
		wc3codedtal+="|cff"+$('#colorrango').val().replace('#','')+"Rango:|r "+$('#rango').val()+"|n";
		//atributo///////////////////////////
		if ($('#atributo').val()!="Ninguno") {
			previewdtal+="<span style='color:"+$('#coloratributo').val()+";'>Atributo: </span>"+$('#atributo').val()+"<br>";
			wc3codedtal+="|cff"+$('#coloratributo').val().replace('#','')+"Atributo:|r "+$('#atributo').val()+"|n";			
		}
		//************************************************************************************
		//DESCRIPCION///////////////////////////
		if($('#descripcion').val()!=""){
		preview+="<p style='color:"+$('#colordescripcion').val()+";'>"+$('#descripcion').val()+"</p><br>";
		wc3code+="|cff"+$('#colordescripcion').val().replace('#','')+$('#descripcion').val()+"|r|n|n";
		}
		//ATRIBUTOS/////////////////////////////
		for (var i = 1; i <= num_atributos; i++) {
			if($('#habilidad'+i).val()!=""){
				preview+="<span style='color:"+$('#colorhabilidad'+i).val()+";'>"+$('#habilidad'+i).val();
				wc3code+="|cff"+$('#colorhabilidad'+i).val().replace('#','')+$('#habilidad'+i).val();	
				if($('#habilidadd'+i).val()!=""){
					preview+=":</span><span> "+$('#habilidadd'+i).val()+"</span><br>";
					wc3code+=":|r "+$('#habilidadd'+i).val()+"|n";
				}
			}
		}	
		if ($('#ckdetalend').is(':checked')) {
			$("#out").html(preview+"<br>"+previewdtal);	
			$("#wc3code").val(wc3code+"|n"+wc3codedtal);
		}else{
			$("#out").html(previewdtal+"<br>"+preview);	
			$("#wc3code").val(wc3codedtal+"|n"+wc3code);
		}
		
		
		

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
		width: 15px;height: 15px;background: green;display: inline-block;
		margin-right: 7px;
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
		height: 80px; 
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
	#btnwc3 label{
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
		display:inline-block;
	}
	#btnwc3 label img{
		vertical-align: middle;
	}
	
</style>
<!-- <span style="font-family: arial;font-size: 20px;">Descargar <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Unidades" download="TooltipGenerador-Unidades.html">TooltipGenerador-Unidades v0.7</a> offline <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Unidades" download="TooltipGenerador-Unidades.html">aqui</a>.</span>
 -->