<?php 
	//$name="";

	class Download extends Controller{
		function __construct(){
			parent::__construct();
			//$this->view->render('main/indexmain');
		}
		function TooltipGenerador($tipo){
			parent::__construct();
			$this->view->render('download/TooltipGenerador-'.$tipo);
		}
	}
?>