<?php
class View{
    public $mapa="asa"; 
    public $toolt="asa";
    function __construct(){
        //echo "<p>Vista base</p>";
    }
    function render($nombre){
        require 'views/' . $nombre . '.php';
    }
    function setTooltips($tool){
        $this->toolt=$tool;
    }
    function getTooltips(){
        return "".$this->toolt;
    }
    function setMapa($nombre){
        $this->mapa=$nombre;
    }
    function getMapa(){
        return "".$this->mapa;
    }
}
?>