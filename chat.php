<?php 
	$funcion=$_POST['funcion'];
	$conexioni=new mysqli("fdb19.awardspace.net","2612105_shikuso","mono123456", "2612105_shikuso");
	if($funcion=="cargar"){
		$tema=$_POST['tema'];

		?><div style="width: 100%;"><?php 
      
   		$resu = mysqli_query($conexioni,"SELECT * FROM chat WHERE chat_tema='".$tema."'");  
   		while ($fila = mysqli_fetch_array($resu)) {
   			$chatid = $fila['chat_id']; 			
	   		echo '
	   			<div style="width: 100%;background: #1c375b;margin: 5px 0px;padding: 5px 10px;">
	    			<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
	  					<path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
					</svg>
	    			<span>
	    	';
	    	if(str_contains(strtoupper($fila['chat_nombre']), 'SHIKUSO')) echo '
	    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16" style="color:yellow;">
					<path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
					<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg> ';	
	    	echo $fila['chat_nombre'].'</span>
	    			<p >'.$fila['chat_mensaje'].'</p>
	    			<a href="#Reply" onclick="ActivarResponder(this)" raiz="'.$chatid.'" >Reply</a>
	    		</div>
	   		';
	   		$conexioni2=new mysqli("fdb19.awardspace.net","2612105_shikuso","mono123456", "2612105_shikuso"); 
   			$respuestas = mysqli_query($conexioni2,
   				"SELECT * FROM reschat WHERE reschat_tema='".$tema."' AND reschat_raiz='".$chatid."'"); 
   			while($respuesta = mysqli_fetch_array($respuestas)) {					
		   		echo '
		   			<div style="width: 96%;background: #1c375b;margin: 5px 0px 5px 4%;padding: 5px 10px;">
			    		<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16" style="vertical-align: text-bottom;">
			  				<path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
						</svg>
			    		<span>';
			    if(str_contains(strtoupper($respuesta['reschat_nombre']), 'SHIKUSO')) echo '
	    		<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award" viewBox="0 0 16 16" style="color:yellow;">
					<path d="M9.669.864 8 0 6.331.864l-1.858.282-.842 1.68-1.337 1.32L2.6 6l-.306 1.854 1.337 1.32.842 1.68 1.858.282L8 12l1.669-.864 1.858-.282.842-1.68 1.337-1.32L13.4 6l.306-1.854-1.337-1.32-.842-1.68L9.669.864zm1.196 1.193.684 1.365 1.086 1.072L12.387 6l.248 1.506-1.086 1.072-.684 1.365-1.51.229L8 10.874l-1.355-.702-1.51-.229-.684-1.365-1.086-1.072L3.614 6l-.25-1.506 1.087-1.072.684-1.365 1.51-.229L8 1.126l1.356.702 1.509.229z"/>
					<path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
				</svg> ';
				echo $respuesta['reschat_nombre'].'</span>
			    		<p >'.$respuesta['reschat_mensaje'].'</p>
			    		<a href="#Reply" onclick="ActivarResponder(this)" raiz="'.$chatid.'" >Reply</a>
	    			</div>
		   		';		   				
	   		}    					
   		}
   		?></div><?php 
	}else if($funcion=="comentar"){ 
		$tema = $_POST['tema'];
		$nick = $_POST['nick'];
		$mensaje = $_POST['mensaje'];
		        
   		$resu = mysqli_query($conexioni,"INSERT INTO chat VALUES (null,'".$tema."','".$nick."','".$mensaje."')");
	}else if($funcion=="responder"){
		$tema = $_POST['tema'];
		$raiz = $_POST['raiz'];
		$nick = $_POST['nick'];
		$mensaje = $_POST['mensaje'];
		        
   		$resu = mysqli_query($conexioni,"INSERT INTO reschat VALUES (null,'".$tema."','".$raiz."','".$nick."','".$mensaje."')");
	}                                
?>