<?php
class Check extends Controller{
    function __construct(){
        parent::__construct();
        
        $this->view->render('check/index');       
    }
}
?>