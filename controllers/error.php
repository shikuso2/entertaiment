<?php
class Error extends Controller{
    function __construct(){
    	echo "<p>Error al cargar recurso</p>";
               
    }

    function cargar(){
    	parent::__construct();
        $this->view->mensaje = "Error genérico";
        $this->view->render('error/index'); 
    }



}
?>