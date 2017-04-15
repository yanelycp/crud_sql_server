<?php
	$serverName = "localhost";
	$connectionInfo = array("Database"=>"prueba_usuario", "UID"=>"prueba2", "PWD"=>"1234", "CharacterSet"=>"UTF-8");
	$con = sqlsrv_connect($serverName, $connectionInfo);

	if($con){
		echo "conexión exitosa";
	}else{
		echo "fallo en la conexión";
	}

?>