<?php 
	$servidor = "localhost";
    $nombreusuario = "root";
    $password = "";
    $db = "3166654_pressedkeys";
                    
    $conexion=new mysqli($servidor, $nombreusuario, $password, $db);
    if (mysqli_connect_error()) 
	{
		//header("location:index.php");
		echo "ERROR: ".mysqli_connect_error();
		exit();
	}
?>