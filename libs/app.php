<?php
class App{
    
    function __construct(){
        //session_start();
        //echo "<p>Nueva app</p>";
        
            //echo "string";

        $url="main";
        if(!empty($_GET['url'])){
            $url = $_GET['url'];
        }                       
        if(!$url==""){
            $url = rtrim($url,'/');
            $url = explode('/',$url);
            $archivoController = 'controllers/' . $url[0] . '.php';            
            if(file_exists($archivoController)){
                require_once($archivoController);
                $controller = new $url[0];
                
                
                if(isset($url[1])){
                    if(method_exists($controller, ''.$url[1])){
                        if(isset($url[2])){
                            $controller->{$url[1]}($url[2]);
                        }else{
                            $controller->{$url[1]}();
                        }
                    }else{
                        require('views/error/index.php');
                    }                        
                }else{
                    if(method_exists($controller, 'Main')){
                        $controller->Main();
                    }
                }
                
                
                
                
            }else{                
                //$controllerror = new Error();                
                require('views/error/index.php');
                //echo "<br>fail";
            }
        

        }else{
            //echo "vacio" ;
            require_once('controllers/main.php');
            $controllermain = new Main();

        }
        
        /*
        if(!$_GET['url']==""){
            
        }else{
            echo "vacio";

        }
        */
    }
}
?>