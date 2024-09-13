<?php 
	class Warcraft extends Controller{
		//public $toolt="asa";
		function __construct(){
			parent::__construct();
			//$this->view->render('main/indexmain');
		}
		function DotaEditor(){
			//parent::__construct();
			$this->view->render('warcraft/DotaEditor');
		}
		function Maps($mapa = "ninguno"){
			parent::__construct();
			if($mapa=="ninguno"){	
				$this->view->render('warcraft/mapas');	
			}else{	
				$this->view->setMapa($mapa);	
				$this->view->render('warcraft/mapas/'.$mapa);	
			}
		}		
		/*function Maps($nameget){
			parent::__construct();
			$this->view->setMapa($nameget);			
			$this->view->render('warcraft/mapaload');			
		}*/
		function Tooltips($tipe){
			parent::__construct();
			$this->view->setTooltips($tipe);
			$this->view->render('warcraft/TooltipGenerador');						
		}
                function Main(){
			$this->view->render('error/index');
		}
	}
?>