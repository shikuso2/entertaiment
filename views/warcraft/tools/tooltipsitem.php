<div style="display: grid;grid-template-columns: repeat(auto-fill,50%);padding: 40px;">
	<div class="div1">
		<table class="tabla1">

			<tr>
				<td>
					<label for="coloratributo1" class="colorpicked" style="background:#73C9FD;"></label><input id="coloratributo1" type="color" value="#73C9FD" style="display: none;"><span>Atributos 1:</span>
				</td>
				<td>
					<input type="text" id="atributo1" style="width: 100%;">
					<div class="nivelattr" id="na1">
						<div>
							<span>N1:</span>
							<input type="text" class="inputcorto" id="n1a1">
						</div>					
					</div>

				</td>
			</tr>
		</table>
		<table class="tabla2">
			<tr><td colspan="2"><hr class="separador"></td></tr>
			
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
					</div>

				</td>
			</tr>
			<tr>
				<td colspan="2">
					<center>
						<a id="btnwc3" style="width: 120px;">
							<input  type="submit" value="+ Atributos" id="masatributos" >
						</a>
						<a id="btnwc3" style="width: 120px;">
							<input type="submit" value="+ Niveles" id="masniveles">
						</a>
                                                <a id="btnwc3" style="width: 100px;">
							<label for="ckactiva"><img src="../../Imagenes/ck.png"> Activa</label>
							<input type="checkbox" id="ckactiva" style="display: none;">
						</a>
						<a id="btnwc3" style="width: 100px;">
							<label for="ckpasiva"><img src="../../Imagenes/ck.png"> Pasiva</label>
							<input type="checkbox" id="ckpasiva" style="display: none;">
						</a>
						<a id="btnwc3" style="width: 70px;">
							<select  id="nselect">
								<option value="--">--</option>
								<option value="1">1</option>
							</select>
						</a>
						<label for="colorselect" class="colorpicked" style="background:#ff8040;margin-left: 4px;vertical-align: middle;border-top: 2px solid #223160;border-left: 2px solid #223160;border-right: 2px solid #223160;border-bottom: 2px solid black;padding: 8px;display: inline-block;cursor: url('../../Imagenes/pointerwc.png'),pointer;"></label>
						<input id="colorselect" type="color" value="#ff8040" style="display: none;">
						
					</center>					
				</td>
			</tr>
			<tr><td colspan="2"><hr style="background-color:transparent;margin: 10px 0px 15px 0px;"></td></tr>
			<tr id="tractiva" style="display: none;">
				<td>
					<label for="coloractiva" class="colorpicked" style="background:#62D147;"></label><input id="coloractiva" type="color" value="#62D147" style="display: none;"><span>Activa:</span>
				</td>
				<td>
					<textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="activa"></textarea>
				</td>				
			</tr>
			<tr  id="trpasiva" style="display: none;">
				<td>
					<label for="colorpasiva" class="colorpicked" style="background:#62D147;"></label><input id="colorpasiva" type="color" value="#62D147" style="display: none;"><span>Pasiva:</span>
				</td>
				<td>
					<textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="pasiva"></textarea>
				</td>				
			</tr>
			<tr>
				<td>
					<label for="colordescripcion" class="colorpicked" style="background:#E786F2;"></label><input id="colordescripcion" type="color" value="#E786F2" style="display: none;"><span>Descripcion:</span>
				</td>
				<td>
					<textarea type="text" style="width: 100%;min-height: 66px;resize: none;" id="descripcion"></textarea>
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
	var num_niveles=1;
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
	$('input[type=checkbox]').change(function(e){
		if($(this).is(':checked')) {
			$('label[for='+this.id+'] img').attr("src","../../Imagenes/ckd.png");
			$('#'+this.id.replace("ck","tr")).css('display','table-row');
		}else{
			$('label[for='+this.id+'] img').attr("src","../../Imagenes/ck.png");
			$('#'+this.id.replace("ck","tr")).css('display','none');
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
		var GenCod='<tr><td colspan="2"><hr class="separador"></td></tr><tr><td><label for="coloratributo'+num_atributos+'" class="colorpicked" style="background:#73C9FD;"></label><input id="coloratributo'+num_atributos+'" type="color" value="#73C9FD" style="display: none;"><span>Atributos '+num_atributos+':</span></td><td><input type="text" id="atributo'+num_atributos+'" style="width: 100%;"><div class="nivelattr" id="na'+num_atributos+'">';
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
		//ATRIBUTOS/////////////////////////////
		for (var i = 1; i <= num_atributos; i++) {
			if($('#atributo'+i).val()!=""){				
				var inina=0;
				for (var n = 1; n <= num_niveles; n++) {
					if ($('#n'+n+'a'+i).val()!="") {
						if (inina>0) {
							preview+="/ ";
							wc3code+="/ ";
						}else{
							preview+="+ ";
							wc3code+="+ ";
						}
						if (n==$('#nselect').val()) {
							preview+="<span style='color:"+$('#colorselect').val()+";'>"+$('#n'+n+'a'+i).val()+" </span>";
							wc3code+="|cff"+$('#colorselect').val().replace('#','')+$('#n'+n+'a'+i).val()+"|r ";
						} else {
							preview+=$('#n'+n+'a'+i).val()+" ";
							wc3code+=$('#n'+n+'a'+i).val()+" ";
						}
						inina++;
					}
				}
				preview+="<span style='color:"+$('#coloratributo'+i).val()+";'>"+$('#atributo'+i).val()+"</span>";
				wc3code+="|cff"+$('#coloratributo'+i).val().replace('#','')+$('#atributo'+i).val()+"|r";
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
				//////////////////////////////////////
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
				//////////////////////////////////////
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
		preview+="<br>";
		//ACTIVA////////////////////////////////
		if($('#activa').val()!=""){
		preview+="<br><p style='color:"+$('#coloractiva').val()+";'>Activa: "+$('#activa').val()+"</p>";
		wc3code+="|n|n|cff"+$('#coloractiva').val().replace('#','')+"Activa: "+$('#activa').val()+"|r";
		}
		//PASIVA////////////////////////////////
		if($('#pasiva').val()!=""){
		preview+="<br><p style='color:"+$('#colorpasiva').val()+";'>Pasiva: "+$('#pasiva').val()+"</p>";
		wc3code+="|n|n|cff"+$('#colorpasiva').val().replace('#','')+"Pasiva: "+$('#pasiva').val()+"|r";
		}
		//DESCRIPCION///////////////////////////
		if($('#descripcion').val()!=""){
		preview+="<br><p style='color:"+$('#colordescripcion').val()+";'>"+$('#descripcion').val()+"</p>";
		wc3code+="|n|n|cff"+$('#colordescripcion').val().replace('#','')+$('#descripcion').val()+"|r";
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
	#btnwc3 select option{
		color: #FECA2E;
		cursor: url('../../Imagenes/pointerwc.png'),pointer;
		cursor: url('../../Imagenes/cursorwc.png'),default;
	}
	
</style>
<!-- <span style="font-family: arial;font-size: 20px;">Descargar <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Objetos" download="TooltipGenerador-Objetos.html">TooltipGenerador-Objetos v0.9</a> offline <a  href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/download/TooltipGenerador/Objetos" download="TooltipGenerador-Objetos.html">aqui</a>.</span>
 -->