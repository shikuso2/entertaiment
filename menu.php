<div class="caja">
	<div class="logan">
		<!-- <a href="<?php //echo "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']; ?>"> -->
		<a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>">
			<span style="font-size: 43px;font-family: CORPOREA;text-shadow: 0 0 30px black;">SHIKUSO</span>
			<span style="font-size: 28px;text-shadow: 0 0 30px black;-webkit-text-stroke: 0px black;/*font-weight: bold;*/">entertaiment</span>
		</a>
		
	</div>	
	<div class="menubox">
		<nav>
			<ul>
				<li><a  href="mailto:shikusosks@gmail.com" target="_blank">Contacto</a></li>
				<li><a >Minecraft ▼</a></li>
				<li class="Warcraft"><a >Warcraft ▼</a>
					<div class="Warcraftchildren">
						<a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Warcraft/DotaEditor">Dota Allstar Editor</a><br>
						<a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Warcraft/Mapas">Mapas</a><br>
						<a href="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Warcraft/Tooltips/skill">Tooltips</a>						
					</div>
				</li>
			</ul>
		</nav>
			
	</div>
	
	
</div>

<style type="text/css">
	.Warcraft:hover .Warcraftchildren{
		background: #080C18;
		display: block;
		
	}
	.Warcraftchildren{
		display: none;
		position: fixed;
		width: 180px;
		z-index:7;
		top:110px;
		background: white;
		right: 260px;

	}
	.Warcraftchildren a{
		text-align: right;
		float: right;
		width: 100%;
		padding: 5px;
	}
	.Warcraftchildren a:hover{
		background: white;
		color: #080C18;
	}
	nav ul li .children li{
		/*float: left;		*/

	}
	


</style>
<div class="menumin">
	<a href="" style="color: white;width: 100%;height: 100%;overflow: hidden;">
		<div style="display: table;overflow: hidden;padding: 20px;">
			<div style="float: left;display: table-cell;vertical-align: middle;">
				<img src="<?php echo "http://" . $_SERVER['SERVER_NAME']; ?>/Imagenes/menu2.png" style="max-width: 69px;max-height: 71px;">
			</div>
			<div style="float: left;display: table-cell;vertical-align: middle;margin: 0px;margin-left: 20px;">
				<span style="font-size: 33px;">SHIKUSO</span><br>
				<span style="font-size: 28px;">entertaiment</span>
			</div>
		</div>		
	</a>
</div>
<style type="text/css">
	
	a:hover{
		cursor: pointer;
	}
	* {
		padding:0;
		margin:0;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
	}
	header {
		width: 100%;	
	}
	.caja{ 
		/*border: 1px solid black;*/
		margin: 0px;
		background-color: rgba(0,0,0,0.75);
		color: white;
		font-family: sans-serif;
		overflow: hidden;
		height: 110px;
		position: fixed;
		width: 100%;
		z-index: 5;
	}
	.logan{
		float: left;
		padding-left: 100px;
		height: 100%;
		display: table;
	}
	.logan a{
		vertical-align: middle;
		text-align: center;
		display: table-cell;
		text-decoration: none;
		color: white;
		padding-right: 10px;
		padding-left: 10px;

	}
	.logan span{
		display: block;
	}/*
	.logan a:hover {
	  cursor: pointer;
	}
	.logan a:active {
	  background-color: yellow;
	}*/
	.menubox{
		float: right;
		height: 100%;
		overflow: hidden;
		margin-right: 30px;
	}
	.caja nav{ 
		height: 100%;
	}
	.caja nav ul{
		list-style: none;
		height: 100%;
		margin:  0px;
	}
	.caja nav ul li{
		float: right;
		height: 100%;
		margin-right: 30px;
		display: table;
	}
	.caja nav ul li a{
		text-decoration: none;
		color: white;
		height: 100%;
		vertical-align: middle;
		display: table-cell;
	}
	.caja nav ul li:hover{
		border-bottom: 2px solid white;
	}
	.menumin{ 
		/*border: 1px solid black;*/
		margin: 0px;
		background-color: rgba(0,0,0,0.9);
		color: white;
		font-family: sans-serif;
		overflow: hidden;
		height: 110px;
		position: fixed;
		width: 100%;
		display:none;
		z-index: 5;
	}
	@media screen and (max-width: 800px) {
		.caja{
			display: none;
		}
		.menumin{
			display: inline-block;
			position: fixed;
		}
	}
	
</style>