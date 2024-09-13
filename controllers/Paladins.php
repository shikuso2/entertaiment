<?php 
	class Paladins extends Controller{
		//public $toolt="asa";
		function __construct(){
			parent::__construct();
			//$this->view->render('main/index');
		}
		function Roulette(){
			$this->view->render('paladins/Rulete');
		}	
		function RandomTeam(){
			$this->view->render('paladins/Teams');
		}	
		function Main(){
			$this->view->render('error/index');
		}
	}
?>