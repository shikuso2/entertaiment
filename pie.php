<div style="background: rgb(0,0,0,0.6);color: white;width: 100%;padding: 40px;bottom: 0px;position: relative;display: inline-block;">	
	<span style="font-size: 43px;font-family: CORPOREA;text-shadow: 0 0 30px black;">SHIKUSO</span><br>
	<span style="font-size: 28px;text-shadow: 0 0 30px black;-webkit-text-stroke: 0px black;margin-top: -8px;display: inline-block;">entertaiment</span>
	<div class="enlaces"></div>



</div>
<style type="text/css">
	hr, .hrcolor {
			   height: 1px;
			   border: 0;
			   background-color: red;
			}
	.enlaces{
		border-top: 1px solid #5B6DAF;
	}
</style>
<span style="position: fixed;color: white; background-color: #023859;padding: 10px 15px 13px 15px;right: 20px;bottom: 20px; border-radius: 6px;border:3px solid white;display: none; cursor: pointer;" class="ir-arriba">🢁</span>

<script type="text/javascript">
	$(document).ready(function(){ 
		$('.ir-arriba').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
		});	 
		$(window).scroll(function(){
			if( $(this).scrollTop() > 0 ){
				$('.ir-arriba').slideDown(0);
			} else {
				$('.ir-arriba').slideUp(0);
			}
		});	 
	});
</script>