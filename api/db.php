<?php

	// usuario: gmaldonado

  $servidor = '127.0.0.1';
  $puerto ='3306';
  $base_datos = 'eshare';
  $usuario = 'root';
  $password = 'root';
  
  // string de conexion
  $conexion = new mysqli($servidor,$usuario,$password,$base_datos,$puerto);
  
  // si no se establece conexion
  if ($conexion ->connect_errno){
	die($conexion ->connect_error);
  }
  
  // funciones de guardar , eliminar y modificar
  function NonQuery($sqlstr, &$conexion = null){
	if (!$conexion)global $conexion;
	$resultado =$conexion->query($sqlstr);
	return $conexion ->affected_rows;	
  }
  
  // funcion de select
    function ObtenerRegistros($sqlstr, &$conexion = null){
		
		if (!$conexion)global $conexion;
		$resultado =$conexion->query($sqlstr);
		$resultadoArray = array();
		$resultadoArray["usuarios"] = array();
		foreach ($resultado as $registro){
			array_push($resultadoArray["usuarios"],$registro);
			//$resultadoArray[]=$registro;
		}
		
		return  $resultadoArray ;
		
		
	}
	
	
	
	//funcion que estandariza a utf-8 la respuesta 
	function ConvertirUTF8($array){
		array_walk_recursive($array,function(&$item,$key){
			if(!mb_detect_encoding($item,'utf-8',true)){
				$item = utf8_encode($item);
			}
		});
		return $array;
	}
?>